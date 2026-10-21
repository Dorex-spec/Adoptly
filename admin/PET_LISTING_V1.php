<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Adoptly Admin Portal - Pet Listings</title>
<!-- Google Fonts: Poppins & JetBrains Mono -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            brand: {
              main: '#F2F2F2',
              card: '#FFFFFF',
              dark: '#1F1F1F',
              coral: '#E05A4F',
              coralHover: '#c94940',
              coralSoft: '#FFE1DD',
              warmBeige: '#F7E9D7',
              green: '#4CAF50',
              red: '#E53935',
              border: '#E5E5E5'
            }
          },
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace']
          }
        }
      }
    }
  </script>
<style>
    body {
      background-color: #F2F2F2;
      color: #1F1F1F;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }
    .material-symbols-outlined {
      font-family: 'Material Symbols Outlined' !important;
      font-weight: normal;
      font-style: normal;
      font-size: 20px;
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
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #F2F2F2;
    }
    ::-webkit-scrollbar-thumb {
      background: #D1D5DB;
      border-radius: 3px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #9CA3AF;
    }
  </style>
</head>
<body class="bg-[#F2F2F2] text-[#1F1F1F] min-h-screen antialiased flex flex-col">
<!-- Fixed Left Sidebar -->
<?php require __DIR__ . '/admin_sidebar.php'; ?>
<!-- Main View Area (Offset by 64 Tailwind units = 256px) -->
<div class="pl-64 flex flex-col min-h-screen w-full">
<!-- Top Navigation Header -->
<header class="fixed top-0 left-64 right-0 h-14 bg-white border-b border-[#E5E5E5] z-40 px-6 flex items-center justify-between">
<!-- Breadcrumb -->
<div class="flex items-center gap-2">
<span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Admin Portal</span>
<span class="material-symbols-outlined text-[14px] text-gray-400">chevron_right</span>
<span class="text-[12px] font-bold text-[#1F1F1F]">Pet Listings</span>
</div>
<!-- Right Controls: Global Search, Quick Tools & Admin Avatar -->
<div class="flex items-center gap-5">
<!-- Quick Search -->
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-[18px] text-gray-400">search</span>
<input class="w-72 h-8 pl-9 pr-12 rounded-md bg-[#F2F2F2] border border-[#E5E5E5] text-[13px] text-[#1F1F1F] placeholder:text-gray-400 focus:outline-none focus:border-[#E05A4F] focus:bg-white transition-all" placeholder="Search pets, applications, users..." type="text"/>
<div class="absolute right-2 px-1.5 py-0.5 rounded border border-gray-300 bg-white font-mono text-[10px] text-gray-400 select-none">⌘K</div>
</div>
<!-- Notification & Help Icons -->
<div class="flex items-center gap-1.5">
<button class="relative p-2 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Notifications" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-4 h-4 bg-[#E05A4F] text-white font-mono text-[9px] font-bold rounded-full flex items-center justify-center leading-none">4</span>
</button>
<button class="p-2 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Help &amp; Support" type="button">
<span class="material-symbols-outlined text-[20px]">help</span>
</button>
</div>
<div class="h-6 w-px bg-gray-200"></div>
<!-- Super Administrator Profile -->
<div class="flex items-center gap-2.5 cursor-pointer group select-none">
<div class="w-8 h-8 rounded-full bg-[#E05A4F] flex items-center justify-center text-white text-[16px] font-semibold">
<span class="material-symbols-outlined text-[18px]">person</span>
</div>
<div class="flex flex-col text-left">
<span class="text-[12px] font-semibold text-[#1F1F1F] leading-tight group-hover:text-[#E05A4F] transition-colors">Admin User</span>
<span class="text-[11px] text-gray-500 leading-tight">Super Administrator</span>
</div>
<span class="material-symbols-outlined text-[18px] text-gray-400 group-hover:text-[#1F1F1F]">arrow_drop_down</span>
</div>
</div>
</header>
<!-- Main Content Container (Full Fluidity with max-w-[1600px] centered) -->
<main class="w-full pt-20 px-6 pb-12 flex-1">
<div class="w-full max-w-[1600px] mx-auto flex flex-col gap-6">
<!-- Top Title & Page Actions Row -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2 text-[11px] font-bold tracking-wider text-gray-400 uppercase">
<span>ADMIN PORTAL</span>
<span>/</span>
<span>PET MANAGEMENT</span>
<span>/</span>
<span class="text-[#E05A4F]">PET LISTINGS</span>
</div>
<div class="flex items-center gap-3">
<h1 class="text-2xl font-bold tracking-tight text-[#1F1F1F]">Pet Listings Management</h1>
<div class="flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-white border border-[#E5E5E5] shadow-xs">
<span class="w-2 h-2 rounded-full bg-[#4CAF50] animate-pulse"></span>
<span class="font-mono text-[11px] text-gray-600">Live Sync: 142 Active Syncs</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex items-center gap-2.5 flex-wrap">
<button class="h-9 px-3.5 rounded-md bg-white border border-[#E5E5E5] hover:bg-gray-50 hover:text-[#1F1F1F] text-gray-700 text-[13px] font-medium flex items-center gap-1.5 shadow-xs transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">file_download</span>
<span>Export CSV / Report</span>
</button>
<button class="h-9 px-3.5 rounded-md bg-white border border-[#E5E5E5] hover:bg-gray-50 hover:text-[#1F1F1F] text-gray-700 text-[13px] font-medium flex items-center gap-1.5 shadow-xs transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">tune</span>
<span>Batch Actions</span>
<span class="material-symbols-outlined text-[16px]">expand_more</span>
</button>
<button class="h-9 px-4 rounded-md bg-[#E05A4F] hover:bg-[#c94940] text-white text-[13px] font-semibold flex items-center gap-1.5 shadow-xs transition-colors" type="button" onclick="window.location.href='ADD_PET_LISTING.php'">
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Add New Pet</span>
</button>
</div>
</div>
<!-- System Notification Banner: Auto-Locking Active -->
<div class="flex items-center justify-between px-4 py-3 rounded-lg bg-[#FFE1DD]/60 border border-[#FFE1DD] text-[#1F1F1F]">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-[#FFE1DD] flex items-center justify-center text-[#E05A4F] flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">lock_reset</span>
</div>
<div class="flex items-center gap-2 text-[13px] flex-wrap">
<span class="font-bold text-[#1F1F1F]">Listing Auto-Locking Active:</span>
<span class="text-gray-700">Approving an applicant auto-shifts status to <span class="font-semibold text-[#1F1F1F]">Pending Screening</span> to prevent duplicate submissions across public endpoints.</span>
</div>
</div>
<div class="flex items-center gap-3">
<span class="font-mono text-[11px] text-gray-500">Policy Engine: V2.4-STABLE</span>
<button class="text-[#E05A4F] text-[12px] font-bold hover:underline" type="button">Config Rules</button>
</div>
</div>
<!-- 4 KPI Inventory Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Card 1: Total Inventory -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-4 flex flex-col justify-between shadow-xs">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Total Inventory</span>
<div class="w-7 h-7 rounded bg-gray-100 flex items-center justify-center text-gray-600">
<span class="material-symbols-outlined text-[17px]">inventory_2</span>
</div>
</div>
<div class="my-2">
<span class="text-3xl font-bold text-[#1F1F1F]">142</span>
</div>
<div class="flex items-center justify-between text-[12px] text-gray-500">
<span class="text-[#4CAF50] font-semibold flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">trending_up</span> +8 this month
              </span>
<span class="font-mono text-[11px]">100% Registered</span>
</div>
</div>
<!-- Card 2: Available Pets -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-4 flex flex-col justify-between shadow-xs">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Available Pets</span>
<div class="w-7 h-7 rounded bg-emerald-50 flex items-center justify-center text-[#4CAF50]">
<span class="material-symbols-outlined text-[17px]">public</span>
</div>
</div>
<div class="my-2">
<span class="text-3xl font-bold text-[#4CAF50]">86</span>
</div>
<div class="flex items-center justify-between text-[12px] text-gray-500">
<span>Active in Public Directory</span>
<span class="font-mono text-[11px] text-[#4CAF50] font-semibold">60.5% Ratio</span>
</div>
</div>
<!-- Card 3: Pending Adoption -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-4 flex flex-col justify-between shadow-xs">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Pending Adoption</span>
<div class="w-7 h-7 rounded bg-amber-50 flex items-center justify-center text-[#d97706]">
<span class="material-symbols-outlined text-[17px]">pending_actions</span>
</div>
</div>
<div class="my-2">
<span class="text-3xl font-bold text-[#d97706]">34</span>
</div>
<div class="flex items-center justify-between text-[12px] text-gray-500">
<span class="flex items-center gap-1 text-[#d97706] font-medium">
<span class="material-symbols-outlined text-[13px]">lock</span> Applications Locked
              </span>
<span class="font-mono text-[11px]">24% Intake</span>
</div>
</div>
<!-- Card 4: Adopted / Placed -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-4 flex flex-col justify-between shadow-xs">
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Adopted / Placed</span>
<div class="w-7 h-7 rounded bg-blue-50 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined text-[17px]">task_alt</span>
</div>
</div>
<div class="my-2">
<span class="text-3xl font-bold text-blue-600">22</span>
</div>
<div class="flex items-center justify-between text-[12px] text-gray-500">
<span>Final Contracts Signed</span>
<span class="font-mono text-[11px] text-[#4CAF50] font-semibold">100% Archived</span>
</div>
</div>
</div>
<!-- Filter Controls & Data Table Card -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-5 shadow-xs flex flex-col gap-4">
<!-- Filters Row -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<!-- Species Category Tabs -->
<div class="flex items-center p-1 bg-gray-100 rounded-lg max-w-fit">
<button class="px-3.5 py-1.5 text-[13px] font-semibold rounded-md bg-white text-[#1F1F1F] shadow-xs flex items-center gap-1.5" type="button">
<span>All Animals</span>
<span class="font-mono text-[11px] px-1.5 py-0.2 rounded bg-gray-100 text-gray-600">142</span>
</button>
<button class="px-3.5 py-1.5 text-[13px] font-medium text-gray-600 hover:text-[#1F1F1F] transition-colors flex items-center gap-1.5" type="button">
<span>Dogs</span>
<span class="font-mono text-[11px] px-1.5 py-0.2 rounded bg-gray-200 text-gray-600">78</span>
</button>
<button class="px-3.5 py-1.5 text-[13px] font-medium text-gray-600 hover:text-[#1F1F1F] transition-colors flex items-center gap-1.5" type="button">
<span>Cats</span>
<span class="font-mono text-[11px] px-1.5 py-0.2 rounded bg-gray-200 text-gray-600">52</span>
</button>
<button class="px-3.5 py-1.5 text-[13px] font-medium text-gray-600 hover:text-[#1F1F1F] transition-colors flex items-center gap-1.5" type="button">
<span>Other Critters</span>
<span class="font-mono text-[11px] px-1.5 py-0.2 rounded bg-gray-200 text-gray-600">12</span>
</button>
</div>
<!-- Search, Dropdown Selects, and Reset -->
<div class="flex items-center gap-2.5 flex-wrap">
<div class="relative flex items-center min-w-[240px] flex-1">
<span class="material-symbols-outlined absolute left-2.5 text-[18px] text-gray-400">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded-md bg-[#F2F2F2] border border-[#E5E5E5] text-[13px] text-[#1F1F1F] placeholder:text-gray-400 focus:outline-none focus:bg-white focus:border-[#E05A4F] transition-all" placeholder="Search pet name, microchip ID, breed..." type="text"/>
</div>
<select class="h-9 px-3 rounded-md bg-white border border-[#E5E5E5] text-[13px] text-gray-700 focus:outline-none focus:border-[#E05A4F] cursor-pointer">
<option value="all">All Statuses</option>
<option value="available">Available (86)</option>
<option value="pending">Pending Screening (34)</option>
<option value="adopted">Adopted (22)</option>
<option value="draft">Draft (0)</option>
</select>
<select class="h-9 px-3 rounded-md bg-white border border-[#E5E5E5] text-[13px] text-gray-700 focus:outline-none focus:border-[#E05A4F] cursor-pointer">
<option value="all">All Health Clearances</option>
<option value="cleared">Fully Cleared</option>
<option value="vaccines">Missing Vaccines</option>
<option value="pending-vet">Pending Vet Clearance</option>
</select>
<select class="h-9 px-3 rounded-md bg-white border border-[#E5E5E5] text-[13px] text-gray-700 focus:outline-none focus:border-[#E05A4F] cursor-pointer">
<option value="all">All Locations / Shelters</option>
<option value="main">Main Rescue Center (Bldg A)</option>
<option value="annex">North Haven Annex</option>
<option value="foster">Foster Care Network</option>
</select>
<button class="h-9 px-3 rounded-md bg-gray-100 border border-[#E5E5E5] text-gray-600 hover:text-[#1F1F1F] text-[12px] font-semibold flex items-center gap-1 transition-colors" title="Reset Filters" type="button">
<span class="material-symbols-outlined text-[16px]">refresh</span>
<span>Reset</span>
</button>
</div>
</div>
<!-- Active Filter Tags -->
<div class="flex items-center gap-2 pt-1 flex-wrap text-[12px]">
<span class="font-bold text-gray-400 uppercase tracking-wider text-[11px]">Active Filter Tags:</span>
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-gray-100 border border-gray-200 text-[#1F1F1F] font-mono text-[11px]">
              Species: All Animals
              <button class="hover:text-[#E05A4F] flex items-center" type="button"><span class="material-symbols-outlined text-[13px]">close</span></button>
</span>
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-gray-100 border border-gray-200 text-[#1F1F1F] font-mono text-[11px]">
              Location: All Shelters
              <button class="hover:text-[#E05A4F] flex items-center" type="button"><span class="material-symbols-outlined text-[13px]">close</span></button>
</span>
<button class="text-[12px] font-bold text-[#E05A4F] hover:underline ml-1" type="button">Clear all filters</button>
</div>
<!-- Pet Listings Data Table -->
<div class="overflow-x-auto w-full border border-[#E5E5E5] rounded-lg">
<table class="w-full text-left border-collapse">
<thead>
<tr class="h-10 bg-gray-50 border-b border-[#E5E5E5] text-gray-500 text-[11px] font-bold uppercase tracking-wider">
<th class="px-4 py-2 w-10 text-center">
<input class="w-4 h-4 rounded border-gray-300 text-[#E05A4F] focus:ring-0 cursor-pointer" type="checkbox"/>
</th>
<th class="px-4 py-2 font-semibold">Pet Dossier</th>
<th class="px-4 py-2 font-semibold">Category &amp; Bio</th>
<th class="px-4 py-2 font-semibold text-right">Fee</th>
<th class="px-4 py-2 font-semibold">Medical Status</th>
<th class="px-4 py-2 font-semibold">Listing Status</th>
<th class="px-4 py-2 font-semibold">Applicant Queue</th>
<th class="px-4 py-2 font-semibold text-center w-28">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#E5E5E5] text-[13px]">
<!-- 1. Barnaby -->
<tr class="h-16 hover:bg-gray-50/80 transition-colors group">
<td class="px-4 py-2 text-center">
<input class="w-4 h-4 rounded border-gray-300 text-[#E05A4F] focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-3">
<!-- Pet Avatar Wireframe placeholder -->
<div class="w-11 h-11 rounded-lg bg-gray-100 border border-gray-200 flex-shrink-0 flex items-center justify-center relative overflow-hidden">
<svg class="w-full h-full text-gray-300 absolute inset-0" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="currentColor" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<span class="material-symbols-outlined text-[20px] text-gray-400 z-10">pets</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-bold text-[#1F1F1F] group-hover:text-[#E05A4F] cursor-pointer transition-colors text-[14px]">Barnaby</span>
<span class="material-symbols-outlined text-[15px] text-blue-600" title="Verified Intake Dossier">verified</span>
</div>
<span class="text-[12px] text-gray-500">Golden Retriever Mix</span>
<span class="font-mono text-[11px] text-gray-400">#MC-9851410023</span>
</div>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-1.5 text-[13px]">
<span class="material-symbols-outlined text-[16px] text-gray-400">pets</span>
<span class="text-[#1F1F1F] font-medium">Canine</span>
<span class="text-gray-300 text-xs">•</span>
<span class="text-gray-500">Adult (3 yrs)</span>
</div>
<span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded w-max bg-gray-100 text-gray-700 font-mono text-[11px]">
<span class="material-symbols-outlined text-[12px] text-blue-600">male</span> Male • Neutered
                      </span>
</div>
</td>
<td class="px-4 py-2 text-right">
<div class="flex flex-col items-end">
<span class="font-mono text-[14px] font-bold text-[#1F1F1F]">$200.00</span>
<span class="font-mono text-[10px] text-gray-400">Standard Dog</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-wrap gap-1 max-w-[210px]">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> DHPP Core
                      </span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> Rabies 3-Yr
                      </span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-gray-100 text-gray-700 text-[11px] font-semibold">
                        HW Clear
                      </span>
</div>
</td>
<td class="px-4 py-2">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-800 text-[12px] font-semibold">
<span class="w-2 h-2 rounded-full bg-[#4CAF50]"></span>
<span>Available</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-2">
<a class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-gray-100 hover:bg-[#FFE1DD] text-gray-700 hover:text-[#E05A4F] text-[12px] font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[15px] text-gray-500">group</span>
<span>3 Applicants</span>
</a>
<span class="w-2 h-2 rounded-full bg-[#E05A4F]" title="New unread application"></span>
</div>
</td>
<td class="px-4 py-2 text-center">
<div class="flex items-center justify-center gap-1">
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Edit Dossier" type="button">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Adoption Workflow" type="button">
<span class="material-symbols-outlined text-[18px]">how_to_reg</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="More Options" type="button">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- 2. Polly -->
<tr class="h-16 hover:bg-gray-50/80 transition-colors group">
<td class="px-4 py-2 text-center">
<input class="w-4 h-4 rounded border-gray-300 text-[#E05A4F] focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-3">
<!-- Wireframe placeholder -->
<div class="w-11 h-11 rounded-lg bg-gray-100 border border-gray-200 flex-shrink-0 flex items-center justify-center relative overflow-hidden">
<svg class="w-full h-full text-gray-300 absolute inset-0" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="currentColor" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<span class="material-symbols-outlined text-[20px] text-gray-400 z-10">cruelty_free</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-bold text-[#1F1F1F] group-hover:text-[#E05A4F] cursor-pointer transition-colors text-[14px]">Polly</span>
</div>
<span class="text-[12px] text-gray-500">Domestic Short Hair Mix</span>
<span class="font-mono text-[11px] text-gray-400">#MC-8492018814</span>
</div>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-1.5 text-[13px]">
<span class="material-symbols-outlined text-[16px] text-gray-400">cruelty_free</span>
<span class="text-[#1F1F1F] font-medium">Feline</span>
<span class="text-gray-300 text-xs">•</span>
<span class="text-gray-500">Young (1 yr)</span>
</div>
<span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded w-max bg-gray-100 text-gray-700 font-mono text-[11px]">
<span class="material-symbols-outlined text-[12px] text-[#E05A4F]">female</span> Female • Spayed
                      </span>
</div>
</td>
<td class="px-4 py-2 text-right">
<div class="flex flex-col items-end">
<span class="font-mono text-[14px] font-bold text-[#1F1F1F]">$120.00</span>
<span class="font-mono text-[10px] text-gray-400">Subsidized Fee</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-wrap gap-1 max-w-[210px]">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> FVRCP Done
                      </span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> FeLV/FIV Neg
                      </span>
</div>
</td>
<td class="px-4 py-2">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-amber-50 text-amber-800 text-[12px] font-semibold">
<span class="material-symbols-outlined text-[14px] text-amber-600">lock</span>
<span>Pending Screening</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-2">
<a class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-amber-50 hover:bg-amber-100 text-amber-800 text-[12px] font-semibold transition-colors" href="#">
<span class="material-symbols-outlined text-[15px]">pending_actions</span>
<span>1 Active Review</span>
</a>
</div>
</td>
<td class="px-4 py-2 text-center">
<div class="flex items-center justify-center gap-1">
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Edit Dossier" type="button">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Adoption Workflow" type="button">
<span class="material-symbols-outlined text-[18px]">how_to_reg</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="More Options" type="button">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- 3. Jasper -->
<tr class="h-16 hover:bg-gray-50/80 transition-colors group">
<td class="px-4 py-2 text-center">
<input class="w-4 h-4 rounded border-gray-300 text-[#E05A4F] focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-3">
<!-- Wireframe placeholder -->
<div class="w-11 h-11 rounded-lg bg-gray-100 border border-gray-200 flex-shrink-0 flex items-center justify-center relative overflow-hidden">
<svg class="w-full h-full text-gray-300 absolute inset-0" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="currentColor" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<span class="material-symbols-outlined text-[20px] text-gray-400 z-10">pets</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-bold text-[#1F1F1F] group-hover:text-[#E05A4F] cursor-pointer transition-colors text-[14px]">Jasper</span>
</div>
<span class="text-[12px] text-gray-500">Australian Shepherd</span>
<span class="font-mono text-[11px] text-gray-400">#MC-4720912440</span>
</div>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-1.5 text-[13px]">
<span class="material-symbols-outlined text-[16px] text-gray-400">pets</span>
<span class="text-[#1F1F1F] font-medium">Canine</span>
<span class="text-gray-300 text-xs">•</span>
<span class="text-gray-500">Puppy (6 mos)</span>
</div>
<span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded w-max bg-gray-100 text-gray-700 font-mono text-[11px]">
<span class="material-symbols-outlined text-[12px] text-blue-600">male</span> Male • Intact (Hold)
                      </span>
</div>
</td>
<td class="px-4 py-2 text-right">
<div class="flex flex-col items-end">
<span class="font-mono text-[14px] font-bold text-[#1F1F1F]">$250.00</span>
<span class="font-mono text-[10px] text-gray-400">Puppy Premium</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-wrap gap-1 max-w-[210px]">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-red-50 text-[#E53935] text-[11px] font-semibold">
<span class="material-symbols-outlined text-[12px]">medical_services</span> Booster Due
                      </span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-amber-50 text-amber-800 text-[11px] font-semibold">
                        Neuter Sched
                      </span>
</div>
</td>
<td class="px-4 py-2">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-800 text-[12px] font-semibold">
<span class="w-2 h-2 rounded-full bg-[#4CAF50]"></span>
<span>Available</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-2">
<a class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-gray-100 hover:bg-[#FFE1DD] text-gray-700 hover:text-[#E05A4F] text-[12px] font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[15px] text-gray-500">group</span>
<span>8 Applicants</span>
</a>
<span class="px-1.5 py-0.2 rounded bg-[#E05A4F] text-white font-mono text-[10px] font-bold">HOT</span>
</div>
</td>
<td class="px-4 py-2 text-center">
<div class="flex items-center justify-center gap-1">
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Edit Dossier" type="button">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Adoption Workflow" type="button">
<span class="material-symbols-outlined text-[18px]">how_to_reg</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="More Options" type="button">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- 4. Mochi -->
<tr class="h-16 hover:bg-gray-50/80 transition-colors group">
<td class="px-4 py-2 text-center">
<input class="w-4 h-4 rounded border-gray-300 text-[#E05A4F] focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-3">
<!-- Wireframe placeholder -->
<div class="w-11 h-11 rounded-lg bg-gray-100 border border-gray-200 flex-shrink-0 flex items-center justify-center relative overflow-hidden">
<svg class="w-full h-full text-gray-300 absolute inset-0" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="currentColor" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<span class="material-symbols-outlined text-[20px] text-gray-400 z-10">cruelty_free</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-bold text-[#1F1F1F] group-hover:text-[#E05A4F] cursor-pointer transition-colors text-[14px]">Mochi</span>
<span class="material-symbols-outlined text-[15px] text-blue-600" title="Verified Intake Dossier">verified</span>
</div>
<span class="text-[12px] text-gray-500">Scottish Fold Mix</span>
<span class="font-mono text-[11px] text-gray-400">#MC-1108239924</span>
</div>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-1.5 text-[13px]">
<span class="material-symbols-outlined text-[16px] text-gray-400">cruelty_free</span>
<span class="text-[#1F1F1F] font-medium">Feline</span>
<span class="text-gray-300 text-xs">•</span>
<span class="text-gray-500">Senior (7 yrs)</span>
</div>
<span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded w-max bg-gray-100 text-gray-700 font-mono text-[11px]">
<span class="material-symbols-outlined text-[12px] text-blue-600">male</span> Male • Neutered
                      </span>
</div>
</td>
<td class="px-4 py-2 text-right">
<div class="flex flex-col items-end">
<span class="font-mono text-[14px] font-bold text-[#1F1F1F]">$75.00</span>
<span class="font-mono text-[10px] text-[#4CAF50] font-semibold">Senior Pet Grant</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-wrap gap-1 max-w-[210px]">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> Dental Cleared
                      </span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> Core Complete
                      </span>
</div>
</td>
<td class="px-4 py-2">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 text-[12px] font-semibold">
<span class="material-symbols-outlined text-[14px]">check_circle</span>
<span>Adopted</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-gray-100 text-gray-700 text-[12px] font-medium">
<span class="material-symbols-outlined text-[15px] text-gray-500">verified_user</span>
<span>Placed #AD-490</span>
</span>
</div>
</td>
<td class="px-4 py-2 text-center">
<div class="flex items-center justify-center gap-1">
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="View Placement Contract" type="button">
<span class="material-symbols-outlined text-[18px]">description</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Archive Pet" type="button">
<span class="material-symbols-outlined text-[18px]">archive</span>
</button>
</div>
</td>
</tr>
<!-- 5. Bella -->
<tr class="h-16 hover:bg-gray-50/80 transition-colors group">
<td class="px-4 py-2 text-center">
<input class="w-4 h-4 rounded border-gray-300 text-[#E05A4F] focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-3">
<!-- Wireframe placeholder -->
<div class="w-11 h-11 rounded-lg bg-gray-100 border border-gray-200 flex-shrink-0 flex items-center justify-center relative overflow-hidden">
<svg class="w-full h-full text-gray-300 absolute inset-0" preserveaspectratio="none" viewbox="0 0 100 100">
<line stroke="currentColor" stroke-width="1.5" x1="0" x2="100" y1="0" y2="100"></line>
<line stroke="currentColor" stroke-width="1.5" x1="100" x2="0" y1="0" y2="100"></line>
</svg>
<span class="material-symbols-outlined text-[20px] text-gray-400 z-10">pets</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-bold text-[#1F1F1F] group-hover:text-[#E05A4F] cursor-pointer transition-colors text-[14px]">Bella</span>
<span class="material-symbols-outlined text-[15px] text-blue-600" title="Verified Intake Dossier">verified</span>
</div>
<span class="text-[12px] text-gray-500">Border Collie Mix</span>
<span class="font-mono text-[11px] text-gray-400">#MC-6309881127</span>
</div>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-1.5 text-[13px]">
<span class="material-symbols-outlined text-[16px] text-gray-400">pets</span>
<span class="text-[#1F1F1F] font-medium">Canine</span>
<span class="text-gray-300 text-xs">•</span>
<span class="text-gray-500">Adult (2 yrs)</span>
</div>
<span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded w-max bg-gray-100 text-gray-700 font-mono text-[11px]">
<span class="material-symbols-outlined text-[12px] text-[#E05A4F]">female</span> Female • Spayed
                      </span>
</div>
</td>
<td class="px-4 py-2 text-right">
<div class="flex flex-col items-end">
<span class="font-mono text-[14px] font-bold text-[#1F1F1F]">$180.00</span>
<span class="font-mono text-[10px] text-gray-400">Standard Dog</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex flex-wrap gap-1 max-w-[210px]">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> DHPP Core
                      </span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span> Microchipped
                      </span>
</div>
</td>
<td class="px-4 py-2">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-800 text-[12px] font-semibold">
<span class="w-2 h-2 rounded-full bg-[#4CAF50]"></span>
<span>Available</span>
</div>
</td>
<td class="px-4 py-2">
<div class="flex items-center gap-2">
<a class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-gray-100 hover:bg-[#FFE1DD] text-gray-700 hover:text-[#E05A4F] text-[12px] font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[15px] text-gray-500">group</span>
<span>5 Applicants</span>
</a>
</div>
</td>
<td class="px-4 py-2 text-center">
<div class="flex items-center justify-center gap-1">
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Edit Dossier" type="button">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="Adoption Workflow" type="button">
<span class="material-symbols-outlined text-[18px]">how_to_reg</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-100 text-gray-500 hover:text-[#1F1F1F] transition-colors" title="More Options" type="button">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Bar -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
<div class="flex items-center gap-2 text-gray-500 text-[12px]">
<span>Showing <span class="font-mono text-[#1F1F1F] font-semibold">1-5</span> of <span class="font-mono text-[#1F1F1F] font-semibold">142</span> total listings</span>
<span class="text-xs text-gray-300">•</span>
<select class="h-7 px-2 rounded-md bg-gray-100 border border-gray-200 font-mono text-[11px] text-gray-600 focus:outline-none cursor-pointer">
<option>10 per page</option>
<option>25 per page</option>
<option>50 per page</option>
</select>
</div>
<!-- Page Buttons -->
<div class="flex items-center gap-1">
<button class="h-8 px-2.5 rounded-md bg-gray-100 border border-gray-200 text-gray-600 hover:bg-gray-200 hover:text-[#1F1F1F] text-[12px] font-semibold flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
<span>Prev</span>
</button>
<div class="flex items-center gap-1 px-1">
<button class="w-8 h-8 rounded-md bg-[#E05A4F] text-white font-mono text-[12px] font-bold" type="button">1</button>
<button class="w-8 h-8 rounded-md hover:bg-gray-100 text-gray-600 font-mono text-[12px] transition-colors" type="button">2</button>
<button class="w-8 h-8 rounded-md hover:bg-gray-100 text-gray-600 font-mono text-[12px] transition-colors" type="button">3</button>
<span class="px-1 text-gray-400 font-mono text-xs">...</span>
<button class="w-8 h-8 rounded-md hover:bg-gray-100 text-gray-600 font-mono text-[12px] transition-colors" type="button">29</button>
</div>
<button class="h-8 px-2.5 rounded-md bg-gray-100 border border-gray-200 text-gray-600 hover:bg-gray-200 hover:text-[#1F1F1F] text-[12px] font-semibold flex items-center gap-1 transition-colors" type="button">
<span>Next</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Bottom Analytics Grid: 3 Cards -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
<!-- Analytics 1: Species Distribution -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-5 shadow-xs flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<span class="font-bold text-[14px] text-[#1F1F1F]">Species Distribution</span>
<span class="font-mono text-[11px] text-gray-500">N=142</span>
</div>
<div class="space-y-3.5">
<div>
<div class="flex justify-between text-[13px] mb-1">
<span class="text-gray-700 font-medium">Canines (Dogs)</span>
<span class="font-mono font-semibold text-gray-600">78 (54.9%)</span>
</div>
<div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-[#E05A4F] rounded-full" style="width: 55%"></div>
</div>
</div>
<div>
<div class="flex justify-between text-[13px] mb-1">
<span class="text-gray-700 font-medium">Felines (Cats)</span>
<span class="font-mono font-semibold text-gray-600">52 (36.6%)</span>
</div>
<div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-blue-600 rounded-full" style="width: 37%"></div>
</div>
</div>
<div>
<div class="flex justify-between text-[13px] mb-1">
<span class="text-gray-700 font-medium">Small Critters &amp; Other</span>
<span class="font-mono font-semibold text-gray-600">12 (8.5%)</span>
</div>
<div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-amber-500 rounded-full" style="width: 9%"></div>
</div>
</div>
</div>
</div>
<!-- Analytics 2: Medical Pipeline Alerts -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-5 shadow-xs flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<span class="font-bold text-[14px] text-[#1F1F1F]">Medical Pipeline Alerts</span>
<span class="px-2 py-0.5 rounded-full bg-[#FFE1DD] text-[#E53935] text-[11px] font-bold">5 Action Items</span>
</div>
<div class="space-y-2.5">
<div class="flex items-center justify-between p-3 rounded-lg bg-gray-50 border border-gray-100">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[20px] text-[#E53935]">warning</span>
<span class="text-[13px] font-medium text-[#1F1F1F]">Pending Rabies Boosters</span>
</div>
<span class="font-mono text-[12px] font-bold text-[#E53935]">3 Dogs</span>
</div>
<div class="flex items-center justify-between p-3 rounded-lg bg-gray-50 border border-gray-100">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[20px] text-[#d97706]">pending</span>
<span class="text-[13px] font-medium text-[#1F1F1F]">Awaiting Spay/Neuter Appt</span>
</div>
<span class="font-mono text-[12px] font-bold text-[#d97706]">2 Juveniles</span>
</div>
</div>
</div>
<!-- Analytics 3: Adoption Readiness Index -->
<div class="bg-white rounded-lg border border-[#E5E5E5] p-5 shadow-xs flex flex-col justify-between">
<div class="flex items-center justify-between mb-3">
<span class="font-bold text-[14px] text-[#1F1F1F]">Adoption Readiness Index</span>
<span class="material-symbols-outlined text-[19px] text-blue-600">speed</span>
</div>
<div class="flex items-center gap-4 my-auto py-1">
<div class="relative w-16 h-16 flex items-center justify-center flex-shrink-0">
<svg class="w-full h-full -rotate-90" viewbox="0 0 36 36">
<path class="text-gray-100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3.5"></path>
<path class="text-[#4CAF50]" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="84, 100" stroke-linecap="round" stroke-width="3.5"></path>
</svg>
<span class="absolute font-mono text-[12px] font-bold text-[#1F1F1F]">84%</span>
</div>
<div class="flex flex-col">
<span class="text-[13px] font-bold text-[#1F1F1F]">120 Pets Adopt-Ready</span>
<span class="text-[12px] text-gray-500 leading-snug">Fully vetted, microchipped &amp; dossier published online.</span>
</div>
</div>
<button class="text-left text-[12px] font-bold text-[#E05A4F] hover:underline flex items-center gap-1 mt-3" type="button">
<span>Review Medical Queue</span>
<span class="material-symbols-outlined text-[14px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</main>
</div>
</body></html>
