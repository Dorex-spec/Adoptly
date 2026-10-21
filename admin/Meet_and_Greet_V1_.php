<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>

<html class="h-full" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Adoptly Admin Portal - Meet &amp; Greet Sessions</title>
<!-- Google Fonts: Poppins, Plus Jakarta Sans, Hanken Grotesk -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            brand: {
              DEFAULT: "#E05A4F",
              50: "#FDFAF9",
              100: "#FBECEB",
              200: "#F7D3D0",
              500: "#E05A4F",
              600: "#CB493E",
              700: "#B0372D",
            },
            surface: "#F8F9FA",
            card: "#FFFFFF",
          },
          fontFamily: {
            sans: ['Poppins', 'Plus Jakarta Sans', 'Hanken Grotesk', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          }
        }
      }
    }
  </script>
<style>
    .material-symbols-outlined {
      font-family: 'Material Symbols Outlined';
      font-weight: normal;
      font-style: normal;
      font-size: 20px;
      line-height: 1;
      display: inline-block;
      text-transform: none;
      letter-spacing: normal;
      word-wrap: normal;
      white-space: nowrap;
      direction: ltr;
      -webkit-font-smoothing: antialiased;
      vertical-align: middle;
    }
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }
    ::-webkit-scrollbar-track {
      background: #F1F3F5;
    }
    ::-webkit-scrollbar-thumb {
      background: #D1D5DB;
      border-radius: 4px;
    }
  </style>
</head>
<body class="h-full bg-[#f8f9fa] font-sans text-slate-800 antialiased overflow-x-hidden">
<div class="flex min-h-screen w-full">
<!-- 1. FIXED LEFT SIDEBAR (w-64) -->
<?php require __DIR__ . '/admin_sidebar.php'; ?>
<!-- 2. MAIN CONTENT AREA -->
<div class="ml-64 flex-1 min-w-0 flex flex-col h-screen overflow-y-auto bg-[#f8f9fa]">
<!-- Top Header Navigation Bar -->
<header class="h-16 bg-white border-b border-slate-200 flex-shrink-0 px-8 flex items-center justify-between sticky top-0 z-20">
<!-- Breadcrumbs Navigation -->
<div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
<span class="hover:text-slate-800 cursor-pointer">ADMIN PORTAL</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">chevron_right</span>
<span class="hover:text-slate-800 cursor-pointer">Adoption Management</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">chevron_right</span>
<span class="text-slate-800 font-semibold">Meet &amp; Greets</span>
</div>
<!-- Center & Right Utilities -->
<div class="flex items-center gap-6">
<!-- Universal Search Bar -->
<div class="relative w-80">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[18px]">search</span>
<input class="w-full h-9 pl-9 pr-12 rounded-lg bg-slate-100/80 border-transparent text-xs text-slate-700 placeholder-slate-400 focus:bg-white focus:border-brand focus:ring-1 focus:ring-brand outline-none transition-all" placeholder="Search pets, applications, users..." type="text"/>
<span class="absolute right-2.5 top-2 px-1.5 py-0.5 rounded border border-slate-200 bg-white font-mono text-[10px] text-slate-400 select-none">⌘K</span>
</div>
<!-- Notification & Help Icons -->
<div class="flex items-center gap-2 text-slate-500">
<button class="relative p-2 rounded-lg hover:bg-slate-100 hover:text-slate-700 transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-4 h-4 bg-brand text-white font-mono text-[10px] font-bold rounded-full flex items-center justify-center leading-none">4</span>
</button>
<button class="p-2 rounded-lg hover:bg-slate-100 hover:text-slate-700 transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">help</span>
</button>
</div>
<div class="h-6 w-px bg-slate-200"></div>
<!-- Admin User Profile -->
<div class="flex items-center gap-3 cursor-pointer group">
<div class="w-9 h-9 rounded-full bg-brand text-white flex items-center justify-center font-bold text-sm shadow-sm group-hover:bg-brand-600 transition-colors">
<span class="material-symbols-outlined text-[20px]">person</span>
</div>
<div class="flex flex-col text-left">
<span class="text-xs font-semibold text-slate-900 leading-tight">Admin User</span>
<span class="text-[11px] text-slate-400 leading-tight">Super Administrator</span>
</div>
<span class="material-symbols-outlined text-slate-400 text-[18px]">arrow_drop_down</span>
</div>
</div>
</header>
<!-- Main Operational Body -->
<main class="flex-1 p-8 space-y-6">
<!-- Breadcrumb Header Link Strip -->
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5 text-xs text-slate-400">
<span class="hover:text-slate-700 cursor-pointer">Admin Portal</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="hover:text-slate-700 cursor-pointer">Adoption Management</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-brand font-semibold">Meet &amp; Greets</span>
</div>
</div>
<!-- Page Title & Operational Action Buttons -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-3">
<h1 class="text-2xl font-bold tracking-tight text-slate-900">Meet &amp; Greet Sessions</h1>
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-slate-100 border border-slate-200/60 font-mono text-slate-700 text-[11px]">
<span class="w-2 h-2 rounded-full bg-brand animate-pulse"></span>
            ACTIVE COORDINATION PIPELINE
          </span>
