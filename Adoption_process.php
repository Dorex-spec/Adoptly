<?php
$navLinks = [
  ['Browse Pets', 'Browse_page.php'],
  ['Adoption Process', 'Adoption_process.php'],
  ['Donate', 'Donation.php'],
  ['About', 'About_us.php'],
];
$activePage = 'Adoption Process';

$stats = [['100%', 'Verified Screening'], ['24-48h', 'Review Turnaround'], ['4,220+', 'Successful Adoptions']];

$steps = [
  ['Browse Available Pets', 'Explore profiles of rescue animals. Filter by age, breed, temperament, energy level, and special medical needs.'],
  ['Submit Application', 'Fill in our intuitive digital questionnaire covering household dynamics, yard setup, schedule, and previous pet history.'],
  ['Screening & Review', 'Our placement counselors assess application details within 24–48 hours to confirm optimal match and lifestyle suitability.'],
  ['Meet & Greet Online', 'Participate in an interactive video session or scheduled in-person visit with the pet, foster parent, and shelter coordinator.'],
  ['Living Conditions Docs', 'Upload proof of address, landlord pet policy approvals, and short video or photos of the dedicated living/yard area.'],
  ['Approval & Payment', 'Receive your formal adoption endorsement and safely process the subsidized adoption fee via our encrypted portal.'],
  ['Welcome Home (Pickup)', 'Schedule the official homecoming! Collect health dossiers, microchip tags, initial starter transition supplies, and celebrate welcoming your newest companion to their forever home.'],
];

$requirements = [
  ['Age & Identification', "Applicants must be at least 18 years of age (21 for select large breeds) with a valid government-issued photo ID (driver's license, passport, or national ID card).", 'Mandatory Identification'],
  ['Housing & Landlord Approval', 'Proof of homeownership or direct written consent/lease addendum from your landlord confirming pet allowances, weight restrictions, and breed regulations.', 'Property Verification'],
  ['Current Pet & Vacc Records', 'Existing pets in the household must be spayed/neutered and up-to-date on essential rabies, DHPP, and core vaccinations, corroborated by veterinarian records.', 'Veterinary Reference'],
  ['Ongoing Care Commitment', 'Demonstrated financial and emotional readiness to provide high-quality food, annual wellness checkups, emergency care, daily exercise, and lifelong commitment.', 'Lifelong Guardianship'],
];

$prices = [500, 1000, 800];

$fees = [
  ['Puppies & Kittens', 'Under 1 Year', '', 'adoption fee', '~ $500',
   ['Full series juvenile vaccinations', 'Spay / Neuter operation included', 'Lifelong microchip registration', 'Deworming & flea prevention']],
  ['Adult Dogs & Cats', '1 to 7 Years', 'MOST COMMON', 'adoption fee', '~ $350',
   ['Core vaccinations (Rabies, DAPP / FVRCP)', 'Spayed or Neutered prior to release', 'Heartworm / FeLV/FIV clinical test', 'Microchip & 30-day trial pet insurance']],
  ['Seniors & Special Needs', '7+ Years or Medical', '', 'subsidized fee', '~ $600',
   ['Comprehensive senior wellness panel', 'Full dental check & clean (if required)', 'Up-to-date core vaccinations', 'Ongoing medical consultation access']],
];

$services = [
  ['', 'Spay & Neuter Surgery', 'Completed by certified vet'],
  ['', 'Core Vaccinations', 'Rabies, Distemper, Parvo'],
  ['', 'Microchip Implantation', 'Lifetime nationwide registry'],
  ['', 'Flea & Tick Treatment', 'Current preventation applied'],
  ['', 'Pre-Adoption Exam', 'Comprehensive health checklist'],
  ['', 'Collar, ID Tag & Leash', 'Homecoming starter kit'],
];

