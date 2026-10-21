<?php
$currentAdminPage = basename($_SERVER['PHP_SELF'] ?? '');
$adminNavigation = [
    'Main' => [
        ['v1_dashboard.php', 'Dashboard / Overview', 'grid_view', null],
        ['alert_notif.php', 'Alert Notifications', 'inbox', '3'],
    ],
    'Adoption Management' => [
        ['ADOPTION_REVIEW_V1.php', 'Applications Review', 'rate_review', null],
        ['Meet_and_Greet_V1_.php', 'Meet & Greets', 'handshake', null],
        ['Adoption_Contracts_.php', 'Adoption Contracts', 'description', null],
        ['READY_FOR_ADOPTION_V1.php', 'Ready for Adoption', 'check_circle', null],
    ],
    'Pet Management' => [
        ['PET_LISTING_V1.php', 'Pet Listings', 'format_list_bulleted', null],
        ['INTAKE_AND_HEALTH_MANAGEMENT_V1.php', 'Intake & Health', 'medical_services', null],
    ],
    'User & Partner Management' => [
        ['Adopters_and_User_Management_V1.php', 'Manage Users', 'groups', null],
        ['STAFF_ACCESS_AND_ROLE_PERMISION_.php', 'Staff Access', 'badge', null],
    ],
    'Analytics & Reports' => [
        ['ADOPTION_METRICS_V1_.php', 'Adoption Metrics', 'analytics', null],
        ['#', 'Export Reports', 'file_download', null],
    ],
];
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap');
  .material-symbols-outlined {
    font-family: 'Material Symbols Outlined';
    font-weight: normal;
    font-style: normal;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    white-space: nowrap;
    direction: ltr;
    font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
  }
</style>
<aside class="fixed left-0 top-0 z-30 flex h-screen w-64 flex-shrink-0 select-none flex-col justify-between border-r border-slate-200 bg-white">
  <div class="flex flex-col overflow-y-auto">
    <div class="flex h-16 items-center gap-3 border-b border-slate-100 px-6">
      <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#FDF2F0] text-[#E05A4F]">
        <span class="material-symbols-outlined text-[24px]">pets</span>
      </div>
      <div class="flex flex-col">
        <span class="text-[15px] font-bold leading-none tracking-tight text-slate-900">ADOPTLY</span>
        <span class="mt-0.5 text-[10px] font-semibold uppercase tracking-widest text-[#E05A4F]">Admin Portal</span>
      </div>
    </div>

    <nav class="space-y-6 px-3 py-4 text-[13px]" aria-label="Admin navigation">
      <?php foreach ($adminNavigation as $section => $items): ?>
        <div>
          <div class="mb-1.5 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400"><?= htmlspecialchars($section, ENT_QUOTES, 'UTF-8') ?></div>
          <div class="space-y-0.5">
            <?php foreach ($items as [$href, $label, $icon, $badge]): $active = $currentAdminPage === $href; ?>
              <a
                href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>"
                class="<?= $active ? 'flex items-center gap-3 rounded-lg bg-[#E05A4F] px-3 py-2 font-medium text-white shadow-sm transition-all' : 'flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-slate-600 transition-colors hover:bg-slate-50 hover:text-slate-900' ?>"
                <?= $active ? 'aria-current="page"' : '' ?>
              >
                <span class="material-symbols-outlined text-[20px] <?= $active ? 'text-white' : 'text-slate-400' ?>"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
                <span><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
                <?php if ($badge !== null): ?>
                  <span class="ml-auto rounded px-1.5 py-0.5 text-[11px] font-semibold <?= $active ? 'bg-white/20 text-white' : 'bg-[#FDF2F0] text-[#E05A4F]' ?>"><?= htmlspecialchars($badge, ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </nav>
  </div>

  <div class="space-y-2 border-t border-slate-200 bg-slate-50/70 p-3">
    <div class="flex items-center justify-between rounded-lg border border-slate-200/80 bg-white px-3 py-2 text-[11px]">
      <div class="flex items-center gap-2">
        <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
        <span class="font-medium text-slate-700">All Systems Operational</span>
      </div>
      <span class="font-mono font-semibold text-slate-400">99.98%</span>
    </div>
    <a class="flex items-center gap-2.5 rounded-lg px-3 py-2 text-[13px] font-medium text-slate-600 transition-colors hover:bg-white hover:text-[#E05A4F]" href="LOG_IN_V1.php">
      <span class="material-symbols-outlined text-[18px] text-[#E05A4F]">logout</span>
      <span>Admin Sign Out</span>
    </a>
  </div>
</aside>
