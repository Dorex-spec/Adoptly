<!DOCTYPE html>

<html class="h-full" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Adoptly Admin Portal - Applications Review</title>
<!-- Google Fonts: Poppins & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
            slate: {
              850: "#15202B",
            }
          },
          fontFamily: {
            sans: ['Poppins', 'Plus Jakarta Sans', 'sans-serif'],
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
<!-- 1. LEFT SIDEBAR (fixed width 64) -->
<aside class="w-64 flex-shrink-0 bg-white border-r border-slate-200 flex flex-col justify-between sticky top-0 h-screen z-30 select-none">
<div class="flex flex-col overflow-y-auto">
<!-- Logo Header -->
<div class="h-16 px-6 flex items-center gap-3 border-b border-slate-100">
<div class="w-9 h-9 rounded-xl bg-brand-50 flex items-center justify-center text-brand">
<span class="material-symbols-outlined text-[24px]">pets</span>
</div>
<div class="flex flex-col">
<span class="font-bold text-[15px] tracking-tight text-slate-900 leading-none">ADOPTLY</span>
<span class="text-[10px] tracking-widest text-brand font-semibold uppercase mt-0.5">Admin Portal</span>
</div>
</div>
<!-- Navigation Menu -->
<nav class="px-3 py-4 space-y-6 text-[13px]">
<!-- Main Section -->
<div>
<div class="px-3 mb-1.5 text-[11px] font-bold text-slate-400 uppercase tracking-wider">Main</div>
<div class="space-y-0.5">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">grid_view</span>
<span>Dashboard / Overview</span>
</a>
<a class="flex items-center justify-between px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">inbox</span>
<span>Inbox &amp; Alerts</span>
</div>
<span class="px-1.5 py-0.5 rounded text-[11px] font-semibold bg-brand-100 text-brand">3</span>
</a>
</div>
</div>
<!-- Adoption Management Section -->
<div>
<div class="px-3 mb-1.5 text-[11px] font-bold text-slate-400 uppercase tracking-wider">Adoption Management</div>
<div class="space-y-0.5">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-brand text-white font-medium shadow-sm transition-all" href="#">
<span class="material-symbols-outlined text-white">rate_review</span>
<span>Applications Review</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">handshake</span>
<span>Meet &amp; Greets</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">description</span>
<span>Adoption Contracts</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">check_circle</span>
<span>Ready for Adoption</span>
</a>
</div>
</div>
<!-- Pet Management Section -->
<div>
<div class="px-3 mb-1.5 text-[11px] font-bold text-slate-400 uppercase tracking-wider">Pet Management</div>
<div class="space-y-0.5">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">format_list_bulleted</span>
<span>Pet Listings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">medical_services</span>
<span>Intake &amp; Health</span>
</a>
</div>
</div>
<!-- User & Partner Management Section -->
<div>
<div class="px-3 mb-1.5 text-[11px] font-bold text-slate-400 uppercase tracking-wider">User &amp; Partner Management</div>
<div class="space-y-0.5">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">groups</span>
<span>Manage Users</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">badge</span>
<span>Staff Access</span>
</a>
</div>
</div>
<!-- Analytics & Reports Section -->
<div>
<div class="px-3 mb-1.5 text-[11px] font-bold text-slate-400 uppercase tracking-wider">Analytics &amp; Reports</div>
<div class="space-y-0.5">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">analytics</span>
<span>Adoption Metrics</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">file_download</span>
<span>Export Reports</span>
</a>
</div>
</div>
</nav>
</div>
<!-- Sidebar Footer -->
<div class="p-3 border-t border-slate-200 bg-slate-50/70 space-y-2">
<div class="flex items-center justify-between px-3 py-2 rounded-lg bg-white border border-slate-200/80 text-[11px]">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
<span class="font-medium text-slate-700">All Systems Operational</span>
</div>
<span class="font-mono text-slate-400 font-semibold">99.98%</span>
</div>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-600 hover:bg-white hover:text-brand transition-colors text-[13px] font-medium" href="#">
<span class="material-symbols-outlined text-brand text-[18px]">logout</span>
<span>Admin Sign Out</span>
</a>
</div>
</aside>
<!-- 2. MAIN CONTENT AREA (fluid, flex-1, overflow-y-auto) -->
<div class="flex-1 min-w-0 flex flex-col h-screen overflow-y-auto bg-[#f8f9fa]">
<!-- Top Header Navigation Bar -->
<header class="h-16 bg-white border-b border-slate-200 flex-shrink-0 px-8 flex items-center justify-between sticky top-0 z-20">
<!-- Breadcrumbs Navigation -->
<div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
<span class="hover:text-slate-800 cursor-pointer">ADMIN PORTAL</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">chevron_right</span>
<span class="text-slate-800 font-semibold">Dashboard</span>
</div>
<!-- Center & Right Utilities -->
<div class="flex items-center gap-6">
<!-- Search Bar -->
<div class="relative w-80">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[18px]">search</span>
<input class="w-full h-9 pl-9 pr-12 rounded-lg bg-slate-100/80 border-transparent text-xs text-slate-700 placeholder-slate-400 focus:bg-white focus:border-brand focus:ring-1 focus:ring-brand outline-none transition-all" placeholder="Search pets, applications, users..." type="text"/>
<span class="absolute right-2.5 top-2 px-1.5 py-0.5 rounded border border-slate-200 bg-white font-mono text-[10px] text-slate-400 select-none">⌘K</span>
</div>
<!-- Notification & Help Icons -->
<div class="flex items-center gap-2 text-slate-500">
<button class="relative p-2 rounded-lg hover:bg-slate-100 hover:text-slate-700 transition-colors">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-4 h-4 bg-brand text-white font-mono text-[10px] font-bold rounded-full flex items-center justify-center leading-none">4</span>
</button>
<button class="p-2 rounded-lg hover:bg-slate-100 hover:text-slate-700 transition-colors">
<span class="material-symbols-outlined text-[20px]">help</span>
</button>
</div>
<div class="h-6 w-px bg-slate-200"></div>
<!-- User Profile -->
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
<!-- Breadcrumb & SLA Queue Indicator Row -->
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5 text-xs text-slate-400">
<span class="hover:text-slate-700 cursor-pointer">Admin Portal</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="hover:text-slate-700 cursor-pointer">Adoption Management</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-brand font-semibold">Applications Review</span>
</div>
<div class="flex items-center gap-3 text-xs">
<div class="flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 border border-slate-200/60 font-mono text-slate-700">
<span class="w-2 h-2 rounded-full bg-brand animate-ping"></span>
<span class="font-bold">28</span>
<span class="text-slate-500 font-sans">Active in Intake Queue</span>
</div>
<div class="h-3.5 w-px bg-slate-300"></div>
<span class="font-mono text-slate-500">SLA Target: &lt; 48 hrs</span>
</div>
</div>
<!-- Page Title & Operational Action Buttons -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-3">
<h1 class="text-2xl font-bold tracking-tight text-slate-900">Adoption Workflow</h1>
<span class="px-2.5 py-0.5 rounded text-[11px] font-bold tracking-wider uppercase bg-brand-100 text-brand">Live Pipeline</span>
</div>
<p class="text-xs text-slate-500 mt-1">
              Review, verify qualifications, and advance live adopter applications across all affiliated municipal shelters.
            </p>
</div>
<div class="flex items-center gap-2.5">
<button class="px-3.5 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-semibold hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-slate-500 text-[18px]">checklist</span>
<span>Batch Actions</span>
</button>
<button class="px-3.5 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-semibold hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-slate-500 text-[18px]">file_download</span>
<span>Export Queue CSV</span>
</button>
<button class="px-4 py-2 rounded-lg bg-brand text-white text-xs font-semibold hover:bg-brand-600 transition-all flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-white text-[18px]">add</span>
<span>+ Manual Application</span>
</button>
</div>
</div>
<!-- Pipeline Stages Tabs -->
<div class="flex items-center gap-2 p-1.5 bg-slate-200/60 rounded-xl overflow-x-auto text-xs font-medium">
<button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-white text-slate-900 font-semibold shadow-sm transition-all">
<span class="material-symbols-outlined text-brand text-[18px]">rate_review</span>
<span>1. Review Applications</span>
<span class="px-1.5 py-0.5 rounded text-[11px] bg-brand text-white font-mono font-bold">12</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-white/60 transition-colors">
<span class="material-symbols-outlined text-slate-400 text-[18px]">verified_user</span>
<span>2. Verify Documents</span>
<span class="px-1.5 py-0.5 rounded text-[11px] bg-slate-300/60 text-slate-600 font-mono font-bold">7</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-white/60 transition-colors">
<span class="material-symbols-outlined text-slate-400 text-[18px]">calendar_add_on</span>
<span>3. Schedule Interviews</span>
<span class="px-1.5 py-0.5 rounded text-[11px] bg-slate-300/60 text-slate-600 font-mono font-bold">5</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-white/60 transition-colors">
<span class="material-symbols-outlined text-slate-400 text-[18px]">inventory_2</span>
<span>4. Record Adoptions</span>
<span class="px-1.5 py-0.5 rounded text-[11px] bg-slate-300/60 text-slate-600 font-mono font-bold">4</span>
</button>
</div>
<!-- Filter & Control Toolbar -->
<div class="bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-sm flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-3 text-xs">
<!-- Applicant Search -->
<div class="relative flex-1 max-w-md">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[18px]">search</span>
<input class="w-full h-9 pl-9 pr-8 rounded-lg bg-slate-50 border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:bg-white focus:border-brand focus:ring-1 focus:ring-brand outline-none" type="text" value="Marcus Vance"/>
<button class="absolute right-2.5 top-2.5 text-slate-400 hover:text-slate-600">
<span class="material-symbols-outlined text-[16px]">cancel</span>
</button>
</div>
<!-- Dropdowns & Tags Filter Group -->
<div class="flex items-center gap-2 flex-wrap">
<!-- Species Filter -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-100 transition-colors">
<span class="text-slate-400">Species:</span>
<span class="font-medium">All</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
<!-- Shelter Filter -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-100 transition-colors">
<span class="text-slate-400">Shelter:</span>
<span class="font-medium">Austin Metro East</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
<!-- SLA Urgent Tag -->
<div class="flex items-center gap-1.5 px-3 h-9 rounded-lg bg-brand-50 border border-brand-200 text-brand font-medium cursor-pointer hover:bg-brand-100 transition-colors">
<span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
<span>Urgent (&gt;48h in queue)</span>
<span class="material-symbols-outlined text-[14px]">close</span>
</div>
<!-- Sort Filter -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-100 transition-colors">
<span class="text-slate-400">Sort:</span>
<span class="font-medium">Oldest First (FIFO)</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">swap_vert</span>
</div>
</div>
</div>
<!-- Two-Column Primary Workspace Grid -->
<div class="grid grid-cols-12 gap-6 items-start">
<!-- LEFT COLUMN: Applications Review Table (Col 7) -->
<div class="col-span-12 xl:col-span-7 bg-white rounded-xl border border-slate-200/80 shadow-sm overflow-hidden flex flex-col">
<!-- Table Header Utility -->
<div class="px-4 py-3 bg-slate-50/80 border-b border-slate-200 flex items-center justify-between text-xs">
<div class="flex items-center gap-2 text-slate-500">
<span>Showing <strong class="text-slate-800">1 - 5</strong> of 12 unassigned / pending review</span>
<span class="w-1 h-1 rounded-full bg-slate-300"></span>
<span class="text-brand font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[15px]">timer</span> 3 Breached SLA
                </span>
</div>
<div class="flex items-center gap-1">
<button class="p-1 rounded text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors" title="Refresh queue">
<span class="material-symbols-outlined text-[16px]">sync</span>
</button>
<button class="p-1 rounded text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors" title="Density layout">
<span class="material-symbols-outlined text-[16px]">density_medium</span>
</button>
</div>
</div>
<!-- Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse text-xs">
<thead>
<tr class="bg-slate-100/70 border-b border-slate-200 text-[11px] font-bold text-slate-400 uppercase tracking-wider h-9">
<th class="pl-4 pr-2 py-2.5 w-8">
<input class="rounded border-slate-300 text-brand focus:ring-brand accent-brand" type="checkbox"/>
</th>
<th class="px-3 py-2.5">APPLICANT</th>
<th class="px-3 py-2.5">PET REQUESTED</th>
<th class="px-3 py-2.5">QUEUE AGE / SLA</th>
<th class="px-3 py-2.5">STATUS</th>
<th class="px-3 py-2.5">REVIEWER</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-slate-700">
<!-- Row 1: Marcus Vance (Selected) -->
<tr class="bg-brand-50/40 hover:bg-brand-50/70 transition-colors cursor-pointer border-l-4 border-brand">
<td class="pl-3 pr-2 py-3.5 align-middle">
<input checked="" class="rounded border-slate-300 text-brand focus:ring-brand accent-brand" type="checkbox"/>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Marcus Vance</span>
<span class="text-slate-400 font-mono text-[11px]">marcus.vance@gmail.com</span>
<span class="text-slate-400 text-[11px] flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[12px]">location_on</span> Austin, TX
                        </span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0 border border-slate-200">
<img alt="Bella the cat" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5IBV94ztqQ7kY2-50IUJxIaxVKF1hvYt1TQKgJX10gugt3woLsPjAhXbftCEq-CnqcTyl8iwv5i62l71Th-qeIm969X0dhz5dO7WVxy5pA2LFHspP8QWYqTrdfyOHSgPMdWCnrsEI2X6490voi84Mcw4MbwcZgNfq-MPc00uiHUn-Sp-19drGbot4VJT6M-ZaCiEuYNy06K0kUL_Fagh0ZdxoDeINoc_tI71lY2owC4feQ9N-lHBf6g"/>
</div>
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Bella</span>
<span class="text-[11px] text-slate-400">DSH Mix • 2y</span>
<span class="font-mono text-[10px] text-brand font-semibold">#CAT-8921</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 22, 2026</span>
<span class="mt-1 px-1.5 py-0.5 rounded text-[10px] font-bold bg-brand-100 text-brand w-fit">48h (Urgent)</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                        Under Review
                      </span>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-slate-800 text-white font-mono text-[10px] flex items-center justify-center font-bold">
                          SK
                        </div>
<span class="text-slate-800 font-medium">Sarah K.</span>
</div>
</td>
</tr>
<!-- Row 2: Elena Rostova -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="pl-3 pr-2 py-3.5 align-middle">
<input class="rounded border-slate-300 text-brand focus:ring-brand accent-brand" type="checkbox"/>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Elena Rostova</span>
<span class="text-slate-400 font-mono text-[11px]">e.rostova@icloud.com</span>
<span class="text-slate-400 text-[11px] flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[12px]">location_on</span> Round Rock, TX
                        </span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0 border border-slate-200">
<img alt="Barnaby retriever" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBn8Tla1njFkrWH6fyJ5U9C1Bzn3z1OgbGVAK229dHfFQOzEVcXk_l-u7q7iWUHpf524wVWeZd_it4mHUrtHtPMioYC7GUQgNWhIn51fk1_PKRBCm0BQuqSGb8T_Wjj8tEhi39nHiulRAgMLm8grPqrV5Ic3lYgpa6M8g2WOnWV0dGnWOoSheGxA2oRanHctJt3uxz2mKVlnBsH3NWyXq7hl-Ab47Tn_ODGNEfn33A0XmhUJHSubL6HBg"/>
</div>
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Barnaby</span>
<span class="text-[11px] text-slate-400">Retriever • 5mo</span>
<span class="font-mono text-[10px] text-slate-500 font-medium">#DOG-4410</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 23, 2026</span>
<span class="text-slate-400 text-[10px] mt-0.5">28h in queue</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                        Pending Review
                      </span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="text-slate-400 italic">Unassigned</span>
</td>
</tr>
<!-- Row 3: David Chen -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="pl-3 pr-2 py-3.5 align-middle">
<input class="rounded border-slate-300 text-brand focus:ring-brand accent-brand" type="checkbox"/>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">David Chen</span>
<span class="text-slate-400 font-mono text-[11px]">dchen.design@work.net</span>
<span class="text-slate-400 text-[11px] flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[12px]">location_on</span> Cedar Park, TX
                        </span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0 border border-slate-200">
<img alt="Jasper collie" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-0SYiOaVSFiln4okFMLw_XqleuRFrRGt-tKJptXchDZEo-WG8y_Y96-8b60sK0SpWhVLxK2CDeTfBzDlAjYoDW_LxG1yycPszruKg0ldciQP_YFGXhPUSTMxph0PJRmqSXc8SSIqJdSuJrQG_MEy4GWUZ8UO-Ko0ajguG9-mV825JQRiapaK5sqqCO3_867JlKZEeiSY_T-Gf5vBSelTjTG_ZwYMhSs4AWdO9bQ4U4y9gyFPd43vkeA"/>
</div>
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Jasper</span>
<span class="text-[11px] text-slate-400">Collie Mix • 1y</span>
<span class="font-mono text-[10px] text-slate-500 font-medium">#DOG-1198</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 21, 2026</span>
<span class="mt-1 px-1.5 py-0.5 rounded text-[10px] font-bold bg-rose-100 text-rose-700 w-fit">72h (Overdue)</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-50 text-rose-700 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                        Missing Docs
                      </span>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-slate-600 text-white font-mono text-[10px] flex items-center justify-center font-bold">
                          RM
                        </div>
<span class="text-slate-800 font-medium">Rafael M.</span>
</div>
</td>
</tr>
<!-- Row 4: Maya Patel -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="pl-3 pr-2 py-3.5 align-middle">
<input class="rounded border-slate-300 text-brand focus:ring-brand accent-brand" type="checkbox"/>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Maya Patel</span>
<span class="text-slate-400 font-mono text-[11px]">mpatel@austin-tech.co</span>
<span class="text-slate-400 text-[11px] flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[12px]">location_on</span> Austin, TX (Central)
                        </span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0 border border-slate-200 flex items-center justify-center text-slate-400">
<span class="material-symbols-outlined text-[22px]">cruelty_free</span>
</div>
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Mochi</span>
<span class="text-[11px] text-slate-400">Rabbit (Mini Lop)</span>
<span class="font-mono text-[10px] text-slate-500 font-medium">#SML-3012</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 23, 2026</span>
<span class="text-slate-400 text-[10px] mt-0.5">16h in queue</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        Ready to Schedule
                      </span>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-slate-800 text-white font-mono text-[10px] flex items-center justify-center font-bold">
                          SK
                        </div>
<span class="text-slate-800 font-medium">Sarah K.</span>
</div>
</td>
</tr>
<!-- Row 5: Jordan Brooks -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer border-l-4 border-transparent">
<td class="pl-3 pr-2 py-3.5 align-middle">
<input class="rounded border-slate-300 text-brand focus:ring-brand accent-brand" type="checkbox"/>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Jordan Brooks</span>
<span class="text-slate-400 font-mono text-[11px]">jbrooks77@outlook.com</span>
<span class="text-slate-400 text-[11px] flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[12px]">location_on</span> Pflugerville, TX
                        </span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0 border border-slate-200">
<img alt="Copper hound" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyc6T2lIAkSPhLI6cRbguYdY2r7x-X4E0SuEHVbpVqml0LVI2npfgPuxa5bPo7azxNVmuuSe7wcxoNTumi2m4AUeylDe1huBfKzA9EZtyMGRsqgpprFcG3_P-BxBsULGJS7jp-_QstDJJ_fwX5KraucPuLBvWn2qzvQC4jGplDrh4K2Ymdyms1OGZS20geNuIO3HJRButBKFsmnEP7cTd76xnA8vh9jNe1Z0zKPSMJwxhuopeBSRhXlw"/>
</div>
<div class="flex flex-col">
<span class="font-semibold text-slate-900">Copper</span>
<span class="text-[11px] text-slate-400">Hound Mix • 4y</span>
<span class="font-mono text-[10px] text-slate-500 font-medium">#DOG-9023</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 24, 2026</span>
<span class="text-slate-400 text-[10px] mt-0.5">4h in queue</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                        Pending Review
                      </span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="text-slate-400 italic">Unassigned</span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="px-4 py-3 bg-slate-50/80 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500 mt-auto">
<div class="flex items-center gap-2">
<span>Rows per page:</span>
<select class="bg-white border border-slate-200 rounded px-2 py-1 text-slate-700 font-mono text-xs focus:ring-1 focus:ring-brand outline-none">
<option selected="">10</option>
<option>25</option>
<option>50</option>
</select>
</div>
<div class="flex items-center gap-3">
<span class="font-mono">Page 1 of 3</span>
<div class="flex items-center gap-1">
<button class="p-1.5 rounded bg-slate-100 text-slate-400 cursor-not-allowed" disabled="">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</button>
<button class="p-1.5 rounded bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition-colors shadow-xs">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- RIGHT COLUMN: Inspection Dossier Drawer (Col 5) -->
<div class="col-span-12 xl:col-span-5 bg-white rounded-xl border border-slate-200/80 shadow-md flex flex-col overflow-hidden">
<!-- Drawer Header Bar -->
<div class="p-4 bg-slate-50/90 border-b border-slate-200 flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="font-mono text-xs font-bold text-brand">#APP-9402</span>
<span class="px-2 py-0.5 rounded text-[10px] font-bold tracking-wider uppercase bg-rose-100 text-rose-700">
                    URGENT SLA
                  </span>
</div>
<h2 class="text-lg font-bold text-slate-900 mt-1">Marcus Vance</h2>
<div class="flex items-center gap-2 mt-1 text-xs text-slate-500">
<span>Target:</span>
<div class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-white border border-slate-200 font-medium text-slate-800">
<span class="material-symbols-outlined text-[14px] text-brand">pets</span>
<span>Bella (Cat #A8921)</span>
</div>
<span class="font-mono text-[11px] text-slate-400">• 48h ago</span>
</div>
</div>
<div class="flex items-center gap-1 text-slate-400">
<button class="p-1.5 rounded hover:bg-slate-200/60 hover:text-slate-700 transition-colors" title="Expand view">
<span class="material-symbols-outlined text-[18px]">open_in_full</span>
</button>
<button class="p-1.5 rounded hover:bg-slate-200/60 hover:text-slate-700 transition-colors" title="Close dossier">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
</div>
<!-- Adoptly Compatibility Index Banner -->
<div class="px-4 py-3 bg-brand-50/60 border-b border-brand-100 flex items-center justify-between text-xs">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-brand text-[22px]">verified</span>
<div>
<span class="font-bold text-slate-900 block">Adoptly Compatibility Index: 94% Match</span>
<span class="text-[11px] text-slate-500">Household structure matches Bella's low-stress temperament profile.</span>
</div>
</div>
<span class="px-2 py-0.5 rounded font-mono font-bold text-[11px] bg-brand text-white">HIGH</span>
</div>
<!-- Drawer Tab Bar -->
<div class="flex items-center border-b border-slate-200 px-4 pt-2 gap-2 text-xs font-medium bg-white">
<button class="pb-2.5 px-2 border-b-2 border-brand text-brand font-bold flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">quiz</span>
<span>Questionnaire</span>
</button>
<button class="pb-2.5 px-2 text-slate-500 hover:text-slate-800 flex items-center gap-1.5 transition-colors">
<span class="material-symbols-outlined text-[16px]">folder_open</span>
<span>Documents (3/3)</span>
</button>
<button class="pb-2.5 px-2 text-slate-500 hover:text-slate-800 flex items-center gap-1.5 transition-colors">
<span class="material-symbols-outlined text-[16px]">video_chat</span>
<span>Interview</span>
</button>
<button class="pb-2.5 px-2 text-slate-500 hover:text-slate-800 flex items-center gap-1.5 transition-colors">
<span class="material-symbols-outlined text-[16px]">description</span>
<span>Agreement</span>
</button>
</div>
<!-- Scrollable Drawer Body -->
<div class="p-4 space-y-4 max-h-[580px] overflow-y-auto text-xs">
<!-- Housing & Environment Card -->
<div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-2">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">HOUSING &amp; ENVIRONMENT</span>
<span class="px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 text-[10px] font-bold">Verified Homeowner</span>
</div>
<div class="grid grid-cols-2 gap-2.5 pt-1">
<div>
<span class="text-[11px] text-slate-400 block">Home Type</span>
<span class="font-semibold text-slate-900 text-xs">Single Family Home</span>
</div>
<div>
<span class="text-[11px] text-slate-400 block">Yard / Outdoor</span>
<span class="font-semibold text-slate-900 text-xs">Fenced Yard (6ft privacy)</span>
</div>
<div>
<span class="text-[11px] text-slate-400 block">Occupancy Details</span>
<span class="text-slate-800 text-xs">2 Adults, 1 Child (Age 7)</span>
</div>
<div>
<span class="text-[11px] text-slate-400 block">Landlord Restrictions</span>
<span class="text-slate-800 text-xs">None (Owned Deed on File)</span>
</div>
</div>
</div>
<!-- Pet Ownership Track Record Card -->
<div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-2">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">PET OWNERSHIP TRACK RECORD</span>
<p class="text-slate-700 leading-relaxed text-xs">
                  "Has cared for domestic cats for 8+ years. Previous cat lived to 16 years and received regular wellness checkups and senior palliative care."
                </p>
<div class="p-2.5 bg-white rounded-lg border border-slate-200 flex items-center justify-between mt-1">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-brand text-[20px]">local_hospital</span>
<div class="flex flex-col">
<span class="font-semibold text-slate-900 text-xs">Austin Central Animal Clinic</span>
<span class="text-[10px] font-mono text-slate-400">Ref #VET-8820 • Dr. Patricia Gomez</span>
</div>
</div>
<span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 border border-emerald-200 text-[10px] font-bold">Good Standing</span>
</div>
</div>
<!-- Applicant Personal Statement Card -->
<div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-1.5">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">APPLICANT PERSONAL STATEMENT</span>
<div class="text-slate-700 italic bg-white p-3 rounded-lg border border-slate-200 leading-relaxed text-xs">
                  "Looking for an affectionate indoor companion that gets along well with gentle children. Bella has been in our thoughts since we visited the foster page last week."
                </div>
</div>
<!-- Financial Feasibility Card -->
<div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-1.5">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">FINANCIAL &amp; CARE READINESS</span>
<span class="font-mono text-xs font-bold text-brand bg-brand-50 px-2 py-0.5 rounded border border-brand-200">Tier A Approved</span>
</div>
<p class="text-slate-700 leading-relaxed text-xs">
                  Full-time Senior Software Engineer (Dell Technologies). Confirms recurring pet health insurance policy and emergency medical cushion ($3,000+).
                </p>
</div>
<!-- Document Verification Status -->
<div class="space-y-2">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">UPLOADED DOCUMENTS STATUS</span>
<div class="space-y-1.5">
<div class="flex items-center justify-between p-2.5 bg-slate-50 rounded-lg border border-slate-200">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-500 text-[18px]">badge</span>
<div>
<span class="font-semibold text-slate-800 block text-xs">Government Photo ID</span>
<span class="font-mono text-[10px] text-slate-400">TX-DL_MarcusVance.pdf</span>
</div>
</div>
<span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]">check</span> Verified
                    </span>
</div>
<div class="flex items-center justify-between p-2.5 bg-slate-50 rounded-lg border border-slate-200">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-500 text-[18px]">receipt_long</span>
<div>
<span class="font-semibold text-slate-800 block text-xs">Proof of Home Ownership / Deed</span>
<span class="font-mono text-[10px] text-slate-400">TravisCounty_Records_Deed.pdf</span>
</div>
</div>
<span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]">check</span> Verified
                    </span>
