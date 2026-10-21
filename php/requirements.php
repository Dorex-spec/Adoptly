<?php
declare(strict_types=1);
require_once dirname(__DIR__) . '/adoption_flow.php';
adoption_flow_guard('requirements');
require_once dirname(__DIR__) . '/profile_data.php';

function adoption_requirement_save_file(array $file, string $folder, int $maxBytes, array $mimeExtensions): array
{
    $uploadError = (int)($file['error'] ?? UPLOAD_ERR_NO_FILE);
    if ($uploadError === UPLOAD_ERR_NO_FILE) {
        return [];
    }
    if ($uploadError !== UPLOAD_ERR_OK || (int)($file['size'] ?? 0) > $maxBytes) {
        return ['error' => 'The selected file could not be uploaded or exceeds the size limit.'];
    }
    $mime = (new finfo(FILEINFO_MIME_TYPE))->file((string)$file['tmp_name']);
    $extension = $mimeExtensions[$mime] ?? null;
    if ($extension === null) {
        return ['error' => 'Use an accepted PDF or image file type.'];
    }
    if (!is_dir($folder) && !mkdir($folder, 0755, true) && !is_dir($folder)) {
        return ['error' => 'The private document folder could not be created.'];
    }
    $denyFile = dirname($folder) . '/.htaccess';
    if (!is_file($denyFile) && file_put_contents($denyFile, "Require all denied\n") === false) {
        return ['error' => 'The document folder could not be protected.'];
    }
    $storedName = bin2hex(random_bytes(16)) . '.' . $extension;
    if (!move_uploaded_file((string)$file['tmp_name'], $folder . '/' . $storedName)) {
        return ['error' => 'The selected document could not be saved. Check server upload permissions.'];
    }
    return [
        'name' => basename((string)($file['name'] ?? 'document')),
        'size' => (int)$file['size'],
        'stored_name' => $storedName,
        'uploaded_at' => date('c'),
    ];
}