$faqs = [
  ['How long do the application processing and review timelines take?', 'Standard initial reviews take between 24 to 48 hours. Once your references, housing documents and veterinary checkups are confirmed, we coordinate the virtual Meet & Greet within 2-3 business days. Most adoptions conclude in under 7 business days.'],
  ['What are your apartment & Landlord Policies? Do I need a fenced yard?', 'A fenced yard is not strictly required for all dogs. We evaluate each application based on the specific needs of the animal and your commitment to leash walking and exercise. Written landlord approval is mandatory for renters.'],
  ["What are your trial & Return Policies if the match doesn't work out?", 'We offer a 2-week adjustment period with full support from our behavioral team. If the match is ultimately unsuccessful, we require the pet to be returned to Adoptly to ensure their continued safety.'],
  ['Can I adopt an animal if I reside outside the local state or region?', 'Currently, we facilitate adoptions within a 150-mile radius of our main headquarters to ensure we can provide adequate home checks and follow-up support.'],
];

$ctas = [
  ['01', 'Start Application', 'Complete our digital questionnaire to connect with verified shelters and foster homes.', 'Adoption_process_form.php', 'btn-fill'],
  ['02', 'Browse Available Pets', 'Meet all our dogs, cats, and special needs rescues waiting for their lifelong family.', 'Browse_page.php', 'btn-outline'],
  ['03', 'Contact Support Team', 'Have specific questions about requirements, veterinary care or special adoptions?', 'mailto:support@adoptly.org', 'btn-dark'],
];