</div>
<p class="text-xs text-slate-500 mt-1 max-w-3xl">
          Coordinate virtual introductions, shelter campus visits, and in-home trials between pre-approved adopters and foster/shelter staff.
        </p>
</div>
<div class="flex items-center gap-2.5">
<button class="px-3.5 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-semibold hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-slate-500 text-[18px]">checklist</span>
<span>Batch Confirm</span>
</button>
<button class="px-3.5 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-semibold hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-slate-500 text-[18px]">file_download</span>
<span>Export Agenda (.ICS/CSV)</span>
</button>
<button class="px-4 py-2 rounded-lg bg-brand text-white text-xs font-semibold hover:bg-brand-600 transition-all flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-white text-[18px]">add</span>
<span>+ Schedule Session</span>
</button>
</div>
</div>
<!-- Top Operational Metrics Strip (4 High-Contrast Cards) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Card 1: Today's Scheduled Sessions -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Today's Scheduled Sessions</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">8 Sessions</span>
<div class="flex items-center gap-1.5 text-[11px] text-slate-500 mt-0.5">
<span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
<span class="truncate">Next: Virtual with Sarah Jenkins</span>
</div>
</div>
<div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">calendar_today</span>
</div>
</div>
<!-- Card 2: Awaiting Adopter Booking -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Awaiting Adopter Booking</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">11 Applicants</span>
<div class="flex items-center gap-1.5 text-[11px] text-slate-500 mt-0.5">
<span class="material-symbols-outlined text-[13px] text-brand">schedule</span>
<span class="truncate">Invite sent, slot pending selection</span>
</div>
</div>
<div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">mark_email_unread</span>
</div>
</div>
<!-- Card 3: Trial Placements Active -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Trial Placements Active</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">3 In-Home Trials</span>
<div class="flex items-center gap-1.5 text-[11px] text-slate-500 mt-0.5">
<span class="material-symbols-outlined text-[13px] text-blue-600">verified_user</span>
<span class="truncate">7-Day foster-to-adopt clearance</span>
</div>
</div>
<div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">home_pin</span>
</div>
</div>
<!-- Card 4: Outcome Review Pending -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Outcome Review Pending</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">5 Completed</span>
<div class="flex items-center gap-1.5 text-[11px] text-slate-500 mt-0.5">
<span class="material-symbols-outlined text-[13px] text-purple-600">note_alt</span>
<span class="truncate">Counselor notes ready for sign-off</span>
</div>
</div>
<div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">rule_folder</span>
</div>
</div>
</div>
<!-- Main 2-Column Primary Workspace Grid -->
<div class="grid grid-cols-12 gap-6 items-start">
<!-- LEFT AREA: Master Queue (Col 7 on XL) -->
<div class="col-span-12 xl:col-span-7 bg-white rounded-xl border border-slate-200/80 shadow-sm overflow-hidden flex flex-col">
<!-- Filter & Control Toolbar -->
<div class="p-3.5 bg-slate-50/60 border-b border-slate-200/80 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-2.5 text-xs">
<!-- Search input -->
<div class="relative flex-1 max-w-xs">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[18px]">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded-lg bg-white border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:border-brand focus:ring-1 focus:ring-brand outline-none transition-all" placeholder="Search applicant, pet ID, host..." type="text"/>
</div>
<!-- Dropdowns and View Toggles -->
<div class="flex items-center gap-2 flex-wrap">
<!-- Format Filter Dropdown -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-white border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-50 transition-colors">
<span class="text-slate-400">Format:</span>
<span class="font-medium">All Formats</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
<!-- Location Dropdown -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-white border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-brand text-[15px]">location_on</span>
<span class="font-medium">Austin Metro East</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
<!-- Date Badge Picker -->
<div class="flex items-center gap-1 px-2.5 h-9 rounded-lg bg-slate-100 border border-slate-200 text-slate-700 font-semibold cursor-pointer hover:bg-slate-200 transition-colors">
<span class="material-symbols-outlined text-slate-500 text-[16px]">calendar_today</span>
<span>Today (Oct 24)</span>
</div>
<!-- List/Grid toggles -->
<div class="flex items-center rounded-lg bg-slate-100 border border-slate-200 p-0.5">
<button class="p-1 rounded bg-white text-slate-800 shadow-sm" type="button">
<span class="material-symbols-outlined text-[16px]">view_list</span>
</button>
<button class="p-1 rounded text-slate-400 hover:text-slate-700 transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">calendar_view_month</span>
</button>
</div>
</div>
</div>
<!-- High-Density Appointments Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse text-xs">
<thead>
<tr class="bg-slate-100/70 border-b border-slate-200 text-[11px] font-bold text-slate-400 uppercase tracking-wider h-9">
<th class="px-4 py-2.5">APPLICANT &amp; DETAILS</th>
<th class="px-3 py-2.5">PET &amp; LOCATION</th>
<th class="px-3 py-2.5">SESSION FORMAT &amp; TIME</th>
<th class="px-3 py-2.5">STATUS</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-slate-700">
<!-- Row 1: Sarah Jenkins (Selected / Active) -->
<tr class="bg-brand-50/40 hover:bg-brand-50/70 transition-colors cursor-pointer border-l-4 border-brand">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-brand-50 text-brand font-mono font-bold text-xs flex items-center justify-center border border-brand-200 flex-shrink-0">
                    SJ
                  </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Sarah Jenkins</span>