$documents = is_array($_SESSION['adoption_documents'] ?? null) ? $_SESSION['adoption_documents'] : [];
$documentErrors = [];
$documentFolder = dirname(__DIR__) . '/uploads/adoption-documents/' . hash('sha256', session_id());
$documentTypes = ['application/pdf' => 'pdf', 'image/jpeg' => 'jpg', 'image/png' => 'png'];
$photoTypes = ['image/jpeg' => 'jpg', 'image/png' => 'png'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST) && empty($_FILES) && (int)($_SERVER['CONTENT_LENGTH'] ?? 0) > 0) {
        $documentErrors[] = 'The upload request exceeded the server size limit. Please upload fewer files at a time.';
    }
    foreach (['government_id', 'income_proof'] as $key) {
        if (!isset($_FILES[$key]) || (int)($_FILES[$key]['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
            continue;
        }
        $savedFile = adoption_requirement_save_file($_FILES[$key], $documentFolder, 15 * 1024 * 1024, $documentTypes);
        if (isset($savedFile['error'])) {
            $documentErrors[] = $savedFile['error'];
        } else {
            $documents[$key] = $savedFile;
        }
    }

    $photos = $_FILES['home_photos'] ?? [];
    $photoCount = is_array($photos['name'] ?? null) ? count($photos['name']) : 0;
    for ($index = 0; $index < $photoCount; $index++) {
        if ((int)($photos['error'][$index] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
            continue;
        }
        $photo = [
            'name' => $photos['name'][$index] ?? '',
            'type' => $photos['type'][$index] ?? '',
            'tmp_name' => $photos['tmp_name'][$index] ?? '',
            'error' => $photos['error'][$index] ?? UPLOAD_ERR_NO_FILE,
            'size' => $photos['size'][$index] ?? 0,
        ];
        $savedPhoto = adoption_requirement_save_file($photo, $documentFolder, 25 * 1024 * 1024, $photoTypes);
        if (isset($savedPhoto['error'])) {
            $documentErrors[] = $savedPhoto['error'];
        } else {
            $documents['home_photos'][] = $savedPhoto;
        }
    }

    $_SESSION['adoption_documents'] = $documents;
    if ($documentErrors === [] && adoption_flow_is_complete('requirements')) {
        header('Location: requirements.php?saved=1');
        exit;
    }
}

$documentPercent = adoption_flow_percent('requirements');
$remainingDocuments = count(array_filter(
    ['government_id', 'income_proof', 'home_photos'],
    static fn(string $key): bool => empty($documents[$key])
));
$fullName = trim($user['first'] . ' ' . $user['last']);
foreach ($navLinks as &$link) {
    $link['href'] = '../' . $link['href'];
}
unset($link);
?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Requirements &amp; Eligibility - Adoptly</title>
<!-- Google Fonts: Plus Jakarta Sans & Poppins -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Font Awesome Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
<!-- Tailwind CSS CDN with plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration Script -->
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#FFF5F4',
              100: '#FFE1DD',
              200: '#FFC8C2',
              300: '#FFA499',
              400: '#F87B6E',
              500: '#E05A4F',
              600: '#C94B41',
              700: '#A9382F',
              800: '#8A2E27',
              900: '#732A24',
            },
            neutralBg: '#FCF9F8',
            surfaceBorder: '#EAE5E3',
            darkCharcoal: '#1F1F1F',
            statusGreen: '#4CAF50',
            statusGreenBg: '#E8F5E9',
            amberBadge: '#F59E0B',
            amberBadgeBg: '#FFF8E1'
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            display: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
<!-- BEGIN: Custom Stylesheets -->
<style data-purpose="custom-layout">
    body {
      background-color: #FCF9F8;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: #2D3748;
      -webkit-font-smoothing: antialiased;
    }

    /* Subtle dot background pattern */
    .bg-dot-pattern {
      background-image: radial-gradient(#E8E2E0 1px, transparent 1px);
      background-size: 20px 20px;
    }
  </style>
<style data-purpose="component-details">
    .logo-font {
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      letter-spacing: -0.02em;
    }
    
    .dashed-dropzone {
      border: 1.5px dashed #F2B8B2;
      background-color: #FFFFFF;
      transition: all 0.2s ease-in-out;
    }
    .dashed-dropzone:hover {
      border-color: #E05A4F;
      background-color: #FFFDFD;
    }
  </style>
<!-- END: Custom Stylesheets -->
</head>
<body class="min-h-screen flex flex-col bg-dot-pattern">
<!-- BEGIN: TopStickyNavigation -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-[#EAE5E3] transition-all" data-purpose="site-navigation-header">
<div class="max-w-[1240px] mx-auto px-4 sm:px-6 lg:px-8 min-h-[68px] flex items-center justify-between gap-5">
<a aria-label="Adoptly Home" class="flex items-center gap-1.5 text-2xl logo-font text-[#E05A4F] select-none" href="../Welcome_page.php">
<img src="../photos/logoNav.png" alt="Adoptly" class="h-10 w-auto">
</a>
<nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-600" aria-label="Main navigation">
<?php foreach ($navLinks as $link): ?>
<a class="hover:text-[#E05A4F] transition-colors" href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
<?php endforeach; ?>
</nav>
<div class="flex items-center gap-4">
<a aria-label="Saved Pets" class="text-[#64748B] hover:text-[#E05A4F] transition-colors p-1" href="../Html/heart.html"><i class="fa-regular fa-heart text-[19px]"></i></a>
<div class="flex items-center gap-3 cursor-pointer group select-none">
<div class="w-9 h-9 rounded-full bg-[#FFE1DD] text-[#E05A4F] flex items-center justify-center font-bold text-xs"<?= $user['photo'] !== '' ? ' style="background-image:url(&quot;../' . e($user['photo']) . '&quot;);background-size:cover;background-position:center"' : '' ?>><?= $user['photo'] === '' ? e($user['initials'] !== '' ? $user['initials'] : '👤') : '' ?></div>
<div class="hidden sm:flex flex-col text-left">
<span class="text-xs font-bold text-[#1F1F1F] leading-tight group-hover:text-[#E05A4F] transition-colors"><?= e($fullName !== '' ? $fullName : 'New Applicant') ?></span>
<span class="text-[11px] font-medium text-[#4CAF50]"><?= e($user['role']) ?></span>
</div>
</div>
</div>
</div>
</header>
<!-- END: TopStickyNavigation -->
<!-- BEGIN: MainContentWrapper -->
<main class="flex-grow max-w-[1240px] w-full mx-auto px-4 sm:px-6 lg:px-8 py-5">
<?php if ($documentErrors !== []): ?>
<div role="alert" class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700"><?= e(implode(' ', $documentErrors)) ?></div>
<?php elseif (isset($_GET['saved'])): ?>
<div role="status" class="mb-5 rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-700">All required documents have been saved.</div>
<?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
<div role="status" class="mb-5 rounded-xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800">Your uploaded files were saved. <?= $remainingDocuments ?> required item(s) remain.</div>
<?php endif; ?>
<!-- BEGIN: BreadcrumbNavigation -->
<nav aria-label="Breadcrumb" class="flex items-center text-xs text-[#71717A] mb-5 font-medium">
<ol class="inline-flex items-center space-x-1.5">
<li>
<a class="hover:text-[#E05A4F] transition-colors" href="../Welcome_page.php">Home</a>
</li>
<li class="flex items-center">
<span class="text-gray-300 mx-1">/</span>
<a class="hover:text-[#E05A4F] transition-colors" href="../Welcome_page.php">Dashboard</a>
</li>
<li class="flex items-center">
<span class="text-gray-300 mx-1">/</span>
<a class="hover:text-[#E05A4F] transition-colors" href="../Resume_profile.php">Account Settings</a>
</li>
<li aria-current="page" class="flex items-center">
<span class="text-gray-300 mx-1">/</span>
<span class="text-[#1F1F1F] font-semibold">Requirements &amp; Eligibility</span>
</li>
</ol>
</nav>
<!-- END: BreadcrumbNavigation -->
<!-- BEGIN: HeroVerificationBanner -->
<section class="bg-white rounded-2xl p-6 sm:p-7 border border-[#EAE5E3] shadow-sm mb-6 flex flex-col md:flex-row md:items-center justify-between gap-6" data-purpose="verification-hero-card">
<div class="max-w-2xl">
<!-- Badge -->
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#FFE1DD] text-[#E05A4F] text-[11px] font-bold tracking-wide uppercase mb-3">
<span class="w-1.5 h-1.5 rounded-full bg-[#E05A4F]"></span>
          ADOPTER PROFILE CENTER • DOCUMENT VERIFICATION
        </div>
<!-- Heading -->
<h1 class="text-2xl sm:text-3xl font-extrabold text-[#1F1F1F] tracking-tight mb-2 font-display">
          Almost there! Let's verify your details.
        </h1>
<!-- Subtitle -->
<p class="text-sm text-[#666666] leading-relaxed">
          Upload these three quick documents so we can finalize your adoption profile. Your information is kept strictly secure.
        </p>
</div>
<!-- Readiness Score Card -->
<div class="shrink-0 bg-[#F2FBF6] border border-[#D5EFE3] rounded-xl p-4 min-w-[250px] sm:min-w-[270px]">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-[#E8F5E9] text-[#2E7D32] flex items-center justify-center shrink-0 mt-0.5">
<i class="fa-solid fa-shield-check text-base"></i>
</div>
<div class="flex-1">
<div class="flex items-center justify-between gap-2 mb-1">
<span class="text-xs font-bold text-[#1F1F1F]">Adopter Readiness</span>
<span class="text-xs font-extrabold text-[#2E7D32]"><?= $documentPercent ?>% Complete</span>
</div>
<!-- Progress Bar -->
<div class="w-full bg-[#D1EBDD] h-2 rounded-full overflow-hidden mb-1.5">
<div class="bg-[#4CAF50] h-full rounded-full transition-all duration-500" style="width: <?= $documentPercent ?>%;"></div>
</div>
<p class="text-[11px] font-medium text-[#52796F]"><?= $remainingDocuments ?> required items remaining</p>
</div>
</div>
</div>
</section>
<!-- END: HeroVerificationBanner -->
<!-- BEGIN: GridInterfaceLayout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- BEGIN: LeftSidebarMenu -->
<aside aria-label="Settings Sidebar" class="lg:col-span-4 space-y-5">
<!-- Navigation Menu Card -->
<div class="bg-white rounded-2xl p-5 border border-[#EAE5E3] shadow-sm">
<h2 class="text-[11px] font-bold tracking-wider text-[#A0AEC0] uppercase mb-4 px-3">
            Navigation Menu
          </h2>
<nav class="space-y-1">
<!-- Step 1: Personal Info -->
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold text-[#4A5568] hover:bg-[#FDF6F5] transition-colors group" href="../Resume_profile.php">
<div class="flex items-center gap-3">
<i class="fa-regular fa-user text-[15px] text-gray-400 group-hover:text-[#E05A4F] transition-colors"></i>
<span class="text-[13px]">Applicant's Personal Information</span>
</div>
<div class="w-5 h-5 rounded-full bg-[#E8F5E9] text-[#4CAF50] flex items-center justify-center text-[10px]">
<i class="fa-solid fa-check"></i>
</div>
</a>
<!-- Step 2: Adoption Info -->
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold text-[#4A5568] hover:bg-[#FDF6F5] transition-colors group" href="Adoption_information.php">
<div class="flex items-center gap-3">
<i class="fa-regular fa-heart text-[15px] text-gray-400 group-hover:text-[#E05A4F] transition-colors"></i>
<span class="text-[13px]">Adoption Information</span>
</div>
<div class="w-5 h-5 rounded-full bg-[#E8F5E9] text-[#4CAF50] flex items-center justify-center text-[10px]">
<i class="fa-solid fa-check"></i>
</div>
</a>
<!-- Step 3: Household Info -->
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold text-[#4A5568] hover:bg-[#FDF6F5] transition-colors group" href="../Household.php">
<div class="flex items-center gap-3">
<i class="fa-regular fa-house text-[15px] text-gray-400 group-hover:text-[#E05A4F] transition-colors"></i>
<span class="text-[13px]">Household Information</span>
</div>
<div class="w-5 h-5 rounded-full bg-[#E8F5E9] text-[#4CAF50] flex items-center justify-center text-[10px]">
<i class="fa-solid fa-check"></i>
</div>
</a>
<!-- Step 4: Security -->
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold text-[#4A5568] hover:bg-[#FDF6F5] transition-colors group" href="../Security.php">
<div class="flex items-center gap-3">
<i class="fa-regular fa-lock text-[15px] text-gray-400 group-hover:text-[#E05A4F] transition-colors"></i>
<span class="text-[13px]">Security</span>
</div>
<div class="w-5 h-5 rounded-full bg-[#E8F5E9] text-[#4CAF50] flex items-center justify-center text-[10px]">
<i class="fa-solid fa-check"></i>
</div>
</a>
<!-- Step 5: Active Step -->
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold bg-[#FFE1DD]/60 text-[#E05A4F] transition-colors" href="requirements.php">
<div class="flex items-center gap-3">
<i class="fa-regular fa-file-lines text-[15px] text-[#E05A4F]"></i>
<span class="text-[13px]">Requirements &amp; Eligibility</span>
</div>
<span class="w-2 h-2 rounded-full bg-[#E05A4F] mr-1.5"></span>
</a>
</nav>
<!-- Divider -->
<div class="my-4 border-t border-[#F0EBE9]"></div>
<!-- Utility Links -->
<div class="space-y-1">
<a class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-[13px] font-medium text-[#71717A] hover:text-[#1F1F1F] hover:bg-gray-50 transition-colors" href="../Welcome_page.php">
<i class="fa-solid fa-house text-[15px]"></i>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-[13px] font-medium text-[#71717A] hover:text-[#E05A4F] hover:bg-[#FDF6F5] transition-colors" href="sign_out.php">
<i class="fa-solid fa-arrow-right-from-bracket text-[15px]"></i>
<span>Sign Out</span>
</a>
</div>
</div>
<!-- Explanatory Callout Card -->
<div class="bg-[#FFF9F8] rounded-2xl p-5 border border-[#FCDED9] shadow-sm">
<div class="flex items-start gap-3.5">
<div class="w-8 h-8 rounded-lg bg-[#FFE1DD] text-[#E05A4F] flex items-center justify-center shrink-0">
<i class="fa-solid fa-shield-heart text-sm"></i>
</div>
<div>
<h3 class="text-xs font-bold text-[#1F1F1F] mb-1.5">Why Documents Matter</h3>
<p class="text-[12px] text-[#71717A] leading-relaxed">
                Verified identification and living condition documents allow shelters to safely fast-track approvals and waive home-visit waiting periods.
              </p>
</div>
</div>
</div>
</aside>
<!-- END: LeftSidebarMenu -->
<!-- BEGIN: CenterFormContent -->
<section class="lg:col-span-8 bg-white rounded-2xl p-6 sm:p-8 border border-[#EAE5E3] shadow-sm" data-purpose="document-upload-center">
<form id="requirements-form" method="post" action="requirements.php" enctype="multipart/form-data">
<!-- Header & Counter -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-5 border-b border-[#F0EBE9] gap-3">
<div>
<div class="flex items-center gap-2.5">
<h2 class="text-lg sm:text-xl font-bold text-[#1F1F1F]">Requirements &amp; Eligibility</h2>
<span class="text-xs font-semibold px-2 py-0.5 rounded bg-gray-100 text-[#71717A]">Step 5 of 5</span>
</div>
<p class="text-xs text-[#71717A] mt-1">Please upload clear photos or PDF scans of the required documents below.</p>
</div>
<div>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#E8F5E9] text-[#2E7D32] text-xs font-bold whitespace-nowrap">
              3 required items • <?= $remainingDocuments ?> remaining
            </span>
</div>
</div>
<!-- Verification Checklist Stack -->
<div class="mt-6 space-y-6">
<!-- ITEM 1: Valid Government-Issued Photo ID (Uploaded State) -->
<div class="p-5 rounded-2xl border border-[#EAE5E3] bg-[#FCFBFB]" data-purpose="item-gov-id">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2.5">
<span class="text-sm font-bold text-[#1F1F1F]">1. Valid Government-Issued Photo ID</span>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full <?= empty($documents['government_id']) ? 'bg-[#FEF3C7] text-[#B45309]' : 'bg-[#E8F5E9] text-[#2E7D32]' ?> text-[11px] font-bold">
<?= empty($documents['government_id']) ? 'Required *' : 'Saved' ?>
</span>
</div>
<p class="text-xs text-[#71717A] mb-4">
              Driver's license, state ID card, or passport. Must show full name, photo, and expiration date.
            </p>
<div class="bg-white border border-[#EAE5E3] rounded-xl p-3.5">
<input class="block w-full text-xs text-[#4A5568]" type="file" name="government_id" accept=".pdf,.jpg,.jpeg,.png">
<?php if (!empty($documents['government_id']['name'])): ?>
<p class="mt-2 text-xs text-emerald-700">Saved: <?= e($documents['government_id']['name']) ?> (<?= number_format(((int)$documents['government_id']['size']) / 1048576, 2) ?> MB)</p>
<?php endif; ?>
</div>
</div>
<!-- ITEM 2: Proof of Employment or Income (Dropzone State) -->
<div class="p-5 rounded-2xl border border-[#EAE5E3] bg-[#FCFBFB]" data-purpose="item-proof-income">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-[#1F1F1F]">2. Proof of Employment or Income</span>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full <?= empty($documents['income_proof']) ? 'bg-[#FEF3C7] text-[#B45309]' : 'bg-[#E8F5E9] text-[#2E7D32]' ?> text-[11px] font-bold">
<?= empty($documents['income_proof']) ? 'Required *' : 'Saved' ?>
</span>
</div>
<p class="text-xs text-[#71717A] mb-4">
              Recent paystub (within 60 days), W-2, employer letter, or bank summary verifying steady household support.
            </p>
<!-- Dropzone Area -->
<div class="dashed-dropzone rounded-xl p-7 text-center flex flex-col items-center justify-center cursor-pointer group">
<div class="w-11 h-11 rounded-full bg-[#FFE1DD]/60 group-hover:bg-[#FFE1DD] text-[#E05A4F] flex items-center justify-center mb-2.5 transition-colors">
<i class="fa-regular fa-folder-arrow-up text-lg"></i>
</div>
<p class="text-xs font-bold text-[#1F1F1F] mb-1">
                Drag and drop your file here, or browse from device
              </p>
<p class="text-[11px] text-[#A0AEC0] mb-4">
                Supports PDF, JPG, PNG up to 15MB
              </p>
<input class="block w-full max-w-sm text-xs text-[#4A5568]" type="file" name="income_proof" accept=".pdf,.jpg,.jpeg,.png">
<?php if (!empty($documents['income_proof']['name'])): ?>
<p class="mt-2 text-xs text-emerald-700">Saved: <?= e($documents['income_proof']['name']) ?> (<?= number_format(((int)$documents['income_proof']['size']) / 1048576, 2) ?> MB)</p>
<?php endif; ?>
</div>
</div>
<!-- ITEM 3: Home Environment & Living Conditions -->
<div class="p-5 rounded-2xl border border-[#EAE5E3] bg-[#FCFBFB]" data-purpose="item-home-photos">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-[#1F1F1F]">3. Home Environment &amp; Living Conditions</span>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full <?= empty($documents['home_photos']) ? 'bg-[#FEF3C7] text-[#B45309]' : 'bg-[#E8F5E9] text-[#2E7D32]' ?> text-[11px] font-bold">
<?= empty($documents['home_photos']) ? 'Required *' : 'Saved' ?>
</span>
</div>
<p class="text-xs text-[#71717A] mb-4">
              Photos of primary indoor living areas and outdoor yard/patio where your rescue pet will rest and exercise.
            </p>
<!-- Dropzone Area -->
<div class="dashed-dropzone rounded-xl p-7 text-center flex flex-col items-center justify-center cursor-pointer group mb-3">
<div class="w-11 h-11 rounded-full bg-[#FFE1DD]/60 group-hover:bg-[#FFE1DD] text-[#E05A4F] flex items-center justify-center mb-2.5 transition-colors">
<i class="fa-regular fa-camera text-lg"></i>
</div>
<p class="text-xs font-bold text-[#1F1F1F] mb-1">
                Drag and drop photos here, or browse files
              </p>
<p class="text-[11px] text-[#A0AEC0] mb-4">
                Supports JPG or PNG up to 25MB each (multiple files allowed)
              </p>
<input class="block w-full max-w-sm text-xs text-[#4A5568]" type="file" name="home_photos[]" accept=".jpg,.jpeg,.png" multiple>
<?php if (!empty($documents['home_photos'])): ?>
<ul class="mt-3 text-left text-xs text-emerald-700"><?php foreach ($documents['home_photos'] as $photo): ?><li><?= e($photo['name']) ?> (<?= number_format(((int)$photo['size']) / 1048576, 2) ?> MB)</li><?php endforeach; ?></ul>
<?php endif; ?>
</div>
<!-- Shelter Helpful Tip Box -->
<div class="p-3 bg-[#FFFDF5] border border-[#FDE68A] rounded-xl flex items-center gap-2 text-xs text-[#92400E]">
<i class="fa-solid fa-lightbulb text-[#D97706] text-xs"></i>
<span><strong class="font-bold">Shelter Tip:</strong> Showing fences, living room resting spaces, and entry gates speeds up match reviews.</span>
</div>
</div>
</div>
<!-- Bottom Action Controls -->
<div class="mt-8 pt-5 border-t border-[#F0EBE9] flex flex-col sm:flex-row items-center justify-between gap-4">
<!-- Security reassurance -->
<div class="flex items-center gap-2.5 text-xs text-[#71717A]">
<i class="fa-solid fa-shield-halved text-[#4CAF50] text-sm shrink-0"></i>
<span>All documents are encrypted with 256-bit AES protection and only accessible by authorized shelter staff.</span>
</div>
<!-- CTA Buttons -->
<div class="flex items-center gap-3 w-full sm:w-auto justify-end shrink-0">
<a class="px-4 py-2.5 text-xs font-bold text-[#71717A] hover:text-[#1F1F1F] rounded-xl transition-colors" href="../Security.php">
              ← Back to Security
</a>
<button class="px-5 py-2.5 bg-[#E05A4F] hover:bg-[#C94B41] text-white text-xs font-bold rounded-xl shadow-sm transition-all shadow-[#E05A4F]/20 flex items-center gap-2" type="submit">
              Submit Requirements <span>→</span>
</button>
</div>
</div>
</form>
</section>
<!-- END: CenterFormContent -->
</div>
<!-- END: GridInterfaceLayout -->
</main>
<!-- END: MainContentWrapper -->
<!-- BEGIN: GlobalDarkFooter -->
<footer class="bg-[#1F1F1F] text-[#A0AEC0] text-xs mt-16 border-t border-gray-800" data-purpose="site-footer">
<div class="max-w-[1240px] mx-auto px-4 sm:px-6 lg:px-8 py-12">
<div class="grid grid-cols-1 md:grid-cols-5 gap-8">
<!-- Left Brand Description -->
<div class="md:col-span-2 space-y-4">
<div class="flex items-center gap-1.5 text-2xl logo-font text-[#E05A4F]">
<span class="text-white">AD</span>
<i class="fa-solid fa-paw text-[20px] text-[#E05A4F] -mt-0.5"></i>
<span class="text-white">PTLY</span>
</div>
<p class="text-xs leading-relaxed max-w-sm text-gray-400">
            Helping rescue pets find safe, loving homes and lifelong companionship. Partnered with certified no-kill shelters nationwide.
          </p>
<!-- Social Links -->
<div class="flex items-center gap-2.5 pt-2">
<a aria-label="Facebook" class="w-8 h-8 rounded-full bg-[#2A2A2A] hover:bg-[#E05A4F] text-gray-300 hover:text-white flex items-center justify-center transition-colors text-xs" href="#">
<i class="fa-brands fa-facebook-f"></i>
</a>
<a aria-label="Twitter" class="w-8 h-8 rounded-full bg-[#2A2A2A] hover:bg-[#E05A4F] text-gray-300 hover:text-white flex items-center justify-center transition-colors text-xs" href="#">
<i class="fa-brands fa-x-twitter"></i>
</a>
<a aria-label="Instagram" class="w-8 h-8 rounded-full bg-[#2A2A2A] hover:bg-[#E05A4F] text-gray-300 hover:text-white flex items-center justify-center transition-colors text-xs" href="#">
<i class="fa-brands fa-instagram"></i>
</a>
<a aria-label="LinkedIn" class="w-8 h-8 rounded-full bg-[#2A2A2A] hover:bg-[#E05A4F] text-gray-300 hover:text-white flex items-center justify-center transition-colors text-xs" href="#">
<i class="fa-brands fa-linkedin-in"></i>
</a>
<a aria-label="YouTube" class="w-8 h-8 rounded-full bg-[#2A2A2A] hover:bg-[#E05A4F] text-gray-300 hover:text-white flex items-center justify-center transition-colors text-xs" href="#">
<i class="fa-brands fa-youtube"></i>
</a>
</div>
</div>
<!-- Column 1: Browse -->
<div>
<h3 class="text-xs font-bold text-white uppercase tracking-wider mb-3">Browse</h3>
<ul class="space-y-2">
<li><a class="hover:text-white transition-colors" href="../Html/Browse_page.html">Browse Pets</a></li>
<li><a class="hover:text-white transition-colors" href="../Html/Adoption_process.html">Adoption Process</a></li>
<li><a class="hover:text-white transition-colors" href="../Donation.php">Success Stories</a></li>
<li><a class="hover:text-white transition-colors" href="../About_us.php">About Us</a></li>
</ul>
</div>
<!-- Column 2: Resources -->
<div>
<h3 class="text-xs font-bold text-white uppercase tracking-wider mb-3">Resources</h3>
<ul class="space-y-2">
<li><a class="hover:text-white transition-colors" href="../Html/Adoption_process.html#faq">FAQ</a></li>
<li><a class="hover:text-white transition-colors" href="../Html/Adoption_process.html#faq">Pet Care Tips</a></li>
<li><a class="hover:text-white transition-colors" href="../About_us.php">Volunteer</a></li>
<li><a class="hover:text-white transition-colors" href="mailto:support@adoptly.org">Support Center</a></li>
</ul>
</div>
<!-- Column 3: Contact -->
<div>
<h3 class="text-xs font-bold text-white uppercase tracking-wider mb-3">Contact</h3>
<ul class="space-y-2">
<li class="flex items-center gap-2">
<i class="fa-regular fa-envelope text-gray-500"></i>
<a class="hover:text-white transition-colors" href="mailto:helloadoptly@gmail.com">helloadoptly@gmail.com</a>
</li>
<li class="flex items-center gap-2">
<i class="fa-solid fa-phone text-gray-500"></i>
<span>+1 (234) 567-890</span>
</li>
<li class="flex items-center gap-2">
<i class="fa-solid fa-location-dot text-gray-500"></i>
<span>New York, USA</span>
</li>
</ul>
</div>
</div>
<!-- Copyright Sub-footer -->
<div class="mt-10 pt-6 border-t border-gray-800 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 gap-3">
<p>© 2026 Adoptly. All rights reserved.</p>
<div class="flex items-center gap-4">
<a class="hover:text-white transition-colors" href="#">Privacy Policy</a>
<span>|</span>
<a class="hover:text-white transition-colors" href="#">Terms of Service</a>
</div>
</div>
</div>
</footer>
<!-- END: GlobalDarkFooter -->
</body></html>
