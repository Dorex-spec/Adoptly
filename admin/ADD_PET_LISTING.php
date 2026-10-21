<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Adoptly Admin Portal - Add New Pet</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "outline-variant": "#E5E5E5",
            "surface-variant": "#F7E9D7",
            "primary-container": "#d44f44",
            "on-primary-container": "#FFFFFF",
            "secondary-fixed": "#F7E9D7",
            "on-background": "#1F1F1F",
            "on-tertiary-fixed": "#1F1F1F",
            "on-primary": "#ffffff",
            "tertiary-fixed-dim": "#F7E9D7",
            "surface-container-highest": "#EAEAEA",
            "primary-fixed": "#FFE1DD",
            "background": "#F2F2F2",
            "on-secondary-fixed": "#1F1F1F",
            "secondary": "#666666",
            "on-tertiary-fixed-variant": "#666666",
            "on-error-container": "#FFFFFF",
            "on-secondary-container": "#1F1F1F",
            "on-surface-variant": "#666666",
            "on-tertiary-container": "#1F1F1F",
            "on-error": "#ffffff",
            "on-surface": "#1F1F1F",
            "error": "#E53935",
            "surface-container": "#F2F2F2",
            "on-primary-fixed": "#1F1F1F",
            "primary": "#E05A4F",
            "inverse-primary": "#FFE1DD",
            "surface-container-low": "#FAFAFA",
            "surface-bright": "#FFFFFF",
            "on-secondary": "#ffffff",
            "inverse-on-surface": "#F2F2F2",
            "surface": "#FFFFFF",
            "primary-fixed-dim": "#FFE1DD",
            "secondary-container": "#FFE1DD",
            "on-secondary-fixed-variant": "#666666",
            "tertiary-fixed": "#F7E9D7",
            "outline": "#D1D1D1",
            "on-primary-fixed-variant": "#E05A4F",
            "surface-container-high": "#ECECEC",
            "tertiary-container": "#F7E9D7",
            "surface-dim": "#E5E5E5",
            "on-tertiary": "#1F1F1F",
            "surface-tint": "#E05A4F",
            "surface-container-lowest": "#FFFFFF",
            "tertiary": "#666666",
            "inverse-surface": "#1F1F1F",
            "error-container": "#E53935",
            "secondary-fixed-dim": "#F7E9D7"
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.375rem",
            "xl": "0.5rem",
            "full": "9999px"
          },
          spacing: {
            "margin": "1rem",
            "space-lg": "1rem",
            "space-xs": "0.25rem",
            "margin-desktop": "2rem",
            "space-sm": "0.5rem",
            "space-xl": "1.5rem",
            "space-md": "0.75rem",
            "gutter-desktop": "1.5rem",
            "gutter": "1rem"
          },
          fontFamily: {
            "sans": ["Poppins", "sans-serif"],
            "code-num": ["JetBrains Mono", "monospace"],
            "body-md": ["Poppins", "sans-serif"],
            "headline-lg": ["Poppins", "sans-serif"],
            "headline-md": ["Poppins", "sans-serif"],
            "body-lg": ["Poppins", "sans-serif"],
            "headline-lg-mobile": ["Poppins", "sans-serif"],
            "body-sm": ["Poppins", "sans-serif"],
            "label-sm": ["Poppins", "sans-serif"],
            "headline-xl": ["Poppins", "sans-serif"],
            "headline-sm": ["Poppins", "sans-serif"],
            "label-md": ["Poppins", "sans-serif"]
          },
          fontSize: {
            "code-num": ["12px", { lineHeight: "16px", fontWeight: "500" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "headline-lg": ["24px", { lineHeight: "32px", letterSpacing: "-0.015em", fontWeight: "600" }],
            "headline-md": ["18px", { lineHeight: "24px", letterSpacing: "-0.01em", fontWeight: "600" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
            "headline-lg-mobile": ["20px", { lineHeight: "28px", letterSpacing: "-0.01em", fontWeight: "600" }],
            "body-sm": ["13px", { lineHeight: "18px", fontWeight: "400" }],
            "label-sm": ["11px", { lineHeight: "14px", letterSpacing: "0.04em", fontWeight: "600" }],
            "headline-xl": ["30px", { lineHeight: "38px", letterSpacing: "-0.02em", fontWeight: "700" }],
            "headline-sm": ["15px", { lineHeight: "20px", fontWeight: "600" }],
            "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.02em", fontWeight: "600" }]
          }
        }
      }
    };
  </script>
