<?php
declare(strict_types=1);
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
$profileSaved = !empty($_SESSION['profile_saved']);
unset($_SESSION['profile_saved']);
require_once __DIR__ . '/profile_data.php';
require_once __DIR__ . '/adoption_flow.php';
$fullName = trim($user['first'] . ' ' . $user['last']);
$profileReadiness = adoption_flow_percent('profile');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly - Resume Profile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="Css/style4.css">
</head>
<body id="top">

<header class="header">
  <div class="container header-row">
    <a href="Welcome_page.php" class="logo"><img src="photos/logoNav.png" alt="Adoptly"></a>

    <nav class="main-nav" aria-label="Main">
      <?php foreach ($navLinks as $link): ?>
        <a class="main-nav__link<?= $link['active'] ? ' is-active' : '' ?>" href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="header-actions">
<a class="fav" href="Html/heart.html" aria-label="View Saved Pets">
  <svg viewBox="0 0 24 24" aria-hidden="true">
    <path d="M12 21s-7.5-4.6-9.6-9.2C.9 8.4 2.7 4.5 6.4 4.5c2.1 0 3.8 1.2 5.6 3.3 1.8-2.1 3.5-3.3 5.6-3.3 3.7 0 5.5 3.9 4 7.3C19.5 16.4 12 21 12 21z"/>
  </svg>
</a>
      <button class="user-pill" type="button">
        <span class="avatar" id="hdr-avatar"><?= e($user['initials'] !== '' ? $user['initials'] : '👤') ?></span>
        <span class="user-pill__text">
          <strong id="hdr-name"><?= e($fullName !== '' ? $fullName : 'New Applicant') ?></strong>
          <small><?= e($user['role']) ?></small>
        </span>
      </button>
    </div>
  </div>
</header>

