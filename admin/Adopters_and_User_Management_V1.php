<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,300..900;1,300..900&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<title>Adoptly Admin Portal - Adopters &amp; Users</title>
<!-- Load Tailwind CSS v3 with forms and container queries plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script data-purpose="tailwind-config">
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Hanken Grotesk"', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          },
          colors: {
            primary: {
              DEFAULT: '#E05A4F',
              50: '#FDF3F2',
              100: '#FBE8E6',
              500: '#E05A4F',
              600: '#CA483D',
              700: '#B03A30'
            },
            adminBg: '#F8FAFC',
            sidebarBg: '#FFFFFF',
            surfaceBorder: '#E2E8F0',
            cardBg: '#FFFFFF'
          }
        }
      }
    };
  </script>
<style data-purpose="custom-scrollbars">
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 3px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #94a3b8;
    }
  </style>
</head>
<body class="bg-[#F8FAFC] text-slate-800 font-sans antialiased min-h-screen flex flex-col">
<!-- BEGIN: MasterLayoutWrapper -->
<div class="flex min-h-screen w-full">
<!-- BEGIN: LeftSidebar -->
<?php require __DIR__ . '/admin_sidebar.php'; ?>
<!-- END: LeftSidebar -->
<!-- BEGIN: MainContentArea -->
<div class="ml-64 flex-1 flex flex-col min-w-0 overflow-hidden">
<!-- BEGIN: TopGlobalHeader -->
<header class="h-16 bg-white border-b border-slate-200 px-8 flex items-center justify-between shrink-0">
<!-- Breadcrumbs & Global Search -->
<div class="flex items-center gap-6">
<div class="flex items-center gap-2 text-xs font-semibold tracking-wide uppercase">
<span class="text-slate-400">ADMIN PORTAL</span>
<span class="text-slate-300">›</span>
<span class="text-slate-400">USER &amp; PARTNER MANAGEMENT</span>
<span class="text-slate-300">›</span>
<span class="text-primary-600">ADOPTERS &amp; USERS</span>
</div>
<!-- Search Input -->
<div class="relative w-80">
<span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</span>
<input class="w-full pl-9 pr-10 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500 transition-all" placeholder="Search adopters, verification ID, phone..." type="text">
<span class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none">
<kbd class="px-1.5 py-0.5 text-[10px] font-semibold text-slate-400 bg-slate-200/60 border border-slate-300 rounded font-mono">⌘K</kbd>
</span>
</div>
</div>
<!-- Right Header Icons & Admin Profile -->
<div class="flex items-center gap-4">
<!-- Notification Bell -->
<button class="relative p-2 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-50 transition-colors">
<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
<span class="absolute top-1.5 right-1.5 w-4 h-4 bg-primary-600 text-white text-[9px] font-bold rounded-full flex items-center justify-center ring-2 ring-white">4</span>
</button>
<!-- Help Icon -->
<button class="p-2 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-50 transition-colors">
<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
<div class="h-6 w-px bg-slate-200 mx-1"></div>
<!-- Profile Badge -->
<div class="flex items-center gap-3 pl-2">
<div class="w-8 h-8 rounded-full bg-slate-200 border border-slate-300 flex items-center justify-center text-slate-600 font-bold text-xs">
  AU
</div>
<div class="text-left leading-tight">
<span class="block text-xs font-bold text-slate-900">Admin User</span>
<span class="block text-[10px] text-slate-400">Super Administrator</span>
</div>
</div>
</div>
</header>
<!-- END: TopGlobalHeader -->
<!-- BEGIN: SubActionBar -->
<section class="bg-white border-b border-slate-200 px-8 py-5">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-2 mb-1">
<span class="px-2 py-0.5 rounded bg-rose-50 text-[#CA483D] font-mono text-[11px] font-semibold tracking-wide uppercase border border-rose-200">Directory</span>
<span class="px-2.5 py-0.5 rounded bg-slate-100 text-slate-600 font-mono text-[11px] font-medium tracking-tight">Hub: US-TX-AUS</span>
<span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 font-bold text-[11px] uppercase tracking-wider border border-emerald-200">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
      Live Directory
    </span>
