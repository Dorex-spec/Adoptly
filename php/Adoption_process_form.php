Adoption Process Form (V1).php
100%
<?php
/**
 * Adoptly - Full Adoption Application Portal (PHP)
 * Formatted strictly according to Adoptly Official Brand Guidelines & Palette
 */
session_start();

// Initialize or persist state
if (!isset($_SESSION['adoptly_app'])) {
    $_SESSION['adoptly_app'] = [
        'step' => 1,
        'intent' => 'dog',
        'shelter_location' => 'bulacan-haven',
        'target_pet' => 'Bella (Domestic Short Hair • ID #9034)',
        'alternative_adoption' => 'open',
        'household_count' => '2-3',
        'household_demographics' => '2 adults (ages 32, 34), 1 child (age 6). Living together in a 2-bedroom home.',
        'prior_experience' => 'experienced',
        'financial_payer' => 'primary',
        'reason_for_adopting' => 'We are seeking a lifelong companion to join our family and share our daily routine.',
        'full_name' => 'Juan Dela Cruz',
        'email' => 'juandelacruz@example.com',
        'home_address' => 'Unit 402, Acacia Terraces, Barangay San Antonio, Pasig City, Metro Manila 1605',
        'contact_number' => '917 555 2468',
        'dob' => '15 / 08 / 1994',
        'income_range' => '20k-50k',
        'facebook_link' => 'https://facebook.com/juan.delacruz.ph',
        'contact_pref' => 'call',
        'gov_id_filename' => 'valid_gov_id_dela_cruz.pdf',
        'residence_type' => 'Single Family House (with yard)',
        'residence_ownership' => 'Owned (Sole Owner / Family)',
        'agreement_status' => 'Yes, everyone in the home is enthusiastic and fully supportive',
        'household_notes' => 'No known allergies. Kids understand gentle pet handling.',
        'outdoor_space' => 'fenced_yard',
        'primary_stay' => 'inside_main',
        'move_plans' => 'none',
        'move_commitment' => '100_percent',
        'clinic_name' => 'St. Francis Animal Care Clinic',
        'clinic_location' => '108 West Avenue, Suite 4, Central District',
        'clinic_emergency' => 'Yes, 24/7 emergency facility',
        'breeding_history' => 'No, never and never will',
        'vax_status' => 'Yes, fully up to date',
        'parasite_status' => 'No, routinely tested negative & on preventative care',
        'altered_status' => 'all',
        'spay_neuter_agreement' => 'fully_agree',
        'slot1_date' => 'Thu, Oct 24, 2026',
        'slot1_time' => '10:00 AM – 11:00 AM (Morning)',
        'slot2_date' => 'Fri, Oct 25, 2026',
        'slot2_time' => '03:00 PM – 04:00 PM (Afternoon)',
        'platform' => 'Google Meet',
    ];
}

// Step routing
if (isset($_GET['step'])) {
    $target_step = (int)$_GET['step'];
    if ($target_step >= 1 && $target_step <= 12) {
        $_SESSION['adoptly_app']['step'] = $target_step;
    }
}

// Form handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_step = isset($_POST['current_step']) ? (int)$_POST['current_step'] : 1;
    $direction = $_POST['action'] ?? 'next';

    foreach ($_POST as $k => $v) {
        if ($k !== 'current_step' && $k !== 'action') {
            $_SESSION['adoptly_app'][$k] = $v;
        }
    }

    if ($direction === 'prev') {
        $_SESSION['adoptly_app']['step'] = max(1, $current_step - 1);
    } else {
        $_SESSION['adoptly_app']['step'] = min(12, $current_step + 1);
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$data = $_SESSION['adoptly_app'];
$step = (int)$data['step'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Adoptly — A home. A heart. A forever.</title>
  <!-- Google Fonts: Poppins Regular (400) & Bold (700) -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          },
          colors: {
            brand: {
              coral: '#E05A4F',      /* Coral Red (Primary) */
              coralHover: '#C94940',
              black: '#1F1F1F',      /* Deep Black (Text/Logo) */
              grayBg: '#F2F2F2',     /* Light Gray (Background) */
              white: '#FFFFFF',      /* White (Surface) */
              softCoral: '#FFE1DD',  /* Soft Coral (Accent) */
              warmBeige: '#F7E9D7',  /* Warm Beige (Secondary) */
              green: '#4CAF50',      /* Green (Online/Active) */
              red: '#E53935'         /* Red (Offline) */
            }
          }
        }
      }
    }
  </script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #F2F2F2;
      color: #1F1F1F;
    }
    .brand-logo-text {
      letter-spacing: -0.03em;
    }
  </style>