$footerCols = [
  'Help Tabs' => [['Process Overview', '#process'], ['Requirements Check', '#requirements'], ['Adoption Fees', '#fees'], ['Adoption FAQ', '#faq'], ['Online Application', '#next-steps']],
  'Resources' => [['Pet Care Guides', '#'], ['Foster Program', '#'], ['Volunteer Network', '#'], ['Donate to Us', '#'], ['Post-Adoption Support', '#']],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adoptly - Adoption Process</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="header">
  <div class="container header-row">
    <a href="#top" class="logo"><img src="photos/logoNav.png"></a>

    <nav class="nav" aria-label="Main">
      <?php foreach ($navLinks as [$label, $href]): ?>
        <?php if ($href): ?>
          <a href="<?= $href ?>" class="nav-link<?= $label === $activePage ? ' active' : '' ?>"><?= $label ?></a>
        <?php else: ?>
          <span class="nav-link"><?= $label ?></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <div class="header-actions">
      <button type="button" class="fav" aria-label="Favorites">❤</button>
      <a href="../php/Log_in.php" class="login">Login</a>
      <a href="../php/Sign_in.php" class="btn btn-fill small">Sign In</a>
    </div>
  </div>

  <!-- Mobile menu (pure HTML, no JavaScript) -->
  <details class="mobile-menu">
    <summary>Menu</summary>
    <nav aria-label="Mobile">
      <?php foreach ($navLinks as [$label, $href]): ?>
        <?php if ($href): ?>
          <a href="<?= $href ?>" class="<?= $label === $activePage ? 'active' : '' ?>"><?= $label ?></a>
        <?php else: ?>
          <span><?= $label ?></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>
  </details>
</header>

<main id="top">

<!-- HERO -->
<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="pill">FLOWCHART VERIFIED WIREFRAME</span>
      <h1>Adoption Process &amp; <span class="accent">Mission Overview</span></h1>
      <p class="lead">At Adoptly, our mission is to unite healthy rescue animals with dedicated forever families. We champion transparent, stress-free adoptions through clear screening guidelines, empathetic support, and lifelong post-adoption resources.</p>
      <div class="btn-row">
        <a href="#next-steps" class="btn btn-fill">Start Application</a>
        <a href="#process" class="btn btn-outline">View 7-Step Workflow</a>
      </div>
      <dl class="stats">
        <?php foreach ($stats as [$num, $label]): ?>
          <div><dt><?= $num ?></dt><dd><?= $label ?></dd></div>
        <?php endforeach; ?>
      </dl>
    </div>

    <div id="browse-pets" class="hero-card">
      <span class="tag">❤️ Forever Homes</span>
      <svg viewBox="0 0 220 170" role="img" aria-label="Illustration of a dog and a cat">
        <ellipse cx="110" cy="158" rx="90" ry="8" fill="#1F1F1F" opacity=".08"/>
        <ellipse cx="85" cy="110" rx="46" ry="44" fill="#E05A4F"/>
        <ellipse cx="50" cy="78" rx="14" ry="26" fill="#CB4E43" transform="rotate(18 50 78)"/>
        <ellipse cx="120" cy="78" rx="14" ry="26" fill="#CB4E43" transform="rotate(-18 120 78)"/>
        <circle cx="85" cy="85" r="34" fill="#E05A4F"/>
        <ellipse cx="85" cy="98" rx="18" ry="14" fill="#FFE1DD"/>
        <circle cx="72" cy="80" r="4" fill="#1F1F1F"/><circle cx="98" cy="80" r="4" fill="#1F1F1F"/>
        <ellipse cx="85" cy="92" rx="6" ry="4" fill="#1F1F1F"/>
        <path d="M78 102q7 7 14 0" stroke="#1F1F1F" stroke-width="2" fill="none" stroke-linecap="round"/>
        <ellipse cx="160" cy="124" rx="30" ry="30" fill="#1F1F1F"/>
        <path d="M138 100l6-20 14 12zM182 100l-6-20-14 12z" fill="#1F1F1F"/>
        <circle cx="160" cy="108" r="22" fill="#1F1F1F"/>
        <circle cx="152" cy="106" r="3.5" fill="#F7E9D7"/><circle cx="168" cy="106" r="3.5" fill="#F7E9D7"/>
        <path d="M157 114h6l-3 4z" fill="#E05A4F"/>
      </svg>
      <div>
        <h2>Connecting pets to loving homes.</h2>
        <p class="muted">A home. A heart. A forever. Transparent veterinary screenings for safe companions.</p>
        <div class="hero-card-foot">
          <span class="tag"><i class="dot"></i>Online Applications Open</span>
          <a href="#process" class="accent link">Learn More →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7 STEPS -->
<section id="process" class="section">
  <div class="container">
    <div class="heading center">
      <h2>Step-by-Step Adoption Process</h2>
      <p class="muted">Our structured 7-stage pathway guarantees pet-to-owner compatibility, safety, and a seamless transition from shelter to your home.</p>
    </div>
    <div class="grid grid-4">
      <?php foreach ($steps as $i => [$title, $text]): $last = $i === count($steps) - 1; ?>
        <article class="card<?= $last ? ' wide' : '' ?>">
          <div class="card-top">
            <span class="num">S<?= $i + 1 ?></span>
            <span class="eyebrow"><?= $last ? ' Final Step' : 'Step 0' . ($i + 1) ?></span>
          </div>
          <h3><?= $title ?><?= $last ? ' <span class="accent"></span>' : '' ?></h3>
          <p class="muted small"><?= $text ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- REQUIREMENTS -->
<section id="requirements" class="section gray">
  <div class="container">
    <div class="req-head">
      <div>
        <span class="pill">CRITERIA CHECK</span>
        <h2>Requirements &amp; Eligibility</h2>
      </div>
      <p class="muted">Please ensure you satisfy these foundational qualifications prior to submitting your formal adoption application.</p>
    </div>

    <div class="grid grid-4">
      <?php foreach ($requirements as $i => [$title, $text, $badge]): ?>
        <article class="card">
          <span class="num square">0<?= $i + 1 ?></span>
          <h3><?= $title ?></h3>
          <p class="muted small grow"><?= $text ?></p>
          <span class="ok"><i class="dot"></i><?= $badge ?></span>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FEES -->
<section id="fees" class="section">
  <div class="container">
    <div class="heading center fees-head">
      <span class="pill">TRANSPARENT PRICING</span>
      <h2>Adoption Fees &amp; What's Included</h2>
      <p class="muted">Adoption fees cover a portion of veterinary medical procedures and boarding expenses. Here is our breakdown:</p>
    </div>

  <div class="grid grid-3 fee-grid">
  <?php foreach ($fees as $i => [$title, $badge, $extra, $sub, $value, $items]): ?>
    <article class="card fee<?= $extra ? ' featured' : '' ?>">
      <?php if ($extra): ?>
        <span class="pill dark-pill fee-badge"><?= $extra ?></span>
      <?php endif; ?>
      <div>
        <span class="pill small-pill"><?= $badge ?></span>
        <h3 class="fee-title"><?= $title ?></h3>
        <p class="price"><span class="accent"><?= $prices[$i] ?></span> <small class="muted">/ <?= $sub ?></small></p>
        <ul class="checks">
          <?php foreach ($items as $item): ?><li><?= $item ?></li><?php endforeach; ?>
        </ul>
      </div>
      <div class="fee-foot"><span class="eyebrow">Standard Value</span><strong><?= $value ?></strong></div>
    </article>
  <?php endforeach; ?>
</div>

    <div class="breakdown">
      <div class="breakdown-head">
        <div>
          <h3>Services Done Fees Breakdown</h3>
          <p class="muted small">Every adoption package includes veterinary services worth over $450 in standard clinic care.</p>
        </div>
        <span class="pill">Zero Hidden Charges</span>
      </div>
     <div class="grid grid-3 services">
  <?php foreach ($services as [$icon, $name, $desc]): ?>
    <div class="service">
      <div><h4><?= $name ?></h4><p class="muted small"><?= $desc ?></p></div>
    </div>
  <?php endforeach; ?>
</div>
      
    </div>
  </div>
</section>

<!-- FAQ (native <details>, no JavaScript) -->
<section id="faq" class="section gray">
  <div class="container narrow">
    <div class="heading center">
      <span class="pill">HAVE QUESTIONS?</span>
      <h2>Frequently Asked Questions</h2>
    </div>
    <?php foreach ($faqs as [$q, $a]): ?>
      <details class="faq">
        <summary><?= $q ?></summary>
        <p class="muted"><?= $a ?></p>
      </details>
    <?php endforeach; ?>
  </div>
</section>

<!-- NEXT STEPS -->
<section id="next-steps" class="section">
  <div class="container center">
    <span class="pill">NEXT STEPS</span>
    <h2 class="next-title">Ready to Begin Your Adoption Journey?</h2>
    <div class="grid grid-3 ctas">
      <?php foreach ($ctas as [$no, $title, $text, $href, $btn]): ?>
        <div class="card cta">
          <div>
            <span class="num"><?= $no ?></span>
            <h3><?= $title ?></h3>
            <p class="muted small"><?= $text ?></p>
          </div>
          <a href="<?= $href ?>" class="btn <?= $btn ?> small"><?= $title ?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="container footer-grid">
    <div>
      <a href="#top" class="logo footer-logo"><img src="../photos/Adoptly logo.png"></a>
      <p>Adoptly is a non-profit companion animal rescue network dedicated to connecting shelter pets with safe, loving and permanent forever homes through nationwide solidarity.</p>
    </div>
    <?php foreach ($footerCols as $heading => $links): ?>
      <div>
        <h4><?= $heading ?></h4>
        <ul>
          <?php foreach ($links as [$label, $href]): ?><li><a href="<?= $href ?>"><?= $label ?></a></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
    <div>
      <h4>Contact Information</h4>
      <ul>
        <li><a href="mailto:support@adoptly.org">support@adoptly.org</a></li>
        <li><a href="tel:+15550192834">(555) 019-2834</a></li>
        <li>Hours: 9am - 6pm EST</li>
        <li><a href="#">Media Directory</a></li>
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