</div>
<h1 class="text-2xl font-bold tracking-tight text-slate-900">Adopters &amp; User Management</h1>
<p class="text-xs text-slate-500 max-w-3xl mt-1">
    Verify identity documents, audit housing eligibility, manage adopter risk profiles, and supervise platform user access.
  </p>
</div>
<!-- Header CTA Buttons -->
<div class="flex items-center gap-2.5 shrink-0">
<button class="inline-flex items-center gap-2 px-3 py-2 text-xs font-semibold text-slate-700 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors shadow-sm">
<svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
    Export Adopters CSV
  </button>
<button class="inline-flex items-center gap-2 px-3 py-2 text-xs font-semibold text-slate-700 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors shadow-sm">
<svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
    Run Batch ID Verification
  </button>
<button class="inline-flex items-center gap-2 px-3.5 py-2 text-xs font-bold text-white bg-[#E05A4F] hover:bg-[#CA483D] rounded-lg shadow-sm transition-colors">
<svg class="w-3.5 h-3.5 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    Register New User
  </button>
</div>
</div>
</section>
<!-- END: SubActionBar -->
<!-- BEGIN: ScrollableMainViewport -->
<main class="flex-1 overflow-y-auto px-8 py-6 space-y-6">
<!-- BEGIN: TopKPIs (1. Summary Overview Bar) -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" data-purpose="kpi-metrics-grid">
<!-- Card 1: Total Registered Users -->
<div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Registered</span>
<div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
<div class="mt-2 flex items-baseline gap-2">
<span class="text-2xl font-bold tracking-tight text-slate-900">2,480</span>
<span class="text-[11px] font-semibold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded font-mono">+12% mo/mo</span>
</div>
<p class="text-[11px] text-slate-400 mt-1 font-medium">Across all role authorizations</p>
</div>
<!-- Card 2: Verified Adopters -->
<div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Verified Adopters</span>
<div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
<div class="mt-2 flex items-baseline gap-2">
<span class="text-2xl font-bold tracking-tight text-slate-900">1,894</span>
<span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-1.5 py-0.5 rounded font-mono">76.3% Rate</span>
</div>
<p class="text-[11px] text-slate-400 mt-1 font-medium">Gov ID &amp; Housing verified</p>
</div>
<!-- Card 3: Pending Verifications -->
<div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Pending Review</span>
<div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center">
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
<div class="mt-2 flex items-baseline gap-2">
<span class="text-2xl font-bold tracking-tight text-slate-900">86</span>
<span class="text-[11px] font-semibold text-amber-700 bg-amber-50 px-1.5 py-0.5 rounded font-mono">Immediate Action</span>
</div>
<p class="text-[11px] text-slate-400 mt-1 font-medium">Awaiting manual document check</p>
</div>
<!-- Card 4: Flagged / Blacklisted -->
<div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Flagged / Blacklisted</span>
<div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center">
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
<div class="mt-2 flex items-baseline gap-2">
<span class="text-2xl font-bold tracking-tight text-slate-900">14</span>
<span class="text-[11px] font-semibold text-rose-700 bg-rose-50 px-1.5 py-0.5 rounded font-mono">High Risk</span>
</div>
<p class="text-[11px] text-slate-400 mt-1 font-medium">Violations, fraud alerts, or risks</p>
</div>
</section>
<!-- END: TopKPIs -->
<!-- BEGIN: MasterDetailContainer -->
<div class="grid grid-cols-1 2xl:grid-cols-12 gap-6 items-start">
<!-- BEGIN: LeftTableSection (7 Cols / 2xl:col-span-7) -->
<div class="2xl:col-span-7 space-y-4">
<!-- Filters Toolbar -->
<div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm space-y-3">
<div class="grid grid-cols-1 md:grid-cols-3 gap-2.5">
<!-- Search -->
<div class="relative">
<input class="w-full pl-8 pr-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary-500" placeholder="Filter by name, email, or USR ID..." type="text">
<svg class="w-3.5 h-3.5 text-slate-400 absolute left-2.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
<!-- Role Filter -->
<select class="text-xs bg-slate-50 border border-slate-200 rounded-lg py-1.5 px-3 text-slate-700 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary-500">
<option value="">Role: All Roles</option>
<option value="adopter-first">Adopter - First Time</option>
<option value="adopter-exp">Adopter - Experienced</option>
<option value="inspector">Home Inspector</option>
<option value="shelter-admin">Shelter Admin</option>
</select>
<!-- Verification Status Filter -->
<select class="text-xs bg-slate-50 border border-slate-200 rounded-lg py-1.5 px-3 text-slate-700 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary-500">
<option value="">Status: All Clearances</option>
<option value="verified">Verified</option>
<option value="pending">Pending ID Check</option>
<option value="unverified">Unverified</option>
<option value="resubmit">Resubmit Req</option>
</select>
</div>
<!-- Housing Type Filter Row -->
<div class="flex items-center justify-between pt-1 border-t border-slate-100 text-xs">
<div class="flex items-center gap-1.5 flex-wrap">
<span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mr-1">Housing Filter:</span>
<button class="px-2.5 py-1 rounded bg-slate-800 text-white font-semibold text-[11px]">All</button>
<button class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 font-medium text-[11px] hover:bg-slate-200 transition-colors">Owns Home</button>
<button class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 font-medium text-[11px] hover:bg-slate-200 transition-colors">Renting (Landlord Approved)</button>
<button class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 font-medium text-[11px] hover:bg-slate-200 transition-colors">Pending Approval</button>
</div>
<div class="flex items-center gap-2">
<button class="text-[11px] font-semibold text-slate-500 hover:text-slate-800 flex items-center gap-1">
<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
        Reset Filters
      </button>
