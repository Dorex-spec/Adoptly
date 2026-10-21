<?php
/**
 * Adoptly Admin Portal - Inbox & Operational Alerts
 * Single-file PHP page (PHP 7.4+). Run with:  php -S localhost:8000
 */
session_start();

function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
$self = basename($_SERVER['PHP_SELF']);

// ------------------------------------------------------------------
// 1. Seed data (reset any time with ?reset=1)
// ------------------------------------------------------------------
function seed_alerts() {
    return [
        ['id'=>'ALT-1092','type'=>'sla_breach','category_label'=>'Urgent SLA Breach','severity'=>'critical','time_ago'=>'51m overdue',
         'pet_name'=>'Bella','pet_meta'=>'Domestic Short Hair (Cat #A8921)','pet_bay'=>'Bay C-14',
         'applicant_name'=>'Marcus Vance','applicant_email'=>'marcus.vance@example.com','applicant_phone'=>'+1 (512) 890-2184',
         'stage'=>'Application Review','sla_status'=>'Breached by 3h 11m (>48h limit)',
         'details'=>'Application dossier pending committee sign-off. High priority due to elder applicant status and multiple pending inquiries.',
         'status'=>'unread','primary_action'=>'Review Application Now','action_link'=>'ADOPTION_REVIEW_V1.php?app_id=A8921'],
        ['id'=>'ALT-1093','type'=>'meet_greet','category_label'=>'Meet & Greet Request','severity'=>'warning','time_ago'=>'12m ago',
         'pet_name'=>'Bella','pet_meta'=>'Domestic Short Hair (Cat #A8921)','pet_bay'=>'Bay C-14',
         'applicant_name'=>'Sarah Jenkins','applicant_email'=>'sarah.j@example.com','applicant_phone'=>'+1 (512) 441-9082',
         'stage'=>'Virtual Meet & Greet','sla_status'=>'Requires Slot Lock (<6h)',
         'details'=>'Applicant requested video interview slot for tomorrow at 2:30 PM CST. Awaiting counselor host confirmation.',
         'status'=>'unread','primary_action'=>'Confirm & Open Room','action_link'=>'Meet_and_Greet_V1_.php?session_id=MGT-9034'],
        ['id'=>'ALT-1094','type'=>'pending_contract','category_label'=>'Pending Countersign','severity'=>'info','time_ago'=>'1h ago',
         'pet_name'=>'Jasper','pet_meta'=>'Beagle Mix (Dog #D1094)','pet_bay'=>'Bay A-03',
         'applicant_name'=>'David Chen','applicant_email'=>'david.c@example.com','applicant_phone'=>'+1 (512) 332-9901',
         'stage'=>'Adoption Contract','sla_status'=>'Adopter Signed • Awaiting Shelter Rep',
         'details'=>'Master adoption agreement executed by adopter via verified e-signature. Awaiting shelter supervisor countersignature.',
         'status'=>'read','primary_action'=>'Countersign Contract','action_link'=>'Adoption_Contracts_.php?contract_id=AAC-2026-CTR-8842'],
        ['id'=>'ALT-1095','type'=>'doc_verification','category_label'=>'Document Verification','severity'=>'neutral','time_ago'=>'2h ago',
         'pet_name'=>'Luna','pet_meta'=>'Golden Retriever Puppy (Dog #D2214)','pet_bay'=>'Bay B-08',
         'applicant_name'=>'Amara Chen','applicant_email'=>'amara.chen@example.com','applicant_phone'=>'+1 (512) 774-1290',
         'stage'=>'Landlord Verification','sla_status'=>'Upload Received • Pending Inspection',
         'details'=>'HOA & landlord pet agreement addendum uploaded by applicant. Needs perimeter fence photo verification.',
         'status'=>'unread','primary_action'=>'Inspect Documents','action_link'=>'ADOPTION_REVIEW_V1.php?app_id=D2214'],
        ['id'=>'ALT-1096','type'=>'ready_handover','category_label'=>'Ready for Handover','severity'=>'success','time_ago'=>'3h ago',
         'pet_name'=>'Max','pet_meta'=>'German Shepherd (Dog #D8831)','pet_bay'=>'Bay #2 / Express Bay',
         'applicant_name'=>'Jordan Lee','applicant_email'=>'jordan.lee@example.com','applicant_phone'=>'+1 (512) 998-3312',
         'stage'=>'Facility Pickup','sla_status'=>'Fee Paid & Health Cleared',
         'details'=>'Adoption fee settled via GCash/Bank Transfer reference verified. Rabies, microchip registered, ready at Bay #2.',
         'status'=>'read','primary_action'=>'Generate Release Pass','action_link'=>'READY_FOR_ADOPTION_V1.php?handover_id=HO-4412'],
    ];
}