</head>
<body class="min-h-screen bg-brand-grayBg flex flex-col justify-between items-center py-8 px-4 sm:px-6">

  <!-- ================= TOP NAVIGATION / BRAND LOGO HEADER ================= -->
  <header class="w-full max-w-4xl flex flex-col items-center mb-6">
    <!-- Adoptly Brand Mark -->
    <a href="?step=1" class="flex flex-col items-center group cursor-pointer text-decoration-none">
      <div class="flex items-center gap-1.5 select-none">
        <span class="text-3xl sm:text-4xl font-extrabold text-brand-coral brand-logo-text">AD</span>
        <!-- Paw Emblem 'O' -->
        <span class="inline-flex items-center justify-center text-brand-black">
          <svg class="w-7 h-7 sm:w-8 sm:h-8 fill-brand-black transition-transform group-hover:scale-110" viewBox="0 0 24 24">
            <ellipse cx="6" cy="8.5" rx="2" ry="3"/>
            <ellipse cx="10.5" cy="6" rx="2" ry="3"/>
            <ellipse cx="15" cy="6" rx="2" ry="3"/>
            <ellipse cx="19.5" cy="8.5" rx="2" ry="3"/>
            <path d="M12.75 10.5c-1.5 0-3.5 1-4.25 2.5-1 2-.75 4 0 5.25.75 1.25 2.25 2 4.25 2s3.5-.75 4.25-2c.75-1.25 1-3.25 0-5.25-.75-1.5-2.75-2.5-4.25-2.5z"/>
          </svg>
        </span>
        <span class="text-3xl sm:text-4xl font-extrabold text-brand-coral brand-logo-text relative">
          PTLY
          <!-- Floating Heart accent above Y -->
          <span class="absolute -top-1.5 -right-3 text-brand-coral text-sm">♥</span>
        </span>
      </div>
      <p class="text-xs sm:text-sm font-semibold text-brand-black mt-1 tracking-tight flex items-center gap-1">
        A home. A heart. A forever. <span class="text-brand-coral">♥</span>
      </p>
    </a>

    <!-- Status Indicators & Online Badge -->
    <div class="mt-4 flex items-center gap-3">
      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-brand-green border border-emerald-200">
        <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span> ONLINE
      </span>
      <span class="text-xs text-neutral-500 font-medium">Asia/Manila (PHT)</span>
    </div>
  </header>

  <!-- ================= MAIN APPLICATION CARD ================= -->
  <main class="w-full max-w-2xl bg-brand-white rounded-3xl border border-brand-warmBeige/80 shadow-[0_15px_35px_rgba(224,90,79,0.08)] p-6 sm:p-10 mb-8 transition-all">

    <?php if ($step === 1): /* P1: Hero Intro */ ?>
      <div class="text-center">
        <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral mb-4">
          Bring Love Home
        </span>
        <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-brand-black mb-6">
          Adoption Application
        </h1>
        <div class="space-y-4 text-xs sm:text-sm text-neutral-700 leading-relaxed text-justify sm:text-left mb-8">
          <p>Every rescue in our care has a story. Some were abandoned, some hurt, and many have never known what it feels like to be truly loved. By opening this form, you are already becoming part of their journey to healing.</p>
          <p>At Adoptly, we believe that you can't buy love, but you can rescue it. Adoption is more than just giving a rescue a home — it's giving them a second chance at life.</p>
          <p>Your answers here will help us make sure each rescue finds not just any home, but the right one.</p>
          <p class="font-bold text-brand-coral text-base pt-2">Ready to bring love home?</p>
        </div>
        <form method="POST" class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-brand-warmBeige/60">
          <input type="hidden" name="current_step" value="1"/>
          <a href="#" class="text-xs font-semibold text-neutral-500 hover:text-brand-coral transition-colors order-2 sm:order-1">
            Cancel & return to shelter catalog
          </a>
          <button type="submit" name="action" value="next" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 bg-brand-coral hover:bg-brand-coralHover text-white font-bold text-sm rounded-xl shadow-md transition-all active:scale-95 order-1 sm:order-2">
            Start Here →
          </button>
        </form>
      </div>

    <?php elseif ($step === 2): /* P2: Process & Reminders */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <h1 class="text-2xl font-bold text-brand-black">Adoption Process</h1>
          <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Overview</span>
        </div>
        <div class="space-y-5 text-sm text-neutral-700 leading-relaxed mb-8">
          <div class="space-y-4">
            <div class="flex items-start gap-3.5">
              <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral shrink-0 mt-0.5">Step 1</span>
              <p><strong class="text-brand-black font-semibold">Initial Screening:</strong> Fill out this form and allow up to one week for our team to review your application.</p>
            </div>
            <div class="flex items-start gap-3.5">
              <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral shrink-0 mt-0.5">Step 2</span>
              <p><strong class="text-brand-black font-semibold">Virtual Interview:</strong> Attend a 1-on-1 interview with an adoption specialist via Google Meet or Zoom.</p>
            </div>
            <div class="flex items-start gap-3.5">
              <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral shrink-0 mt-0.5">Step 3</span>
              <p><strong class="text-brand-black font-semibold">Shelter Visit & Meet:</strong> Once approved, visit our shelter, settle the adoption fee of Php 1,000, and welcome your rescue home.</p>
            </div>
          </div>
          <div class="pt-4 border-t border-brand-warmBeige space-y-2">
            <h3 class="font-bold text-brand-black">Important Reminders:</h3>
            <ul class="list-disc pl-5 space-y-1.5 text-xs text-neutral-600">
              <li>Our shelters are located in Bulacan and Bacolod. Adopters must travel to pick up their rescue.</li>
              <li>A Php 1,000 fee per rescue covers rehabilitation and validates capable guardianship.</li>
            </ul>
          </div>
        </div>
        <form method="POST" class="flex items-center justify-between pt-4 border-t border-brand-warmBeige">
          <input type="hidden" name="current_step" value="2"/>
          <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700 hover:bg-neutral-50">Back</button>
          <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Begin Application →</button>
        </form>
      </div>

    <?php elseif ($step === 3): /* P3: Species Intent */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 1 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Adoption Information</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#ADP-SPEC</span>
        </div>
        <form method="POST" class="space-y-6">
          <input type="hidden" name="current_step" value="3"/>
          <fieldset class="space-y-3">
            <legend class="text-sm font-semibold text-brand-black mb-2">Which pet are you applying to adopt? <span class="text-brand-coral">*</span></legend>
            <label class="flex items-start gap-3.5 p-4 rounded-2xl border-2 <?= $data['intent'] === 'dog' ? 'border-brand-coral bg-brand-softCoral/20' : 'border-neutral-200' ?> cursor-pointer transition-all">
              <input type="radio" name="intent" value="dog" class="mt-1 text-brand-coral focus:ring-brand-coral" <?= $data['intent'] === 'dog' ? 'checked' : '' ?>/>
              <div>
                <span class="text-sm font-bold text-brand-black block">I'm applying to adopt a dog from the shelter</span>
                <span class="text-xs text-neutral-500">Find companion dogs, puppies, and senior canines</span>
              </div>
            </label>
            <label class="flex items-start gap-3.5 p-4 rounded-2xl border-2 <?= $data['intent'] === 'cat' ? 'border-brand-coral bg-brand-softCoral/20' : 'border-neutral-200' ?> cursor-pointer transition-all">
              <input type="radio" name="intent" value="cat" class="mt-1 text-brand-coral focus:ring-brand-coral" <?= $data['intent'] === 'cat' ? 'checked' : '' ?>/>
              <div>
                <span class="text-sm font-bold text-brand-black block">I'm applying to adopt a cat from the shelter</span>
                <span class="text-xs text-neutral-500">Find indoor companions, kittens, and bonded pairs</span>
              </div>
            </label>
            <label class="flex items-start gap-3.5 p-4 rounded-2xl border-2 <?= $data['intent'] === 'undecided' ? 'border-brand-coral bg-brand-softCoral/20' : 'border-neutral-200' ?> cursor-pointer transition-all">
              <input type="radio" name="intent" value="undecided" class="mt-1 text-brand-coral focus:ring-brand-coral" <?= $data['intent'] === 'undecided' ? 'checked' : '' ?>/>
              <div>
                <span class="text-sm font-bold text-brand-black block">I'm applying for other pet</span>
                <span class="text-xs text-neutral-500">Rabbits, birds, or other companions</span>
              </div>
            </label>
          </fieldset>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 4): /* P5: Personal Information */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 2 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Personal Information</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#APP-PERS</span>
        </div>
        <form method="POST" class="space-y-5">
          <input type="hidden" name="current_step" value="4"/>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Full Name <span class="text-brand-coral">*</span></label>
            <input type="text" name="full_name" required value="<?= htmlspecialchars($data['full_name']) ?>" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"/>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Email <span class="text-brand-coral">*</span></label>
              <input type="email" name="email" required value="<?= htmlspecialchars($data['email']) ?>" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"/>
            </div>
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Contact Number <span class="text-brand-coral">*</span></label>
              <div class="flex">
                <span class="inline-flex items-center px-3 border border-r-0 border-neutral-300 bg-neutral-50 text-xs font-semibold text-neutral-600 rounded-l-xl">+63</span>
                <input type="tel" name="contact_number" required value="<?= htmlspecialchars($data['contact_number']) ?>" class="w-full text-sm rounded-r-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"/>
              </div>
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Home Address <span class="text-brand-coral">*</span></label>
            <textarea name="home_address" rows="2" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"><?= htmlspecialchars($data['home_address']) ?></textarea>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Date of Birth (Must be 18+) <span class="text-brand-coral">*</span></label>
              <input type="text" name="dob" value="<?= htmlspecialchars($data['dob']) ?>" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"/>
            </div>
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Facebook / Social Profile Link</label>
              <input type="text" name="facebook_link" value="<?= htmlspecialchars($data['facebook_link']) ?>" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"/>
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-2">Monthly Income Range <span class="text-brand-coral">*</span></label>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
              <?php foreach (['below20k' => 'Below ₱20k', '20k-50k' => '₱20k - ₱50k', '50k-100k' => '₱50k - ₱100k', 'above100k' => '₱100k+'] as $val => $lbl): ?>
                <label class="p-2.5 text-center text-xs font-bold rounded-xl border-2 cursor-pointer transition-all <?= $data['income_range'] === $val ? 'border-brand-coral bg-brand-coral text-white shadow-sm' : 'border-neutral-200 text-neutral-700 bg-white hover:border-brand-coral/50' ?>">
                  <input type="radio" name="income_range" value="<?= $val ?>" class="sr-only" <?= $data['income_range'] === $val ? 'checked' : '' ?>/>
                  <?= $lbl ?>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="p-4 border-2 border-dashed border-brand-coral/40 bg-brand-softCoral/20 rounded-2xl text-center">
            <span class="text-xs font-bold text-brand-black">Verified Government ID: <span class="font-mono text-brand-coral"><?= htmlspecialchars($data['gov_id_filename']) ?></span></span>
            <p class="text-[11px] text-neutral-500 mt-0.5">Philippine Passport, UMID, Driver's License, or National ID</p>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 5): /* P4: Pet Selection & Preparedness */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 3 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Pet Selection & Household Size</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#ADP-INF</span>
        </div>
        <form method="POST" class="space-y-6">
          <input type="hidden" name="current_step" value="5"/>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Shelter Location <span class="text-brand-coral">*</span></label>
            <select name="shelter_location" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5">
              <option value="bulacan-haven" <?= $data['shelter_location'] === 'bulacan-haven' ? 'selected' : '' ?>>Bulacan Rescue Haven</option>
              <option value="bacolod-sanctuary" <?= $data['shelter_location'] === 'bacolod-sanctuary' ? 'selected' : '' ?>>Bacolod Sanctuary</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Pet you want to adopt <span class="text-brand-coral">*</span></label>
            <input type="text" name="target_pet" value="<?= htmlspecialchars($data['target_pet']) ?>" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"/>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-2">If already adopted, are you open to other pets? <span class="text-brand-coral">*</span></label>
            <div class="space-y-2">
              <label class="flex items-center p-3 rounded-xl border-2 <?= $data['alternative_adoption'] === 'open' ? 'border-brand-coral bg-brand-softCoral/20' : 'border-neutral-200' ?> cursor-pointer">
                <input type="radio" name="alternative_adoption" value="open" class="text-brand-coral focus:ring-brand-coral" <?= $data['alternative_adoption'] === 'open' ? 'checked' : '' ?>/>
                <span class="ml-2.5 text-xs font-bold text-brand-black">Yes, open to other compatible rescues</span>
              </label>
              <label class="flex items-center p-3 rounded-xl border-2 <?= $data['alternative_adoption'] === 'specific' ? 'border-brand-coral bg-brand-softCoral/20' : 'border-neutral-200' ?> cursor-pointer">
                <input type="radio" name="alternative_adoption" value="specific" class="text-brand-coral focus:ring-brand-coral" <?= $data['alternative_adoption'] === 'specific' ? 'checked' : '' ?>/>
                <span class="ml-2.5 text-xs font-semibold text-neutral-700">No, specifically interested in this pet</span>
              </label>
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Reason for Adopting <span class="text-brand-coral">*</span></label>
            <textarea name="reason_for_adopting" rows="3" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"><?= htmlspecialchars($data['reason_for_adopting']) ?></textarea>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 6): /* P6: Household Information */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 4 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Household Information</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#APP-HOUSE</span>
        </div>
        <form method="POST" class="space-y-6">
          <input type="hidden" name="current_step" value="6"/>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Residence Ownership <span class="text-brand-coral">*</span></label>
            <select name="residence_ownership" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5">
              <option value="Owned (Sole Owner / Family)">Owned (Sole Owner / Family)</option>
              <option value="Rented (Landlord pet-friendly agreement approved)">Rented (Pet-friendly approved)</option>
              <option value="Living with Parents / Relatives">Living with Parents / Relatives</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-2">Household Agreement <span class="text-brand-coral">*</span></label>
            <label class="flex items-start p-3.5 rounded-2xl border-2 border-brand-coral bg-brand-softCoral/20">
              <input type="radio" checked name="agreement_status" value="Yes, everyone in the home is enthusiastic and fully supportive" class="text-brand-coral mt-0.5"/>
              <span class="ml-2.5 text-xs font-bold text-brand-black">Yes, everyone in the home is enthusiastic and fully supportive</span>
            </label>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Household Notes or Allergy Considerations</label>
            <textarea name="household_notes" rows="2" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5"><?= htmlspecialchars($data['household_notes']) ?></textarea>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 7): /* P7: Home Environment */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 5 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Home Environment</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#APP-ENV</span>
        </div>
        <form method="POST" class="space-y-6">
          <input type="hidden" name="current_step" value="7"/>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-2">Where will the rescue primarily stay? <span class="text-brand-coral">*</span></label>
            <label class="flex items-start p-3.5 rounded-2xl border-2 border-brand-coral bg-brand-softCoral/20">
              <input type="checkbox" checked class="rounded text-brand-coral focus:ring-brand-coral mt-0.5"/>
              <span class="ml-2.5 text-xs font-bold text-brand-black">Inside main home with family (free roaming in shared areas)</span>
            </label>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Future Move Plans <span class="text-brand-coral">*</span></label>
              <select name="move_plans" class="w-full text-sm rounded-xl border-neutral-300 focus:border-brand-coral focus:ring-brand-coral p-2.5">
                <option value="none">No immediate plans (Permanent residence)</option>
                <option value="6-12m">Within 6–12 months</option>
              </select>
            </div>
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Will the rescue move with you? <span class="text-brand-coral">*</span></label>
              <select name="move_commitment" class="w-full text-sm rounded-xl border-brand-coral bg-brand-softCoral/15 font-bold text-brand-black p-2.5">
                <option value="100_percent">Yes, 100% committed to bringing rescue</option>
              </select>
            </div>
          </div>
          <div class="p-4 rounded-2xl border border-brand-warmBeige bg-brand-warmBeige/20">
            <span class="text-xs font-bold text-brand-black block mb-2">Uploaded Environment Photos (2 Files Verified)</span>
            <div class="grid grid-cols-2 gap-2.5 text-xs">
              <div class="p-2.5 bg-white rounded-xl border border-brand-warmBeige truncate font-medium">📸 living_room_fenced_gate.jpg</div>
              <div class="p-2.5 bg-white rounded-xl border border-brand-warmBeige truncate font-medium">📸 balcony_netting.jpg</div>
            </div>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 8): /* P8: Animal Care & Experience */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 6 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Animal Care & Clinic Details</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#APP-CARE</span>
        </div>
        <form method="POST" class="space-y-5">
          <input type="hidden" name="current_step" value="8"/>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Veterinary Clinic Name <span class="text-brand-coral">*</span></label>
              <input type="text" name="clinic_name" value="<?= htmlspecialchars($data['clinic_name']) ?>" class="w-full text-sm rounded-xl border-neutral-300 p-2.5"/>
            </div>
            <div>
              <label class="block text-xs font-bold text-brand-black mb-1">Clinic Location <span class="text-brand-coral">*</span></label>
              <input type="text" name="clinic_location" value="<?= htmlspecialchars($data['clinic_location']) ?>" class="w-full text-sm rounded-xl border-neutral-300 p-2.5"/>
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Is this clinic open 24/7 for emergencies? <span class="text-brand-coral">*</span></label>
            <select name="clinic_emergency" class="w-full text-sm rounded-xl border-neutral-300 p-2.5">
              <option value="Yes, 24/7 emergency facility">Yes, 24/7 emergency facility</option>
              <option value="Standard clinic hours only">Standard clinic hours only</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-2">Zero Commercial Breeding Policy <span class="text-brand-coral">*</span></label>
            <label class="flex items-start p-3.5 rounded-2xl border-2 border-brand-coral bg-brand-softCoral/20">
              <input type="radio" checked name="breeding_history" value="No, never and never will" class="text-brand-coral mt-0.5"/>
              <div class="ml-2.5 text-xs">
                <span class="font-bold text-brand-black block">No, never and never will</span>
                <span class="text-neutral-500">I pledge strict adherence to the mandatory spay/neuter policy and animal welfare laws.</span>
              </div>
            </label>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 9): /* P9 & P10: Health, Kapon & Readiness */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 7 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Health & Mandatory Kapon</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#APP-HLTH</span>
        </div>
        <form method="POST" class="space-y-6">
          <input type="hidden" name="current_step" value="9"/>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Vaccination Status <span class="text-brand-coral">*</span></label>
            <select name="vax_status" class="w-full text-sm rounded-xl border-neutral-300 p-2.5">
              <option value="Yes, fully up to date">Yes, fully up to date (Core vaccines current)</option>
              <option value="No current companion animals">No current companion animals</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-2">Spay / Neuter (Kapon) Mandatory Agreement <span class="text-brand-coral">*</span></label>
            <label class="flex items-start p-3.5 rounded-2xl border-2 border-brand-coral bg-brand-softCoral/20">
              <input type="radio" checked name="spay_neuter_agreement" value="fully_agree" class="text-brand-coral mt-0.5"/>
              <div class="ml-2.5 text-xs">
                <span class="font-bold text-brand-black block">Yes, fully agree and will strictly comply</span>
                <span class="text-neutral-500">I will coordinate sterilization on schedule at my expense if not yet performed.</span>
              </div>
            </label>
          </div>
          <div class="p-4 rounded-2xl border border-brand-warmBeige bg-brand-warmBeige/15">
            <span class="text-xs font-bold text-brand-black block mb-2">Readiness Self-Rating (Scale: 1 to 5)</span>
            <div class="space-y-1.5 text-xs">
              <div class="flex justify-between font-medium"><span>Patience & Training:</span><span class="font-bold text-brand-coral">5 / 5 ★</span></div>
              <div class="flex justify-between font-medium"><span>Financial Care Readiness:</span><span class="font-bold text-brand-coral">4 / 5 ★</span></div>
              <div class="flex justify-between font-medium"><span>Decompression & 3-3-3 Rule:</span><span class="font-bold text-brand-coral">5 / 5 ★</span></div>
            </div>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Next →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 10): /* P11: Virtual Interview Preferences */ ?>
      <div>
        <div class="flex items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Step 8 of 8</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Virtual Interview Schedule</h1>
          </div>
          <span class="text-xs font-mono text-neutral-400">#APP-SLOTS</span>
        </div>
        <form method="POST" class="space-y-5">
          <input type="hidden" name="current_step" value="10"/>
          <p class="text-xs text-neutral-600 leading-relaxed">
            Please provide your preferred 1-hour interview slots in Asia/Manila (PHT) time:
          </p>
          <div class="space-y-3">
            <div class="p-3.5 border-2 border-brand-coral rounded-2xl bg-brand-softCoral/20">
              <span class="text-xs font-bold text-brand-coral block mb-2">Option 1 (Primary Preference)</span>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
                <input type="text" name="slot1_date" value="<?= htmlspecialchars($data['slot1_date']) ?>" class="p-2 border rounded-xl"/>
                <input type="text" name="slot1_time" value="<?= htmlspecialchars($data['slot1_time']) ?>" class="p-2 border rounded-xl"/>
              </div>
            </div>
            <div class="p-3.5 border border-neutral-200 rounded-2xl bg-white">
              <span class="text-xs font-semibold text-neutral-700 block mb-2">Option 2 (Alternative Slot)</span>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
                <input type="text" name="slot2_date" value="<?= htmlspecialchars($data['slot2_date']) ?>" class="p-2 border rounded-xl"/>
                <input type="text" name="slot2_time" value="<?= htmlspecialchars($data['slot2_time']) ?>" class="p-2 border rounded-xl"/>
              </div>
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-brand-black mb-1">Video Platform <span class="text-brand-coral">*</span></label>
            <select name="platform" class="w-full text-sm rounded-xl border-neutral-300 p-2.5">
              <option value="Google Meet">Google Meet (Link will be emailed)</option>
              <option value="Zoom">Zoom Video</option>
              <option value="Viber">Viber Video Call</option>
            </select>
          </div>
          <div class="flex items-center justify-between pt-6 border-t border-brand-warmBeige">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-7 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-sm">Review Summary →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step === 11): /* P14: Summary & Declaration */ ?>
      <div>
        <div class="flex flex-wrap items-center justify-between pb-4 mb-6 border-b border-brand-warmBeige gap-2">
          <div>
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-softCoral text-brand-coral">Final Review</span>
            <h1 class="text-2xl font-bold text-brand-black mt-2">Application Summary</h1>
          </div>
          <button onclick="window.print()" type="button" class="px-3.5 py-1.5 text-xs font-bold border border-brand-coral text-brand-coral rounded-xl hover:bg-brand-softCoral/30 transition-colors">
            🖨️ Print / Save PDF
          </button>
        </div>
        <div class="space-y-3.5 mb-6 text-xs">
          <div class="border border-brand-warmBeige rounded-2xl p-4 bg-brand-warmBeige/15 flex justify-between items-start">
            <div class="space-y-1">
              <span class="font-bold text-brand-coral uppercase text-[10px]">Target Pet</span>
              <p class="font-bold text-sm text-brand-black"><?= htmlspecialchars($data['target_pet']) ?></p>
              <p class="text-neutral-600">Shelter: <?= htmlspecialchars($data['shelter_location']) ?></p>
            </div>
            <a href="?step=5" class="text-xs font-bold text-brand-coral hover:underline">Edit</a>
          </div>
          <div class="border border-brand-warmBeige rounded-2xl p-4 bg-brand-warmBeige/15 flex justify-between items-start">
            <div class="space-y-1">
              <span class="font-bold text-brand-coral uppercase text-[10px]">Applicant Contact</span>
              <p class="font-bold text-sm text-brand-black"><?= htmlspecialchars($data['full_name']) ?></p>
              <p class="text-neutral-600"><?= htmlspecialchars($data['email']) ?> • +63 <?= htmlspecialchars($data['contact_number']) ?></p>
            </div>
            <a href="?step=4" class="text-xs font-bold text-brand-coral hover:underline">Edit</a>
          </div>
          <div class="border border-brand-warmBeige rounded-2xl p-4 bg-brand-warmBeige/15 flex justify-between items-start">
            <div class="space-y-1">
              <span class="font-bold text-brand-coral uppercase text-[10px]">Interview Schedule</span>
              <p class="font-bold text-sm text-brand-black"><?= htmlspecialchars($data['slot1_date']) ?> (<?= htmlspecialchars($data['slot1_time']) ?>)</p>
              <p class="text-neutral-600">Platform: <?= htmlspecialchars($data['platform']) ?></p>
            </div>
            <a href="?step=10" class="text-xs font-bold text-brand-coral hover:underline">Edit</a>
          </div>
        </div>
        <form method="POST" class="space-y-5 pt-4 border-t border-brand-warmBeige">
          <input type="hidden" name="current_step" value="11"/>
          <label class="flex items-start gap-2.5 p-3.5 rounded-2xl border border-brand-warmBeige bg-brand-warmBeige/20 cursor-pointer">
            <input type="checkbox" required checked class="mt-0.5 rounded text-brand-coral focus:ring-brand-coral"/>
            <span class="text-xs text-brand-black font-medium leading-relaxed">
              I certify that all statements made here are true and complete. I formally agree to Adoptly's screening protocol, spay/neuter requirement, and zero commercial breeding terms.
            </span>
          </label>
          <div class="flex items-center justify-between pt-4">
            <button type="submit" name="action" value="prev" class="px-6 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700">Back</button>
            <button type="submit" name="action" value="next" class="px-8 py-2.5 rounded-xl bg-brand-coral hover:bg-brand-coralHover text-xs font-bold text-white shadow-md active:scale-95 transition-all">Submit Application →</button>
          </div>
        </form>
      </div>

    <?php elseif ($step >= 12): /* P13: Submitted / Confirmation */ ?>
      <div class="text-center space-y-6">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-brand-coral text-white mx-auto shadow-md ring-4 ring-brand-softCoral">
          <svg class="w-8 h-8 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h1 class="text-2xl sm:text-3xl font-bold text-brand-black">Thank You! Application Submitted</h1>
          <p class="text-xs sm:text-sm text-neutral-600 mt-2 max-w-md mx-auto">
            Your adoption application has been submitted to our screening team.
          </p>
          <p class="text-xs font-mono text-neutral-500 mt-1">Reference ID: <strong class="text-brand-coral">#AD-92841</strong></p>
        </div>
        <!-- Progress Steps -->
        <div class="bg-brand-grayBg border border-brand-warmBeige rounded-2xl p-4 text-xs font-semibold grid grid-cols-2 sm:grid-cols-4 gap-2 text-left">
          <div class="text-brand-coral">✓ 1. Submitted</div>
          <div class="text-brand-black">⏳ 2. Screening (24-48h)</div>
          <div class="text-neutral-400">📅 3. Interview</div>
          <div class="text-neutral-400">🏡 4. Meet & Pick Up</div>
        </div>
        <div class="pt-4 flex flex-col sm:flex-row justify-center gap-3">
          <a href="?step=11" class="px-5 py-2.5 rounded-xl border border-neutral-300 text-xs font-bold text-neutral-700 hover:bg-neutral-50">Review Answers</a>
          <a href="?step=1" class="px-6 py-2.5 rounded-xl bg-brand-coral text-white text-xs font-bold hover:bg-brand-coralHover shadow-sm">Start New Application</a>
        </div>
      </div>
    <?php endif; ?>

  </main>

  <!-- ================= BRAND FOOTER QUOTE & ATTRIBUTION ================= -->
  <footer class="text-center text-xs text-neutral-500 space-y-1 pb-4">
    <p class="italic text-brand-black font-medium">
      “A small act of love can change <span class="text-brand-coral font-bold not-italic">two</span> lives.”
    </p>
    <p class="text-[11px] text-neutral-400 font-mono">
      Adoptly • Connecting pets to loving homes and hearts.
    </p>
  </footer>

</body>
</html>