</div>
</div>
</div>
<!-- Adopters Table Container (All 8 Columns) -->
<div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left text-xs border-collapse min-w-[780px]">
<thead>
<tr class="bg-slate-50 border-b border-slate-200 text-slate-400 font-semibold uppercase tracking-wider text-[10px]">
<th class="py-3 px-3 w-8 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500" type="checkbox">
</th>
<th class="py-3 px-3">User Information</th>
<th class="py-3 px-2">Role</th>
<th class="py-3 px-2">Verification</th>
<th class="py-3 px-2">Housing Type</th>
<th class="py-3 px-2 text-center">Activity</th>
<th class="py-3 px-2">Risk</th>
<th class="py-3 px-2 text-center">Status</th>
<th class="py-3 px-3 text-right">Admin Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-slate-700">
<!-- Row 1: Sophia Martinez (Selected Row) -->
<tr class="bg-red-50/40 border-l-4 border-l-[#E05A4F] hover:bg-red-50/60 transition-colors cursor-pointer">
<td class="py-3.5 px-3 text-center">
<input checked="" class="rounded border-slate-300 text-primary-600 focus:ring-primary-500" type="checkbox">
</td>
<td class="py-3.5 px-3">
<div class="flex items-center gap-2.5">
<div class="relative w-8 h-8 rounded-full border border-slate-300 bg-slate-100 flex items-center justify-center font-bold text-slate-600 text-xs shrink-0 font-mono">
                SM
                <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 rounded-full ring-2 ring-white"></span>
</div>
<div>
<a class="font-bold text-slate-900 hover:text-primary-600 flex items-center gap-1" href="#inspector-panel">
                  Sophia Martinez
                  <span class="text-[10px] text-primary-600 font-mono font-semibold">#USR-9024</span>
</a>
<div class="text-[11px] text-slate-400">sophia.m@example.com</div>
</div>
</div>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-purple-50 text-purple-700 border border-purple-100 whitespace-nowrap">
              Adopter - Exp
            </span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200 whitespace-nowrap">
<svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg>
              Verified
            </span>
</td>
<td class="py-3.5 px-2">
<span class="text-[11px] text-slate-700 font-medium block">Owns Home</span>
<span class="text-[10px] text-slate-400">6ft Fenced Yard</span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="font-mono text-[11px] font-semibold text-slate-800 bg-slate-100 px-1.5 py-0.5 rounded whitespace-nowrap">1 Act · 1 Ado</span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-600">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Clear
            </span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">Active</span>