if (isset($_GET['reset']) || !isset($_SESSION['alerts_db'])) {
    $_SESSION['alerts_db'] = seed_alerts();
    if (isset($_GET['reset'])) { header("Location: $self"); exit; }
}

// ------------------------------------------------------------------
// 2. POST actions (Post/Redirect/Get so refresh doesn't resubmit)
// ------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $msg = '';

    if ($action === 'mark_all_read') {
        foreach ($_SESSION['alerts_db'] as &$alt) { $alt['status'] = 'read'; }
        unset($alt); // FIX: release the reference
        $msg = 'All operational alerts have been marked as read.';
    } elseif ($action === 'batch_acknowledge') {
        foreach ($_SESSION['alerts_db'] as &$alt) {
            if ($alt['severity'] === 'critical' || $alt['status'] === 'unread') { $alt['status'] = 'read'; }
        }
        unset($alt); // FIX: release the reference
        $msg = 'Batch acknowledgement executed for active queue items.';
    } elseif ($action === 'resolve_alert') {
        $rid = $_POST['alert_id'] ?? '';
        foreach ($_SESSION['alerts_db'] as $k => $a) {
            if ($a['id'] === $rid) {
                unset($_SESSION['alerts_db'][$k]);
                $_SESSION['alerts_db'] = array_values($_SESSION['alerts_db']);
                $msg = "Alert {$rid} successfully resolved and archived.";
                break;
            }
        }
    } elseif ($action === 'logout') {
        session_destroy();
        header("Location: $self");
        exit;
    }

    if ($msg) { $_SESSION['flash'] = $msg; }
    $qs = $_SERVER['QUERY_STRING'] ?? '';
    header("Location: $self" . ($qs ? "?$qs" : ''));
    exit;
}

$feedback_message = $_SESSION['flash'] ?? '';
unset($_SESSION['flash']);

// ------------------------------------------------------------------
// 3. Filtering & selection
// ------------------------------------------------------------------
$alerts = $_SESSION['alerts_db'];
$active_filter = $_GET['filter'] ?? 'all';
$search_query  = trim($_GET['q'] ?? '');

$filter_types = [
    'sla'          => ['sla_breach'],
    'applications' => ['sla_breach', 'doc_verification'],
    'meet_greet'   => ['meet_greet'],
    'contracts'    => ['pending_contract'],
    'handover'     => ['ready_handover'],
];

$filtered_alerts = array_values(array_filter($alerts, function ($item) use ($active_filter, $search_query, $filter_types) {
    if (isset($filter_types[$active_filter]) && !in_array($item['type'], $filter_types[$active_filter], true)) return false;
    if ($search_query !== '') {
        $hay = strtolower($item['pet_name'].' '.$item['applicant_name'].' '.$item['details'].' '.$item['id']);
        if (strpos($hay, strtolower($search_query)) === false) return false;
    }
    return true;
}));

// Selected alert must be one that is currently visible in the feed
$selected_alert = null;
$want = $_GET['selected_id'] ?? '';
foreach ($filtered_alerts as $a) { if ($a['id'] === $want) { $selected_alert = $a; break; } }
if (!$selected_alert && $filtered_alerts) { $selected_alert = $filtered_alerts[0]; }
$selected_alert_id = $selected_alert['id'] ?? '';

$count_type = function ($t) use ($alerts) { return count(array_filter($alerts, fn($a) => $a['type'] === $t)); };
$total_alerts_count = count($alerts);
$sla_breaches_count = $count_type('sla_breach');
$meet_greet_count   = $count_type('meet_greet');
$contracts_count    = $count_type('pending_contract');
$handover_count     = $count_type('ready_handover');