<span class="text-slate-400 font-mono text-[11px]">sarah.j@gmail.com</span>
<span class="text-brand font-semibold text-[11px] mt-0.5">Verified Tier A</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Bella</span>
<span class="text-slate-400 text-[11px]">DSH Cat • <span class="font-mono text-brand font-semibold">#CAT-8921</span></span>
<span class="text-slate-500 text-[11px] mt-0.5">Austin Main Cattery Rm 2</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<div class="flex items-center gap-1 font-semibold text-slate-900">
<span class="material-symbols-outlined text-blue-600 text-[16px]">videocam</span>
                    Virtual Video Call
                  </div>
<span class="font-mono text-[11px] font-bold text-brand mt-0.5">2:30 PM - 3:00 PM</span>
<span class="text-slate-400 text-[10px]">In 35 mins</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                  Confirmed / Ready
                </span>
</td>
</tr>
<!-- Row 2: Marcus Vance -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-slate-100 text-slate-700 font-mono font-bold text-xs flex items-center justify-center border border-slate-200 flex-shrink-0">
                    MV
                  </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Marcus Vance</span>
<span class="text-slate-400 font-mono text-[11px]">marcus.vance@gmail.com</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Barnaby</span>
<span class="text-slate-400 text-[11px]">Retriever Mix • <span class="font-mono text-slate-500 font-medium">#DOG-4410</span></span>
<span class="text-slate-500 text-[11px] mt-0.5">Courtyard B Play Yard</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<div class="flex items-center gap-1 font-semibold text-slate-900">
<span class="material-symbols-outlined text-slate-500 text-[16px]">domain</span>
                    Shelter On-Site
                  </div>
<span class="font-mono text-[11px] font-medium text-slate-900 mt-0.5">3:45 PM - 4:30 PM</span>
<span class="text-slate-400 text-[10px]">Arrived on Campus</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-sky-50 text-sky-700 border border-sky-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                  Check-In Complete
                </span>