</td>
<td class="py-3.5 px-3 text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="px-2 py-1 text-[11px] font-bold text-primary-600 bg-white border border-primary-200 rounded hover:bg-primary-50">Auditing</button>
<button class="p-1 text-slate-400 hover:text-emerald-600 hover:bg-slate-100 rounded" title="Verify ID">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
<button class="p-1 text-slate-400 hover:text-rose-600 hover:bg-slate-100 rounded" title="Flag / Blacklist">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
</div>
</td>
</tr>
<!-- Row 2: Marcus Vance -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="py-3.5 px-3 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500" type="checkbox">
</td>
<td class="py-3.5 px-3">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full border border-slate-300 bg-slate-100 flex items-center justify-center font-bold text-slate-600 text-xs shrink-0 font-mono">
                MV
              </div>
<div>
<a class="font-bold text-slate-900 hover:text-primary-600 flex items-center gap-1" href="#">
                  Marcus Vance
                  <span class="text-[10px] text-slate-400 font-mono">#USR-9018</span>
</a>
<div class="text-[11px] text-slate-400">m.vance@techcorp.io</div>
</div>
</div>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-blue-50 text-blue-700 border border-blue-100 whitespace-nowrap">
              Adopter - First
            </span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200 whitespace-nowrap">
<svg class="w-2.5 h-2.5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z" fill="currentColor"></path></svg>
              Pending ID
            </span>
</td>
<td class="py-3.5 px-2">
<span class="text-[11px] text-slate-700 font-medium block">Renting</span>
<span class="text-[10px] text-emerald-600">Landlord Signed</span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="font-mono text-[11px] font-semibold text-slate-800 bg-slate-100 px-1.5 py-0.5 rounded whitespace-nowrap">1 Act · 0 Ado</span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-600">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Clear
            </span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100 text-amber-800">Pending</span>
</td>
<td class="py-3.5 px-3 text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="px-2 py-1 text-[11px] font-medium text-slate-600 bg-slate-50 border border-slate-200 rounded hover:bg-slate-100">Inspect</button>
<button class="p-1 text-slate-400 hover:text-emerald-600 hover:bg-slate-100 rounded" title="Verify ID">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
<button class="p-1 text-slate-400 hover:text-rose-600 hover:bg-slate-100 rounded" title="Flag / Blacklist">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
</div>
</td>
</tr>
<!-- Row 3: Elena Rostova -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="py-3.5 px-3 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500" type="checkbox">
</td>
<td class="py-3.5 px-3">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full border border-slate-300 bg-slate-100 flex items-center justify-center font-bold text-slate-600 text-xs shrink-0 font-mono">
                ER
              </div>
<div>
<a class="font-bold text-slate-900 hover:text-primary-600 flex items-center gap-1" href="#">
                  Elena Rostova
                  <span class="text-[10px] text-slate-400 font-mono">#USR-8991</span>
</a>
<div class="text-[11px] text-slate-400">elena.rostova@design.org</div>
</div>
</div>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap">
              Home Inspector
            </span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200 whitespace-nowrap">
<svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg>
              Verified
            </span>
</td>
<td class="py-3.5 px-2">
<span class="text-[11px] text-slate-700 font-medium block">Owns Condo</span>
<span class="text-[10px] text-slate-400">HOA Approved</span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="font-mono text-[11px] font-semibold text-slate-800 bg-slate-100 px-1.5 py-0.5 rounded whitespace-nowrap">0 Act · 3 Ado</span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-600">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Clear
            </span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">Active</span>
