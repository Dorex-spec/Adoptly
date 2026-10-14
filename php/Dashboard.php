<!DOCTYPE html>

<html class="h-full" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Adoptly Admin Portal - Dashboard &amp; Overview</title>
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
<!-- Active state matching SCREEN_3 active nav item -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-brand text-white font-medium shadow-sm transition-all" href="#">
<span class="material-symbols-outlined text-white">grid_view</span>
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
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-slate-400">rate_review</span>
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
<!-- 2. MAIN CONTENT AREA -->
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
<!-- Welcome Header & Action Bar -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-3">
<h1 class="text-2xl font-bold tracking-tight text-slate-900">Welcome back, Admin</h1>
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-slate-100 border border-slate-200/60 font-mono text-slate-700 text-[11px]">
<span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
              LIVE PORTAL
            </span>
</div>
<p class="text-xs text-slate-500 mt-1">
            Here is what requires your attention across shelters and adopter queues today. • <span class="text-slate-600 font-medium">Last updated 2 mins ago</span>
</p>
</div>
<!-- Action Bar: Date selector, Refresh button, + Add New Pet -->
<div class="flex items-center gap-2.5">
<div class="flex items-center gap-1.5 px-3 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-semibold shadow-sm cursor-pointer hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-slate-500 text-[16px]">calendar_today</span>
<span>Today: Oct 24, 2026</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
<button class="px-3.5 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 text-xs font-semibold hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center gap-1.5 shadow-sm" title="Refresh data" type="button">
<span class="material-symbols-outlined text-slate-500 text-[18px]">refresh</span>
<span>Refresh</span>
</button>
<button class="px-4 py-2 rounded-lg bg-brand text-white text-xs font-semibold hover:bg-brand-600 transition-all flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-white text-[18px]">add</span>
<span>+ Add New Pet</span>
</button>
</div>
</div>
<!-- Main Content 2-Column Grid -->
<div class="grid grid-cols-12 gap-6 items-start">
<!-- LEFT COLUMN: Action Items & Recent Activity (Col 8) -->
<div class="col-span-12 xl:col-span-8 bg-white rounded-xl border border-slate-200/80 shadow-sm overflow-hidden flex flex-col">
<!-- Card Header & View All Link -->
<div class="px-6 py-4 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div>
<h2 class="text-base font-bold text-slate-900">Action Items &amp; Recent Activity</h2>
<p class="text-xs text-slate-500 mt-0.5">High-priority operational queue items across intake, licensing, and screening</p>
</div>
<a class="text-xs font-semibold text-brand hover:underline flex items-center gap-1 self-start sm:self-center" href="#">
<span>View All 24 Tasks</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Filter Row Toolbar -->
<div class="p-3.5 bg-slate-50/60 border-b border-slate-200/80 flex flex-col md:flex-row items-stretch md:items-center gap-2.5 text-xs">
<!-- Search tasks input -->
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[18px]">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded-lg bg-white border border-slate-200 text-xs text-slate-800 placeholder-slate-400 focus:border-brand focus:ring-1 focus:ring-brand outline-none transition-all" placeholder="Search tasks, applicants, pet IDs..." type="text"/>
</div>
<!-- Task filter dropdown -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-white border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-50 transition-colors">
<span class="text-slate-400">Task:</span>
<span class="font-medium">All Types</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
<!-- Status filter dropdown -->
<div class="flex items-center gap-1 px-3 h-9 rounded-lg bg-white border border-slate-200 text-slate-700 cursor-pointer hover:bg-slate-50 transition-colors">
<span class="text-slate-400">Status:</span>
<span class="font-medium">All Active</span>
<span class="material-symbols-outlined text-slate-400 text-[16px]">arrow_drop_down</span>
</div>
</div>
<!-- Data Table styled identically to SCREEN_3 -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse text-xs">
<thead>
<tr class="bg-slate-100/70 border-b border-slate-200 text-[11px] font-bold text-slate-400 uppercase tracking-wider h-9">
<th class="px-4 py-2.5">SUBJECT / ENTITY</th>
<th class="px-3 py-2.5">TASK TYPE</th>
<th class="px-3 py-2.5">DATE SUBMITTED</th>
<th class="px-3 py-2.5">STATUS</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-slate-700">
<!-- Row 1: Marcus Vance -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-slate-100 text-slate-700 font-mono font-bold text-xs flex items-center justify-center border border-slate-200 flex-shrink-0">
                        MV
                      </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Marcus Vance</span>
