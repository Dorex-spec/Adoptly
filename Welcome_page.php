<?php
$pageTitle = 'Adoptly - Welcome Page';
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
$fullName = trim((string)($_SESSION['full_name'] ?? ''));
$displayName = $fullName !== '' ? $fullName : 'New Adopter';
$nameParts = preg_split('/\s+/', $fullName, -1, PREG_SPLIT_NO_EMPTY) ?: [];
$initials = '';
foreach (array_slice($nameParts, 0, 2) as $part) {
  $initials .= strtoupper(substr($part, 0, 1));
}
$initials = $initials !== '' ? $initials : 'NA';
$escapedDisplayName = htmlspecialchars($displayName, ENT_QUOTES, 'UTF-8');

// 🖼️ ILAGAY DITO ANG IMAGE URL NG BAWAT PET
$petImages = [
  'bella'  => '../photos/BROWSE PAGE/BELLA.jpg',  // 🖼️ IMAGE URL HERE: Bella
  'polly'  => '../photos/BROWSE PAGE/POLLY.jpg',  // 🖼️ IMAGE URL HERE: Polly
  'marley' => '../photos/BROWSE PAGE/MARLEY.jpg',  // 🖼️ IMAGE URL HERE: Marley
  'bailey' => '../photos/BROWSE PAGE/BAILEY.jpg',  // 🖼️ IMAGE URL HERE: Bailey
];

// Footer columns (same content as the Adoption Process page)
$footerCols = [
  'Help Tabs' => [['Process Overview', '#process'], ['Requirements Check', '#requirements'], ['Adoption Fees', '#fees'], ['Adoption FAQ', '#faq'], ['Online Application', '#next-steps']],
  'Resources' => [['Pet Care Guides', '#'], ['Foster Program', '#'], ['Volunteer Network', '#'], ['Donate to Us', '#'], ['Post-Adoption Support', '#']],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= htmlspecialchars($pageTitle) ?></title>
<!-- Google Fonts: Poppins & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Poppins', 'Plus Jakarta Sans', 'sans-serif'],
        },
        colors: {
          brand: {
            coral: '#E05A4F',
            'coral-hover': '#cf493e',
            'coral-light': '#FFE1DD',
            'coral-soft': '#FFF5F2',
            beige: '#F7E9D7',
            offwhite: '#FCF9F8',
            cardbg: '#FAFAFA',
            dark: '#181818',
            darker: '#141414',
            muted: '#737373',
            border: '#EAE5E3',
          }
        }
      }
    }
  }
</script>
<!-- Custom CSS -->
<link rel="stylesheet" href="style3.css"/>
</head>
<body class="min-h-screen flex flex-col justify-between">

<!-- BEGIN: MainHeader -->
<header class="w-full bg-white border-b border-brand-border sticky top-0 z-50">
<div class="max-w-[1440px] mx-auto px-8 h-20 flex items-center justify-between">
<div class="flex items-center gap-2">
<!-- Logo (same image/size as the Adoption Process page) -->
<a class="block" href="#"><img src="photos/logoNav.png" alt="Adoptly" class="h-11 max-sm:h-9 w-auto"></a>
</div>
<nav class="hidden md:flex items-center space-x-9 text-[15px] font-medium text-[#4A4A4A]">
<a class="hover:text-brand-coral transition-colors" href="Html/Browse_page.html">Browse Pets</a>
<a class="hover:text-brand-coral transition-colors" href="Html/Adoption_process.html">Adoption Process</a>
<a class="hover:text-brand-coral transition-colors" href="#">Donate</a>
<a class="hover:text-brand-coral transition-colors" href="#">About</a>
</nav>
<div class="flex items-center space-x-6">
<!-- Heart icon (same style as the Adoption Process navigation) -->
<a class="relative inline-flex items-center justify-center w-9 h-9 rounded-full bg-[#FFE1DD] text-[#E05A4F] text-base leading-none hover:bg-[#E05A4F] hover:text-white transition-colors" href="Html/heart.html" title="Saved Animals" aria-label="Favorites">
<span>❤</span>
</a>
<div class="h-8 w-[1px] bg-gray-200"></div>
<div class="flex items-center gap-3 cursor-pointer group">
<div class="w-10 h-10 rounded-full bg-brand-coral-light border border-brand-coral/30 flex items-center justify-center text-brand-coral font-bold text-sm tracking-wide"><?= htmlspecialchars($initials, ENT_QUOTES, 'UTF-8') ?></div>
<div class="text-left hidden sm:block">
<div class="text-sm font-semibold text-gray-900 group-hover:text-brand-coral transition-colors flex items-center gap-1">
<?= $escapedDisplayName ?>
<svg class="w-4 h-4 text-gray-400 group-hover:text-brand-coral" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" fill-rule="evenodd"></path>
</svg>
</div>
<div class="text-[11px] font-medium text-gray-500">New Adopter</div>
</div>
</div>
</div>
</div>
</header>
<!-- END: MainHeader -->