</td>
</tr>
<!-- Row 3: David Chen -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-purple-50 text-purple-700 font-mono font-bold text-xs flex items-center justify-center border border-purple-200 flex-shrink-0">
                    DC
                  </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">David Chen</span>
<span class="text-slate-400 font-mono text-[11px]">dchen.design@work.net</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Jasper</span>
<span class="text-slate-400 text-[11px]">Border Collie • <span class="font-mono text-slate-500 font-medium">#DOG-1198</span></span>
<span class="text-slate-500 text-[11px] mt-0.5">Off-Campus Foster</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<div class="flex items-center gap-1 font-semibold text-slate-900">
<span class="material-symbols-outlined text-purple-600 text-[16px]">cottage</span>
                    In-Home Trial Check
                  </div>
<span class="font-mono text-[11px] font-medium text-slate-900 mt-0.5">Tomorrow, 10:00 AM</span>
<span class="text-purple-700 font-bold text-[10px]">Day 4 of 7</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-purple-50 text-purple-700 border border-purple-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                  Trial Active
                </span>
</td>
</tr>
<!-- Row 4: Maya Patel -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-amber-50 text-amber-700 font-mono font-bold text-xs flex items-center justify-center border border-amber-200 flex-shrink-0">
                    MP
                  </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Maya Patel</span>
<span class="text-slate-400 font-mono text-[11px]">mpatel@austin-tech.co</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Mochi</span>
<span class="text-slate-400 text-[11px]">Mini Lop • <span class="font-mono text-slate-500 font-medium">#SML-3012</span></span>
<span class="text-slate-500 text-[11px] mt-0.5">Small Critter Wing</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<div class="flex items-center gap-1 font-semibold text-slate-900">
<span class="material-symbols-outlined text-blue-600 text-[16px]">videocam</span>
                    Virtual Video Call
                  </div>
<span class="font-mono text-[11px] font-medium text-slate-900 mt-0.5">Oct 25, 1:15 PM</span>
<span class="text-slate-400 text-[10px]">Scheduled Slot</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                  Awaiting Adopter Slot
                </span>
</td>
</tr>
<!-- Row 5: Jordan Brooks -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-slate-100 text-slate-700 font-mono font-bold text-xs flex items-center justify-center border border-slate-200 flex-shrink-0">
                    JB
                  </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Jordan Brooks</span>
<span class="text-slate-400 font-mono text-[11px]">jbrooks77@outlook.com</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Copper</span>
<span class="text-slate-400 text-[11px]">Hound Mix • <span class="font-mono text-slate-500 font-medium">#DOG-9023</span></span>
<span class="text-slate-500 text-[11px] mt-0.5">Shelter Dog Run 4</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<div class="flex items-center gap-1 font-semibold text-slate-900">
<span class="material-symbols-outlined text-slate-500 text-[16px]">domain</span>
                    Shelter On-Site
                  </div>
<span class="font-mono text-[11px] font-medium text-slate-900 mt-0.5">Oct 25, 4:00 PM</span>
<span class="text-slate-400 text-[10px]">Tomorrow</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                  Outcome Pending
                </span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Pagination Footer -->
<div class="px-4 py-3 bg-slate-50/80 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500 mt-auto">
<span>Showing <strong class="text-slate-800">5</strong> of 8 active appointments today</span>
<div class="flex items-center gap-2">
<button class="px-2.5 py-1 rounded bg-slate-100 text-slate-400 cursor-not-allowed font-medium text-[11px]" disabled="" type="button">Previous</button>
<button class="px-2.5 py-1 rounded bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-[11px] transition-colors shadow-sm" type="button">Next</button>
</div>
</div>
</div>
<!-- RIGHT AREA: Slide-over Session Evaluation & Action Panel (Col 5 on XL) -->
<div class="col-span-12 xl:col-span-5 bg-white rounded-xl border border-slate-200/80 shadow-md flex flex-col overflow-hidden">
<!-- Panel Header & Quick Launch -->
<div class="p-4 bg-slate-50/90 border-b border-slate-200 flex flex-col gap-3">
<div class="flex items-center justify-between">
<span class="font-mono text-xs font-bold text-slate-500 uppercase tracking-wider">
            #MG-8824 • VIRTUAL VIDEO CALL
          </span>