<main class="container page">
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="Welcome_page.php">Home</a><span>/</span><a href="Welcome_page.php">Dashboard</a><span>/</span><b>Account Settings</b>
  </nav>

  <section class="banner card">
    <div>
      <span class="tag">Adopter Profile Center</span>
      <h1>Resume Profile</h1>
      <p>Keep your details up to date to ensure a smooth adoption process. Verified shelter partners rely on your updated information to approve applications promptly.</p>
    </div>
    <div class="readiness">
      <div class="readiness__icon<?= $profileReadiness === 100 ? '' : ' is-idle' ?>" id="rd-icon"><?= $profileReadiness === 100 ? '✓' : '○' ?></div>
      <div>
      <strong>Adopter Readiness <span class="badge<?= $profileReadiness === 100 ? '' : ' is-idle' ?>" id="rd-badge"><?= $profileReadiness ?>% Complete</span></strong>
      <div class="meter" id="rd-meter" role="progressbar" aria-label="Adopter readiness" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?= $profileReadiness ?>"><span id="rd-fill" style="width: <?= $profileReadiness ?>%"></span></div>
      <small id="rd-text"><?= $profileReadiness === 100 ? 'Your personal information is saved.' : 'Fill in your details and save to track your progress.' ?></small>
      </div>
    </div>
  </section>

  <?php if (isset($_GET['blocked'])): ?>
    <p class="card" role="alert" style="padding:12px 18px;margin-bottom:20px;color:#b8382e">Complete and save your personal information before continuing.</p>
  <?php endif; ?>

  <?php if ($profileSaved): ?>
    <p class="card" role="status" style="padding:12px 18px;margin-bottom:20px;color:#2e9e6a">Your profile changes have been saved.</p>
  <?php endif; ?>

  <div class="layout">
    <aside class="sidebar">
      <div class="card sidebar__nav">
        <p class="eyebrow">Navigation Menu</p>
        <?php foreach ($sidebar as $item): ?>
          <a class="side-link<?= $item['active'] ? ' is-active' : '' ?>" href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
        <?php endforeach; ?>
        <hr>
        <a href="Welcome_page.php" class="side-link side-link--small">Dashboard</a>
        <a href="php/sign_out.php" class="side-link side-link--small side-link--danger">Sign Out</a>
      </div>

      <div class="callout">
        <strong>Why Personal Info Matters</strong>
        <p>Partner shelters use your contact info solely to arrange virtual meet-and-greets and home delivery logistics.</p>
      </div>
    </aside>

    <section class="card form-card">
      <div class="form-head">
        <div>
          <h2>Personal Information <?php if ($verified): ?><span class="badge">✔ Verified Identity</span><?php endif; ?></h2>
          <p>Manage your legal name, contact credentials, and verified contact address. Fields marked <i class="req">*</i> are required.</p>
        </div>
        <div class="photo">
          <div class="photo__box wireframe<?= $user['photo'] !== '' ? ' has-photo' : '' ?>" id="photo-box"<?= $user['photo'] !== '' ? ' style="background-image:url(&quot;' . e($user['photo']) . '&quot;)"' : '' ?>><span id="photo-ph"<?= $user['photo'] !== '' ? ' hidden' : '' ?>>[ PHOTO × ]</span></div>
          <div class="photo__side">
            <strong>Profile Picture</strong>
            <button type="button" class="link" id="photo-btn" aria-haspopup="true" aria-expanded="false">Upload new photo</button>
            <div class="menu" id="photo-menu" hidden>
              <nav class="breadcrumb" aria-label="Photo options" style="margin:0;font-size:11px;font-weight:600;white-space:nowrap"><a href="#" id="opt-camera">Take a Photo</a><span>/</span><a href="#" id="opt-gallery">Choose from Gallery</a></nav>
            </div>
            <p class="photo__status<?= isset($errors['photo']) ? ' is-bad' : '' ?>" id="photo-status" role="status"><?= e($errors['photo'] ?? '') ?></p>
          </div>
          <input type="file" id="pick-gallery" accept="image/*" hidden>
          <input type="file" id="pick-camera" accept="image/*" capture="user" hidden>
          <!-- the file that is actually submitted with the form -->
          <input type="file" id="photo-file" name="photo" accept="image/*" form="profile-form" hidden>
        </div>
      </div>

      <form class="form" id="profile-form" method="post" action="account.php" enctype="multipart/form-data" novalidate>
        <div class="grid grid--2">
          <div class="field<?= field_class($errors, 'first_name') ?>">
            <label for="first-name">First Name <i>*</i></label>
            <input id="first-name" name="first_name" type="text" autocomplete="given-name" data-required value="<?= e($user['first']) ?>">
            <?= field_error($errors, 'first_name') ?>
          </div>
          <div class="field<?= field_class($errors, 'last_name') ?>">
            <label for="last-name">Last Name <i>*</i></label>
            <input id="last-name" name="last_name" type="text" autocomplete="family-name" data-required value="<?= e($user['last']) ?>">
            <?= field_error($errors, 'last_name') ?>
          </div>
        </div>

        <div class="grid grid--2">
          <div class="field<?= field_class($errors, 'email') ?>">
            <label for="email">Email Address <i>*</i></label>
            <input id="email" name="email" type="email" autocomplete="email" data-required value="<?= e($user['email']) ?>">
            <?= field_error($errors, 'email') ?>
            <small>Shelter responses and adoption status alerts are sent here.</small>
          </div>
          <div class="field<?= field_class($errors, 'phone') ?>">
            <label for="phone">Phone Number <i>*</i></label>
            <input id="phone" name="phone" type="tel" autocomplete="tel" data-required value="<?= e($user['phone']) ?>">
            <?= field_error($errors, 'phone') ?>
            <small>For urgent shelter notifications and meet-up confirmation.</small>
          </div>
        </div>

        <div class="field<?= field_class($errors, 'address') ?>">
          <label for="address">Residential Street Address <i>*</i></label>
          <input id="address" name="address" type="text" autocomplete="street-address" data-required value="<?= e($user['address']) ?>">
          <?= field_error($errors, 'address') ?>
        </div>

        <div class="grid grid--3">
          <div class="field<?= field_class($errors, 'city') ?>">
            <label for="city">City <i>*</i></label>
            <input id="city" name="city" type="text" data-required value="<?= e($user['city']) ?>">
            <?= field_error($errors, 'city') ?>
          </div>
          <div class="field<?= field_class($errors, 'state') ?>">
            <label for="state">State / Region <i>*</i></label>
            <select id="state" name="state" data-required>
              <?php foreach ($states as $code => $name): ?>
                <option value="<?= e((string)$code) ?>"<?= (string)$code === $user['state'] ? ' selected' : '' ?>><?= e($name) ?></option>
              <?php endforeach; ?>
            </select>
            <?= field_error($errors, 'state') ?>
          </div>
          <div class="field<?= field_class($errors, 'zip') ?>">
            <label for="zip">ZIP / Postal Code <i>*</i></label>
            <input id="zip" name="zip" type="text" autocomplete="postal-code" data-required value="<?= e($user['zip']) ?>">
            <?= field_error($errors, 'zip') ?>
          </div>
        </div>

        <div class="co-applicant">
          <div>
            <strong>Secondary Caretaker / Co-Applicant <span class="opt">(optional)</span></strong>
            <small id="co-summary">No co-applicant added.</small>
          </div>
          <button type="button" class="link" id="co-toggle" aria-expanded="false" aria-controls="co-fields">Add Co-Applicant</button>
        </div>
        <div class="grid grid--2" id="co-fields" hidden>
          <div class="field">
            <label for="co-name">Co-Applicant Name</label>
            <input id="co-name" name="co_name" type="text" value="<?= e($user['coName']) ?>">
          </div>
          <div class="field">
            <label for="co-phone">Co-Applicant Phone</label>
            <input id="co-phone" name="co_phone" type="tel" value="<?= e($user['coPhone']) ?>">
          </div>
        </div>

        <div class="prefs" id="notification-preferences">
          <p class="eyebrow">Adoption Notification Preferences</p>
          <div class="grid grid--2">
            <?php foreach ($notifPrefs as $i => $label): ?>
              <label class="pref"><input type="checkbox" name="pref[]" value="<?= $i ?>"<?= in_array($i, $user['preferences'], true) ? ' checked' : '' ?>> <?= e($label) ?></label>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="form-actions">
          <span class="secure">✔ All changes auto-encrypted and shared securely with certified shelters.</span>
          <div>
            <a href="Welcome_page.php" class="cancel">Cancel</a>
            <button class="btn btn--coral" type="submit">Save Changes →</button>
            <button class="btn btn--coral" type="submit" name="continue" value="1">Save &amp; Continue →</button>
          </div>
        </div>
        <p class="form-alert" id="form-alert" role="alert" hidden>Please complete the highlighted required fields before saving.</p>
      </form>
    </section>
  </div>