</td>
<td class="py-3.5 px-3 text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="px-2 py-1 text-[11px] font-medium text-slate-600 bg-slate-50 border border-slate-200 rounded hover:bg-slate-100">Inspect</button>
<button class="p-1 text-slate-400 hover:text-emerald-600 hover:bg-slate-100 rounded" title="Verify ID">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
<button class="p-1 text-slate-400 hover:text-rose-600 hover:bg-slate-100 rounded" title="Flag / Blacklist">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
</div>
</td>
</tr>
<!-- Row 4: David Chen -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="py-3.5 px-3 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500" type="checkbox">
</td>
<td class="py-3.5 px-3">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full border border-slate-300 bg-slate-100 flex items-center justify-center font-bold text-slate-600 text-xs shrink-0 font-mono">
                DC
              </div>
<div>
<a class="font-bold text-slate-900 hover:text-primary-600 flex items-center gap-1" href="#">
                  David Chen
                  <span class="text-[10px] text-slate-400 font-mono">#USR-8965</span>
</a>
<div class="text-[11px] text-slate-400">dchen_austin@mail.com</div>
</div>
</div>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-purple-50 text-purple-700 border border-purple-100 whitespace-nowrap">
              Adopter - Exp
            </span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-50 text-orange-700 border border-orange-200 whitespace-nowrap">
              Resubmit Req
            </span>
</td>
<td class="py-3.5 px-2">
<span class="text-[11px] text-slate-700 font-medium block">Apartment</span>
<span class="text-[10px] text-amber-600">Pending Addendum</span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="font-mono text-[11px] font-semibold text-slate-800 bg-slate-100 px-1.5 py-0.5 rounded whitespace-nowrap">0 Act · 1 Ado</span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 text-[11px] font-semibold text-amber-600 whitespace-nowrap">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Under Audit
            </span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100 text-amber-800">Suspended</span>
</td>
<td class="py-3.5 px-3 text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="px-2 py-1 text-[11px] font-medium text-slate-600 bg-slate-50 border border-slate-200 rounded hover:bg-slate-100">Inspect</button>
<button class="p-1 text-slate-400 hover:text-emerald-600 hover:bg-slate-100 rounded" title="Verify ID">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
<button class="p-1 text-slate-400 hover:text-rose-600 hover:bg-slate-100 rounded" title="Flag / Blacklist">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
</div>
</td>
</tr>
<!-- Row 5: Tyler Ross (Flagged / Blacklisted Example) -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="py-3.5 px-3 text-center">
<input class="rounded border-slate-300 text-primary-600 focus:ring-primary-500" type="checkbox">
</td>
<td class="py-3.5 px-3">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full border border-rose-300 bg-rose-50 flex items-center justify-center font-bold text-rose-600 text-xs shrink-0 font-mono">
                TR
              </div>
<div>
<a class="font-bold text-slate-900 hover:text-primary-600 flex items-center gap-1" href="#">
                  Tyler Ross
                  <span class="text-[10px] text-slate-400 font-mono">#USR-8810</span>
</a>
<div class="text-[11px] text-slate-400">tross_99@fakeinbox.io</div>
</div>
</div>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-blue-50 text-blue-700 border border-blue-100 whitespace-nowrap">
              Adopter - First
            </span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-rose-50 text-rose-700 border border-rose-200 whitespace-nowrap">
              Fraud ID
            </span>
</td>
<td class="py-3.5 px-2">
<span class="text-[11px] text-slate-700 font-medium block">Renting</span>
<span class="text-[10px] text-rose-600">Forged Lease</span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="font-mono text-[11px] font-semibold text-slate-800 bg-slate-100 px-1.5 py-0.5 rounded whitespace-nowrap">0 Act · 0 Ado</span>
</td>
<td class="py-3.5 px-2">
<span class="inline-flex items-center gap-1 text-[11px] font-semibold text-rose-600 whitespace-nowrap">
<span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Blacklisted
            </span>
