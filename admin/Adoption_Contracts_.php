<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html><html lang="en" style=""><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,300..900;1,300..900&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
          "outline-variant": "#dfbfbb",
          "surface-variant": "#d3e4fe",
          "primary-container": "#c94940",
          "on-primary-container": "#fffbff",
          "secondary-fixed": "#d5e3fd",
          "on-background": "#0b1c30",
          "on-tertiary-fixed": "#001d31",
          "on-primary": "#ffffff",
          "tertiary-fixed-dim": "#93ccff",
          "surface-container-highest": "#d3e4fe",
          "primary-fixed": "#ffdad6",
          "background": "#f8f9ff",
          "on-secondary-fixed": "#0d1c2f",
          "secondary": "#515f74",
          "on-tertiary-fixed-variant": "#004b73",
          "on-error-container": "#93000a",
          "on-secondary-container": "#57657b",
          "on-surface-variant": "#58413e",
          "on-tertiary-container": "#fdfcff",
          "on-error": "#ffffff",
          "on-surface": "#0b1c30",
          "error": "#ba1a1a",
          "surface-container": "#e5eeff",
          "on-primary-fixed": "#410002",
          "primary": "#a8312a",
          "inverse-primary": "#ffb4ab",
          "surface-container-low": "#eff4ff",
          "surface-bright": "#f8f9ff",
          "on-secondary": "#ffffff",
          "inverse-on-surface": "#eaf1ff",
          "surface": "#f8f9ff",
          "primary-fixed-dim": "#ffb4ab",
          "secondary-container": "#d5e3fd",
          "on-secondary-fixed-variant": "#3a485c",
          "tertiary-fixed": "#cce5ff",
          "outline": "#8c716d",
          "on-primary-fixed-variant": "#8a1b18",
          "surface-container-high": "#dce9ff",
          "tertiary-container": "#007bb9",
          "surface-dim": "#cbdbf5",
          "on-tertiary": "#ffffff",
          "surface-tint": "#ab342c",
          "surface-container-lowest": "#ffffff",
          "tertiary": "#006194",
          "inverse-surface": "#213145",
          "error-container": "#ffdad6",
          "secondary-fixed-dim": "#b9c7e0"
        },
        "borderRadius": {
          "DEFAULT": "0.125rem",
          "lg": "0.25rem",
          "xl": "0.5rem",
          "full": "0.75rem"
        },
        "spacing": {
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
        "fontFamily": {
          "code-num": [
            "JetBrains Mono"
          ],
          "body-md": [
            "Hanken Grotesk"
          ],
          "headline-lg": [
            "Hanken Grotesk"
          ],
          "headline-md": [
            "Hanken Grotesk"
          ],
          "body-lg": [
            "Hanken Grotesk"
          ],
          "headline-lg-mobile": [
            "Hanken Grotesk"
          ],
          "body-sm": [
            "Hanken Grotesk"
          ],
          "label-sm": [
            "Hanken Grotesk"
          ],
          "headline-xl": [
            "Hanken Grotesk"
          ],
          "headline-sm": [
            "Hanken Grotesk"
          ],
          "label-md": [
            "Hanken Grotesk"
          ]
        },
        "fontSize": {
          "code-num": [
            "12px",
            {
              "lineHeight": "16px",
              "fontWeight": "500"
            }
          ],
          "body-md": [
            "14px",
            {
              "lineHeight": "20px",
              "fontWeight": "400"
            }
          ],
          "headline-lg": [
            "24px",
            {
              "lineHeight": "32px",
              "letterSpacing": "-0.015em",
              "fontWeight": "600"
            }
          ],
          "headline-md": [
            "18px",
            {
              "lineHeight": "24px",
              "letterSpacing": "-0.01em",
              "fontWeight": "600"
            }
          ],
          "body-lg": [
            "16px",
            {
              "lineHeight": "24px",
              "fontWeight": "400"
            }
          ],
          "headline-lg-mobile": [
            "20px",
            {
              "lineHeight": "28px",
              "letterSpacing": "-0.01em",
              "fontWeight": "600"
            }
          ],
          "body-sm": [
            "13px",
            {
              "lineHeight": "18px",
              "fontWeight": "400"
            }
          ],
          "label-sm": [
            "11px",
            {
              "lineHeight": "14px",
              "letterSpacing": "0.04em",
              "fontWeight": "600"
            }
          ],
          "headline-xl": [
            "32px",
            {
              "lineHeight": "40px",
              "letterSpacing": "-0.02em",
              "fontWeight": "700"
            }
          ],
          "headline-sm": [
            "15px",
            {
              "lineHeight": "20px",
              "fontWeight": "600"
            }
          ],
          "label-md": [
            "12px",
            {
              "lineHeight": "16px",
              "letterSpacing": "0.02em",
              "fontWeight": "600"
            }
          ]
        }
      },
    },
  }</script><style id="warm-brand-theme">:root{--primary-brand:#E05A4F;--primary-hover:#c94a40;--bg-warm:#FCF9F8;--surface-warm:#FFFFFF;--card-border:#f0eae7;--warm-tint:#FDF2F1;--warm-tint-border:#fcd8d4;--text-dark:#1F1F1F;--text-muted:#6B6153;}body{background-color:#FCF9F8!important;color:#1F1F1F!important;font-family:'Plus Jakarta Sans',sans-serif!important;}h1,h2,h3,.font-headline-lg,.font-headline-md,.font-headline-sm{font-family:'Poppins',sans-serif!important;}.bg-background{background-color:#FCF9F8!important;}.bg-surface-container-lowest{background-color:#FFFFFF!important;border:1px solid #f0eae7!important;box-shadow:0 1px 3px 0 rgba(78,70,57,0.04),0 1px 2px -1px rgba(78,70,57,0.03)!important;}.bg-surface-container-low{background-color:#FAF7F5!important;border:1px solid #f5ede8!important;}.bg-surface-container{background-color:#F4EFEB!important;}.bg-primary{background-color:#E05A4F!important;}.hover\:bg-primary-container:hover{background-color:#c94a40!important;}.text-primary{color:#E05A4F!important;}.bg-primary-fixed{background-color:#FDF2F1!important;color:#E05A4F!important;border:1px solid #fcd8d4!important;}.border-outline-variant\/30,.border-outline-variant\/20,.border-outline-variant\/40{border-color:#ede5e1!important;}aside{background-color:#FFFFFF!important;border-right-color:#ede5e1!important;}header{background-color:#FFFFFF!important;border-bottom-color:#ede5e1!important;}</style></head><body class="bg-background font-body-md text-body-md text-on-surface antialiased"><?php require __DIR__ . '/admin_sidebar.php'; ?><div class="pl-64"><header class="fixed top-0 left-64 right-0 h-14 bg-surface-container-lowest border-b border-outline-variant/30 z-40 px-gutter-desktop flex items-center justify-between"><div class="flex items-center gap-space-sm"><span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Admin Portal</span><span class="material-symbols-outlined text-[14px] text-secondary">chevron_right</span><span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Adoption Management</span><span class="material-symbols-outlined text-[14px] text-secondary">chevron_right</span><span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">Adoption Contracts</span></div><div class="flex items-center gap-space-lg"><div class="relative flex items-center"><span class="material-symbols-outlined absolute left-2.5 text-[18px] text-secondary">search</span><input class="w-80 h-[34px] pl-9 pr-12 rounded bg-surface border border-outline-variant/40 font-body-sm text-body-sm text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary" placeholder="Search pets, applications, users..." type="text"><div class="absolute right-2.5 px-1 py-0.2 rounded border border-outline-variant/40 bg-surface-container font-code-num text-[10px] text-secondary select-none">⌘K</div></div><div class="flex items-center gap-space-xs"><button class="relative p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">notifications</span><span class="absolute top-1 right-1 w-4 h-4 bg-primary text-on-primary font-code-num text-[10px] font-bold rounded-full flex items-center justify-center leading-none">4</span></button><button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">help</span></button></div><div class="h-6 w-px bg-outline-variant/30"></div><div class="flex items-center gap-space-sm pl-space-xs cursor-pointer select-none"><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div><div class="flex flex-col"><span class="font-label-md text-label-md text-on-surface font-semibold leading-tight">Admin User</span><span class="font-label-sm text-label-sm text-secondary leading-tight">Super Administrator</span></div><span class="material-symbols-outlined text-[16px] text-secondary">arrow_drop_down</span></div></div></header><main class="w-full pt-14 px-gutter-desktop pb-margin-desktop bg-background min-h-screen"><div class="flex flex-col w-full">
<!-- Page Header & Action Bar -->
<div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-space-lg mb-space-xl">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-sm">
<span class="font-headline-lg text-headline-lg text-on-surface font-bold">Adoption Contracts &amp; Legal Agreements</span>
<span class="px-2 py-0.5 rounded bg-surface-container-highest text-tertiary font-code-num text-code-num font-semibold uppercase tracking-wider">
          Legally Binding Repository &amp; E-Signature
        </span>
</div>
<p class="font-body-md text-body-md text-secondary">
        Review, issue, and manage signed binding adoption covenants between approved adopters and certified shelter partners.
      </p>
</div>
<div class="flex items-center gap-space-sm flex-wrap">
<button class="h-[34px] px-3 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container-high transition-colors font-body-sm text-body-sm font-medium flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-[16px] text-secondary">download</span>
        Download Executed (.PDF)
      </button>
<button class="h-[34px] px-3 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container-high transition-colors font-body-sm text-body-sm font-medium flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-[16px] text-secondary">history_edu</span>
        Audit Trail &amp; Hash Log
      </button>
<button class="h-[34px] px-3.5 rounded bg-primary hover:bg-primary-container text-on-primary transition-colors font-body-sm text-body-sm font-semibold flex items-center gap-1.5 shadow-sm" type="button">
<span class="material-symbols-outlined text-[16px]">add</span>
        Draft New Contract
      </button>
</div>
</div>
<!-- Metric / KPI Strip -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
<!-- Metric 1 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Pending E-Signatures</span>
<div class="w-7 h-7 rounded bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[16px]">draw</span>
</div>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-headline-xl text-headline-xl text-on-surface font-bold">4</span>
<span class="font-body-sm text-body-sm text-secondary">contracts</span>
</div>
<div class="mt-space-sm pt-space-xs flex items-center justify-between text-secondary">
<span class="font-label-sm text-label-sm text-secondary">2 shelter rep • 2 adopter</span>
<span class="font-code-num text-code-num text-primary font-semibold">Urgent</span>
</div>
</div>
<!-- Metric 2 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Handover Countersign</span>
<div class="w-7 h-7 rounded bg-surface-container flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-[16px]">pending_actions</span>
</div>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-headline-xl text-headline-xl text-on-surface font-bold">6</span>
<span class="font-body-sm text-body-sm text-secondary">agreements</span>
</div>
<div class="mt-space-sm pt-space-xs flex items-center justify-between text-secondary">
<span class="font-label-sm text-label-sm text-secondary">Scheduled within 48h</span>
<span class="font-code-num text-code-num text-tertiary font-semibold">Active</span>
</div>
</div>
<!-- Metric 3 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Executed This Month</span>
<div class="w-7 h-7 rounded bg-surface-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[16px]">verified</span>
</div>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-headline-xl text-headline-xl text-on-surface font-bold">48</span>
<span class="font-body-sm text-body-sm text-secondary">closed</span>
</div>
<div class="mt-space-sm pt-space-xs flex items-center justify-between text-secondary">
<span class="font-label-sm text-label-sm text-secondary">100% legal compliance</span>
<span class="font-code-num text-code-num text-secondary font-semibold">+12% MoM</span>
</div>
</div>
<!-- Metric 4 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg flex flex-col justify-between shadow-sm">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Return Policy Adherence</span>
<div class="w-7 h-7 rounded bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[16px]">shield</span>
</div>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-headline-xl text-headline-xl text-on-surface font-bold">99.4%</span>
<span class="font-body-sm text-body-sm text-secondary">lifetime</span>
</div>
<div class="mt-space-sm pt-space-xs flex items-center justify-between text-secondary">
<span class="font-label-sm text-label-sm text-secondary">Zero unauthorized transfers</span>
<span class="font-code-num text-code-num text-primary font-semibold">Protected</span>
</div>
</div>
</div>
<!-- Main Split Architecture Workspace -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- LEFT COLUMN: Contracts Queue (5 Columns on Desktop) -->
<div class="lg:col-span-5 flex flex-col gap-space-md">
<!-- Filter Bar & Search Utility -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-sm">
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-[18px] text-secondary">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-secondary focus:outline-none focus:bg-surface" placeholder="Filter by ID, animal, shelter, or adopter..." type="text">
</div>
<div class="grid grid-cols-2 gap-space-xs">
<select class="h-8 px-2 rounded bg-surface-container-low font-body-sm text-body-sm text-on-surface focus:outline-none">
<option>All Shelter Partners</option>
<option selected="">Austin Paws Rescue</option>
<option>Courtyard Shelter Network</option>
<option>Small Critter Wing Sanctuary</option>
</select>
<select class="h-8 px-2 rounded bg-surface-container-low font-body-sm text-body-sm text-on-surface focus:outline-none">
<option>All Contract Statuses</option>
<option>Pending Adopter</option>
<option>Pending Shelter</option>
<option>Fully Executed</option>
</select>
</div>
<div class="flex items-center justify-between pt-1">
<span class="font-label-sm text-label-sm text-secondary">Showing 4 active covenants</span>
<div class="flex items-center gap-1">
<button class="px-2 py-0.5 rounded text-[11px] font-semibold bg-surface-container text-on-surface" type="button">Canine (1)</button>
<button class="px-2 py-0.5 rounded text-[11px] font-semibold bg-surface-container text-on-surface" type="button">Feline (2)</button>
<button class="px-2 py-0.5 rounded text-[11px] font-semibold bg-surface-container text-on-surface" type="button">Small (1)</button>
</div>
</div>
</div>
<!-- Contract Queue Cards -->
<div class="flex flex-col gap-space-sm" id="contractList">
<!-- CARD 1: Selected / Target Contract #AC-9942 -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm relative cursor-pointer transition-all hover:bg-surface-container-low">
<!-- Active Coral Accent Bar -->
<div class="absolute left-0 top-3 bottom-3 w-1.5 bg-primary rounded-r"></div>
<div class="pl-2 flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num font-bold text-primary">#AC-9942</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-secondary">Oct 24, 2026</span>
</div>
<span class="px-2 py-0.5 rounded bg-[#fef3c7] text-[#92400e] font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-[#d97706]"></span>
                Pending Adopter
              </span>
</div>
<div class="flex items-center justify-between mt-1">
<div class="flex items-center gap-2.5">
<img class="w-11 h-11 rounded-lg object-cover bg-surface-container" data-alt="Close-up portrait of Bella, a sleek short-haired domestic tuxedo cat with wide amber eyes resting on clean neutral linen in a modern bright shelter sanctuary." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRcEyY_N8waGwH87w1vF5EbFGnpXF3-yPRo8rvF8hS5J03D-Yg2Tnx2QWlvbT9WioEHHA4HymiEMHs5ycnllss0prShM9UCkBt7nnj_WCY-1RdR5S3dtTl3VfFjSu4eRRQ2KyD5hdmEyLFnq9vmvUnXd6X8c87s8cdszyGtZsaSiP5mfjR1hWkXTUXyNAvy2lSqwfDhEB7Ba3CZnZbNHQRPJejDe_Pm4ik9JvNPtmcIs0bEaYzV-R-TQ">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold leading-tight">Bella</span>
<span class="font-body-sm text-body-sm text-secondary leading-tight">Domestic Short Hair • 1.5 yrs</span>
</div>
</div>
<div class="text-right flex flex-col">
<span class="font-body-sm text-body-sm font-semibold text-on-surface">Sarah Jenkins</span>
<span class="font-label-sm text-label-sm text-secondary">Adopter ID: #AD-8491</span>
</div>
</div>
<div class="mt-2 pt-2 bg-surface-container-low rounded p-2 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">apartment</span> Austin Paws Rescue
              </span>
<span class="font-code-num text-code-num text-on-surface font-medium">Shelter Signed • 2FA OK</span>
</div>
</div>
</div>
<!-- CARD 2: Contract #AC-9940 (Fully Executed) -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm relative cursor-pointer transition-all hover:bg-surface-container-low opacity-95">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num font-bold text-on-surface">#AC-9940</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-secondary">Oct 23, 2026</span>
</div>
<span class="px-2 py-0.5 rounded bg-[#d1fae5] text-[#065f46] font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                Fully Executed
              </span>
</div>
<div class="flex items-center justify-between mt-1">
<div class="flex items-center gap-2.5">
<img class="w-11 h-11 rounded-lg object-cover bg-surface-container" data-alt="A friendly golden-honey retriever mix named Barnaby panting with bright attentive eyes in an open daylight shelter courtyard." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8WKesT5k-Om7fp1LPsh5cPVVugtGTN6eBt5dKWJ0_DBzxPnCT66eggvQDmNTUTw0mM5axya4JdjRom_viz-iSMWt8w2Hzy_tTTnGv3l0lopyx2yhPGF-GMVGiqbpIROJgDUhuJNxOXx4cl9eFsTvZW7hoUa9Fu4ZrYWB8dmuH4FW0j0Z93lkfRlhusDdUZn19veCh4gdHwJJT00pVoS5hXnbBY0jAzz-G7vCo-74V10D3to7g0oF3SQ">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold leading-tight">Barnaby</span>
<span class="font-body-sm text-body-sm text-secondary leading-tight">Retriever Mix • 3 yrs</span>
</div>
</div>
<div class="text-right flex flex-col">
<span class="font-body-sm text-body-sm font-semibold text-on-surface">Marcus Vance</span>
<span class="font-label-sm text-label-sm text-secondary">Adopter ID: #AD-7730</span>
</div>
</div>
<div class="mt-2 pt-2 bg-surface-container-low rounded p-2 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">apartment</span> Courtyard Shelter
              </span>
<span class="font-code-num text-code-num text-[#065f46] font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">verified</span> Dual Signatures Confirmed
              </span>
</div>
</div>
</div>
<!-- CARD 3: Contract #AC-9938 (Shelter Countersign Needed) -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm relative cursor-pointer transition-all hover:bg-surface-container-low opacity-95">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num font-bold text-on-surface">#AC-9938</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-secondary">Oct 22, 2026</span>
</div>
<span class="px-2 py-0.5 rounded bg-[#fee2e2] text-[#991b1b] font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-[#ef4444]"></span>
                Shelter Countersign
              </span>
</div>
<div class="flex items-center justify-between mt-1">
<div class="flex items-center gap-2.5">
<div class="w-11 h-11 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[20px]">pets</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold leading-tight">Jasper</span>
<span class="font-body-sm text-body-sm text-secondary leading-tight">Border Collie • 4 yrs</span>
</div>
</div>
<div class="text-right flex flex-col">
<span class="font-body-sm text-body-sm font-semibold text-on-surface">David Chen</span>
<span class="font-label-sm text-label-sm text-secondary">Adopter ID: #AD-9102</span>
</div>
</div>
<div class="mt-2 pt-2 bg-surface-container-low rounded p-2 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">apartment</span> Austin Paws Rescue
              </span>
<span class="font-code-num text-code-num text-primary font-medium">Awaiting Dr. Rostova</span>
</div>
</div>
</div>
<!-- CARD 4: Contract #AC-9935 (Drafting in Progress) -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm relative cursor-pointer transition-all hover:bg-surface-container-low opacity-95">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="font-code-num text-code-num font-bold text-on-surface">#AC-9935</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-secondary">Oct 21, 2026</span>
</div>
<span class="px-2 py-0.5 rounded bg-surface-container-highest text-secondary font-label-sm text-label-sm font-semibold">
                Drafting
              </span>
</div>
<div class="flex items-center justify-between mt-1">
<div class="flex items-center gap-2.5">
<img class="w-11 h-11 rounded-lg object-cover bg-surface-container" data-alt="Soft gray Mini Lop rabbit named Mochi resting on clean hay in an indoor specialized rescue sanctuary pen." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoyTXTDzB-xQZKJc5oS8JMDV-4zf3pgYrwznd1KcpGQ1uujpjyJ9uVbMgkoGXOe2_0EQycNrgsO1n5LwlVwKEGIkY-dgUYdglZkBTbNUz8TEvoWiThy6w98yIvIoaAe0ycib-eMnBbVewAmbQjyukzBC_wVc6pMNxyNOKw32hU-3Ka8juwiiQV_sLNmdWZjjdrmRZBCObuinu7JxXI07sky77MUhVTfzVnkQyufB7Y_DEVfbIODP1gSA">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold leading-tight">Mochi</span>
<span class="font-body-sm text-body-sm text-secondary leading-tight">Mini Lop Rabbit • 8 mos</span>
</div>
</div>
<div class="text-right flex flex-col">
<span class="font-body-sm text-body-sm font-semibold text-on-surface">Maya Patel</span>
<span class="font-label-sm text-label-sm text-secondary">Adopter ID: #AD-6219</span>
</div>
</div>
<div class="mt-2 pt-2 bg-surface-container-low rounded p-2 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">apartment</span> Small Critter Wing
              </span>
<span class="font-code-num text-code-num text-secondary">Custom Clauses Attached</span>
</div>
</div>
</div>
</div>
</div>
<!-- RIGHT COLUMN: Detailed Contract Document Inspection & Signatures Viewer (7 Columns on Desktop) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<!-- Formal Document Paper Container -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-xl flex flex-col gap-space-lg">
<!-- Document Stamp & Formal Header -->
<div class="bg-surface-container-low rounded-lg p-space-lg flex flex-col gap-space-sm">
<div class="flex items-start justify-between flex-wrap gap-2">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-widest leading-none">Official Adoptly Covenant</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold mt-1 leading-snug">
                Pet Adoption Covenant &amp; Legal Bill of Sale #AC-9942
              </h2>
</div>
<div class="flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container text-on-surface font-code-num text-[11px] font-semibold">
<span class="material-symbols-outlined text-[14px] text-tertiary">lock</span>
              SHA-256 E-SIGN ACTIVE
            </div>
</div>
<!-- Document Metadata Grid -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm mt-2 pt-space-sm bg-surface-container-lowest rounded p-space-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Issuing Shelter</span>
<span class="font-body-sm text-body-sm font-bold text-on-surface">Austin Paws Rescue</span>
<span class="font-code-num text-[11px] text-secondary">ID: APR-8812</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Verified Adopter</span>
<span class="font-body-sm text-body-sm font-bold text-on-surface">Sarah Jenkins</span>
<span class="font-code-num text-[11px] text-secondary">ID: TX-***-8491 (SSN Verified)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Identified Animal</span>
<span class="font-body-sm text-body-sm font-bold text-on-surface">Bella (Feline)</span>
<span class="font-code-num text-[11px] text-secondary">Chip: 985141002384192</span>
</div>
</div>
</div>
<!-- Document Body & Core Legal Covenants -->
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between pb-1">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Mandatory Legal Covenants</span>
<span class="font-label-sm text-label-sm text-secondary">Governing Jurisdiction: State of Texas • Shelter Code Title 10</span>
</div>
<!-- Section 4.1 Non-Transferable Ownership -->
<div class="bg-surface-container-low rounded-lg p-space-md flex flex-col gap-space-xs transition-colors hover:bg-surface-container">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="w-6 h-6 rounded bg-primary-fixed text-primary font-code-num text-[12px] font-bold flex items-center justify-center">4.1</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Non-Transferable Ownership</span>
</div>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold">Mandatory Clause</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface leading-relaxed mt-1">
<strong>Verbatim Legal Restriction:</strong> The Adopter is expressly prohibited from gifting, selling, rehoming, transferring ownership, leasing, or consigning the animal to any third party, broker, breeding operation, or biomedical facility without the express written authorization and consent of the issuing shelter (<span class="text-on-surface font-semibold">Austin Paws Rescue</span>).
            </p>
<div class="mt-1 p-2 rounded bg-surface-container-lowest text-secondary font-label-sm text-label-sm flex items-start gap-2">
<span class="material-symbols-outlined text-[16px] text-primary shrink-0">gavel</span>
<span class="">Violation constitutes immediate breach of covenant resulting in immediate repossession rights by the shelter without reimbursement of adoption contributions.</span>
</div>
</div>
<!-- Section 4.2 Return-to-Shelter Requirement -->
<div class="bg-surface-container-low rounded-lg p-space-md flex flex-col gap-space-xs transition-colors hover:bg-surface-container">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="w-6 h-6 rounded bg-primary-fixed text-primary font-code-num text-[12px] font-bold flex items-center justify-center">4.2</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Return-to-Shelter Requirement</span>
</div>
<span class="px-2 py-0.5 rounded bg-[#fef3c7] text-[#92400e] font-label-sm text-label-sm font-semibold">Zero Kill Clause</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface leading-relaxed mt-1">
<strong>Verbatim Legal Restriction:</strong> If at any point during the natural lifetime of the animal the Adopter is unable or unwilling to provide adequate food, shelter, humane veterinary attention, or personal care, the animal <em>must be returned directly</em> to Austin Paws Rescue. Under no circumstances may the pet be abandoned, surrendered to an open-intake municipal kill shelter, or placed with unauthorized rescuers.
            </p>
<div class="mt-1 p-2 rounded bg-surface-container-lowest text-secondary font-label-sm text-label-sm flex items-start gap-2">
<span class="material-symbols-outlined text-[16px] text-primary shrink-0">assignment_return</span>
<span class="">Shelter guarantees lifetime return intake acceptance within 48 hours of official digital notification.</span>
</div>
</div>
<!-- Section 5 Legal Liability & Digital Signatures -->
<div class="bg-surface-container-low rounded-lg p-space-md flex flex-col gap-space-xs transition-colors hover:bg-surface-container">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="w-6 h-6 rounded bg-primary-fixed text-primary font-code-num text-[12px] font-bold flex items-center justify-center">5.0</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Legal Liability &amp; Medical Release</span>
</div>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold">Full Indemnity</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface leading-relaxed mt-1">
<strong>Verbatim Release:</strong> The Adopter assumes full legal and financial responsibility for the animal as of the physical handover date. The Issuing Shelter and the Adoptly Platform are released and discharged from any and all liability, claims, or damages relating to subsequent injuries, property damage, behavioral manifestations, or unforeseen medical expenses incurred post-handover.
            </p>
</div>
</div>
<!-- Digital Signatures Verification Area -->
<div class="flex flex-col gap-space-sm pt-space-sm">
<div class="flex items-center justify-between">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Cryptographic Signatures &amp; Execution</span>
<span class="font-code-num text-[11px] text-secondary">2FA Cryptographic Standard • ESIGN Act Compliant</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Shelter Signature Box (EXECUTED) -->
<div class="bg-surface-container-low rounded-lg p-space-md flex flex-col justify-between relative overflow-hidden">
<div class="flex items-center justify-between mb-2">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Authorized Shelter Signatory</span>
<span class="font-body-sm text-body-sm font-bold text-on-surface">Dr. Elena Rostova, DVM</span>
<span class="font-label-sm text-label-sm text-secondary">Executive Director, Austin Paws Rescue</span>
</div>
<span class="px-2 py-0.5 rounded bg-[#d1fae5] text-[#065f46] font-code-num text-[11px] font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">check_circle</span> VERIFIED
                </span>
</div>
<!-- Signature Stylized Vector Flourish -->
<div class="h-14 bg-surface-container-lowest rounded flex items-center justify-center p-2 relative my-1">
<svg class="w-full h-full text-secondary opacity-80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 240 50">
<path d="M10 32 C 30 10, 45 42, 60 20 C 70 5, 80 40, 95 18 C 110 5, 125 35, 140 22 C 160 8, 175 40, 195 24 C 210 12, 225 30, 235 20"></path>
<path d="M40 38 L 180 38" stroke-dasharray="4 2"></path>
</svg>
<span class="absolute bottom-1 right-2 font-code-num text-[9px] text-secondary uppercase">Signature Stamp #TX-VET-994</span>
</div>
<div class="flex flex-col gap-0.5 mt-2 font-code-num text-[11px] text-secondary">
<div class="flex items-center justify-between">
<span class="">Timestamp:</span>
<span class="text-on-surface font-medium">2026-10-24 14:15:22 UTC</span>
</div>
<div class="flex items-center justify-between">
<span class="">IP &amp; 2FA Hash:</span>
<span class="text-on-surface font-medium">192.168.4.120 • #e3b0c44298fc...</span>
</div>
</div>
</div>
<!-- Adopter Signature Box (PENDING) -->
<div class="bg-surface-container-low rounded-lg p-space-md flex flex-col justify-between relative">
<div class="flex items-center justify-between mb-2">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Adopter Signatory</span>
<span class="font-body-sm text-body-sm font-bold text-on-surface">Sarah Jenkins</span>
<span class="font-label-sm text-label-sm text-secondary">sarah.jenkins.design@example.com</span>
</div>
<span class="px-2 py-0.5 rounded bg-[#fef3c7] text-[#92400e] font-code-num text-[11px] font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">schedule</span> AWAITING
                </span>
</div>
<!-- Interactive / Status Box -->
<div class="h-14 bg-surface-container-lowest rounded flex flex-col items-center justify-center p-2 my-1 text-center" id="adopterSignContainer">
<span class="font-label-sm text-label-sm text-secondary">Direct Secure Link dispatched 3 hours ago</span>
<span class="font-code-num text-[11px] text-primary font-bold mt-0.5">Token Active: exp. in 21h</span>
</div>
<div class="flex items-center gap-2 mt-2">
<button class="flex-1 h-8 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container-high transition-colors font-body-sm text-body-sm font-medium flex items-center justify-center gap-1" id="remindBtn" type="button">
<span class="material-symbols-outlined text-[15px] text-primary">send</span>
                  Send SMS Reminder
                </button>
<button class="flex-1 h-8 rounded bg-primary text-on-primary hover:bg-primary-container transition-colors font-body-sm text-body-sm font-semibold flex items-center justify-center gap-1 shadow-sm" id="tabletSignBtn" type="button">
<span class="material-symbols-outlined text-[15px]">tablet_mac</span>
                  Tablet Sign-off
                </button>
</div>
</div>
</div>
</div>
<!-- Document Actions Bottom Toolbar -->
<div class="pt-space-md flex flex-col sm:flex-row items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm w-full sm:w-auto">
<button class="h-9 px-3 rounded bg-surface-container-low text-error hover:bg-error-container transition-colors font-body-sm text-body-sm font-semibold flex items-center gap-1.5" type="button">
<span class="material-symbols-outlined text-[16px]">cancel</span>
              Revoke Contract
            </button>
<button class="h-9 px-3 rounded bg-surface-container-low text-on-surface hover:bg-surface-container transition-colors font-body-sm text-body-sm font-medium flex items-center gap-1.5" type="button">
<span class="material-symbols-outlined text-[16px] text-secondary">print</span>
              Print Certified
            </button>
</div>
<button class="h-9 px-4 rounded bg-primary hover:bg-primary-container text-on-primary transition-colors font-body-sm text-body-sm font-semibold flex items-center justify-center gap-2 w-full sm:w-auto shadow-sm" type="button">
<span class="">Finalize &amp; Issue Executed Agreement</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<div class="mt-space-xl pt-space-md border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between text-secondary font-label-sm text-label-sm gap-2"><div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-[#10b981]"></span><span class="font-semibold text-on-surface">Cryptographic Ledger Connected:</span><span class="">SHA-256 Vault Node #TX-ADOPT-09 • 99.98% Service Uptime</span></div><div class="flex items-center gap-4"><span class="font-code-num text-code-num text-secondary">ESIGN &amp; UETA Compliant Framework</span><span class="text-secondary">Adoptly Legal Engine v4.2.1</span></div></div></div>
<script>
  (function() {
    const remindBtn = document.getElementById('remindBtn');
    if (remindBtn) {
      remindBtn.addEventListener('click', function() {
        this.innerHTML = '<span class="material-symbols-outlined text-[15px] text-primary">check</span> Dispatched SMS';
        this.classList.add('bg-surface-container-high');
        setTimeout(() => {
          this.innerHTML = '<span class="material-symbols-outlined text-[15px] text-primary">send</span> Send SMS Reminder';
          this.classList.remove('bg-surface-container-high');
        }, 2800);
      });
    }

    const tabletSignBtn = document.getElementById('tabletSignBtn');
    const adopterSignContainer = document.getElementById('adopterSignContainer');
    if (tabletSignBtn && adopterSignContainer) {
      tabletSignBtn.addEventListener('click', function() {
        adopterSignContainer.innerHTML = `
          <div class="flex items-center justify-center gap-2">
            <span class="font-code-num text-code-num font-bold text-primary">Sarah Jenkins</span>
            <span class="px-1.5 py-0.2 rounded bg-surface-container text-on-surface text-[10px] font-code-num">STYLUS CAPTURED</span>
          </div>
          <span class="font-code-num text-[10px] text-secondary mt-0.5">Timestamp: Just now &bull; Direct Station 04</span>
        `;
        tabletSignBtn.disabled = true;
        tabletSignBtn.innerText = 'Captured In-Person';
        tabletSignBtn.classList.replace('bg-primary', 'bg-surface-container-high');
        tabletSignBtn.classList.replace('text-on-primary', 'text-secondary');
      });
    }
  })();
</script></main></div>


</body></html>