</main>

<dialog id="cam-dialog" class="cam">
  <video id="cam-video" autoplay playsinline muted></video>
  <div class="cam__actions">
    <button type="button" class="cancel" id="cam-cancel">Cancel</button>
    <button type="button" class="btn btn--coral" id="cam-snap">Capture</button>
  </div>
</dialog>

<footer class="footer">
  <div class="container footer-grid">
    <div>
      <a href="Welcome_page.php" class="logo footer-logo"><img src="photos/adoptly logo.png" alt="Adoptly"></a>
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

<script>
(() => {
  const $ = id => document.getElementById(id);
  const form = $('profile-form'), photoInput = $('photo-file');
  const savedPhoto = <?= json_encode($user['photo']) ?>;
  const req = [...form.querySelectorAll('[data-required]')];

  /* ---------- validation ---------- */
  const msg = el => {
    const v = el.value.trim();
    if (!v) return 'This field is required.';
    if (el.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)) return 'Enter a valid email address.';
    if (el.type === 'tel' && (v.match(/\d/g) || []).length < 7) return 'Enter a valid phone number.';
    return '';
  };
  const show = (el, m) => {
    const f = el.closest('.field'), p = f.querySelector('.field__error');
    f.classList.toggle('has-error', !!m);
    el.setAttribute('aria-invalid', m ? 'true' : 'false');
    p.textContent = m; p.hidden = !m;
  };

  /* ---------- readiness from required personal-information fields ---------- */
  function update() {
    const total = req.length;
    const n = req.filter(el => !msg(el)).length;
    const pct = Math.round(n / total * 100), st = pct === 0 ? 'is-idle' : pct === 100 ? 'is-done' : 'is-partial';
    $('rd-badge').textContent = pct + '% Complete';
    $('rd-fill').style.width = pct + '%';
    $('rd-meter').setAttribute('aria-valuenow', pct);
    $('rd-meter').classList.toggle('is-done', pct === 100);
    ['rd-badge', 'rd-icon'].forEach(id => { $(id).classList.remove('is-idle', 'is-partial', 'is-done'); $(id).classList.add(st); });
    $('rd-icon').textContent = pct === 100 ? '✔' : pct === 0 ? '○' : pct + '%';
    $('rd-icon').style.fontSize = pct > 0 && pct < 100 ? '11px' : '';
    $('rd-text').textContent = pct === 0 ? 'Fill in your details to get started'
      : pct === 100 ? 'Shelters prioritize ready profiles' : n + ' of ' + total + ' items completed';
  }

  function syncHeader() {
    const f = $('first-name').value.trim(), l = $('last-name').value.trim();
    $('hdr-name').textContent = (f + ' ' + l).trim() || 'New Applicant';
    if (!$('hdr-avatar').classList.contains('has-photo'))
      $('hdr-avatar').textContent = ((f[0] || '') + (l[0] || '')).toUpperCase() || '👤';
    const n = $('co-name').value.trim(), p = $('co-phone').value.trim();
    $('co-summary').textContent = (n || p) ? [n, p].filter(Boolean).join(' • ') : 'No co-applicant added.';
  }

  const onChange = e => {
    if (req.includes(e.target) && e.target.closest('.field').classList.contains('has-error')) show(e.target, msg(e.target));
    syncHeader(); update();
    if (!form.querySelector('.has-error')) $('form-alert').hidden = true;
  };
  form.addEventListener('input', onChange);
  form.addEventListener('change', onChange);

  form.addEventListener('submit', () => {
    let first = null;
    req.forEach(el => { const m = msg(el); show(el, m); if (m && !first) first = el; });
    if (first) {
      $('form-alert').hidden = false;
    }
  });

  /* ---------- co-applicant (optional) ---------- */
  $('co-toggle').addEventListener('click', () => {
    const open = $('co-fields').hidden;
    $('co-fields').hidden = !open;
    $('co-toggle').setAttribute('aria-expanded', open);
    $('co-toggle').textContent = open ? 'Hide Co-Applicant' : 'Add Co-Applicant';
  });

  /* ---------- profile photo ---------- */
  const status = (t, bad) => { const s = $('photo-status'); s.textContent = t; s.classList.toggle('is-bad', !!bad); };
  let lastUrl = null;

  function applyPhoto(file) {
    if (!file) return;
    if (!file.type.startsWith('image/')) return status('Please choose an image file.', true);
    if (file.size > 5 * 1024 * 1024) return status('Photo must be 5 MB or smaller.', true);
    try { const dt = new DataTransfer(); dt.items.add(file); photoInput.files = dt.files; }
    catch (_) { return status('This browser cannot attach the photo. Try another browser.', true); }
    if (lastUrl) URL.revokeObjectURL(lastUrl);
    lastUrl = URL.createObjectURL(file);
    const bg = 'url("' + lastUrl + '")';
    const box = $('photo-box'); box.classList.remove('wireframe'); box.classList.add('has-photo'); box.style.backgroundImage = bg;
    $('photo-ph').hidden = true;
    const av = $('hdr-avatar'); av.classList.add('has-photo'); av.style.backgroundImage = bg; av.textContent = '';
    status('Photo selected. It will be saved when you click Save Changes.');
    update();
  }

  const menu = $('photo-menu'), btn = $('photo-btn');
  const closeMenu = () => { menu.hidden = true; btn.hidden = false; btn.setAttribute('aria-expanded', 'false'); };
  btn.addEventListener('click', e => { e.stopPropagation(); menu.hidden = false; btn.hidden = true; btn.setAttribute('aria-expanded', 'true'); });
  document.addEventListener('click', e => { if (!menu.contains(e.target)) closeMenu(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });

  const fromInput = e => { const f = e.target.files[0]; e.target.value = ''; if (f) applyPhoto(f); else status('No photo selected. Your current photo was kept.'); };
  ['pick-gallery', 'pick-camera'].forEach(id => {
    $(id).addEventListener('change', fromInput);
    $(id).addEventListener('cancel', () => status('Photo selection cancelled. Your current photo was kept.'));
  });
  $('opt-gallery').addEventListener('click', e => { e.preventDefault(); closeMenu(); $('pick-gallery').click(); });

  /* Take a Photo: native camera on phones/tablets, live camera preview on desktop */
  const dlg = $('cam-dialog'), video = $('cam-video'); let stream = null, snapped = false;
  const stopCam = () => { if (stream) stream.getTracks().forEach(t => t.stop()); stream = null; video.srcObject = null; };
  $('opt-camera').addEventListener('click', async e => {
    e.preventDefault();
    closeMenu();
    if (matchMedia('(pointer: coarse)').matches || !navigator.mediaDevices || !navigator.mediaDevices.getUserMedia || typeof dlg.showModal !== 'function')
      return $('pick-camera').click();
    try {
      stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'user' }, audio: false });
      video.srcObject = stream; snapped = false; dlg.showModal();
    } catch (err) {
      status(err.name === 'NotAllowedError' ? 'Camera access was denied. Allow it in your browser, or choose from gallery.'
        : 'No usable camera found. Choose from gallery instead.', true);
    }
  });
  $('cam-snap').addEventListener('click', () => {
    if (!video.videoWidth) return;
    const c = document.createElement('canvas'); c.width = video.videoWidth; c.height = video.videoHeight;
    c.getContext('2d').drawImage(video, 0, 0);
    c.toBlob(b => { snapped = true; dlg.close(); if (b) applyPhoto(new File([b], 'camera-photo.jpg', { type: 'image/jpeg' })); }, 'image/jpeg', .9);
  });
  $('cam-cancel').addEventListener('click', () => dlg.close());
  dlg.addEventListener('close', () => { stopCam(); if (!snapped) status('Camera cancelled. Your current photo was kept.'); });

  if (savedPhoto) {
    const bg = 'url("' + savedPhoto + '")';
    const box = $('photo-box'); box.classList.remove('wireframe'); box.classList.add('has-photo'); box.style.backgroundImage = bg;
    $('photo-ph').hidden = true;
    const av = $('hdr-avatar'); av.classList.add('has-photo'); av.style.backgroundImage = bg; av.textContent = '';
  }
  syncHeader(); update();
})();
</script>
</body>
</html>