<!-- BEGIN: MainContent -->
<main class="w-full max-w-[1440px] mx-auto px-8 py-10 space-y-12">

<!-- Welcome Hero -->
<section class="bg-[#FFF8F6] border border-[#F2E5E0] rounded-3xl p-8 md:p-12 shadow-sm relative overflow-hidden">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#FFEAE6] border border-[#FCD6D0] text-brand-coral text-xs font-semibold tracking-wider uppercase mb-5">
<span class="w-2 h-2 rounded-full bg-brand-coral"></span>
WELCOME TO THE ADOPTLY FAMILY • YOUR JOURNEY BEGINS
</div>
<h1 class="text-3xl sm:text-4xl md:text-[42px] font-bold text-gray-900 leading-tight mb-4 flex items-center flex-wrap gap-3">
<span>Welcome to the Adoptly Family, <?= $escapedDisplayName ?>!</span>
<span class="inline-flex items-center text-brand-coral text-3xl">🐾</span>
</h1>
<p class="text-base sm:text-lg text-gray-600 max-w-3xl leading-relaxed mb-6">
We're so excited to help you find your new best friend. Your personalized dashboard will keep your favorite animals, application progress, and shelter communications all organized in one safe place.
</p>
<div class="inline-flex items-center gap-3 bg-white px-5 py-3 rounded-xl border border-[#EFE5E2] shadow-xs text-sm text-gray-700">
<span class="text-lg">💡</span>
<span>
<strong class="font-semibold text-gray-900">Pro-tip:</strong> Completing your Adopter Profile today reduces shelter review time by up to <span class="text-brand-coral font-bold">70%</span>.
</span>
</div>
</section>

<!-- Adoption Readiness -->
<section class="space-y-6">
<div class="flex flex-col sm:flex-row sm:items-end justify-between border-b border-gray-200/80 pb-4">
<div>
<h2 class="text-2xl font-bold text-gray-900">Your Adoption Readiness</h2>
<p class="text-sm text-gray-500 mt-1">Step-by-step guidance to prepare you for your first pet match</p>
</div>
<div class="text-xs font-semibold text-brand-coral uppercase tracking-wider mt-2 sm:mt-0">PROFILE SETUP IN PROGRESS</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

<!-- Card 1 -->
<article class="bg-white rounded-2xl p-6 border-2 border-brand-coral/40 shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="absolute top-0 right-0 bg-brand-coral text-white text-[10px] font-bold px-3 py-1 rounded-bl-lg uppercase tracking-wide">Recommended First Step</div>
<div>
<div class="w-12 h-12 rounded-xl bg-brand-coral-light flex items-center justify-center text-brand-coral mb-5">
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
<h3 class="text-lg font-bold text-gray-900 mb-1">Complete Adopter Profile</h3>
<p class="text-xs text-gray-500 mb-4 leading-relaxed">Home type, yard status, family dynamics &amp; lifestyle preferences.</p>
<div class="space-y-1.5 mb-6">
<div class="flex justify-between text-xs font-semibold"><span class="text-gray-600">Profile Strength</span><span class="text-brand-coral">25%</span></div>
<div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden"><div class="bg-brand-coral h-2 rounded-full w-1/4"></div></div>
</div>
</div>
<a class="w-full py-2.5 px-4 bg-brand-coral hover:bg-brand-coral-hover text-white text-center font-medium rounded-xl text-sm transition-colors flex items-center justify-center gap-1.5 shadow-sm" href="Resume_profile.php"><span>Resume Profile</span><span>→</span></a>
</article>