<span class="px-2 py-0.5 rounded text-[10px] font-bold tracking-wider uppercase bg-blue-100 text-blue-700">
            LIVE IN 35M
          </span>
</div>
<div class="flex items-start justify-between gap-3">
<div class="flex flex-col">
<h2 class="text-lg font-bold text-slate-900 tracking-tight">
              Sarah Jenkins <span class="text-brand font-normal">↔</span> Bella
            </h2>
<span class="text-xs text-slate-500 mt-0.5">
              Pre-adoption compatibility review &amp; living space virtual walk
            </span>
</div>
<!-- Pet Photo Thumbnail -->
<div class="w-14 h-14 rounded-xl overflow-hidden flex-shrink-0 border border-slate-200 shadow-sm">
<img alt="Bella the cat" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOhiJAgeCjYe7IPIELqEuESfpxGcDYKEQ8zGc8OxZkQxpSZJmovd1zo874nVGJAIA39glBxeP213Yc_lTbkkJofnfqhTvmHX-_AH7Rp-bYFfhGl3-5xDr_OoL1PFb7zKJTvY0JFdV0uxX_2sG_FaWTVkraE7yG-o_8dldnPP1AiZnsdsLo3-0rYfX6-AhT5Sel8_pPfOln8RJY8kyNOwBxrSoofrblqYWTdvlqP4blChnryIvJevH0Xg"/>
</div>
</div>
<!-- Video Call Launch Bar -->
<div class="p-2.5 bg-white rounded-lg border border-slate-200 flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<button class="flex-1 py-2 px-3 rounded-lg bg-brand text-white font-semibold text-xs hover:bg-brand-600 transition-all flex items-center justify-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-[18px]">videocam</span>
<span>Launch Meeting Room</span>
</button>
<button class="p-2 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-500 transition-colors" title="Copy Meeting Link" type="button">
<span class="material-symbols-outlined text-[18px]">content_copy</span>
</button>
</div>
<div class="flex items-center justify-between text-slate-500 font-mono text-[11px] px-1">
<span class="truncate">meet.google.com/xrq-mpta-vjk</span>
<span class="text-blue-600 font-semibold flex-shrink-0">Room Verified</span>
</div>
</div>
</div>
<!-- Evaluation Snapshot & Details Body -->
<div class="p-4 space-y-4 max-h-[580px] overflow-y-auto text-xs">
<!-- Quick Compatibility & Readiness Side-by-Side Cards -->
<div class="grid grid-cols-2 gap-2.5">
<div class="p-3 bg-slate-50 rounded-xl border border-slate-200/80 flex flex-col gap-0.5">
<div class="flex items-center gap-1 text-blue-600">
<span class="material-symbols-outlined text-[16px]">verified</span>
<span class="text-[10px] uppercase font-bold tracking-wider">Match Score</span>
</div>
<span class="text-base font-mono font-bold text-slate-900 mt-1">98% Fit</span>
<span class="text-[10px] text-slate-400">Based on lifestyle &amp; energy</span>
</div>
<div class="p-3 bg-slate-50 rounded-xl border border-slate-200/80 flex flex-col gap-0.5">
<div class="flex items-center gap-1 text-slate-500">
<span class="material-symbols-outlined text-[16px]">inventory_2</span>
<span class="text-[10px] uppercase font-bold tracking-wider">Pre-Checks</span>
</div>
<span class="text-base font-mono font-bold text-slate-900 mt-1">3/3 Done</span>
<span class="text-[10px] text-slate-400">ID, Income &amp; Home Photos</span>
</div>
</div>
<!-- Meet & Greet Evaluation Rubric Header -->
<div class="flex items-center justify-between pt-1">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Meet &amp; Greet Evaluation Rubric</span>
<span class="text-[11px] font-semibold text-brand">Counselor Mode</span>
</div>
<!-- Rubric Item 1: Animal Disposition & Behavior -->
<div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80 space-y-2">
<span class="font-semibold text-slate-900 block text-xs">Animal Disposition &amp; Behavior</span>
<div class="flex items-center gap-1.5 flex-wrap">
<button class="px-2.5 py-1 rounded-full bg-brand text-white font-semibold text-[11px] shadow-sm flex items-center gap-1" type="button">
<span>✓ Affectionate &amp; Curious</span>
</button>
<button class="px-2.5 py-1 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-100 font-medium text-[11px] transition-colors" type="button">
<span>Playful</span>
</button>
<button class="px-2.5 py-1 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-100 font-medium text-[11px] transition-colors" type="button">
<span>Timid / Cautious</span>
</button>
</div>
</div>
<!-- Rubric Item 2: Household Compatibility -->
<div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80 space-y-1">
<div class="flex items-center justify-between">
<span class="font-semibold text-slate-900 text-xs">Household Compatibility</span>
<span class="px-2 py-0.5 rounded bg-blue-100 text-blue-700 font-bold text-[10px]">Excellent</span>
</div>
<p class="text-slate-600 leading-relaxed text-xs">
              Quiet single-occupant apartment matches Bella's sensitive temperament and preference for tranquil spaces.
            </p>