<style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #F2F2F2;
      color: #1F1F1F;
      opacity: 1 !important;
      visibility: visible !important;
    }
    .material-symbols-outlined {
      font-family: 'Material Symbols Outlined' !important;
      font-weight: normal;
      font-style: normal;
      font-size: 24px;
      line-height: 1;
      letter-spacing: normal;
      text-transform: none;
      display: inline-block;
      white-space: nowrap;
      word-wrap: normal;
      direction: ltr;
      -webkit-font-feature-settings: 'liga';
      -webkit-font-smoothing: antialiased;
    }
    ::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface antialiased w-full min-h-screen">
<!-- Persistent Left Sidebar Navigation -->
<?php require __DIR__ . '/admin_sidebar.php'; ?>
<!-- Main Content Wrap -->
<div class="pl-64 w-full min-w-0">
<!-- Top Header -->
<header class="fixed top-0 left-64 right-0 h-14 bg-surface-container-lowest border-b border-outline-variant z-40 px-gutter-desktop flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Admin Portal</span>
<span class="material-symbols-outlined text-[14px] text-secondary">chevron_right</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">Dashboard</span>
</div>
<div class="flex items-center gap-space-lg">
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-2.5 text-[18px] text-secondary">search</span>
<input class="w-80 h-[34px] pl-9 pr-12 rounded bg-surface border border-outline-variant font-body-sm text-body-sm text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary" placeholder="Search pets, applications, users..." type="text"/>
<div class="absolute right-2.5 px-1 py-0.2 rounded border border-outline-variant bg-surface-container-low font-code-num text-[10px] text-secondary select-none">⌘K</div>
</div>
<div class="flex items-center gap-space-xs">
<button class="relative p-1.5 rounded hover:bg-surface-container-low text-secondary transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1 right-1 w-4 h-4 bg-error text-on-error font-code-num text-[10px] font-bold rounded-full flex items-center justify-center leading-none">4</span>
</button>
<button class="p-1.5 rounded hover:bg-surface-container-low text-secondary transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">help</span>
</button>
</div>
<div class="h-6 w-px bg-outline-variant"></div>
<div class="flex items-center gap-space-sm pl-space-xs cursor-pointer select-none">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-semibold leading-tight">Admin User</span>
<span class="font-label-sm text-label-sm text-secondary leading-tight">Super Administrator</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">arrow_drop_down</span>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="w-full pt-14 px-gutter-desktop pb-margin-desktop bg-background min-h-screen">
<div class="flex flex-col w-full max-w-7xl mx-auto">
<!-- Top Command & Action Bar -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md pb-space-lg pt-4">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-secondary">
<span>Admin Portal</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span>Pet Management</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span>Pet Listings</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-primary font-bold">Add New Pet</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-bold">Add New Pet / Dossier &amp; Listing</h1>
<p class="font-body-sm text-body-sm text-secondary max-w-2xl">
              Register intake records, configure public listing parameters, upload clinical badges, and publish to the live adoption directory.
            </p>