<!-- Card 2 -->
<article class="bg-white rounded-2xl p-6 border border-brand-border shadow-sm flex flex-col justify-between hover:border-gray-300 transition-all">
<div>
<div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center mb-5">
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
<h3 class="text-lg font-bold text-gray-900 mb-1">Browse Available Pets</h3>
<p class="text-xs text-gray-500 mb-4 leading-relaxed">Explore 14,200+ rescue dogs, cats, and companions waiting for a loving forever home.</p>
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-amber-50/80 border border-amber-200/50 text-[11px] font-medium text-amber-700 mb-6"><span>⚡ Verified Shelters</span></div>
</div>
<a class="w-full py-2.5 px-4 bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 text-center font-medium rounded-xl text-sm transition-colors flex items-center justify-center gap-1.5" href="Html/Browse_page.html"><span>Start Exploring</span><span>→</span></a>
</article>

<!-- Card 3 -->
<article class="bg-white rounded-2xl p-6 border border-brand-border shadow-sm flex flex-col justify-between hover:border-gray-300 transition-all">
<div>
<div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-500 flex items-center justify-center mb-5">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
</div>
<h3 class="text-lg font-bold text-gray-900 mb-1">Your Saved Wishlist</h3>
<p class="text-xs text-gray-500 mb-4 leading-relaxed">Bookmark pets you love to receive real-time application queues and availability alerts.</p>
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-gray-100 text-[11px] font-medium text-gray-600 mb-6"><span>0 animals saved yet</span></div>
</div>
<a class="w-full py-2.5 px-4 bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 text-center font-medium rounded-xl text-sm transition-colors flex items-center justify-center gap-1.5" href="Html/heart.html"><span>View Saved Pets</span><span>→</span></a>
</article>

<!-- Card 4 -->
<article class="bg-white rounded-2xl p-6 border border-brand-border shadow-sm flex flex-col justify-between hover:border-gray-300 transition-all">
<div>
<div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5">
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
<h3 class="text-lg font-bold text-gray-900 mb-1">Explore Adoption Process</h3>
<p class="text-xs text-gray-500 mb-4 leading-relaxed">Learn the step-by-step roadmap from application screening to bringing your pet home.</p>
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-blue-50 text-[11px] font-medium text-blue-600 mb-6"><span>📑 4 Simple Steps</span></div>
</div>
<a class="w-full py-2.5 px-4 bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 text-center font-medium rounded-xl text-sm transition-colors flex items-center justify-center gap-1.5" href="Html/Adoption_process.html"><span>Explore Adoption Process</span><span>→</span></a>
</article>

</div>
</section>

<!-- Recommended Pets -->
<section class="space-y-6 pt-4">
<div class="flex flex-col sm:flex-row sm:items-end justify-between border-b border-gray-200/80 pb-4">
<div>
<h2 class="text-2xl font-bold text-gray-900">Pets Looking for a Loving Home</h2>
<p class="text-sm text-gray-500 mt-1">Handpicked companions from verified shelters near Austin, TX</p>
</div>
<a class="text-sm font-semibold text-brand-coral hover:underline flex items-center gap-1 mt-2 sm:mt-0" href="#"><span>View All 14,200+ Pets</span><span>→</span></a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