</td>
<td class="py-3.5 px-2 text-center">
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-rose-100 text-rose-800">Banned</span>
</td>
<td class="py-3.5 px-3 text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="px-2 py-1 text-[11px] font-medium text-slate-600 bg-slate-50 border border-slate-200 rounded hover:bg-slate-100">Inspect</button>
<button class="p-1 text-slate-400 hover:text-emerald-600 hover:bg-slate-100 rounded" title="Verify ID">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
<button class="p-1 text-rose-600 hover:bg-rose-50 rounded" title="Flag / Blacklist">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="bg-slate-50 px-4 py-3 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500">
<span class="">Showing <strong class="text-slate-800 font-semibold">1 to 5</strong> of <strong class="text-slate-800 font-semibold">2,480</strong> users</span>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-600 disabled:opacity-40" disabled="">&lt;</button>
<button class="px-2.5 py-1 rounded border border-primary-500 bg-primary-50 text-primary-600 font-bold">1</button>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-600 hover:bg-slate-100">2</button>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-600 hover:bg-slate-100">3</button>
<span class="px-1 text-slate-400">...</span>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-600 hover:bg-slate-100">496</button>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-600 hover:bg-slate-100">&gt;</button>
</div>
</div>
</div>
</div>
<!-- END: LeftTableSection -->
<!-- BEGIN: RightDetailSection (5 Cols - Inspector Panel) -->
<div class="2xl:col-span-5 space-y-4" id="inspector-panel">
<!-- Profile Audit Inspector Box -->
<div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
<!-- Inspector Header -->
<div class="p-5 border-b border-slate-200 bg-slate-50/50">
<div class="flex items-start justify-between">
<div class="flex items-center gap-3">
<div class="relative w-14 h-14 bg-slate-200 border-2 border-slate-300 rounded-xl overflow-hidden flex items-center justify-center shrink-0 font-mono font-bold text-slate-600 text-xs">
<svg class="absolute inset-0 w-full h-full text-slate-300 stroke-1" preserveAspectRatio="none" viewBox="0 0 100 100">
<line stroke="currentColor" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" x1="0" x2="100" y1="100" y2="0"></line>
</svg>
<span class="relative text-xs font-bold text-slate-600">SM</span>
<span class="absolute bottom-1 right-1 w-3 h-3 bg-emerald-500 rounded-full border-2 border-white"></span>
</div>
<div>
<div class="flex items-center gap-2">
<h2 class="text-lg font-bold text-slate-900 tracking-tight">Sophia Martinez</h2>
<span class="text-[11px] font-mono bg-slate-100 text-slate-700 px-1.5 py-0.5 rounded font-semibold border border-slate-200">#USR-9024</span>
</div>
<p class="text-xs text-slate-500 font-normal">Joined June 14, 2025 • Austin Regional Hub</p>
<div class="flex items-center gap-1.5 mt-1.5">
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200 uppercase tracking-wider">Verified Adopter</span>
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-purple-50 text-purple-700 border border-purple-200 uppercase tracking-wider">Experienced</span>
<span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-slate-100 text-slate-600 uppercase tracking-wider">Risk: Clear</span>
</div>
</div>
</div>
<button class="text-slate-400 hover:text-slate-600 p-1">
<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</button>
</div>
<!-- Tabs: Profile & Housing | Activity & Contracts | Document Auditor -->
<div class="flex border-b border-slate-200 mt-4 -mb-5 gap-1">
<button class="pb-2.5 px-3 text-xs font-bold uppercase tracking-wider text-primary-600 border-b-2 border-primary-600">Profile &amp; Housing</button>
<button class="pb-2.5 px-3 text-xs font-semibold uppercase tracking-wider text-slate-500 hover:text-slate-800">Activity &amp; Contracts</button>
<button class="pb-2.5 px-3 text-xs font-semibold uppercase tracking-wider text-slate-500 hover:text-slate-800">Document Auditor</button>
</div>
</div>
<!-- Inspector Body Modules -->
<div class="p-5 space-y-6">
<!-- Module A: Personal & Contact Details -->
<div class="space-y-3">
<div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">A. Personal &amp; Contact Details</span>
<span class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1">
<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          Phone SMS Verified
        </span>