</div>
<div class="flex items-center gap-space-sm self-start lg:self-center">
<button class="h-[34px] px-3.5 rounded bg-surface-container-lowest border border-outline-variant text-secondary hover:text-on-surface hover:bg-surface-container-low font-label-md text-label-md flex items-center gap-1.5 transition-colors shadow-xs" type="button">
<span class="material-symbols-outlined text-[18px]">save</span>
<span>Save as Draft</span>
</button>
<button class="h-[34px] px-3.5 rounded bg-surface-container-lowest border border-outline-variant text-secondary hover:text-on-surface hover:bg-surface-container-low font-label-md text-label-md flex items-center gap-1.5 transition-colors shadow-xs" type="button">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
<span>Preview Public Profile</span>
</button>
<button class="h-[34px] px-4 rounded bg-primary hover:bg-[#d44f44] text-on-primary font-label-md text-label-md flex items-center gap-1.5 transition-colors shadow-xs font-semibold" type="button">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
<span>Publish Pet Listing</span>
</button>
</div>
</div>
<!-- Operational Intake Banner -->
<div class="bg-surface-container-lowest border border-outline-variant p-space-md rounded-xl mb-space-lg flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md shadow-xs">
<div class="flex items-center gap-space-md">
<div class="w-9 h-9 rounded bg-secondary-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[20px]">inventory</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Intake Batch: IN-2024-CAT-0941</span>
<span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-[#F7E9D7] text-[#1F1F1F]">In Progress</span>
</div>
<span class="font-code-num text-code-num text-secondary">Assigned Operator: Austin Paws Central (Lic: TX-AUST-8812)</span>
</div>
</div>
<div class="flex items-center gap-space-lg text-secondary font-label-sm text-label-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
<span>Intake Stamp: 14:32 CST</span>
</div>
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">security</span>
<span>Audit Lock: Active</span>
</div>
</div>
</div>
<!-- Main 12-Column Responsive Form & Workspace Layout -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-gutter-desktop items-start">
<!-- Left 8-Column Form Dossier Modules Stack -->
<div class="xl:col-span-8 flex flex-col gap-space-lg">
<!-- MODULE 1: Basic Information & Classification -->
<section class="bg-surface-container-lowest border border-outline-variant p-space-xl rounded-xl shadow-xs flex flex-col gap-space-lg" id="section-basic-info">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="font-code-num text-code-num text-primary font-bold bg-primary-fixed px-2 py-0.5 rounded">01</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">Basic Information &amp; Classification</h2>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Required Fields</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Pet Name -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium flex items-center justify-between">
<span>Pet Name <span class="text-primary">*</span></span>
<span class="text-secondary font-label-sm text-label-sm">Display Title</span>
</label>
<input class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors" placeholder="e.g. Bella" type="text" value="Bella"/>
</div>
<!-- Category / Species -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Category / Species <span class="text-primary">*</span></label>
<select class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors cursor-pointer">
<option selected="" value="cats">Cats &amp; Felines</option>
<option value="dogs">Dogs &amp; Canines</option>
<option value="small_animals">Small Animals &amp; Exotics</option>
</select>
</div>
<!-- Adoption Fee -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium flex items-center justify-between">
<span>Adoption Fee <span class="text-primary">*</span></span>
<span class="text-secondary font-code-num text-code-num">Standard Tier</span>
</label>
<div class="relative flex items-center">
<span class="absolute left-3 font-code-num text-code-num text-secondary font-semibold">₱</span>
<input class="w-full h-[34px] pl-8 pr-2.5 rounded bg-surface-container-low border border-outline-variant font-code-num text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors" step="0.01" type="number" value="150.00"/>
</div>
</div>
<!-- Listing Status -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Listing Status <span class="text-primary">*</span></label>
<select class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors cursor-pointer">
<option selected="" value="available">Available for Adoption</option>
<option value="pending">Pending Application Screening</option>
<option value="draft">Internal Draft Only</option>
<option value="foster">Foster Placement</option>
<option value="adopted">Adopted (Archived)</option>
</select>
</div>
<!-- Location / Shelter Branch -->
<div class="md:col-span-2 flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Location / Shelter Branch Facility <span class="text-primary">*</span></label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-2.5 text-[18px] text-secondary">location_on</span>
<input class="w-full h-[34px] pl-9 pr-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors" type="text" value="Austin, TX - Central Shelter Branch APR-8812"/>
</div>
</div>
<!-- Summary Tagline -->
<div class="md:col-span-2 flex flex-col gap-1.5">
<div class="flex items-center justify-between">
<label class="font-label-md text-label-md text-on-surface font-medium">Public Summary Tagline <span class="text-primary">*</span></label>
<span class="font-code-num text-code-num text-secondary">109 / 150 chars</span>
</div>
<textarea class="p-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors resize-none" rows="2">Friendly, curious, and always ready for a cuddle. Bella is a gentle soul searching for a sunbeam to nap in.</textarea>
</div>
</div>
</section>
<!-- MODULE 2: Quick Facts & Clinical Specifications -->
<section class="bg-surface-container-lowest border border-outline-variant p-space-xl rounded-xl shadow-xs flex flex-col gap-space-lg" id="section-quick-facts">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="font-code-num text-code-num text-primary font-bold bg-primary-fixed px-2 py-0.5 rounded">02</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">Quick Facts &amp; Clinical Specifications</h2>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Physical Profile</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<!-- Breed -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Primary Breed <span class="text-primary">*</span></label>
<input class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors" type="text" value="Domestic Short Hair Mix"/>
</div>
<!-- Age Group -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Age Stage &amp; Details <span class="text-primary">*</span></label>
<div class="grid grid-cols-2 gap-1.5">
<select class="h-[34px] px-2 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none">
<option selected="">Kitten (&lt;1 yr)</option>
<option>Young (1-3 yrs)</option>
<option>Adult (3-8 yrs)</option>
<option>Senior (8+ yrs)</option>
</select>
<input class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none" type="text" value="6 months"/>
</div>
</div>
<!-- Gender -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Gender <span class="text-primary">*</span></label>
<div class="h-[34px] flex items-center bg-surface-container-low border border-outline-variant rounded p-1">
<label class="flex-1 flex items-center justify-center gap-1.5 h-full rounded cursor-pointer bg-surface-container-lowest border border-outline-variant shadow-xs text-on-surface font-label-sm text-label-sm font-semibold">
<input checked="" class="hidden" name="gender" type="radio" value="female"/>
<span class="material-symbols-outlined text-[16px] text-primary">female</span>
<span>Female</span>
</label>
<label class="flex-1 flex items-center justify-center gap-1.5 h-full rounded cursor-pointer text-secondary hover:text-on-surface font-label-sm text-label-sm font-semibold">
<input class="hidden" name="gender" type="radio" value="male"/>
<span class="material-symbols-outlined text-[16px]">male</span>
<span>Male</span>
</label>
</div>
</div>
<!-- Coat Length -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Coat Length</label>
<select class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none">
<option selected="">Short Coat</option>
<option>Medium Coat</option>
<option>Long &amp; Fluffy</option>
<option>Hairless</option>
</select>
</div>
<!-- Size / Weight -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Size &amp; Body Weight</label>
<input class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none" type="text" value="Medium (9 lbs)"/>
</div>
<!-- Vaccination Status -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Vaccination Status</label>
<select class="h-[34px] px-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none">
<option selected="">Up to date (Fully Core)</option>
<option>Partial / Booster Required</option>
<option>Pending Intake Check</option>
</select>
</div>
</div>
<!-- Care Toggles Grid -->
<div class="bg-surface-container-low border border-outline-variant p-space-md rounded-lg flex flex-col gap-space-md">
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Operational Medical Toggles &amp; Microchip Registry</span>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<!-- House Trained Toggle -->
<label class="flex items-center justify-between p-space-sm bg-surface-container-lowest border border-outline-variant rounded cursor-pointer">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-semibold">House Trained</span>
<span class="font-label-sm text-label-sm text-secondary">Litterbox certified</span>
</div>
<div class="w-10 h-5 rounded-full bg-primary flex items-center p-0.5 justify-end">
<div class="w-4 h-4 rounded-full bg-on-primary shadow-sm"></div>
</div>
</label>
<!-- Spayed / Neutered Toggle -->
<label class="flex items-center justify-between p-space-sm bg-surface-container-lowest border border-outline-variant rounded cursor-pointer">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-semibold">Spayed / Neutered</span>
<span class="font-label-sm text-label-sm text-secondary">Surgical record verified</span>
</div>
<div class="w-10 h-5 rounded-full bg-primary flex items-center p-0.5 justify-end">
<div class="w-4 h-4 rounded-full bg-on-primary shadow-sm"></div>
</div>
</label>
<!-- Microchipped Toggle -->
<label class="flex items-center justify-between p-space-sm bg-surface-container-lowest border border-outline-variant rounded cursor-pointer">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-semibold">Microchipped</span>
<span class="font-label-sm text-label-sm text-secondary">RFID scan confirmed</span>
</div>
<div class="w-10 h-5 rounded-full bg-primary flex items-center p-0.5 justify-end">
<div class="w-4 h-4 rounded-full bg-on-primary shadow-sm"></div>
</div>
</label>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-secondary font-medium">Microchip ID (ISO 11784/11785)</label>
<input class="h-[34px] px-2.5 rounded bg-surface-container-lowest border border-outline-variant font-code-num text-code-num text-on-surface focus:outline-none" type="text" value="#MC-985141002384192"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-secondary font-medium">General Health Status Tag</label>
<input class="h-[34px] px-2.5 rounded bg-surface-container-lowest border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none" type="text" value="Excellent - Cleared for immediate rehoming"/>
</div>
</div>
</div>
</section>
<!-- MODULE 3: Health Verifications & Trust Badges -->
<section class="bg-surface-container-lowest border border-outline-variant p-space-xl rounded-xl shadow-xs flex flex-col gap-space-lg" id="section-health-badges">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="font-code-num text-code-num text-primary font-bold bg-primary-fixed px-2 py-0.5 rounded">03</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">Health Verifications &amp; Trust Badges</h2>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Public Trust Protocol</span>
</div>
<!-- Verification Checklist -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<div class="p-space-md rounded bg-surface-container-low border border-outline-variant flex flex-col gap-space-xs">
<div class="flex items-center gap-2">
<input checked="" class="w-4 h-4 rounded accent-primary cursor-pointer" type="checkbox"/>
<span class="font-label-md text-label-md font-semibold text-on-surface">Fully Vaccinated</span>
</div>
<p class="font-body-sm text-body-sm text-secondary">Core FVRCP and Rabies certificates uploaded &amp; stamped by vet team.</p>
</div>
<div class="p-space-md rounded bg-surface-container-low border border-outline-variant flex flex-col gap-space-xs">
<div class="flex items-center gap-2">
<input checked="" class="w-4 h-4 rounded accent-primary cursor-pointer" type="checkbox"/>
<span class="font-label-md text-label-md font-semibold text-on-surface">Negative for FIV/FeLV</span>
</div>
<p class="font-body-sm text-body-sm text-secondary">Triple-antigen ELISA test confirmed negative on intake panel.</p>
</div>
<div class="p-space-md rounded bg-surface-container-low border border-outline-variant flex flex-col gap-space-xs">
<div class="flex items-center gap-2">
<input checked="" class="w-4 h-4 rounded accent-primary cursor-not-allowed opacity-80" disabled="" type="checkbox"/>
<span class="font-label-md text-label-md font-semibold text-on-surface">Verified Shelter Profile</span>
</div>
<p class="font-body-sm text-body-sm text-secondary">Directly linked to Austin Paws Rescue state non-profit credentials.</p>
</div>
</div>
<!-- Medical Notes -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Internal Clinical &amp; Intake Notes</label>
<textarea class="p-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors" rows="3">Clean dental check, deworming administered 2 weeks ago. Ear canals clean, no earmites present. Mild initial timidity resolved within 48 hours of foster transition.</textarea>
</div>
</section>
<!-- MODULE 4: Personality Traits & Narrative Bio -->
<section class="bg-surface-container-lowest border border-outline-variant p-space-xl rounded-xl shadow-xs flex flex-col gap-space-lg" id="section-bio-personality">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="font-code-num text-code-num text-primary font-bold bg-primary-fixed px-2 py-0.5 rounded">04</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">Personality Traits &amp; Narrative Bio</h2>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Adopter Engagement</span>
</div>
<!-- Tag Selection -->
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface font-medium">Personality Descriptor Chips</label>
<div class="flex flex-wrap gap-2">
<!-- Active Selected Chips -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-[#FFE1DD] text-primary font-label-md text-label-md font-medium">
<span>Playful</span>
<button class="material-symbols-outlined text-[14px] hover:text-on-surface" type="button">close</button>
</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-[#FFE1DD] text-primary font-label-md text-label-md font-medium">
<span>Affectionate</span>
<button class="material-symbols-outlined text-[14px] hover:text-on-surface" type="button">close</button>
</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-[#FFE1DD] text-primary font-label-md text-label-md font-medium">
<span>Curious</span>
<button class="material-symbols-outlined text-[14px] hover:text-on-surface" type="button">close</button>
</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-[#FFE1DD] text-primary font-label-md text-label-md font-medium">
<span>Gentle</span>
<button class="material-symbols-outlined text-[14px] hover:text-on-surface" type="button">close</button>
</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-[#FFE1DD] text-primary font-label-md text-label-md font-medium">
<span>Calm</span>
<button class="material-symbols-outlined text-[14px] hover:text-on-surface" type="button">close</button>
</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-[#FFE1DD] text-primary font-label-md text-label-md font-medium">
<span>Social</span>
<button class="material-symbols-outlined text-[14px] hover:text-on-surface" type="button">close</button>
</span>
<!-- Available Unselected Chips -->
<button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container-low border border-outline-variant text-secondary hover:text-on-surface font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[14px]">add</span>
<span>Energetic</span>
</button>
<button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container-low border border-outline-variant text-secondary hover:text-on-surface font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[14px]">add</span>
<span>Independent</span>
</button>
<button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container-low border border-outline-variant text-secondary hover:text-on-surface font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[14px]">add</span>
<span>Vocal</span>
</button>
</div>
</div>
<!-- Rich Text Bio Editor Simulator -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Meet Bella (Detailed Dossier Story)</label>
<div class="rounded border border-outline-variant bg-surface-container-low overflow-hidden">
<!-- Toolbar -->
<div class="h-9 px-3 bg-surface-container-lowest border-b border-outline-variant flex items-center gap-space-xs text-secondary">
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">format_bold</span></button>
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">format_italic</span></button>
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">format_underlined</span></button>
<div class="h-4 w-px bg-outline-variant mx-1"></div>
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">format_list_bulleted</span></button>
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">format_list_numbered</span></button>
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">format_quote</span></button>
<div class="h-4 w-px bg-outline-variant mx-1"></div>
<button class="p-1 rounded hover:bg-surface-container-low hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[16px]">link</span></button>
</div>
<!-- Text area content -->
<textarea class="w-full p-3 bg-surface-container-low font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container-lowest transition-colors leading-relaxed" rows="4">Bella is a ray of sunshine in cat form. She arrived at our rescue a few months ago after her previous owner had to move abroad, and she hasn't stopped stealing hearts since. She is a true social butterfly who loves to be in the same room as her humans, supervising daily chores or snoozing quietly on a sunny rug nearby.</textarea>
</div>
</div>
<!-- Suitability & Lifestyle Matching -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">Ideal Home &amp; Adopter Suitability</label>
<textarea class="p-2.5 rounded bg-surface-container-low border border-outline-variant font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:bg-surface-container-lowest transition-colors" rows="2">Great for indoor homes, work-from-home owners, first-time pet parents, and gentle children. Fully compatible with other cat-friendly felines and calm dogs.</textarea>
</div>
</section>
<!-- MODULE 5: Media Assets & Gallery Management -->
<section class="bg-surface-container-lowest border border-outline-variant p-space-xl rounded-xl shadow-xs flex flex-col gap-space-lg" id="section-media">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="font-code-num text-code-num text-primary font-bold bg-primary-fixed px-2 py-0.5 rounded">05</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">Media Assets &amp; Gallery Management</h2>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">High Resolution Media</span>
</div>
<!-- Featured Main Image Uploader -->
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface font-semibold">Featured Main Hero Image (Catalog Card Cover)</label>
<div class="bg-surface-container-low border border-outline-variant p-space-md rounded-lg flex flex-col md:flex-row items-center gap-space-md">
<div class="w-32 h-32 rounded-lg overflow-hidden shrink-0 shadow-xs relative group bg-[#EAEAEA] border border-outline-variant">
<svg class="w-full h-full bg-[#EAEAEA]" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="#9ca3af" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="#9ca3af" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<div class="absolute inset-0 bg-[#1F1F1F]/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary text-[24px]">visibility</span>
</div>
</div>
<div class="flex flex-col gap-1 flex-1">
<div class="flex items-center gap-2">
<span class="font-body-md text-body-md font-semibold text-on-surface">bella-hero-portrait.jpg</span>
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-[#FFE1DD] text-primary font-code-num">2.4 MB</span>
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-[#F7E9D7] text-[#1F1F1F] font-code-num">1920 × 1280px</span>
</div>
<p class="font-body-sm text-body-sm text-secondary">
                      This image serves as the primary preview thumbnail across the marketplace, shelter catalog, and social cards.
                    </p>
<div class="flex items-center gap-space-sm pt-2">
<button class="h-8 px-3 rounded bg-surface-container-lowest border border-outline-variant hover:bg-surface-container-low text-on-surface font-label-sm text-label-sm flex items-center gap-1.5 transition-colors shadow-xs" type="button">
<span class="material-symbols-outlined text-[16px]">autorenew</span>
<span>Replace Photo</span>
</button>
<button class="h-8 px-3 rounded bg-surface-container-lowest border border-outline-variant hover:bg-surface-container-low text-on-surface font-label-sm text-label-sm flex items-center gap-1.5 transition-colors shadow-xs" type="button">
<span class="material-symbols-outlined text-[16px]">crop</span>
<span>Crop &amp; Frame</span>
</button>
</div>
</div>
</div>
</div>
<!-- Gallery Thumbnails (Up to 4 Extra Photos) -->
<div class="flex flex-col gap-2">
<div class="flex items-center justify-between">
<label class="font-label-md text-label-md text-on-surface font-semibold">Additional Dossier Media (3 of 4 slots filled)</label>
<span class="font-label-sm text-label-sm text-secondary">JPG, PNG or WEBP up to 5MB</span>
</div>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-md">
<!-- Thumbnail 1 -->
<div class="relative group rounded-lg overflow-hidden aspect-square bg-[#EAEAEA] border border-outline-variant shadow-xs">
<svg class="w-full h-full bg-[#EAEAEA]" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="#9ca3af" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="#9ca3af" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<button class="absolute top-1.5 right-1.5 w-6 h-6 rounded-full bg-[#1F1F1F]/70 hover:bg-error text-on-primary flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-[14px]">close</span>
</button>
<div class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-[#1F1F1F]/60 text-on-primary font-code-num text-[10px]">Photo 1</div>
</div>
<!-- Thumbnail 2 -->
<div class="relative group rounded-lg overflow-hidden aspect-square bg-[#EAEAEA] border border-outline-variant shadow-xs">
<svg class="w-full h-full bg-[#EAEAEA]" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="#9ca3af" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="#9ca3af" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<button class="absolute top-1.5 right-1.5 w-6 h-6 rounded-full bg-[#1F1F1F]/70 hover:bg-error text-on-primary flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-[14px]">close</span>
</button>
<div class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-[#1F1F1F]/60 text-on-primary font-code-num text-[10px]">Photo 2</div>
</div>
<!-- Thumbnail 3 -->
<div class="relative group rounded-lg overflow-hidden aspect-square bg-[#EAEAEA] border border-outline-variant shadow-xs">
<svg class="w-full h-full bg-[#EAEAEA]" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="#9ca3af" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="#9ca3af" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<button class="absolute top-1.5 right-1.5 w-6 h-6 rounded-full bg-[#1F1F1F]/70 hover:bg-error text-on-primary flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-[14px]">close</span>
</button>
<div class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-[#1F1F1F]/60 text-on-primary font-code-num text-[10px]">Photo 3</div>
</div>
<!-- Add Slot 4 -->
<div class="rounded-lg aspect-square bg-surface-container-low border border-dashed border-outline hover:bg-surface-container-lowest transition-colors flex flex-col items-center justify-center gap-1.5 p-3 text-center cursor-pointer">
<span class="material-symbols-outlined text-[24px] text-primary">add_photo_alternate</span>
<span class="font-label-sm text-label-sm font-semibold text-on-surface">Add Photo</span>
<span class="font-code-num text-[10px] text-secondary">Slot 4 of 4</span>
</div>
</div>
</div>
</section>
</div>
<!-- Right 4-Column Sticky Utility Panel -->
<div class="xl:col-span-4 flex flex-col gap-space-lg sticky top-16">
<!-- Real-Time Catalog Card Preview -->
<div class="bg-surface-container-lowest border border-outline-variant p-space-lg rounded-xl shadow-xs flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px] text-primary">preview</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Live Search Card Preview</span>
</div>
<span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase bg-[#F7E9D7] text-[#1F1F1F]">Real-time</span>
</div>
<!-- The Catalog Mini Card Component -->
<div class="rounded-xl overflow-hidden bg-surface-container-lowest border border-outline-variant shadow-xs flex flex-col">
<!-- Card Image Wireframe Placeholder -->
<div class="relative aspect-4/3 w-full bg-[#EAEAEA]">
<svg class="w-full h-full bg-[#EAEAEA]" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="#9ca3af" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="#9ca3af" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<div class="absolute top-3 left-3 flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#1F1F1F]/80 text-on-primary backdrop-blur-xs font-label-sm text-label-sm font-semibold">
<div class="w-2 h-2 rounded-full bg-[#4CAF50]"></div>
<span>Available</span>
</div>
<div class="absolute top-3 right-3 w-8 h-8 rounded-full bg-[#1F1F1F]/70 text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</div>
<div class="absolute bottom-3 right-3 px-2.5 py-1 rounded bg-primary text-on-primary font-code-num text-code-num font-bold">
                    ₱150.00
                  </div>
</div>
<!-- Card Content Body -->
<div class="p-space-md flex flex-col gap-2">
<div class="flex items-baseline justify-between">
<span class="font-headline-md text-headline-md font-bold text-on-surface">Bella</span>
<span class="font-code-num text-code-num text-secondary">Kitten (&lt;1 yr)</span>
</div>
<div class="flex items-center gap-1 text-secondary font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[16px] text-primary">pets</span>
<span>Domestic Short Hair Mix • Female</span>
</div>
<div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">location_on</span>
<span>Austin, TX (Central Shelter APR-8812)</span>
</div>
<!-- Chips in preview -->
<div class="flex items-center gap-1.5 pt-1">
<span class="px-2 py-0.5 rounded text-[11px] font-medium bg-[#FFE1DD] text-primary">Playful</span>
<span class="px-2 py-0.5 rounded text-[11px] font-medium bg-[#FFE1DD] text-primary">Affectionate</span>
<span class="px-2 py-0.5 rounded text-[11px] font-medium bg-surface-container-low border border-outline-variant text-secondary">+4 more</span>
</div>
<div class="pt-2 border-t border-outline-variant flex items-center justify-between text-secondary font-label-sm text-label-sm">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-primary">verified_user</span>
<span>Verified Shelter</span>
</div>
<span class="text-primary font-semibold">View Dossier →</span>
</div>
</div>
</div>
</div>
<!-- Dossier Readiness Score Gauge -->
<div class="bg-surface-container-lowest border border-outline-variant p-space-lg rounded-xl shadow-xs flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Dossier Completion</span>
<span class="font-code-num text-code-num font-bold text-primary">95%</span>
</div>
<div class="w-full h-2 rounded-full bg-[#FFE1DD] overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 95%;"></div>
</div>
<div class="flex flex-col gap-1.5 pt-space-xs text-secondary font-label-sm text-label-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
<span>Basic Identity &amp; Fee</span>
</div>
<span class="font-code-num text-[11px]">100%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
<span>Clinical Specifications</span>
</div>
<span class="font-code-num text-[11px]">100%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
<span>Vaccine Badges Stamped</span>
</div>
<span class="font-code-num text-[11px]">100%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-[#4CAF50]">radio_button_partial</span>
<span>Media Assets Gallery</span>
</div>
<span class="font-code-num text-[11px]">3 / 4 Photos</span>
</div>
</div>
</div>
<!-- Form Navigation Quick-Jump Index -->
<div class="bg-surface-container-lowest border border-outline-variant p-space-lg rounded-xl shadow-xs flex flex-col gap-space-md">
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Quick Navigation</span>
<div class="flex flex-col gap-1">
<a class="flex items-center justify-between px-2.5 py-1.5 rounded text-on-surface hover:bg-surface-container-low font-label-md text-label-md transition-colors" href="#section-basic-info">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num text-primary font-semibold">01</span>
<span>Basic Information</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
</a>
<a class="flex items-center justify-between px-2.5 py-1.5 rounded text-on-surface hover:bg-surface-container-low font-label-md text-label-md transition-colors" href="#section-quick-facts">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num text-primary font-semibold">02</span>
<span>Quick Facts &amp; Clinical Specs</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
</a>
<a class="flex items-center justify-between px-2.5 py-1.5 rounded text-on-surface hover:bg-surface-container-low font-label-md text-label-md transition-colors" href="#section-health-badges">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num text-primary font-semibold">03</span>
<span>Health Badges &amp; Clinical Notes</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
</a>
<a class="flex items-center justify-between px-2.5 py-1.5 rounded text-on-surface hover:bg-surface-container-low font-label-md text-label-md transition-colors" href="#section-bio-personality">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num text-primary font-semibold">04</span>
<span>Personality &amp; Bio Content</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
</a>
<a class="flex items-center justify-between px-2.5 py-1.5 rounded text-on-surface hover:bg-surface-container-low font-label-md text-label-md transition-colors" href="#section-media">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num text-primary font-semibold">05</span>
<span>Media &amp; Photo Assets</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
</a>
</div>
</div>
<!-- Regulatory / Shelter Queue Warning -->
<div class="bg-surface-container-lowest border border-outline-variant p-space-md rounded-xl flex flex-col gap-2">
<div class="flex items-center gap-1.5 text-primary">
<span class="material-symbols-outlined text-[18px]">info</span>
<span class="font-label-md text-label-md font-bold">Adoption Protocol Notice</span>
</div>
<p class="font-body-sm text-body-sm text-secondary leading-relaxed">
                Publishing this dossier instantly opens public inquiries. Verified applications will sync into the 
                <a class="text-primary underline font-semibold" href="ADOPTION_REVIEW_V1.php">Applications Review</a> queue for coordinator screening.
              </p>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