// ------------------------------------------------------------------
// 4. UI config
// ------------------------------------------------------------------
$nav = [
  'Main' => [
    ['v1_dashboard.php', 'Dashboard / Overview', 'M4 6a2 2 0 012-2h3a2 2 0 012 2v3a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm11 0a2 2 0 012-2h1a2 2 0 012 2v3a2 2 0 01-2 2h-1a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h3a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm11 0a2 2 0 012-2h1a2 2 0 012 2v2a2 2 0 01-2 2h-1a2 2 0 01-2-2v-2z'],
    [$self, 'Alert Notifications', 'M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4', true],
  ],
  'Adoption Management' => [
    ['ADOPTION_REVIEW_V1.php', 'Applications Review', 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
    ['Meet_and_Greet_V1_.php', 'Meet & Greets', 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
    ['Adoption_Contracts_.php', 'Adoption Contracts', 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
    ['READY_FOR_ADOPTION_V1.php', 'Ready for Adoption', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
  ],
  'Pet Management' => [
    ['PET_LISTING_V1.php', 'Pet Listings', 'M4 6h16M4 10h16M4 14h16M4 18h16'],
    ['INTAKE_AND_HEALTH_MANAGEMENT_V1.php', 'Intake & Health', 'M12 4v16m8-8H4'],
  ],
  'User & Partner' => [
    ['Adopters_and_User_Management_V1.php', 'Adopters & Users', 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
    ['STAFF_ACCESS_AND_ROLE_PERMISION_.php', 'Staff Access', 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'],
  ],
  'Analytics & Reports' => [
    ['ADOPTION_METRICS_V1_.php', 'Adoption Metrics', 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2'],
  ],
];

$kpis = [
  ['Urgent SLA Deadlines', 'High Priority', "$sla_breaches_count Breaches", 'Applications pending > 48h without review', 'bg-[#E05A4F]', 'bg-[#FFE1DD] text-[#E05A4F]', 'text-[#E05A4F]', 'Max delay: 51h 14m', 'Immediate Action'],
  ['Meet & Greet Holds', 'Needs Action', "$meet_greet_count Pending", 'Virtual room invites pending counselor slot lock', 'bg-amber-500', 'bg-amber-50 text-amber-700', 'text-[#1F1F1F]', '2 sessions scheduled today', 'Video Rooms Ready'],
  ['Unsigned Contracts', 'Countersign', "$contracts_count Covenants", 'Adopter signed, awaiting shelter executive sign', 'bg-sky-500', 'bg-sky-50 text-sky-700', 'text-[#1F1F1F]', 'Avg turnaround: 3.2h', 'e-Vault Ready'],
  ['Handover Readiness', 'Ready', "$handover_count Pickups", 'Health clearances verified, ready at bay', 'bg-emerald-500', 'bg-emerald-50 text-emerald-700', 'text-[#1F1F1F]', 'Bay #2 & Bay #5 active', 'Clearances Active'],
];
$kpi_footer_color = ['text-[#E05A4F]', 'text-amber-600', 'text-sky-600', 'text-emerald-600'];

$chips = [
  'all' => "All Alerts ($total_alerts_count)",
  'sla' => "Urgent SLA Breaches ($sla_breaches_count)",
  'applications' => 'Applications Review',
  'meet_greet' => "Meet & Greet Requests ($meet_greet_count)",
  'contracts' => "Pending Contracts ($contracts_count)",
  'handover' => "Ready for Handover ($handover_count)",
];

$dot = [
  'warning' => 'bg-amber-500', 'info' => 'bg-sky-500', 'neutral' => 'bg-neutral-400', 'success' => 'bg-emerald-500',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly Admin Portal - Inbox &amp; Operational Alerts</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: { fontFamily: {
      sans: ['Plus Jakarta Sans', 'Poppins', 'sans-serif'],
      display: ['Poppins', 'Plus Jakarta Sans', 'sans-serif']
    } } } }
  </script>
  <style>
    body { background-color:#FCF9F8; color:#1F1F1F; font-family:'Plus Jakarta Sans',sans-serif; }
    .custom-scrollbar::-webkit-scrollbar { width:6px; height:6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background:#F6F3F2; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background:#D9D2D0; border-radius:9999px; }
    .line-clamp-2 { display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden; }
  </style>
</head>
<body class="min-h-screen flex flex-col">
<div class="flex flex-1 w-full min-h-screen">

  <!-- SIDEBAR -->
  <?php require __DIR__ . '/admin_sidebar.php'; ?>

  <!-- MAIN -->
  <div class="pl-64 flex-1 flex flex-col min-w-0">

    <header class="h-16 bg-white border-b border-[#EAE5E3] sticky top-0 z-20 flex items-center justify-between px-8">
      <div class="flex items-center space-x-2 text-xs font-medium text-neutral-500">
        <span class="text-neutral-400 uppercase tracking-wider font-bold">Admin Portal</span>
        <span>&rsaquo;</span><span>Adoption Management</span><span>&rsaquo;</span>
        <span class="text-[#E05A4F] font-semibold">Inbox &amp; Alerts</span>
      </div>

      <div class="flex items-center space-x-4">
        <form method="GET" action="" class="relative">
          <input type="hidden" name="filter" value="<?= h($active_filter) ?>">
          <input type="text" name="q" value="<?= h($search_query) ?>" placeholder="Search alerts, pets, adopters..."
                 class="w-64 pl-3 pr-8 py-1.5 text-xs rounded-lg border border-[#EAE5E3] bg-[#FCF9F8] focus:outline-none focus:border-[#E05A4F] focus:bg-white transition">
          <?php if ($search_query !== ''): ?>
            <a href="?filter=<?= h(urlencode($active_filter)) ?>" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-neutral-400 hover:text-neutral-700 text-sm">&times;</a>
          <?php endif; ?>
        </form>

        <button type="button" class="p-2 text-neutral-500 hover:text-neutral-800 rounded-lg hover:bg-neutral-100 transition relative">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
          <?php if ($total_alerts_count > 0): ?><span class="absolute top-1 right-1 w-2.5 h-2.5 bg-[#E05A4F] rounded-full ring-2 ring-white"></span><?php endif; ?>
        </button>

        <div class="flex items-center space-x-3 border-l border-neutral-200 pl-4">
          <div class="text-right leading-tight">
            <div class="text-xs font-semibold text-neutral-800">Admin User</div>
            <div class="text-[10px] text-neutral-400">Super Administrator</div>
          </div>
          <div class="w-8 h-8 rounded-full bg-[#FFE1DD] text-[#E05A4F] font-bold text-xs flex items-center justify-center border border-[#E05A4F]/20">AU</div>
        </div>
      </div>
    </header>

    <?php if ($feedback_message !== ''): ?>
      <div class="mx-8 mt-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs flex items-center justify-between shadow-sm">
        <span class="font-medium"><?= h($feedback_message) ?></span>
        <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800 font-bold">&times;</button>
      </div>
    <?php endif; ?>

    <main class="flex-1 p-8 space-y-6">

      <!-- Title + actions -->
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
          <div class="flex items-center space-x-3">
            <span class="w-2.5 h-2.5 rounded-full bg-[#E05A4F] animate-ping"></span>
            <h1 class="text-2xl font-bold tracking-tight">Inbox &amp; Operational Alerts</h1>
            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-[#FFE1DD] text-[#E05A4F]">Live Queue</span>
          </div>
          <p class="text-xs text-neutral-500 mt-1 max-w-2xl">Central triage hub for high-priority adoption events, time-sensitive SLA breaches, applicant document verification, and scheduled meet &amp; greet approvals.</p>
        </div>

        <div class="flex items-center space-x-3">
          <select class="text-xs rounded-lg border border-[#EAE5E3] bg-white px-3 py-2 text-neutral-700 font-medium focus:outline-none focus:border-[#E05A4F]">
            <option>Austin Central Shelter</option>
            <option>North Austin Foster Hub</option>
            <option>South Congress Depot</option>
          </select>
          <a href="?reset=1" class="px-3 py-2 text-xs font-semibold rounded-lg border border-dashed border-[#EAE5E3] text-neutral-500 hover:bg-neutral-50 transition" title="Restore the demo alerts">Reset Demo</a>
          <form method="POST" action="">
            <input type="hidden" name="action" value="mark_all_read">
            <button type="submit" class="px-3 py-2 text-xs font-semibold rounded-lg border border-[#EAE5E3] bg-white text-neutral-700 hover:bg-neutral-50 transition shadow-sm">&#10003; Mark All Read</button>
          </form>
          <form method="POST" action="">
            <input type="hidden" name="action" value="batch_acknowledge">
            <button type="submit" class="px-3.5 py-2 text-xs font-semibold rounded-lg bg-[#E05A4F] hover:bg-[#C94B41] text-white transition shadow-sm">Batch Acknowledge</button>
          </form>
        </div>
      </div>

      <!-- KPI cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
        <?php foreach ($kpis as $i => $k): ?>
          <div class="bg-white rounded-xl border border-[#EAE5E3] p-4 relative overflow-hidden shadow-sm hover:shadow transition">
            <div class="absolute top-0 inset-x-0 h-1 <?= $k[4] ?>"></div>
            <div class="flex items-center justify-between mb-2">
              <span class="text-[11px] font-bold uppercase tracking-wider text-neutral-400"><?= h($k[0]) ?></span>
              <span class="px-2 py-0.5 rounded text-[10px] font-bold <?= $k[5] ?>"><?= h($k[1]) ?></span>
            </div>
            <span class="text-2xl font-extrabold font-display <?= $k[6] ?>"><?= h($k[2]) ?></span>
            <p class="text-xs text-neutral-500 mt-1"><?= h($k[3]) ?></p>
            <div class="mt-3 pt-2.5 border-t border-[#F6F3F2] flex items-center justify-between text-[11px] text-neutral-500">
              <span><?= h($k[7]) ?></span>
              <span class="<?= $kpi_footer_color[$i] ?> font-semibold"><?= h($k[8]) ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Filter chips -->
      <div class="flex items-center space-x-2 overflow-x-auto pb-1 text-xs font-semibold custom-scrollbar">
        <?php foreach ($chips as $key => $label): ?>
          <a href="?filter=<?= $key ?>&q=<?= urlencode($search_query) ?>"
             class="px-3.5 py-1.5 rounded-full whitespace-nowrap transition <?= $active_filter === $key ? 'bg-[#E05A4F] text-white shadow-sm' : 'bg-white border border-[#EAE5E3] text-neutral-600 hover:bg-neutral-50' ?>">
            <?= h($label) ?>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Feed + dossier -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

        <div class="lg:col-span-7 space-y-3">
          <?php if (empty($filtered_alerts)): ?>
            <div class="bg-white rounded-xl border border-[#EAE5E3] p-12 text-center shadow-sm">
              <h3 class="text-sm font-bold text-neutral-800">Inbox Zero Reached</h3>
              <p class="text-xs text-neutral-500 mt-1">No alerts matching your current filter criteria.</p>
              <a href="<?= h($self) ?>" class="mt-4 inline-block px-3 py-1.5 text-xs font-semibold rounded-lg bg-[#E05A4F] text-white">Reset Filters</a>
            </div>
          <?php else: foreach ($filtered_alerts as $alert):
              $is_sel = ($alert['id'] === $selected_alert_id); ?>
            <div class="bg-white rounded-xl border <?= $is_sel ? 'border-[#E05A4F] ring-2 ring-[#E05A4F]/10' : 'border-[#EAE5E3]' ?> p-4 shadow-sm hover:border-[#E05A4F]/50 transition">
              <div class="flex items-start space-x-3">
                <div class="mt-1">
                  <?php if ($alert['severity'] === 'critical'): ?>
                    <span class="flex h-2.5 w-2.5 relative">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#E05A4F] opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#E05A4F]"></span>
                    </span>
                  <?php else: ?>
                    <span class="inline-flex rounded-full h-2.5 w-2.5 <?= $dot[$alert['severity']] ?? 'bg-neutral-400' ?>"></span>
                  <?php endif; ?>
                </div>

                <div class="flex-1 min-w-0">
                  <div class="flex items-center gap-2 flex-wrap">
                    <span class="text-xs <?= $alert['status'] === 'unread' ? 'font-extrabold' : 'font-semibold' ?> text-neutral-800"><?= h($alert['category_label']) ?></span>
                    <span class="text-[10px] text-neutral-400">&bull; <?= h($alert['time_ago']) ?></span>
                    <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-[#F6F3F2] text-neutral-500"><?= h($alert['id']) ?></span>
                    <?php if ($alert['status'] === 'unread'): ?>
                      <span class="text-[10px] font-bold px-1.5 py-0.5 rounded bg-[#FFE1DD] text-[#E05A4F]">NEW</span>
                    <?php endif; ?>
                  </div>

                  <div class="text-xs text-neutral-700 font-semibold mt-1">
                    Applicant: <span class="text-neutral-900"><?= h($alert['applicant_name']) ?></span> &rarr;
                    Target: <span class="text-[#E05A4F] font-bold"><?= h($alert['pet_name']) ?></span> (<?= h($alert['pet_bay']) ?>)
                  </div>

                  <p class="text-xs text-neutral-500 mt-1 line-clamp-2"><?= h($alert['details']) ?></p>

                  <div class="mt-3 pt-2.5 border-t border-[#F6F3F2] flex items-center justify-between gap-2 flex-wrap text-xs">
                    <span class="text-[11px] font-medium text-neutral-500">Status: <strong class="text-neutral-700"><?= h($alert['sla_status']) ?></strong></span>

                    <div class="flex items-center space-x-2">
                      <a href="?selected_id=<?= urlencode($alert['id']) ?>&filter=<?= urlencode($active_filter) ?>&q=<?= urlencode($search_query) ?>"
                         class="px-2.5 py-1 rounded text-xs font-semibold <?= $is_sel ? 'bg-[#FFE1DD] text-[#E05A4F]' : 'text-neutral-600 hover:bg-neutral-100' ?>">
                        <?= $is_sel ? 'Inspecting' : 'View Details' ?>
                      </a>

                      <!-- Primary action now navigates to the real work page -->
                      <a href="<?= h($alert['action_link']) ?>" class="px-3 py-1 rounded bg-[#E05A4F] hover:bg-[#C94B41] text-white font-semibold text-xs transition">
                        <?= h($alert['primary_action']) ?>
                      </a>

                      <!-- Separate resolve action -->
                      <form method="POST" action="" onsubmit="return confirm('Resolve and archive <?= h($alert['id']) ?>?');">
                        <input type="hidden" name="action" value="resolve_alert">
                        <input type="hidden" name="alert_id" value="<?= h($alert['id']) ?>">
                        <button type="submit" class="px-2.5 py-1 rounded border border-[#EAE5E3] text-neutral-600 hover:bg-neutral-50 font-semibold text-xs transition">Resolve</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; endif; ?>
        </div>

        <div class="lg:col-span-5 sticky top-24">
          <?php if ($selected_alert): ?>
            <div class="bg-white rounded-xl border border-[#EAE5E3] p-6 shadow-sm relative overflow-hidden">
              <div class="absolute top-0 inset-x-0 h-1.5 bg-[#E05A4F]"></div>

              <div class="flex items-center justify-between pb-4 border-b border-[#F6F3F2]">
                <div>
                  <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Selected Triage Dossier</span>
                  <h2 class="text-base font-bold text-neutral-900"><?= h($selected_alert['category_label']) ?></h2>
                </div>
                <span class="font-mono text-xs px-2 py-0.5 rounded bg-[#F6F3F2] text-neutral-600 font-semibold"><?= h($selected_alert['id']) ?></span>
              </div>

              <div class="mt-4 p-3.5 bg-[#FCF9F8] border border-[#EAE5E3] rounded-lg flex items-center space-x-3">
                <div class="w-12 h-12 rounded-lg bg-neutral-200 border border-neutral-300 flex items-center justify-center text-neutral-400 text-[10px] font-bold">PHOTO</div>
                <div class="min-w-0 flex-1">
                  <div class="flex items-center justify-between">
                    <h4 class="text-xs font-bold text-neutral-900"><?= h($selected_alert['pet_name']) ?></h4>
                    <span class="text-[10px] font-semibold text-neutral-500"><?= h($selected_alert['pet_bay']) ?></span>
                  </div>
                  <p class="text-[11px] text-neutral-500 truncate"><?= h($selected_alert['pet_meta']) ?></p>
                </div>
              </div>

              <div class="mt-4 space-y-3 text-xs">
                <div>
                  <div class="text-[11px] font-semibold text-neutral-400 uppercase tracking-wider">Applicant Dossier</div>
                  <div class="text-neutral-900 font-bold mt-0.5"><?= h($selected_alert['applicant_name']) ?></div>
                  <div class="text-neutral-500 text-[11px]"><?= h($selected_alert['applicant_email']) ?> &bull; <?= h($selected_alert['applicant_phone']) ?></div>
                </div>
                <div>
                  <div class="text-[11px] font-semibold text-neutral-400 uppercase tracking-wider">Operational Pipeline Stage</div>
                  <div class="inline-block mt-1 px-2 py-0.5 rounded text-[11px] font-semibold bg-[#FFE1DD] text-[#E05A4F]"><?= h($selected_alert['stage']) ?></div>
                </div>
                <div>
                  <div class="text-[11px] font-semibold text-neutral-400 uppercase tracking-wider">Time Critical SLA Status</div>
                  <div class="text-neutral-700 font-medium mt-0.5"><?= h($selected_alert['sla_status']) ?></div>
                </div>
                <div>
                  <div class="text-[11px] font-semibold text-neutral-400 uppercase tracking-wider">Supervisor Notes &amp; Instructions</div>
                  <p class="text-neutral-600 mt-1 leading-relaxed bg-[#FCF9F8] p-3 rounded-lg border border-[#EAE5E3]"><?= h($selected_alert['details']) ?></p>
                </div>
              </div>

              <div class="mt-6 pt-4 border-t border-[#F6F3F2] space-y-2">
                <a href="<?= h($selected_alert['action_link']) ?>" class="block w-full py-2.5 rounded-lg bg-[#E05A4F] hover:bg-[#C94B41] text-white font-bold text-xs shadow-sm transition text-center">
                  <?= h($selected_alert['primary_action']) ?> &rarr;
                </a>
                <div class="flex items-center space-x-2">
                  <form method="POST" action="" class="flex-1" onsubmit="return confirm('Resolve and archive <?= h($selected_alert['id']) ?>?');">
                    <input type="hidden" name="action" value="resolve_alert">
                    <input type="hidden" name="alert_id" value="<?= h($selected_alert['id']) ?>">
                    <button type="submit" class="w-full py-2 rounded-lg border border-[#EAE5E3] bg-white hover:bg-neutral-50 text-neutral-700 text-xs font-semibold transition">Mark Resolved</button>
                  </form>
                  <button type="button" class="flex-1 py-2 rounded-lg border border-[#EAE5E3] bg-white text-neutral-400 text-xs font-semibold cursor-not-allowed" title="Not built yet">Snooze (4h)</button>
                  <button type="button" class="flex-1 py-2 rounded-lg border border-[#EAE5E3] bg-white text-neutral-400 text-xs font-semibold cursor-not-allowed" title="Not built yet">Reassign</button>
                </div>
              </div>

              <div class="mt-4 p-2.5 rounded-lg bg-amber-50/70 border border-amber-200/60 text-[11px] text-amber-800 flex items-center justify-between">
                <span>Shelter Supervisor Dispatch:</span>
                <a href="tel:+15129780500" class="font-bold underline hover:text-amber-900">+1 (512) 978-0500</a>
              </div>
            </div>
          <?php else: ?>
            <div class="bg-white rounded-xl border border-[#EAE5E3] p-8 text-center text-xs text-neutral-400">
              Select an alert from the feed to view inspection details and execute next actions.
            </div>
          <?php endif; ?>
        </div>

      </div>
    </main>
  </div>
</div>
</body>
</html>