<!-- Bella -->
<article class="bg-white rounded-2xl border border-brand-border overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="relative w-full h-56 wireframe-box border-b border-gray-200 flex flex-col items-center justify-center <?= $petImages['bella'] ? 'has-image' : '' ?>">

  <!-- 🖼️ IMAGE URL HERE → $petImages['bella'] sa taas ng file -->
  <?php if (!empty($petImages['bella'])): ?>
    <img src="<?= htmlspecialchars($petImages['bella']) ?>" alt="Bella"
         class="pet-img absolute inset-0 w-full h-full object-cover" loading="lazy">
  <?php else: ?>
    <div class="img-marker z-10 px-3 py-2 rounded-lg text-center">
      <span class="text-[11px] font-bold block">bella.jpg</span>
      <span class="text-[10px] block opacity-80">$petImages['bella']</span>
    </div>
  <?php endif; ?>

  <!-- Heart button (huwag galawin) -->
  <button aria-label="Add to favorites" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white shadow flex items-center justify-center text-gray-400 hover:text-brand-coral transition-colors z-10" type="button">
    <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
  </button>
</div>

<div class="p-5 space-y-3">
<div class="flex items-center justify-between text-xs">
<span class="inline-flex items-center gap-1.5 text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Available</span>
<span class="text-gray-400 text-[11px]">Saved 2d ago</span>
</div>
<div><h3 class="text-xl font-bold text-gray-900">Bella</h3><p class="text-xs text-gray-500 font-medium">Domestic Short Hair Mix</p></div>
<div class="flex items-center gap-4 text-xs text-gray-600 pt-1 border-t border-gray-100"><span class="flex items-center gap-1">🎂 Kitten (6 mos)</span><span class="flex items-center gap-1">♀ Female</span></div>
<div class="text-[11px] text-gray-500 flex items-center gap-1.5">
<svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
<span>Austin Animal Center • Approx. 4.2 miles</span>
</div>
</div>
</div>
<div class="p-5 pt-0 space-y-2">
<button class="w-full py-2.5 bg-brand-coral hover:bg-brand-coral-hover text-white rounded-xl text-xs font-semibold transition-colors flex items-center justify-center gap-1 shadow-xs"><span>❤️</span><span>Adopt Me</span></button>
<button class="w-full py-2 bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 rounded-xl text-xs font-medium transition-colors">More About Me</button>
</div>
</article>

<!-- Polly -->
<article class="bg-white rounded-2xl border border-brand-border overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="relative w-full h-56 wireframe-box border-b border-gray-200 flex flex-col items-center justify-center <?= $petImages['polly'] ? 'has-image' : '' ?>">

  <!-- 🖼️ IMAGE URL HERE → $petImages['polly'] sa taas ng file -->
  <?php if (!empty($petImages['polly'])): ?>
    <img src="<?= htmlspecialchars($petImages['polly']) ?>" alt="Polly"
         class="pet-img absolute inset-0 w-full h-full object-cover" loading="lazy">
  <?php else: ?>
    <div class="img-marker z-10 px-3 py-2 rounded-lg text-center">
      <span class="text-[11px] font-bold block">🖼️ IMAGE URL HERE</span>
      <span class="text-[10px] block opacity-80">$petImages['polly']</span>
    </div>
  <?php endif; ?>

  <!-- Heart button (huwag galawin) -->
  <button aria-label="Add to favorites" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white shadow flex items-center justify-center text-gray-400 hover:text-brand-coral transition-colors z-10" type="button">
    <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
  </button>
</div>
<div class="p-5 space-y-3">
<div class="flex items-center justify-between text-xs">
<span class="inline-flex items-center gap-1.5 text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Available</span>
<span class="text-gray-400 text-[11px]">Saved 4d ago</span>
</div>
<div><h3 class="text-xl font-bold text-gray-900">Polly</h3><p class="text-xs text-gray-500 font-medium">Domestic Short Hair</p></div>
<div class="flex items-center gap-4 text-xs text-gray-600 pt-1 border-t border-gray-100"><span class="flex items-center gap-1">🎂 Young Kitten</span><span class="flex items-center gap-1">♀ Female</span></div>
<div class="text-[11px] text-gray-500 flex items-center gap-1.5">
<svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
<span>Sedalia Animal Haven • Transport Avail.</span>
</div>
</div>
</div>
<div class="p-5 pt-0 space-y-2">
<button class="w-full py-2.5 bg-brand-coral hover:bg-brand-coral-hover text-white rounded-xl text-xs font-semibold transition-colors flex items-center justify-center gap-1 shadow-xs"><span>❤️</span><span>Adopt Me</span></button>
<button class="w-full py-2 bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 rounded-xl text-xs font-medium transition-colors">More About Me</button>
</div>
</article>