</div>
<div class="grid grid-cols-2 gap-3 text-xs">
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Legal Full Name</span>
<span class="text-slate-800 font-medium">Sophia Isabella Martinez</span>
</div>
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Direct Phone</span>
<span class="text-slate-800 font-medium font-mono">+1 (512) 892-4410</span>
</div>
<div class="col-span-2">
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Residential Address</span>
<span class="text-slate-800 font-medium">4829 Westlake Ridge Dr, Austin, TX 78746</span>
</div>
</div>
<!-- Gov ID Document Box with wireframe preview -->
<div class="bg-slate-50 border border-slate-200 rounded-lg p-3 flex items-center justify-between">
<div class="flex items-center gap-2.5">
<div class="w-10 h-7 bg-white border border-slate-300 rounded relative overflow-hidden flex items-center justify-center shrink-0">
<svg class="absolute inset-0 w-full h-full text-slate-300 stroke-1" preserveAspectRatio="none" viewBox="0 0 100 100">
<line stroke="currentColor" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" x1="0" x2="100" y1="100" y2="0"></line>
</svg>
</div>
<div>
<span class="text-xs font-bold text-slate-800 block">Driver License - Texas</span>
<span class="text-[10px] text-slate-400">Exp: 2028-11 • Digitally Verified via Stripe Identity</span>
</div>
</div>
<button class="text-xs font-semibold text-primary-600 hover:underline">View File</button>
</div>
</div>
<!-- Module B: Housing & Living Conditions -->
<div class="space-y-3">
<div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">B. Housing &amp; Environment Audit</span>
<span class="text-[10px] font-mono bg-emerald-50 text-emerald-700 px-1.5 py-0.5 rounded font-bold border border-emerald-200">INSPECTED</span>
</div>
<div class="grid grid-cols-2 gap-3 text-xs">
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Property Type</span>
<span class="text-slate-800 font-medium">Single-Family House</span>
</div>
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Ownership</span>
<span class="text-slate-800 font-medium">Owns Home (Mortgage Verified)</span>
</div>
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Yard &amp; Perimeter</span>
<span class="text-slate-800 font-medium">Fully Fenced (6ft Wood)</span>
</div>
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Household Composition</span>
<span class="text-slate-800 font-medium">2 Adults, 1 Child (Age 9)</span>
</div>
</div>
<div class="bg-blue-50/50 border border-blue-100 rounded-lg p-2.5 text-xs text-blue-900 flex items-start gap-2">
<svg class="w-4 h-4 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
<span class="">Current Resident Pet: 1 Golden Retriever (4 yrs old, neutered, up-to-date core vaccines on file).</span>
</div>
</div>
<!-- Module C: Caregiver Experience & Pet Care Readiness -->
<div class="space-y-3">
<div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">C. Caregiver Experience &amp; Lifestyle</span>
</div>
<div class="grid grid-cols-2 gap-3 text-xs">
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Caregiver History</span>
<span class="text-slate-800 font-medium">12+ yrs Canine &amp; Feline</span>
</div>
<div>
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Work Routine</span>
<span class="text-slate-800 font-medium">Hybrid (Pet alone max 2-3h)</span>
</div>
<div class="col-span-2">
<span class="text-slate-400 block text-[10px] uppercase font-semibold">Emergency Vet Budget</span>
<span class="text-slate-800 font-medium">Dedicated Pet Insurance + $3,000 Emergency Fund</span>
</div>
</div>
</div>
<!-- Module D: Active Applications, Scheduled Meet & Greet, Adoption Contracts & Microchip -->
<div class="space-y-3">
<div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">D. Platform Activity &amp; Applications</span>
</div>
<!-- Application pill card (Bella) -->
<div class="border border-slate-200 rounded-lg p-3 space-y-2 hover:border-slate-300 transition-colors bg-white">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="font-bold text-xs text-slate-900">Bella (Cat)</span>
<span class="text-[10px] font-mono text-slate-400">#APP-8842</span>
</div>
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">Stage 3: Meet &amp; Greet</span>
</div>
<div class="flex items-center justify-between text-[11px] text-slate-500">
<span class="">Scheduled Meet: <strong class="font-mono text-slate-700">2026-09-15 14:00 CST</strong></span>
<span class="text-emerald-600 font-semibold inline-flex items-center gap-1">
<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
            Slot Confirmed
          </span>