</div>
<!-- Rubric Item 3: Adopter Engagement -->
<div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80 space-y-1">
<div class="flex items-center justify-between">
<span class="font-semibold text-slate-900 text-xs">Adopter Engagement</span>
<span class="px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px]">High Attention</span>
</div>
<p class="text-slate-600 leading-relaxed text-xs">
              Asked insightful questions regarding grain-free wet diet, vet history, and daily grooming habits.
            </p>
</div>
<!-- Rubric Item 4: Counselor Field Notes -->
<div class="space-y-1.5">
<div class="flex items-center justify-between">
<label class="font-semibold text-slate-900 text-xs">Counselor Field Notes</label>
<span class="text-[11px] text-slate-400">Saved 2m ago</span>
</div>
<div class="text-slate-700 bg-slate-50 p-3 rounded-xl border border-slate-200/80 leading-relaxed text-xs italic">
              "Sarah was wonderful with Bella over camera. Bella showed genuine curiosity toward the interactive feather wand. Adopter clearly understands post-adoption 3-3-3 decompression guidelines."
            </div>
</div>
</div>
<!-- Drawer Action Footer (Bridge to Adoption Contracts) -->
<div class="p-4 bg-slate-50 border-t border-slate-200 space-y-2.5 mt-auto">
<div class="grid grid-cols-2 gap-2">
<button class="py-2 px-3 rounded-lg bg-white border border-slate-200 text-slate-700 font-semibold text-xs hover:bg-slate-100 transition-colors shadow-sm" type="button">
              Request 2nd Visit
            </button>
<button class="py-2 px-3 rounded-lg bg-white border border-rose-200 text-rose-600 font-semibold text-xs hover:bg-rose-50 transition-colors shadow-sm" type="button">
              Incompatible Match
            </button>
</div>
<!-- Primary Full-Width CTA -->
<button class="w-full py-2.5 px-4 rounded-lg bg-brand text-white font-bold text-xs hover:bg-brand-600 flex items-center justify-center gap-1.5 transition-all shadow-sm" type="button">
<span>Approve &amp; Advance to Contract</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
<p class="text-[11px] text-slate-400 text-center">
            Advancing will automatically generate the legal adoption contract draft in the Contracts queue.
          </p>
</div>
</div>
</div>
<!-- 3. BOTTOM OPERATIONAL STATS FOOTER -->
<div class="p-4 bg-white rounded-xl border border-slate-200/80 shadow-sm flex flex-col md:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-6 flex-wrap text-xs">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-blue-600 text-[18px]">speed</span>
<span class="text-slate-500">Avg Meet-to-Contract:</span>
<span class="font-mono font-bold text-slate-900">18.2 hrs</span>
</div>
<div class="h-4 w-px bg-slate-200 hidden md:block"></div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-brand text-[18px]">trending_up</span>
<span class="text-slate-500">Trial Conversion Rate:</span>
<span class="font-mono font-bold text-slate-900">88.5%</span>
</div>
<div class="h-4 w-px bg-slate-200 hidden md:block"></div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-600 text-[18px]">task_alt</span>
<span class="text-slate-500">Weekly Completed:</span>
<span class="font-mono font-bold text-slate-900">24 Sessions</span>
</div>
</div>
<div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-slate-500">
<span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
<span>SLA TARGET: 100% ON-TIME COMPLETION</span>
</div>
</div>
</main>
</div>
</div>
</body></html>