</div>
<div class="flex items-center justify-between p-2.5 bg-slate-50 rounded-lg border border-slate-200">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-500 text-[18px]">photo_camera</span>
<div>
<span class="font-semibold text-slate-800 block text-xs">Home Living Space Photos (3)</span>
<span class="font-mono text-[10px] text-slate-400">Patio_Living_Interior.zip (4.2 MB)</span>
</div>
</div>
<div class="flex items-center gap-1">
<button class="px-2 py-1 rounded bg-white border border-slate-200 text-slate-700 text-[11px] font-medium hover:bg-slate-100 transition-colors">
                        View
                      </button>
<button class="px-2 py-1 rounded bg-slate-100 text-slate-700 text-[11px] font-semibold hover:bg-slate-200 transition-colors">
                        Verify
                      </button>
</div>
</div>
</div>
</div>
</div>
<!-- Drawer Operational Action Footer -->
<div class="p-4 bg-slate-50 border-t border-slate-200 space-y-2 mt-auto">
<div class="flex items-center justify-between gap-2">
<button class="px-3 py-2 rounded-lg bg-white border border-slate-200 text-rose-600 text-xs font-semibold hover:bg-rose-50 hover:border-rose-200 transition-colors flex items-center gap-1 shadow-xs">
<span class="material-symbols-outlined text-[16px]">close</span>
<span>Reject</span>
</button>
<button class="px-3 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-medium hover:bg-slate-100 transition-colors flex items-center gap-1 shadow-xs">
<span class="material-symbols-outlined text-slate-400 text-[16px]">mail</span>
<span>Request Clarification</span>
</button>
<button class="flex-1 px-4 py-2 rounded-lg bg-brand text-white text-xs font-bold hover:bg-brand-600 transition-all shadow-sm flex items-center justify-center gap-1.5">
<span>Approve &amp; Advance to Docs</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
<div class="flex items-center justify-between text-[11px] text-slate-400 px-1 pt-1">
<span>Assigned to: <strong class="text-slate-800 font-semibold">Sarah K. (Intake Lead)</strong></span>
<span class="cursor-pointer text-brand hover:underline font-medium">Reassign Reviewer</span>
</div>
</div>
</div>
</div>
<!-- 3. BOTTOM WORKSPACE METRIC & VELOCITY BAR -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-2">
<!-- Card 1 -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-xs flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">AVG REVIEW TURNAROUND</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">26.4 hrs</span>
<span class="text-[11px] text-emerald-600 font-medium flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[13px]">trending_down</span> 4.2h faster than last week
              </span>
</div>
<div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand">
<span class="material-symbols-outlined text-[22px]">speed</span>
</div>
</div>
<!-- Card 2 -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-xs flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">APPROVED THIS WEEK</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">38 Pets</span>
<span class="text-[11px] text-slate-400 mt-0.5">14 Dogs • 21 Cats • 3 Small</span>
</div>
<div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined text-[22px]">task_alt</span>
</div>
</div>
<!-- Card 3 -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-xs flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">PENDING MEET &amp; GREETS</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">19 Scheduled</span>
<span class="text-[11px] text-brand font-medium mt-0.5">9 slots available today</span>
</div>
<div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-brand">
<span class="material-symbols-outlined text-[22px]">handshake</span>
</div>
</div>
<!-- Card 4 -->
<div class="p-4 rounded-xl bg-white border border-slate-200/80 shadow-xs flex items-center justify-between">
<div class="flex flex-col">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">SYSTEM THROUGHPUT</span>
<span class="text-xl font-bold text-slate-900 mt-0.5">91.8%</span>
<span class="text-[11px] text-slate-400 mt-0.5">Target SLA Compliance (&lt;48h)</span>
</div>
<div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-600">
<span class="material-symbols-outlined text-[22px]">analytics</span>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>
