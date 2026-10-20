<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Adoptly Admin Portal - Adoption Metrics &amp; Operational Analytics</title>
<!-- Google Fonts: Poppins & JetBrains Mono -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            brand: {
              primary: "#E05A4F",
              "primary-hover": "#C84B41",
              "primary-light": "#FFE1DD",
              secondary: "#515F74",
              bg: "#F2F2F2",
              surface: "#FFFFFF",
              border: "#E5E5E5",
              text: "#1F1F1F",
              muted: "#71717A",
              success: "#4CAF50",
              error: "#E53935",
              "error-light": "#FFE5E5",
              accent: "#F7E9D7"
            }
          },
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace']
          }
        }
      }
    };
  </script>
<style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #F2F2F2;
      color: #1F1F1F;
    }
    .material-symbols-outlined {
      font-family: 'Material Symbols Outlined' !important;
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
      line-height: 1;
    }
  </style>
</head>
<body class="min-h-screen bg-[#F2F2F2] text-[#1F1F1F] antialiased flex">
<!-- Fixed Persistent Left Sidebar -->
<aside class="fixed left-0 top-0 h-screen w-64 bg-white border-r border-[#E5E5E5] z-50 flex flex-col justify-between">
<div class="flex flex-col h-full overflow-y-auto">
<!-- Brand Logo Header -->
<div class="h-16 px-5 flex items-center gap-3 border-b border-[#E5E5E5] bg-white sticky top-0 z-10">
<div class="w-9 h-9 rounded-lg bg-[#FFE1DD] flex items-center justify-center text-[#E05A4F]">
<span class="material-symbols-outlined text-[22px]">pets</span>
</div>
<div class="flex flex-col">
<span class="font-bold text-[15px] tracking-tight text-[#1F1F1F] leading-tight uppercase">Adoptly</span>
<span class="text-[10px] tracking-widest text-[#E05A4F] uppercase font-bold leading-tight">Admin Portal</span>
</div>
</div>
<!-- Navigation Links -->
<nav class="p-3 space-y-4">
<!-- Main Section -->
<div>
<div class="px-3 pb-1.5 text-[10px] text-[#8C8C8C] uppercase tracking-wider font-bold">Main</div>
<div class="space-y-0.5">
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">grid_view</span>
<span>Dashboard / Overview</span>
</a>
<a class="flex items-center justify-between px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[18px]">inbox</span>
<span>Inbox &amp; Alerts</span>
</div>
<span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-[#FFE5E5] text-[#E53935]">3</span>
</a>
</div>
</div>
<!-- Adoption Management -->
<div>
<div class="px-3 pb-1.5 text-[10px] text-[#8C8C8C] uppercase tracking-wider font-bold">Adoption Management</div>
<div class="space-y-0.5">
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">assignment</span>
<span>Applications Review</span>
</a>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Meet &amp; Greets</span>
</a>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span>Adoption Contracts</span>
</a>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
<span>Ready for Adoption</span>
</a>
</div>
</div>
<!-- Pet Management -->
<div>
<div class="px-3 pb-1.5 text-[10px] text-[#8C8C8C] uppercase tracking-wider font-bold">Pet Management</div>
<div class="space-y-0.5">
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">format_list_bulleted</span>
<span>Pet Listings</span>
</a>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">medical_services</span>
<span>Intake &amp; Health</span>
</a>
</div>
</div>
<!-- User & Partner Management -->
<div>
<div class="px-3 pb-1.5 text-[10px] text-[#8C8C8C] uppercase tracking-wider font-bold">User &amp; Partner Management</div>
<div class="space-y-0.5">
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">groups</span>
<span>Adopters &amp; Users</span>
</a>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">badge</span>
<span>Staff Access</span>
</a>
</div>
</div>
<!-- Analytics & Reports -->
<div>
<div class="px-3 pb-1.5 text-[10px] text-[#8C8C8C] uppercase tracking-wider font-bold">Analytics &amp; Reports</div>
<div class="space-y-0.5">
<!-- Active Navigation Item -->
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg bg-[#FFE1DD] text-[#E05A4F] text-xs font-semibold shadow-xs" href="#">
<span class="material-symbols-outlined text-[18px] text-[#E05A4F]">analytics</span>
<span>Adoption Metrics</span>
</a>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#F8F8F8] hover:text-[#1F1F1F] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Export Reports</span>
</a>
</div>
</div>
</nav>
</div>
<!-- Bottom Status & Logout -->
<div class="p-3 border-t border-[#E5E5E5] bg-[#FAFAFA] flex flex-col gap-2">
<div class="flex items-center justify-between px-3 py-2 rounded-lg bg-white border border-[#E5E5E5]">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-[#4CAF50] animate-pulse"></div>
<span class="text-[11px] font-semibold text-[#1F1F1F]">All Systems Operational</span>
</div>
<span class="font-mono text-[11px] font-medium text-[#71717A]">99.98%</span>
</div>
<a class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-[#555555] hover:bg-[#FFE5E5] hover:text-[#E53935] text-xs font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[18px] text-[#E05A4F]">logout</span>
<span>Admin Sign Out</span>
</a>
</div>
</aside>
<!-- Fluid Main Content Shell -->
<div class="pl-64 w-full min-h-screen min-w-0 flex flex-col bg-[#F2F2F2]">
<!-- Sticky Top Navigation Header -->
<header class="sticky top-0 right-0 h-16 bg-white border-b border-[#E5E5E5] z-40 px-8 flex items-center justify-between">
<!-- Breadcrumbs -->
<div class="flex items-center gap-2 text-xs font-medium text-[#71717A]">
<span>Admin Portal</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span>Analytics &amp; Reports</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-[#1F1F1F] font-bold">Adoption Metrics</span>
</div>
<!-- Search & Admin Actions -->
<div class="flex items-center gap-4">
<!-- Search bar -->
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-[18px] text-[#8C8C8C]">search</span>
<input class="w-72 h-9 pl-9 pr-12 rounded-lg bg-[#F8F8F8] border border-[#E5E5E5] text-xs text-[#1F1F1F] placeholder:text-[#8C8C8C] focus:outline-none focus:border-[#E05A4F] focus:bg-white transition-all" placeholder="Search pets, applications, users..." type="text"/>
<div class="absolute right-2 px-1.5 py-0.5 rounded border border-[#E5E5E5] bg-white font-mono text-[10px] text-[#8C8C8C] shadow-2xs">
            ⌘K
          </div>
</div>
<!-- Action Icons -->
<div class="flex items-center gap-1">
<button class="relative p-2 rounded-lg hover:bg-[#F8F8F8] text-[#555555] transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1 right-1 w-4 h-4 bg-[#E05A4F] text-white font-mono text-[9px] font-bold rounded-full flex items-center justify-center">4</span>
</button>
<button class="p-2 rounded-lg hover:bg-[#F8F8F8] text-[#555555] transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">help</span>
</button>
</div>
<div class="h-6 w-px bg-[#E5E5E5]"></div>
<!-- User Avatar / Profile -->
<div class="flex items-center gap-2.5 cursor-pointer pl-1 hover:opacity-90 transition-opacity">
<div class="w-8 h-8 rounded-full bg-[#E05A4F] flex items-center justify-center text-white font-semibold text-xs shadow-xs">
            AU
          </div>
<div class="flex flex-col">
<span class="text-xs font-semibold text-[#1F1F1F] leading-tight">Admin User</span>
<span class="text-[10px] text-[#71717A] leading-tight">Super Administrator</span>
</div>
<span class="material-symbols-outlined text-[16px] text-[#71717A]">arrow_drop_down</span>
</div>
</div>
</header>
<!-- Main Workspace Container -->
<main class="w-full flex-1 p-8">
<div class="w-full max-w-[1600px] mx-auto space-y-6">
<!-- Title & Filter Toolbar Header -->
<div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4">
<div>
<h1 class="text-2xl lg:text-3xl font-bold text-[#1F1F1F] tracking-tight">Adoption Metrics &amp; Operational Analytics</h1>
<p class="text-xs lg:text-sm text-[#71717A] mt-1">
              Monitor intake-to-adoption throughput, review turnaround SLA, safety screening flags, and long-term placement retention across all partner facilities.
            </p>
</div>
<!-- Controls / Filter Toolbar -->
<div class="flex flex-wrap items-center gap-2 bg-white p-1.5 rounded-xl border border-[#E5E5E5] shadow-xs">
<!-- Date Range Filter -->
<div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] text-[#1F1F1F] text-xs cursor-pointer hover:border-[#D5D5D5] transition-colors">
<span class="material-symbols-outlined text-[16px] text-[#71717A]">calendar_today</span>
<span class="font-medium">Last 30 Days: Oct 1 - Oct 31, 2026</span>
<span class="material-symbols-outlined text-[16px] text-[#71717A]">arrow_drop_down</span>
</div>
<!-- Facility Dropdown -->
<div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] text-[#1F1F1F] text-xs cursor-pointer hover:border-[#D5D5D5] transition-colors">
<span class="material-symbols-outlined text-[16px] text-[#71717A]">apartment</span>
<span class="font-medium">All Hubs (Austin Central)</span>
<span class="material-symbols-outlined text-[16px] text-[#71717A]">arrow_drop_down</span>
</div>
<!-- Species Filter -->
<div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] text-[#1F1F1F] text-xs cursor-pointer hover:border-[#D5D5D5] transition-colors">
<span class="material-symbols-outlined text-[16px] text-[#71717A]">pets</span>
<span class="font-medium">All Species</span>
<span class="material-symbols-outlined text-[16px] text-[#71717A]">arrow_drop_down</span>
</div>
<!-- Export Button (#E05A4F) -->
<button class="flex items-center gap-1.5 px-4 py-2 rounded-lg bg-[#E05A4F] hover:bg-[#C84B41] text-white text-xs font-semibold tracking-wide uppercase transition-colors shadow-xs" type="button">
<span class="material-symbols-outlined text-[16px]">file_download</span>
<span>Export CSV / PDF</span>
</button>
</div>
</div>
<!-- 5 KPI Summary Cards Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
<!-- Card 1: Intake vs Adoption Ratio -->
<div class="flex flex-col justify-between p-4 rounded-xl bg-white border border-[#E5E5E5] shadow-xs">
<div>
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-[#71717A]">Intake vs. Adoption</span>
<span class="material-symbols-outlined text-[18px] text-[#71717A]">balance</span>
</div>
<div class="mt-2.5 flex items-baseline gap-2">
<span class="font-mono text-2xl font-bold text-[#1F1F1F] leading-none">1 : 0.90</span>
<span class="font-mono text-xs font-semibold text-[#71717A]">90.1%</span>
</div>
<div class="mt-1 text-xs text-[#71717A]">
                142 Intake vs. <span class="font-semibold text-[#1F1F1F]">128 Adopted</span>
</div>
</div>
<div class="mt-3 pt-2 bg-[#F8F8F8] border border-[#EBEBEB] px-2.5 py-1.5 rounded-lg flex items-center justify-between">
<div class="flex items-center gap-1 text-[#4CAF50]">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
<span class="font-mono text-[11px] font-bold">+6.4% MoM</span>
</div>
<span class="text-[10px] text-[#71717A] font-medium">Capacity Balanced</span>
</div>
</div>
<!-- Card 2: Turnaround SLA -->
<div class="flex flex-col justify-between p-4 rounded-xl bg-white border border-[#E5E5E5] shadow-xs">
<div>
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-[#71717A]">Turnaround SLA</span>
<span class="material-symbols-outlined text-[18px] text-[#71717A]">timer</span>
</div>
<div class="mt-2.5 flex items-baseline gap-1.5">
<span class="font-mono text-2xl font-bold text-[#1F1F1F] leading-none">3.4</span>
<span class="text-xs text-[#71717A] font-semibold">Days</span>
</div>
<div class="mt-1 text-xs text-[#71717A]">
                Target threshold: <span class="font-mono font-medium text-[#1F1F1F]">&lt; 4.0 Days</span>
</div>
</div>
<div class="mt-3 pt-2 bg-[#F8F8F8] border border-[#EBEBEB] px-2.5 py-1.5 rounded-lg flex items-center justify-between">
<span class="font-mono text-[11px] text-[#4CAF50] font-bold">-0.8d vs Q3</span>
<span class="text-[10px] text-[#E05A4F] font-bold">Fastest: Cats (1.9d)</span>
</div>
</div>
<!-- Card 3: Approval vs Rejection Rate -->
<div class="flex flex-col justify-between p-4 rounded-xl bg-white border border-[#E5E5E5] shadow-xs">
<div>
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-[#71717A]">Approval Funnel</span>
<span class="material-symbols-outlined text-[18px] text-[#71717A]">fact_check</span>
</div>
<div class="mt-2.5 flex items-baseline gap-1.5">
<span class="font-mono text-2xl font-bold text-[#1F1F1F] leading-none">71.4%</span>
<span class="text-xs text-[#4CAF50] font-semibold">Approved</span>
</div>
<div class="mt-1 text-xs text-[#71717A]">
                342 Approved · <span class="font-mono font-medium text-[#1F1F1F]">137</span> Rejected
              </div>
</div>
<div class="mt-3 pt-2 bg-[#F8F8F8] border border-[#EBEBEB] px-2.5 py-1.5 rounded-lg flex items-center justify-between">
<span class="text-[10px] text-[#71717A]">Doc Failures: 18.2%</span>
<span class="font-mono text-[11px] text-[#71717A]">479 total</span>
</div>
</div>
<!-- Card 4: Safety Screening Flagged / Blacklist -->
<div class="flex flex-col justify-between p-4 rounded-xl bg-white border border-[#E5E5E5] shadow-xs">
<div>
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-[#71717A]">Safety Screening</span>
<span class="material-symbols-outlined text-[18px] text-[#E53935]">shield</span>
</div>
<div class="mt-2.5 flex items-baseline gap-1.5">
<span class="font-mono text-2xl font-bold text-[#E53935] leading-none">1.8%</span>
<span class="text-[10px] text-[#E53935] font-bold uppercase tracking-wide">High Risk</span>
</div>
<div class="mt-1 text-xs text-[#71717A]">
                14 Flagged / 780 Screened
              </div>
</div>
<div class="mt-3 pt-2 bg-[#FFE5E5] px-2.5 py-1.5 rounded-lg flex items-center justify-between border border-[#FFD0D0]">
<span class="text-[10px] text-[#E53935] font-semibold">100% Intercepted</span>
<span class="material-symbols-outlined text-[14px] text-[#E53935]">verified_user</span>
</div>
</div>
<!-- Card 5: Placement Retention Rate -->
<div class="flex flex-col justify-between p-4 rounded-xl bg-white border border-[#E5E5E5] shadow-xs">
<div>
<div class="flex items-center justify-between">
<span class="text-[11px] font-bold uppercase tracking-wider text-[#71717A]">180-Day Retention</span>
<span class="material-symbols-outlined text-[18px] text-[#4CAF50]">task_alt</span>
</div>
<div class="mt-2.5 flex items-baseline gap-1.5">
<span class="font-mono text-2xl font-bold text-[#1F1F1F] leading-none">96.2%</span>
<span class="text-xs text-[#4CAF50] font-semibold">Permanent</span>
</div>
<div class="mt-1 text-xs text-[#71717A]">
                Return Rate: <span class="font-mono font-semibold text-[#1F1F1F]">3.8%</span> (Move/Allergy)
              </div>
</div>
<div class="mt-3 pt-2 bg-[#F8F8F8] border border-[#EBEBEB] px-2.5 py-1.5 rounded-lg flex items-center justify-between">
<span class="text-[10px] text-[#4CAF50] font-bold">+2.2% vs Benchmark</span>
<span class="font-mono text-[11px] text-[#71717A]">Goal: &gt;94%</span>
</div>
</div>
</div>
<!-- Primary Analytics Grids: Throughput & SLA Funnel -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
<!-- Left Column (7 cols): Monthly Intake vs Adoption & Species Breakdown -->
<div class="xl:col-span-7 flex flex-col p-6 rounded-xl bg-white border border-[#E5E5E5] shadow-xs space-y-5">
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 border-b border-[#E5E5E5] pb-4">
<div>
<h2 class="text-base font-bold text-[#1F1F1F]">Monthly Intake vs. Adoption Throughput</h2>
<p class="text-xs text-[#71717A]">Occupancy equilibrium tracking past 10 months with shelter intake delta.</p>
</div>
<div class="flex items-center gap-4 text-xs">
<div class="flex items-center gap-1.5">
<span class="w-3 h-3 rounded bg-[#515F74]"></span>
<span class="text-[#71717A] font-medium">Intake</span>
</div>
<div class="flex items-center gap-1.5">
<span class="w-3 h-3 rounded bg-[#E05A4F]"></span>
<span class="text-[#71717A] font-medium">Adopted</span>
</div>
</div>
</div>
<!-- Chart Bar Visualization -->
<div class="bg-[#F8F8F8] border border-[#EBEBEB] p-4 rounded-xl flex flex-col justify-between">
<div class="h-48 w-full flex items-end justify-between gap-2 pt-4 px-2">
<!-- JAN -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 72%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 65%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">JAN</span>
</div>
<!-- FEB -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 68%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 64%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">FEB</span>
</div>
<!-- MAR -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 80%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 75%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">MAR</span>
</div>
<!-- APR -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 88%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 84%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">APR</span>
</div>
<!-- MAY -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 94%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 90%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">MAY</span>
</div>
<!-- JUN -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 85%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 81%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">JUN</span>
</div>
<!-- JUL -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 92%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 86%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">JUL</span>
</div>
<!-- AUG -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 89%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 85%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">AUG</span>
</div>
<!-- SEP -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 82%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 79%;"></div>
</div>
<span class="font-mono text-[10px] text-[#71717A]">SEP</span>
</div>
<!-- OCT (Current / Highlighted) -->
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end p-1 rounded-lg bg-[#FFE1DD]">
<div class="w-full flex items-end justify-center gap-1.5 h-36">
<div class="w-2.5 sm:w-3 bg-[#515F74] rounded-t" style="height: 95%;"></div>
<div class="w-2.5 sm:w-3 bg-[#E05A4F] rounded-t" style="height: 89%;"></div>
</div>
<span class="font-mono text-[10px] text-[#E05A4F] font-bold">OCT</span>
</div>
</div>
<!-- Occupancy Callout -->
<div class="flex items-center justify-between pt-3 mt-3 bg-white px-3 py-2 rounded-lg border border-[#E5E5E5] text-xs text-[#71717A]">
<span>Austin Central Hub: Total capacity utilization <strong>86.4%</strong></span>
<span class="font-mono font-semibold text-[#1F1F1F]">Net Delta: +14 Occupants</span>
</div>
</div>
<!-- Species Breakdown Table -->
<div class="pt-2">
<span class="text-[11px] font-bold uppercase tracking-wider text-[#71717A] block mb-2">Species Breakdown (October 2026)</span>
<div class="overflow-x-auto rounded-lg border border-[#E5E5E5]">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#F8F8F8] border-b border-[#E5E5E5] text-[11px] uppercase text-[#71717A] font-semibold">
<th class="py-2.5 px-3.5">Species Classification</th>
<th class="py-2.5 px-3.5 text-right">Intake</th>
<th class="py-2.5 px-3.5 text-right">Adopted</th>
<th class="py-2.5 px-3.5 text-right">Clearance Rate</th>
<th class="py-2.5 px-3.5 text-right">Avg Kennel Stay</th>
</tr>
</thead>
<tbody class="text-xs divide-y divide-[#E5E5E5] bg-white">
<tr class="hover:bg-[#F8F8F8] transition-colors">
<td class="py-2.5 px-3.5 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-[#71717A]">sound_detection_dog_barking</span>
<span class="font-medium text-[#1F1F1F]">Canine (Dogs &amp; Puppies)</span>
</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">82</td>
<td class="py-2.5 px-3.5 text-right font-mono font-bold text-[#1F1F1F]">76</td>
<td class="py-2.5 px-3.5 text-right font-mono font-semibold text-[#4CAF50]">92.6%</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">14.2 Days</td>
</tr>
<tr class="hover:bg-[#F8F8F8] transition-colors">
<td class="py-2.5 px-3.5 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-[#71717A]">pet_supplies</span>
<span class="font-medium text-[#1F1F1F]">Feline (Cats &amp; Kittens)</span>
</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">48</td>
<td class="py-2.5 px-3.5 text-right font-mono font-bold text-[#1F1F1F]">44</td>
<td class="py-2.5 px-3.5 text-right font-mono font-semibold text-[#4CAF50]">91.7%</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">9.6 Days</td>
</tr>
<tr class="hover:bg-[#F8F8F8] transition-colors">
<td class="py-2.5 px-3.5 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-[#71717A]">cruelty_free</span>
<span class="font-medium text-[#1F1F1F]">Small Pets (Rabbits / Rodents)</span>
</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">12</td>
<td class="py-2.5 px-3.5 text-right font-mono font-bold text-[#1F1F1F]">8</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">66.7%</td>
<td class="py-2.5 px-3.5 text-right font-mono text-[#71717A]">22.4 Days</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Right Column (5 cols): Turnaround SLA Funnel -->
<div class="xl:col-span-5 flex flex-col justify-between p-6 rounded-xl bg-white border border-[#E5E5E5] shadow-xs space-y-4">
<div>
<div class="flex items-center justify-between border-b border-[#E5E5E5] pb-4">
<div>
<h2 class="text-base font-bold text-[#1F1F1F]">Turnaround SLA Funnel</h2>
<p class="text-xs text-[#71717A]">Pipeline velocity across all 5 verification phases.</p>
</div>
<span class="px-2.5 py-1 rounded-md bg-[#FFE1DD] text-[#E05A4F] font-mono text-xs font-bold">
                  Avg 81.6h
                </span>
</div>
<!-- 5 Pipeline Verification Stages -->
<div class="space-y-3 mt-4">
<!-- Step 1 -->
<div class="p-3 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] space-y-1.5">
<div class="flex items-center justify-between text-xs">
<span class="font-semibold text-[#1F1F1F]">1. ID &amp; Screening</span>
<span class="font-mono font-bold text-[#1F1F1F]">6.2 hrs</span>
</div>
<div class="w-full h-1.5 rounded-full bg-[#E5E5E5] overflow-hidden">
<div class="h-full bg-[#515F74] rounded-full" style="width: 14%;"></div>
</div>
<span class="text-[11px] text-[#71717A] block">99.4% automated via LexisNexis identity API</span>
</div>
<!-- Step 2 -->
<div class="p-3 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] space-y-1.5">
<div class="flex items-center justify-between text-xs">
<span class="font-semibold text-[#1F1F1F]">2. Landlord Clearance</span>
<span class="font-mono font-bold text-[#1F1F1F]">19.4 hrs</span>
</div>
<div class="w-full h-1.5 rounded-full bg-[#E5E5E5] overflow-hidden">
<div class="h-full bg-[#515F74] rounded-full" style="width: 32%;"></div>
</div>
<span class="text-[11px] text-[#71717A] block">HOA &amp; lease verification confirmation queue</span>
</div>
<!-- Step 3 -->
<div class="p-3 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] space-y-1.5">
<div class="flex items-center justify-between text-xs">
<span class="font-semibold text-[#1F1F1F]">3. Meet &amp; Greet Interaction</span>
<span class="font-mono font-bold text-[#1F1F1F]">36.8 hrs</span>
</div>
<div class="w-full h-1.5 rounded-full bg-[#E5E5E5] overflow-hidden">
<div class="h-full bg-[#E05A4F] rounded-full" style="width: 60%;"></div>
</div>
<span class="text-[11px] text-[#71717A] block">Weekend adoption drives expedite speed by 2.4x</span>
</div>
<!-- Step 4 -->
<div class="p-3 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] space-y-1.5">
<div class="flex items-center justify-between text-xs">
<span class="font-semibold text-[#1F1F1F]">4. Final Director Review</span>
<span class="font-mono font-bold text-[#E53935]">14.7 hrs</span>
</div>
<div class="w-full h-1.5 rounded-full bg-[#E5E5E5] overflow-hidden">
<div class="h-full bg-[#E53935] rounded-full" style="width: 48%;"></div>
</div>
<span class="text-[11px] text-[#71717A] block">Manual committee sign-off on special behavior cases</span>
</div>
<!-- Step 5 -->
<div class="p-3 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB] space-y-1.5">
<div class="flex items-center justify-between text-xs">
<span class="font-semibold text-[#1F1F1F]">5. Contract &amp; Fee</span>
<span class="font-mono font-bold text-[#4CAF50]">4.5 hrs</span>
</div>
<div class="w-full h-1.5 rounded-full bg-[#E5E5E5] overflow-hidden">
<div class="h-full bg-[#4CAF50] rounded-full" style="width: 10%;"></div>
</div>
<span class="text-[11px] text-[#71717A] block">DocuSign auto-deposits to pet microchip registry</span>
</div>
</div>
</div>
<!-- Bottleneck Alert Banner -->
<div class="p-3 rounded-lg bg-[#FFE5E5] border border-[#FFD0D0] flex items-start gap-2.5">
<span class="material-symbols-outlined text-[20px] text-[#E53935] shrink-0 mt-0.5">warning</span>
<div class="flex flex-col">
<span class="text-xs font-bold text-[#E53935]">Bottleneck Alert: North Subnet Hub</span>
<span class="text-[11px] text-[#71717A] mt-0.5">
                  Home inspections in North Austin taking avg 42.0h due to 2 unassigned field volunteers.
                </span>
</div>
</div>
</div>
</div>
<!-- Secondary Analytics Row: Rejection Root Cause Analysis -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
<div class="xl:col-span-12 flex flex-col p-6 rounded-xl bg-white border border-[#E5E5E5] shadow-xs space-y-4">
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 border-b border-[#E5E5E5] pb-4">
<div>
<h2 class="text-base font-bold text-[#1F1F1F]">Rejection Root Cause Analysis</h2>
<p class="text-xs text-[#71717A]">Evaluation of 137 denied applications during screening pipeline.</p>
</div>
<span class="px-2.5 py-1 rounded-md bg-[#F8F8F8] border border-[#EBEBEB] font-mono text-xs font-bold text-[#1F1F1F]">
                137 Denials Total
              </span>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
<!-- 4-Segment Progress Bar & Legend (7 cols) -->
<div class="lg:col-span-7 space-y-4">
<div class="flex items-center justify-between text-xs font-semibold text-[#71717A]">
<span>Application Denial Distribution</span>
<span class="font-mono text-[#1F1F1F]">100% Categorized</span>
</div>
<!-- 4-segment progress bar -->
<div class="w-full h-4 rounded-md overflow-hidden flex shadow-2xs">
<div class="bg-[#515F74] h-full" style="width: 46%;" title="Incomplete Docs (46%)"></div>
<div class="bg-[#007BB9] h-full" style="width: 28%;" title="Landlord Limits (28%)"></div>
<div class="bg-[#8C716D] h-full" style="width: 14%;" title="Yard/Fence Hazard (14%)"></div>
<div class="bg-[#E53935] h-full" style="width: 12%;" title="Safety Citations (12%)"></div>
</div>
<!-- Legend Cards -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-1">
<div class="p-2.5 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB]">
<div class="flex items-center gap-1.5 mb-1">
<span class="w-2.5 h-2.5 rounded-full bg-[#515F74]"></span>
<span class="text-[11px] font-semibold text-[#1F1F1F]">Incomplete Docs</span>
</div>
<span class="font-mono text-sm font-bold text-[#1F1F1F]">46%</span>
<span class="text-[10px] text-[#71717A] block">63 applications</span>
</div>
<div class="p-2.5 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB]">
<div class="flex items-center gap-1.5 mb-1">
<span class="w-2.5 h-2.5 rounded-full bg-[#007BB9]"></span>
<span class="text-[11px] font-semibold text-[#1F1F1F]">Landlord Limits</span>
</div>
<span class="font-mono text-sm font-bold text-[#1F1F1F]">28%</span>
<span class="text-[10px] text-[#71717A] block">38 applications</span>
</div>
<div class="p-2.5 rounded-lg bg-[#F8F8F8] border border-[#EBEBEB]">
<div class="flex items-center gap-1.5 mb-1">
<span class="w-2.5 h-2.5 rounded-full bg-[#8C716D]"></span>
<span class="text-[11px] font-semibold text-[#1F1F1F]">Yard/Fence</span>
</div>
<span class="font-mono text-sm font-bold text-[#1F1F1F]">14%</span>
<span class="text-[10px] text-[#71717A] block">19 applications</span>
</div>
<div class="p-2.5 rounded-lg bg-[#FFE5E5] border border-[#FFD0D0]">
<div class="flex items-center gap-1.5 mb-1">
<span class="w-2.5 h-2.5 rounded-full bg-[#E53935]"></span>
<span class="text-[11px] font-semibold text-[#E53935]">Safety Flags</span>
</div>
<span class="font-mono text-sm font-bold text-[#E53935]">12%</span>
<span class="text-[10px] text-[#71717A] block">17 applications</span>
</div>
</div>
</div>
<!-- High-Risk Intercept Breakdown List (5 cols) -->
<div class="lg:col-span-5 p-4 rounded-xl bg-[#F8F8F8] border border-[#EBEBEB] space-y-3">
<div class="flex items-center justify-between">
<span class="text-xs font-bold uppercase tracking-wider text-[#1F1F1F]">High-Risk Intercept Breakdown</span>
<span class="material-symbols-outlined text-[16px] text-[#E53935]">security</span>
</div>
<div class="divide-y divide-[#E5E5E5] text-xs">
<div class="py-2 flex items-center justify-between">
<span class="text-[#555555]">Forged Leases / Identity Mismatch</span>
<span class="font-mono font-bold text-[#1F1F1F]">8 cases</span>
</div>
<div class="py-2 flex items-center justify-between">
<span class="text-[#555555]">Prior Humane Society Citations</span>
<span class="font-mono font-bold text-[#E53935]">4 cases</span>
</div>
<div class="py-2 flex items-center justify-between">
<span class="text-[#555555]">Hazardous Enclosure / Pool Safety</span>
<span class="font-mono font-bold text-[#1F1F1F]">2 cases</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
