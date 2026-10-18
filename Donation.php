<?php
declare(strict_types=1);
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly - Donation Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap">
  <link rel="stylesheet" href="Css/style2.css">
</head>
<body>

 <header class="header">
  <div class="container header-row">
    <a href="#top" class="logo"><img src="photos/logoNav.png"></a>

      <nav class="main-nav" aria-label="Main">
        <?php foreach ($navLinks as $link): ?>
          <a class="main-nav__link<?= $link['active'] ? ' is-active' : '' ?>" href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
        <?php endforeach; ?>
      </nav>

      <div class="header-actions">
        <button class="fav" type="button" aria-label="View Saved Pets">❤</button>
        <a class="header-actions__login" href="Log_in.php">Login</a>
        <a class="btn btn--coral btn--sm" href="Sign_in.php">Sign in</a>
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container container--medium text-center">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="index.php">Home</a><span>/</span><span class="breadcrumb__current">Donate</span>
        </nav>
        <h1 class="hero__title">Give Hope, Save Lives: Support Adoptly Rescue Animals</h1>
        <p class="hero__subtitle">Every single contribution directly feeds, shelters, and provides emergency medical treatments to abandoned and recovering pets until they find their forever home.</p>
        <div class="pill-list">
          <?php foreach ($statPills as $pill): ?>
            <div class="pill <?= e($pill['class']) ?>"><span class="pill__icon"><?= e($pill['icon']) ?></span><?= e($pill['text']) ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section container container--wide">
      <div class="section-heading">
        <h2 class="section-heading__title">Why Your Donation Matters</h2>
        <p class="section-heading__text">Witness firsthand the real difference your generosity makes inside our partner shelters every single day.</p>
      </div>

              <div class="video__frame video__frame--media">
          <video class="video__player" controls preload="metadata" poster="video-poster.jpg">
            <source src="shelter.mp4" type="video/mp4">
          </video>
        </div>
        <h3 class="video__title video__title--below">Behind the Scenes: A Day at Austin Paws &amp; Rescue Shelter</h3>

      <div class="stories" id="stories">
        <div class="stories__header">
          <div>
            <h3 class="stories__title">Real Stories of Hope</h3>
            <p class="stories__subtitle">From critical rescue to loving care made possible by donors like you</p>
          </div>
          <span class="stories__verified">Verified Impact</span>
        </div>

        <div class="grid grid--2">
          <?php foreach ($stories as $story): ?>
                       <article class="story-card">
              <div class="story-card__photo<?= empty($story['image']) ? ' wireframe' : '' ?>">
                <?php if (!empty($story['image'])): ?>
                  <img class="story-card__img" src="<?= e($story['image']) ?>" alt="<?= e($story['photo']) ?>">
                <?php else: ?>
                  <span class="photo-label">📷 <?= e($story['photo']) ?></span>
                <?php endif; ?>
              </div>
              <div class="story-card__body">
                <div>
                  <div class="story-card__top">
                    <span class="story-card__number">Pet Story #<?= e($story['number']) ?></span>
                    <span class="badge-green"><?= e($story['badge']) ?></span>
                  </div>
                  <h4 class="story-card__title"><?= e($story['title']) ?></h4>
                  <p class="story-card__text"><?= e($story['text']) ?></p>
                </div>
                <div class="story-card__footer">
                  <span><?= e($story['meta']) ?></span>
                  <span class="story-card__status"><?= e($story['status']) ?></span>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="channels">
      <div class="container container--wide">
        <div class="section-heading">
          <span class="tag tag--coral tag--wide">Direct Impact</span>
          <h2 class="section-heading__title section-heading__title--lg">Official Donation Channels</h2>
          <p class="section-heading__text">Direct, verified channels for seamless giving. Choose your preferred payment method below to fund life-saving treatments immediately.</p>
        </div>

        <div class="grid grid--3">
          <?php foreach ($channels as $ch): ?>
            <div class="channel channel--<?= e($ch['theme']) ?>">
              <div class="channel__header">
                <div class="channel__brand">
                  <div class="channel__logo"><?= e($ch['logo']) ?></div>
                  <span class="channel__name"><?= e($ch['name']) ?></span>
                </div>
                <span class="channel__type"><?= e($ch['type']) ?></span>
              </div>

              <div class="field">
                <span class="field__label">Account Name</span>
                <p class="field__value"><?= e($ch['accountName']) ?></p>
              </div>
              <div class="field">
                <span class="field__label"><?= e($ch['numberLabel']) ?></span>
                <div class="account-number">
                  <span class="account-number__value"><?= e($ch['number']) ?></span>
                  <span class="account-number__note"><?= e($ch['numberNote']) ?></span>
                </div>
              </div>

                            <?php if (isset($ch['qr'])): ?>
                <div class="qr">
                  <?php if (!empty($ch['qrImage'])): ?>
                    <img class="qr__img" src="<?= e($ch['qrImage']) ?>" alt="<?= e($ch['qr']) ?>">
                  <?php else: ?>
                    <div class="qr__box wireframe"><span class="qr__label"><?= e($ch['qr']) ?></span></div>
                  <?php endif; ?>
                  <p class="qr__caption"><?= e($ch['qrCaption']) ?></p>
                </div>
              <?php endif; ?>

              <?php if (isset($ch['branch'])): ?>
                <div class="field">
                  <span class="field__label">Branch &amp; Swift Code</span>
                  <p class="field__branch"><?= e($ch['branch']) ?> • Swift: <span class="mono"><?= e($ch['swift']) ?></span></p>
                </div>
                <div class="bank-note">
                  <p class="bank-note__title">Over-the-Counter &amp; Online Banking</p>
                  <p class="bank-note__text">Please include your email in remarks for tax receipt</p>
                </div>
              <?php endif; ?>

              <p class="channel__hint">Tap the number to select it, then copy.</p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section container container--wide">
      <div class="stack">
        <div class="newsletter">
          <img class="cover-img" src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?auto=format&fit=crop&w=1600&q=80" alt="Shelter animals background">
          <div class="newsletter__overlay"></div>
          <div class="newsletter__content">
            <span class="newsletter__eyebrow">Adoptly Community Newsletter</span>
            <h3 class="newsletter__title">Stay Updated on Rescue Missions</h3>
            <p class="newsletter__text">Get heartwarming rescue updates, veterinary success stories, and impact reports delivered straight to your inbox.</p>
            <p class="newsletter__note">🛡 No spam. Heartwarming updates only. Unsubscribe anytime.</p>
          </div>

          <form class="newsletter__form" method="post" action="donate_page.php#newsletter" id="newsletter">
            <input type="hidden" name="form" value="newsletter">
            <input class="newsletter__input" type="email" name="email" required
                   placeholder="Enter your email address..." value="<?= e($newsletter['email']) ?>">
            <button class="btn btn--coral btn--lg" type="submit">Subscribe</button>
            <?php if ($newsletter['status'] === 'success'): ?>
              <p class="form-message form-message--success" role="status">Thank you for subscribing to Adoptly updates!</p>
            <?php elseif ($newsletter['status'] === 'error'): ?>
              <p class="form-message form-message--error" role="alert">Please enter a valid email address.</p>
            <?php endif; ?>
          </form>
        </div>

        <div class="grid grid--2 grid--gap-sm">
          <?php foreach ($exploreCards as $card): ?>
            <div class="explore-card">
              <img class="cover-img explore-card__img" src="<?= e($card['image']) ?>" alt="<?= e($card['alt']) ?>">
              <div class="explore-card__overlay"></div>
              <div class="explore-card__top">
                <span class="explore-card__tag"><?= e($card['tag']) ?></span>
                <h4 class="explore-card__title"><?= e($card['title']) ?></h4>
                <p class="explore-card__text"><?= e($card['text']) ?></p>
              </div>
              <div class="explore-card__bottom">
                <a class="btn <?= e($card['ctaClass']) ?>" href="#"><?= e($card['cta']) ?> <span class="arrow">→</span></a>
                <span class="explore-card__badge"><?= e($card['badge']) ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
  <div class="container footer-grid">
    <div>
      <a href="#top" class="logo footer-logo"><img src="photos/Adoptly logo.png"></a>
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