<!-- Marley -->
<article class="bg-white rounded-2xl border border-brand-border overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="relative w-full h-56 wireframe-box border-b border-gray-200 flex flex-col items-center justify-center <?= $petImages['marley'] ? 'has-image' : '' ?>">

  <!-- 🖼️ IMAGE URL HERE → $petImages['marley'] sa taas ng file -->
  <?php if (!empty($petImages['marley'])): ?>
    <img src="<?= htmlspecialchars($petImages['marley']) ?>" alt="Marley"
         class="pet-img absolute inset-0 w-full h-full object-cover" loading="lazy">
  <?php else: ?>
    <div class="img-marker z-10 px-3 py-2 rounded-lg text-center">
      <span class="text-[11px] font-bold block">🖼️ IMAGE URL HERE</span>
      <span class="text-[10px] block opacity-80">$petImages['marley']</span>
    </div>
  <?php endif; ?>

  <!-- Heart button (huwag galawin) -->
  <button aria-label="Add to favorites" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white shadow flex items-center justify-center text-gray-400 hover:text-brand-coral transition-colors z-10" type="button">
    <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
  </button>
</div>
<div class="p-5 space-y-3">
<div class="flex items-center justify-between text-xs">
<span class="inline-flex items-center gap-1.5 text-amber-700 bg-amber-50 border border-amber-200 px-2 py-0.5 rounded-full font-medium"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>Pending Adoption</span>
<span class="text-gray-400 text-[11px]">Under Review</span>
</div>
<div><h3 class="text-xl font-bold text-gray-900">Marley</h3><p class="text-xs text-gray-500 font-medium">Catahoula &amp; Boxer Mix</p></div>
<div class="flex items-center gap-4 text-xs text-gray-600 pt-1 border-t border-gray-100"><span class="flex items-center gap-1">🎂 3-8 years</span><span class="flex items-center gap-1">♀ Female</span></div>
<div class="text-[11px] text-gray-500 flex items-center gap-1.5">
<svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
<span>Green Ridge Rescue • 1 ahead in queue</span>
</div>
</div>
</div>
<div class="p-5 pt-0 space-y-2">
<button class="w-full py-2.5 bg-gray-900 hover:bg-black text-white rounded-xl text-xs font-semibold transition-colors flex items-center justify-center gap-1 shadow-xs"><span>+</span><span>Join Backup Waitlist</span></button>
<button class="w-full py-2 bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 rounded-xl text-xs font-medium transition-colors">More About Me</button>
</div>
</article>

<!-- Bailey -->
<article class="bg-white rounded-2xl border border-brand-border overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="relative w-full h-56 wireframe-box border-b border-gray-200 flex flex-col items-center justify-center <?= $petImages['bailey'] ? 'has-image' : '' ?>">

  <!-- 🖼️ IMAGE URL HERE → $petImages['bailey'] sa taas ng file -->
  <?php if (!empty($petImages['bailey'])): ?>
    <img src="<?= htmlspecialchars($petImages['bailey']) ?>" alt="Bailey"
         class="pet-img absolute inset-0 w-full h-full object-cover" loading="lazy">
  <?php else: ?>
    <div class="img-marker z-10 px-3 py-2 rounded-lg text-center">
      <span class="text-[11px] font-bold block">🖼️ IMAGE URL HERE</span>
      <span class="text-[10px] block opacity-80">$petImages['bailey']</span>
    </div>
  <?php endif; ?>

  <!-- Heart button (huwag galawin) -->
  <button aria-label="Add to favorites" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white shadow flex items-center justify-center text-gray-400 hover:text-brand-coral transition-colors z-10" type="button">
    <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
  </button>
