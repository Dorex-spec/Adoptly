<?php
require_once __DIR__ . '/profile_data.php';   // $user, $navLinks, $footerCols
$fullName = trim($user['first'] . ' ' . $user['last']);

/* ---------- 1. CONFIG ---------- */
const DATA_DIR  = __DIR__ . '/data.php';
const DATA_FILE = DATA_DIR . '/adoption.json';

const CATEGORIES = [
    'dog' => ['🐕', "I'm applying to adopt a dog", 'Puppies, adult dogs, bonded pairs, or senior pups.'],
    'cat' => ['🐱', "I'm applying to adopt a cat", 'Kittens, indoor cats, or gentle seniors.'],
];
const SHELTERS = [
    'quezon-city' => 'Paws & Hearts Animal Sanctuary - Quezon City, Metro Manila',
    'pasig'       => 'Kapamilya Pet Rescue - Pasig City, Metro Manila',
    'cebu'        => 'Visayas Companion Haven - Cebu City, Cebu',
    'davao'       => 'Mindanao Strays Rescue - Davao City, Davao del Sur',
    'any'         => 'Open to Regional Partner Shelters (Metro Manila)',
];
const OCCUPANTS = [
    '1' => '1 occupant (Solo Adopter)', '2' => '2 occupants (Couples / Roommates)',
    '3' => '3 occupants', '4' => '4 occupants', '5+' => '5+ occupants (Multi-generational)',
];
const EXPERIENCE = [
    'experienced' => 'Yes, experienced pet owner',
    'family_pets' => 'Grew up with family pets',
    'first_time'  => 'First-time primary adopter',
];
// Required fields at ang label nila (para sa error messages)
const REQUIRED = [
    'adoption_category' => 'Adoption category', 'shelter_location' => 'Shelter location',
    'pet_name' => 'Pet you want to adopt', 'occupants_count' => 'Number of people in the house',
    'occupants_details' => 'Ages / who they live with', 'experience_level' => 'Prior experience',
    'financial_responsibility' => 'Financially responsible person', 'adoption_reason' => 'Reason for adopting',
];