<span class="text-slate-400 text-[11px] flex items-center gap-1 mt-0.5">
                          Target: <span class="font-medium text-slate-600">Bella (Cat #A8921)</span>
</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-medium text-slate-900">Adoption Application</span>
<span class="text-slate-400 text-[11px]">Primary Questionnaire</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="font-mono text-[11px] font-medium text-slate-900">Today, 09:15 AM</span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                      Pending Review
                    </span>
</td>
</tr>
<!-- Row 2: Oakridge Animal Rescue -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-brand-50 text-brand font-mono font-bold text-xs flex items-center justify-center border border-brand-200 flex-shrink-0">
                        OA
                      </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Oakridge Animal Rescue</span>
<span class="text-slate-400 text-[11px] flex items-center gap-1 mt-0.5">
                          Partner • Dallas, TX
                        </span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-medium text-slate-900">Shelter Partnership</span>
<span class="text-slate-400 text-[11px]">501(c)(3) State License</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="font-mono text-[11px] font-medium text-slate-900">Yesterday, 4:40 PM</span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-50 text-rose-700 border border-rose-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                      Action Required
                    </span>
</td>
</tr>
<!-- Row 3: Elena Rostova -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-blue-50 text-blue-600 font-mono font-bold text-xs flex items-center justify-center border border-blue-200 flex-shrink-0">
                        ER
                      </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Elena Rostova</span>
<span class="text-slate-400 text-[11px] flex items-center gap-1 mt-0.5">
                          Target: <span class="font-medium text-slate-600">Beau (Dog #D402)</span>
</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-medium text-slate-900">Virtual Home Check</span>
<span class="text-slate-400 text-[11px]">Assigned: Sarah K. (Coordinator)</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 23, 2026</span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                      Interview Scheduled
                    </span>
</td>
</tr>
<!-- Row 4: David & Clara Lin -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-purple-50 text-purple-700 font-mono font-bold text-xs flex items-center justify-center border border-purple-200 flex-shrink-0">
                        DL
                      </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">David &amp; Clara Lin</span>
<span class="text-slate-400 text-[11px] flex items-center gap-1 mt-0.5">
                          Target: <span class="font-medium text-slate-600">Polly (Cat #A9011)</span>
</span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-medium text-slate-900">Document Verification</span>
<span class="text-slate-400 text-[11px]">Proof of Income &amp; Lease Approval</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 22, 2026</span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-purple-50 text-purple-700 border border-purple-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                      Documents Uploaded
                    </span>
</td>
</tr>
<!-- Row 5: Silver Springs Shelter -->
<tr class="hover:bg-slate-50 transition-colors cursor-pointer">
<td class="px-4 py-3.5 align-middle">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-emerald-50 text-emerald-700 font-mono font-bold text-xs flex items-center justify-center border border-emerald-200 flex-shrink-0">
                        SS
                      </div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-[13px]">Silver Springs Shelter</span>
<span class="text-slate-400 text-[11px] flex items-center gap-1 mt-0.5">
                          Partner • 12 Pets Batch Intake
                        </span>
</div>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<div class="flex flex-col">
<span class="font-medium text-slate-900">Medical Clearance Sync</span>
<span class="text-slate-400 text-[11px]">Rabies &amp; Microchip Registry</span>
</div>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="font-mono text-[11px] font-medium text-slate-900">Oct 21, 2026</span>
</td>
<td class="px-3 py-3.5 align-middle">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 font-medium text-[11px]">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                      Completed / Approved
                    </span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Footer Pagination -->
<div class="px-4 py-3 bg-slate-50/80 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500 mt-auto">
<span>Showing <strong class="text-slate-800">5</strong> of 24 urgent items</span>
<div class="flex items-center gap-3">
<span class="font-mono">Page 1 of 5</span>
<div class="flex items-center gap-1">
<button class="p-1.5 rounded bg-slate-100 text-slate-400 cursor-not-allowed" disabled="" type="button">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</button>
<button class="p-1.5 rounded bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- RIGHT COLUMN: Tactical Action Widgets (Col 4) -->
<div class="col-span-12 xl:col-span-4 flex flex-col gap-6">
<!-- Card 1: Upcoming Interviews (3 Today) -->
<div class="bg-white rounded-xl border border-slate-200/80 shadow-sm p-5 flex flex-col">
<div class="flex items-center justify-between pb-3 border-b border-slate-100">
<div class="flex items-center gap-2">
<h3 class="text-sm font-bold text-slate-900">Upcoming Interviews</h3>
<span class="px-2 py-0.5 rounded text-[10px] font-bold bg-blue-50 text-blue-700 font-mono">3 Today</span>
</div>
<a class="text-xs font-semibold text-brand hover:underline" href="#">Calendar</a>
</div>
<div class="flex flex-col gap-3 mt-3.5">
<!-- Item 1: Jordan Lee -->
<div class="p-3 rounded-lg bg-slate-50 border border-slate-200/80 flex flex-col gap-2">
<div class="flex items-center justify-between">
<span class="px-2 py-0.5 rounded bg-brand text-white font-mono text-[10px] font-bold">2:30 PM (in 45m)</span>
<a class="text-brand font-semibold text-xs flex items-center gap-0.5 hover:underline" href="#">
                    Join <span class="material-symbols-outlined text-[14px]">videocam</span>
</a>
</div>
<div>
<span class="font-bold text-slate-900 text-xs block">Jordan Lee</span>
<span class="text-[11px] text-slate-500">Applicant for <span class="font-medium text-slate-700">Max (Labrador)</span></span>
</div>
<div class="flex items-center justify-between text-[11px] text-slate-400 pt-1 border-t border-slate-200/60">
<span>Host: Sarah K.</span>
<span class="font-mono text-[10px]">ID: #IV-8821</span>
</div>
</div>
<!-- Item 2: Amara Chen -->
<div class="p-3 rounded-lg bg-slate-50 border border-slate-200/80 flex flex-col gap-2">
<div class="flex items-center justify-between">
<span class="px-2 py-0.5 rounded bg-slate-200 text-slate-700 font-mono text-[10px] font-bold">4:00 PM</span>
<a class="text-slate-600 font-semibold text-xs flex items-center gap-0.5 hover:text-slate-900" href="#">
                    Prep <span class="material-symbols-outlined text-[14px]">description</span>
</a>
</div>
<div>
<span class="font-bold text-slate-900 text-xs block">Amara Chen</span>
<span class="text-[11px] text-slate-500">Applicant for <span class="font-medium text-slate-700">Luna (Siamese)</span></span>
</div>
<div class="flex items-center justify-between text-[11px] text-slate-400 pt-1 border-t border-slate-200/60">
<span>Host: Marcus T.</span>
<span class="font-mono text-[10px]">ID: #IV-8824</span>
</div>
</div>
<!-- Item 3: Robert Evans -->
<div class="p-3 rounded-lg bg-slate-50/60 border border-slate-200/60 flex flex-col gap-2">
<div class="flex items-center justify-between">
<span class="px-2 py-0.5 rounded bg-slate-100 text-slate-500 font-mono text-[10px] font-semibold">Tomorrow, 10:00 AM</span>
<span class="material-symbols-outlined text-[16px] text-slate-400">schedule</span>
</div>
<div>
<span class="font-bold text-slate-800 text-xs block">Robert Evans</span>
<span class="text-[11px] text-slate-500">Foster Assessment • <span class="text-amber-700 font-medium">Pending Docs</span></span>
</div>
</div>
</div>
</div>
<!-- Card 2: System Health & Sync (ALL OK) -->
<div class="bg-white rounded-xl border border-slate-200/80 shadow-sm p-5 flex flex-col">
<div class="flex items-center justify-between pb-3 border-b border-slate-100">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
<h3 class="text-sm font-bold text-slate-900">System Health &amp; Sync</h3>
</div>
<span class="font-mono text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">ALL OK</span>
</div>
<div class="flex flex-col gap-2.5 mt-3.5">
<!-- Item 1: Shelter API Feed -->
<div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 border border-slate-200/70">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[18px] text-emerald-600">check_circle</span>
<div class="flex flex-col">
<span class="text-xs font-semibold text-slate-900">Shelter API Feed (18/18)</span>
<span class="text-[10px] text-slate-400">Chameleon &amp; PetPoint endpoints live</span>
</div>
</div>
<span class="font-mono text-xs text-emerald-600 font-bold">99.9%</span>
</div>
<!-- Item 2: Doc Encryption Vault -->
<div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 border border-slate-200/70">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[18px] text-emerald-600">check_circle</span>
<div class="flex flex-col">
<span class="text-xs font-semibold text-slate-900">Doc Encryption Vault</span>
<span class="text-[10px] text-slate-400">AES-256 ID documents active</span>
</div>
</div>
<span class="font-mono text-[11px] text-emerald-600 font-bold">Secure</span>
</div>
<!-- Item 3: Database Snapshot -->
<div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 border border-slate-200/70">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[18px] text-blue-600">cloud_sync</span>
<div class="flex flex-col">
<span class="text-xs font-semibold text-slate-900">Database Snapshot</span>
<span class="text-[10px] text-slate-400">AWS RDS Multi-AZ Replication</span>
</div>
</div>
<span class="font-mono text-[11px] text-slate-400">10m ago</span>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>