</div>
</div>
<!-- Past completed adoption record (Max) with check-in records -->
<div class="border border-slate-200 rounded-lg p-3 text-xs bg-slate-50/50 space-y-1.5">
<div class="flex items-center justify-between">
<span class="font-bold text-slate-800">Past Adoption: Max (Retriever Mix)</span>
<span class="text-[10px] text-slate-400">Adopted May 2024</span>
</div>
<div class="text-[11px] text-slate-600 font-mono">Microchip: #985141002348912</div>
<div class="flex items-center gap-2 pt-1 border-t border-slate-200/60 text-[10px]">
<span class="text-emerald-700 font-semibold flex items-center gap-1">
<svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg> 30-Day
          </span>
<span class="text-slate-300">•</span>
<span class="text-emerald-700 font-semibold flex items-center gap-1">
<svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg> 90-Day
          </span>
<span class="text-slate-300">•</span>
<span class="text-emerald-700 font-semibold flex items-center gap-1">
<svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg> 180-Day Post-Adoption Check-in Done
          </span>
</div>
</div>
</div>
<!-- Module E: Safety, Screening & Verification Controls (Document Auditor) -->
<div class="space-y-3 pt-2 border-t border-slate-200">
<span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">E. Safety, Screening &amp; Verification Controls</span>
<!-- Auditor Action Buttons: Approved | Requires Resubmission | Fake Document / Flag Fraud -->
<div class="grid grid-cols-3 gap-2">
<button class="px-2.5 py-1.5 text-xs font-bold bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg shadow-sm flex items-center justify-center gap-1 transition-colors">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          Approved
        </button>
<button class="px-2.5 py-1.5 text-xs font-medium bg-slate-100 text-slate-700 hover:bg-slate-200 rounded-lg text-center transition-colors">
          Requires Resubmission
        </button>
<button class="px-2.5 py-1.5 text-xs font-medium bg-rose-50 text-rose-700 hover:bg-rose-100 border border-rose-200 rounded-lg text-center transition-colors">
          Fake Document / Flag Fraud
        </button>
</div>
<!-- Blacklist & Warning System: Staff Audit Log Notes Textarea -->
<div>
<label class="block text-[10px] uppercase font-bold text-slate-400 mb-1">Staff Audit Log Note</label>
<textarea class="w-full text-xs rounded-lg border-slate-200 focus:ring-primary-500 focus:border-primary-500 placeholder:text-slate-400 text-slate-700" rows="2">Home inspection completed 2025-08-10. Fencing secure, friendly temperament with resident dog.</textarea>
</div>
<!-- Role Management: Super-Admin Platform Role Assignment -->
<div class="flex items-center justify-between pt-1">
<span class="text-xs text-slate-600 font-medium">Assigned Platform Role:</span>
<select class="text-xs border-slate-200 rounded-lg py-1 px-2 font-semibold text-slate-700 focus:ring-primary-500">
<option selected="">Adopter - Experienced</option>
<option>Adopter - First Time</option>
<option>Home Inspector</option>
<option>Shelter Partner Admin</option>
</select>
</div>
</div>
</div>
<!-- Inspector Sticky Footer CTA: Flag Account / Blacklist and Save & Update Audit -->
<div class="bg-slate-50 border-t border-slate-200 px-5 py-3.5 flex items-center justify-between">
<button class="px-3.5 py-1.5 text-xs font-bold text-rose-600 hover:bg-rose-50 border border-rose-300 rounded-lg transition-colors">
      Flag Account / Blacklist
    </button>
<button class="px-4 py-1.5 text-xs font-bold text-white bg-[#E05A4F] hover:bg-[#CA483D] rounded-lg shadow-sm transition-colors flex items-center gap-1.5">
<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
      Save &amp; Update Audit
    </button>
</div>
</div>
</div>
<!-- END: RightDetailSection -->
</div>
<!-- END: MasterDetailContainer -->
</main>
<!-- END: ScrollableMainViewport -->
</div>
<!-- END: MainContentArea -->
</div>
<!-- END: MasterLayoutWrapper -->




</body></html>