/* ---------- 2. HELPERS ---------- */
if (!function_exists('e')) {
    function e($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
}

function loadRecord(): array {
    $data = is_file(DATA_FILE) ? json_decode(file_get_contents(DATA_FILE), true) : [];
    return is_array($data) ? $data : [];
}

function saveRecord(array $record): bool {
    if (!is_dir(DATA_DIR)) {
        mkdir(DATA_DIR, 0755, true);
        file_put_contents(DATA_DIR . '/.htaccess', "Require all denied\n"); // bawal buksan sa browser
    }
    return file_put_contents(DATA_FILE, json_encode($record, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX) !== false;
}

/** Linisin ang POST. Ang field lang na nasa submission ang isasama. */
function sanitize(array $post): array {
    $clean = [];
    foreach (['pet_name', 'occupants_details', 'financial_responsibility', 'adoption_reason'] as $k) {
        if (isset($post[$k])) $clean[$k] = trim((string) $post[$k]);
    }
    $choices = ['adoption_category' => CATEGORIES, 'shelter_location' => SHELTERS,
                'occupants_count' => OCCUPANTS, 'experience_level' => EXPERIENCE];
    foreach ($choices as $k => $options) {
        if (isset($post[$k])) {
            $valid = in_array((string) $post[$k], array_map('strval', array_keys($options)), true);
            $clean[$k] = $valid ? (string) $post[$k] : '';
        }
    }
    $clean['willing_alternate'] = isset($post['willing_alternate']) ? '1' : '0';
    return $clean;
}

function validate(array $r): array {
    $errors = [];
    foreach (REQUIRED as $k => $label) {
        if (trim((string) ($r[$k] ?? '')) === '') $errors[] = "$label is required.";
    }
    return $errors;
}

function readiness(array $r): int {
    $filled = count(array_filter(array_keys(REQUIRED), fn($k) => trim((string) ($r[$k] ?? '')) !== ''));
    return (int) round($filled / count(REQUIRED) * 100);
}

/* ---------- 3. CONTROLLER ---------- */
$saved  = loadRecord();
$old    = $saved;   // values na ipapakita sa form
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $merged = array_merge($saved, sanitize($_POST));   // dating data + binago lang
    $errors = validate($merged);
    if (!$errors) {
        $merged['created_at'] = $saved['created_at'] ?? date('c');
        $merged['updated_at'] = date('c');
        if (saveRecord($merged)) {
            header('Location: index.php?saved=1');      // iwas double-submit
            exit;
        }
        $errors[] = 'Could not save. Please check write permission of the folder.';
    }
    $old = $merged;   // ibalik ang tinype ng user
}

$showForm  = $_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['edit']) || !$saved;
$readiness = readiness($saved);
$val = fn(string $k): string => e($old[$k] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adoption Information | Adoptly</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = { theme: { extend: {
    colors: { brand: { coral: '#E05A4F', dark: '#1F1F1F', border: '#EAE5E3' } },
    fontFamily: { sans: ['Poppins', 'system-ui', 'sans-serif'] } } } };
</script>
<link rel="stylesheet" href="Css/style5.css">
</head>
<body class="flex flex-col min-h-screen">

<header class="header">
  <div class="container header-row">
    <a href="#top" class="logo"><img src="Photos/logoNav.png" alt="Adoptly"></a>

    <nav class="main-nav" aria-label="Main">
      <?php foreach ($navLinks as $link): ?>
        <a class="main-nav__link<?= $link['active'] ? ' is-active' : '' ?>" href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="header-actions">
      <button class="fav" type="button" aria-label="View Saved Pets">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
        </button>
      <button class="user-pill" type="button">
        <span class="avatar<?= !empty($user['photo']) ? ' has-photo' : '' ?>"
              <?= !empty($user['photo']) ? 'style="background-image:url(\'' . e($user['photo']) . '\')"' : '' ?>><?= empty($user['photo']) ? e($user['initials'] !== '' ? $user['initials'] : '👤') : '' ?></span>
        <span class="user-pill__text">
          <strong><?= e($fullName !== '' ? $fullName : 'New Applicant') ?></strong>
          <small><?= e($user['role']) ?></small>
        </span>
      </button>
    </div>
  </div>
</header>

<main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">

<!-- Breadcrumb -->
<nav class="crumbs" aria-label="Breadcrumb">
  <a href="index.php">Home</a><span>/</span>
  <a href="dashboard.php">Dashboard</a><span>/</span>
  <a href="account-settings.php">Account Settings</a><span>/</span>
  <strong>Adoption Information</strong>
</nav>

<section class="card hero">
  <div class="hero__text">
    <span class="hero__eyebrow">Adopter Profile Center &bull; Application Readiness</span>
    <h1 class="hero__title">Adoption Information</h1>
    <p class="hero__desc">Tell rescue shelters about the companion you are ready to welcome and your household environment to expedite match approvals.</p>
  </div>

  <div class="ready-card">
    <span class="ready-card__icon" aria-hidden="true">
      <svg viewBox="0 0 24 24"><path d="M12 3l7 3v5c0 4.5-3 8.2-7 10-4-1.8-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg>
    </span>
    <div class="ready-card__body">
      <div class="ready-card__top">
        <span class="ready-card__label">Adopter Readiness</span>
        <span class="ready-card__pill"><span id="ready-pct"><?= $readiness ?></span>% Complete</span>
      </div>
      <div class="ready-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?= $readiness ?>">
        <div class="ready-bar__fill" id="ready-fill" style="width: <?= $readiness ?>%"></div>
      </div>
      <p class="ready-card__note">Shelters prioritize ready profiles.</p>
    </div>
  </div>
</section>

  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

    <!-- SIDEBAR -->
    <aside class="lg:col-span-4 space-y-6">
            <nav class="card snav" aria-label="Account sections">
        <p class="snav__eyebrow">Navigation Menu</p>
        <?php foreach ([
            ["Applicant's Personal Information" => 'Adoption_process_form.php'],
            ['Adoption Information'             => 'Adoption_information.php'],
            ['Household Information'            => 'Household.php'],
            ['Security'                         => 'Security.php'],
            ['Other Document Requirements'      => '#'],
        ] as $item): foreach ($item as $label => $href): ?>
          <a href="<?= $href ?>" class="snav__link<?= $label === 'Adoption Information' ? ' is-active' : '' ?>"><?= e($label) ?></a>
        <?php endforeach; endforeach; ?>
        <hr>
        <a href="#" class="snav__link snav__link--small">Notification Settings</a>
        <a href="index.php" class="snav__link snav__link--small snav__link--danger">Sign Out</a>
      </nav>
      <div class="note-card">
        <h4 class="text-xs font-bold">Why Shelters Ask This</h4>
        <p class="text-xs text-gray-600 mt-1 leading-relaxed">Sharing your pet preferences and home setup helps coordinators ensure a safe, lasting match.</p>
      </div>
    </aside>

    <section class="lg:col-span-8">
<?php if (!$showForm): ?>
      <!-- ========== SAVED SUMMARY ========== -->
      <?php
        $rows = [
            'Adoption category'         => CATEGORIES[$saved['adoption_category'] ?? ''][1] ?? '',
            'Shelter location'          => SHELTERS[$saved['shelter_location'] ?? ''] ?? '',
            'Pet to adopt'              => $saved['pet_name'] ?? '',
            'Willing to adopt another?' => ($saved['willing_alternate'] ?? '0') === '1' ? 'Yes, willing' : 'No, only this pet',
            'People in the house'       => OCCUPANTS[$saved['occupants_count'] ?? ''] ?? '',
            'Ages / who they live with' => $saved['occupants_details'] ?? '',
            'Prior experience'          => EXPERIENCE[$saved['experience_level'] ?? ''] ?? '',
            'Financially responsible'   => $saved['financial_responsibility'] ?? '',
            'Reason for adopting'       => $saved['adoption_reason'] ?? '',
        ];
      ?>
      <div class="card p-6 sm:p-8 space-y-6">
        <div class="flex items-center justify-between pb-4 border-b border-brand-border">
          <div>
            <h2 class="text-lg font-bold">Saved Adoption Information</h2>
            <p class="text-xs text-gray-500 mt-0.5">Last updated: <?= e(date('M j, Y g:i A', strtotime($saved['updated_at'] ?? 'now'))) ?></p>
          </div>
          <a href="index.php?edit=1" class="btn-primary">Edit Information</a>
        </div>
        <?php if (isset($_GET['saved'])): ?>
          <div class="alert alert-success">Your information was saved successfully.</div>
        <?php endif; ?>
        <dl class="summary-list">
          <?php foreach ($rows as $label => $value): ?>
            <div><dt><?= e($label) ?></dt><dd><?= nl2br(e($value)) ?></dd></div>
          <?php endforeach; ?>
        </dl>
      </div>

<?php else: ?>
      <!-- ========== FORM (bago o edit) ========== -->
      <form method="post" action="index.php" class="card p-6 sm:p-8 space-y-8">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-brand-border gap-2">
          <div>
            <h2 class="text-lg font-bold"><?= $saved ? 'Edit Adoption Information' : 'Adoption Preferences & Pet Profile' ?></h2>
            <p class="text-xs text-gray-500 mt-0.5"><?= $saved ? 'Change only what you need. Everything else stays as saved.' : 'Please provide accurate information.' ?></p>
          </div>
          <span class="text-xs text-gray-400">* Mandatory fields</span>
        </div>

        <?php if ($errors): ?>
          <div class="alert alert-error"><ul class="list-disc pl-4">
            <?php foreach ($errors as $err): ?><li><?= e($err) ?></li><?php endforeach; ?>
          </ul></div>
        <?php endif; ?>

        <!-- Category -->
        <fieldset class="space-y-3">
          <legend class="section-title">Target Adoption Category <span class="req">*</span></legend>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <?php foreach (CATEGORIES as $key => [$icon, $title, $desc]): ?>
              <div>
                <input class="sr-only radio-card-input" type="radio" name="adoption_category" id="cat-<?= $key ?>"
                       value="<?= $key ?>" required <?= ($old['adoption_category'] ?? '') === $key ? 'checked' : '' ?>>
                <label class="radio-card-label" for="cat-<?= $key ?>">
                  <span class="text-2xl"><?= $icon ?></span>
                  <span><b class="block text-sm"><?= e($title) ?></b><span class="block text-xs text-gray-500 mt-1"><?= e($desc) ?></span></span>
                </label>
              </div>
            <?php endforeach; ?>
          </div>
        </fieldset>

        <!-- Shelter & pet -->
        <div class="section space-y-5">
          <h3 class="section-title">Shelter & Pet Designation</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="space-y-1.5">
              <label class="label" for="shelter_location">Shelter Location <span class="req">*</span></label>
              <select class="field" id="shelter_location" name="shelter_location" required>
                <option value="">Select a shelter...</option>
                <?php foreach (SHELTERS as $k => $label): ?>
                  <option value="<?= e($k) ?>" <?= ($old['shelter_location'] ?? '') === $k ? 'selected' : '' ?>><?= e($label) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="space-y-1.5">
              <label class="label" for="pet_name">Pet you want to adopt <span class="req">*</span></label>
              <input class="field" type="text" id="pet_name" name="pet_name" required value="<?= $val('pet_name') ?>"
                     placeholder="Pet name, microchip ID, or &quot;Open to shelter recommendation&quot;">
            </div>
          </div>
          <div class="toggle-row">
            <div class="max-w-xl">
              <p class="text-xs font-bold">If animal already adopted, are you willing to adopt another pet?</p>
              <p class="hint">We will prioritize your application for similar rescue companions.</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer shrink-0">
              <input class="sr-only toggle-switch-input" type="checkbox" id="willing" name="willing_alternate" value="1"
                     <?= ($old['willing_alternate'] ?? '0') === '1' ? 'checked' : '' ?>>
              <span class="toggle-switch-track"><span class="toggle-switch-knob"></span></span>
              <span class="ml-2.5 text-xs font-bold" id="willing-label"></span>
            </label>
          </div>
        </div>

        <!-- Household -->
        <div class="section space-y-5">
          <h3 class="section-title">Household Composition</h3>
          <div class="grid grid-cols-1 sm:grid-cols-12 gap-5">
            <div class="sm:col-span-5 space-y-1.5">
              <label class="label" for="occupants_count">How many are you in the house? <span class="req">*</span></label>
              <select class="field" id="occupants_count" name="occupants_count" required>
                <option value="">Select...</option>
                <?php foreach (OCCUPANTS as $k => $label): ?>
                  <option value="<?= e($k) ?>" <?= ($old['occupants_count'] ?? '') === (string) $k ? 'selected' : '' ?>><?= e($label) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="sm:col-span-7 space-y-1.5">
              <label class="label" for="occupants_details">How old are they and who do they live with? <span class="req">*</span></label>
              <input class="field" type="text" id="occupants_details" name="occupants_details" required value="<?= $val('occupants_details') ?>"
                     placeholder="e.g., Adults: 28, 30; Children: 5 yrs old; live with partner">
            </div>
          </div>
        </div>

        <!-- Experience & finances -->
        <div class="section space-y-5">
          <h3 class="section-title">Guardianship Experience & Financial Care</h3>
          <div class="space-y-2.5">
            <span class="label">Prior experience with animal guardianship / rescue pets? <span class="req">*</span></span>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
              <?php foreach (EXPERIENCE as $k => $label): ?>
                <label class="choice">
                  <input type="radio" name="experience_level" value="<?= $k ?>" required <?= ($old['experience_level'] ?? '') === $k ? 'checked' : '' ?>>
                  <span class="font-medium"><?= e($label) ?></span>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="space-y-1.5">
            <label class="label" for="financial_responsibility">Who will be financially responsible for the rescue's ongoing care? <span class="req">*</span></label>
            <input class="field" type="text" id="financial_responsibility" name="financial_responsibility" required
                   value="<?= $val('financial_responsibility') ?>" placeholder="Full name and monthly care provision plan">
          </div>
        </div>

        <!-- Reason -->
        <div class="section space-y-3">
          <div class="flex items-center justify-between">
            <label class="label" for="adoption_reason">Reason for Adopting <span class="req">*</span></label>
            <span class="hint">Min. 50 words recommended</span>
          </div>
          <textarea class="field leading-relaxed" id="adoption_reason" name="adoption_reason" rows="4" required
                    placeholder="Tell the shelter why you want to adopt, your daily routine, and the home you can offer..."><?= $val('adoption_reason') ?></textarea>
          <p class="text-right text-xs font-medium text-brand-coral">Word count: <span id="word-count">0</span></p>
        </div>

        <!-- Actions -->
        <div class="pt-6 border-t border-brand-border flex items-center justify-end gap-3">
          <?php if ($saved): ?>
            <a href="index.php" class="btn-ghost">Cancel</a>
          <?php else: ?>
            <button type="reset" class="btn-ghost">Clear</button>
          <?php endif; ?>
          <button type="submit" class="btn-primary"><?= $saved ? 'Save Changes' : 'Save Information' ?></button>
        </div>
      </form>

      <script>
        // Live readiness
const REQ = ['adoption_category','shelter_location','pet_name','occupants_count',
             'occupants_details','experience_level','financial_responsibility','adoption_reason'];
const formEl = document.querySelector('form[method="post"]');
const pctEl = document.getElementById('ready-pct'),
      fillEl = document.getElementById('ready-fill'),
      barEl = document.querySelector('.ready-bar');

function updateReadiness() {
  let filled = 0;
  REQ.forEach(name => {
    const els = formEl.querySelectorAll(`[name="${name}"]`);
    const ok = [...els].some(el => el.type === 'radio' ? el.checked : el.value.trim() !== '');
    if (ok) filled++;
  });
  const pct = Math.round(filled / REQ.length * 100);
  pctEl.textContent = pct;
  fillEl.style.width = pct + '%';
  barEl.setAttribute('aria-valuenow', pct);
}
formEl.addEventListener('input', updateReadiness);
formEl.addEventListener('change', updateReadiness);
formEl.addEventListener('reset', () => setTimeout(updateReadiness));
updateReadiness();
      </script>
<?php endif; ?>
    </section>
  </div>
</main>

<footer class="footer">
  <div class="container footer-grid">
    <div>
      <a href="#top" class="logo footer-logo"><img src="footer logo.png" alt="Adoptly"></a>
      <p>Adoptly is a non-profit companion animal rescue network dedicated to connecting shelter pets with safe, loving and permanent forever homes through nationwide solidarity.</p>
    </div>
    <?php foreach ($footerCols as $heading => $links): ?>
      <div>
        <h4><?= e($heading) ?></h4>
        <ul>
          <?php foreach ($links as [$label, $href]): ?><li><a href="<?= e($href) ?>"><?= e($label) ?></a></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
    <div>
      <h4>Contact Information</h4>
      <ul>
        <li><a href="mailto:support@adoptly.org">support@adoptly.org</a></li>
        <li><a href="tel:+15550192834">(555) 019-2834</a></li>
        <li>Hours: 9am - 6pm EST</li>
      </ul>
    </div>
  </div>
  <div class="container footer-bottom">
    <p>© 2026 Adoptly Pet Adoption Organization. All rights reserved.</p>
    <div><a href="#">Privacy Policy</a> <a href="#">Terms of Service</a> <a href="#">Accessibility</a></div>
  </div>
</footer>
</body>
</html>