</div>
<div class="p-5 space-y-3">
<div class="flex items-center justify-between text-xs">
<span class="inline-flex items-center gap-1.5 text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Available</span>
<span class="text-gray-400 text-[11px]">Saved 1w ago</span>
</div>
<div><h3 class="text-xl font-bold text-gray-900">Bailey</h3><p class="text-xs text-gray-500 font-medium">Domestic Long Hair</p></div>
<div class="flex items-center gap-4 text-xs text-gray-600 pt-1 border-t border-gray-100"><span class="flex items-center gap-1">🎂 Adult (3 yrs)</span><span class="flex items-center gap-1">♀ Female</span></div>
<div class="text-[11px] text-gray-500 flex items-center gap-1.5">
<svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
<span>Warrensburg Care • Spayed &amp; Microchipped</span>
</div>
</div>
</div>
<div class="p-5 pt-0 space-y-2">
<button class="w-full py-2.5 bg-brand-coral hover:bg-brand-coral-hover text-white rounded-xl text-xs font-semibold transition-colors flex items-center justify-center gap-1 shadow-xs"><span>❤️</span><span>Adopt Me</span></button>
<button class="w-full py-2 bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 rounded-xl text-xs font-medium transition-colors">More About Me</button>
</div>
</article>

</div>
</section>

</main>
<!-- END: MainContent -->

<!-- BEGIN: GlobalFooter (same design/layout as the Adoption Process page) -->
<footer class="w-full bg-[#1F1F1F] text-white mt-16 pt-16 pb-6">
<div class="max-w-[1200px] mx-auto px-5">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-12">

<div>
<a class="inline-block mb-4" href="#"><img src="footer logo.png" alt="Adoptly" class="h-9 w-auto"></a>
<p class="text-xs text-white/60 leading-relaxed max-w-[300px]">Adoptly is a non-profit companion animal rescue network dedicated to connecting shelter pets with safe, loving and permanent forever homes through nationwide solidarity.</p>
</div>

<?php foreach ($footerCols as $heading => $links): ?>
<div>
<h4 class="text-sm font-semibold uppercase tracking-[.06em] mb-4"><?= $heading ?></h4>
<ul class="space-y-2.5">
<?php foreach ($links as [$label, $href]): ?>
<li class="text-xs text-white/60"><a class="hover:text-brand-coral transition-colors" href="<?= $href ?>"><?= $label ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<?php endforeach; ?>

<div>
<h4 class="text-sm font-semibold uppercase tracking-[.06em] mb-4">Contact Information</h4>
<ul class="space-y-2.5">
<li class="text-xs text-white/60"><a class="hover:text-brand-coral transition-colors" href="mailto:support@adoptly.org">support@adoptly.org</a></li>
<li class="text-xs text-white/60"><a class="hover:text-brand-coral transition-colors" href="tel:+15550192834">(555) 019-2834</a></li>
<li class="text-xs text-white/60">Hours: 9am - 6pm EST</li>
<li class="text-xs text-white/60"><a class="hover:text-brand-coral transition-colors" href="#">Media Directory</a></li>
</ul>
</div>

</div>
<div class="flex flex-wrap items-center justify-between gap-3 border-t border-white/10 pt-6">
<p class="text-xs text-white/50">© <?= date('Y') ?> Adoptly Pet Adoption Organization. All rights reserved.</p>
<div class="flex gap-4 text-xs text-white/50">
<a class="hover:text-brand-coral transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-brand-coral transition-colors" href="#">Terms of Service</a>
<a class="hover:text-brand-coral transition-colors" href="#">Accessibility</a>
</div>
</div>
</div>
</footer>
<!-- END: GlobalFooter -->
</body>
</html>
