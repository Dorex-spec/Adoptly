<?php
declare(strict_types=1);

/** Escape output for HTML. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$navLinks = [
    ['label' => 'Browse pets',       'href' => 'Browse_page.php', 'active' => false],
    ['label' => 'Adoption process',  'href' => 'Adoption_process.php', 'active' => false],
    ['label' => 'Donate',            'href' => 'Donation.php', 'active' => true],
    ['label' => 'About',             'href' => 'About_us.php', 'active' => false],
];

$statPills = [
    ['class' => 'pill--coral', 'icon' => '✓', 'text' => '100% Goes to Animal Care'],
    ['class' => 'pill--gray',  'icon' => '🛡️', 'text' => 'Tax Deductible Contributions'],
    ['class' => 'pill--gray',  'icon' => '❤️',  'text' => '450+ Pets Saved This Year'],
];

$stories = [
    [
        'number' => '01', 'photo' => "Bella's Photo", 'badge' => '$85 Medical Care Funded',
        'image' => 'photos/BROWSE PAGE/BELLA.jpg',
        'title' => "Bella's Recovery Journey",
        'text'  => 'Rescued from severe malnutrition, Bella received emergency surgery, vaccinations, and nutritious meals funded entirely by community donations. Today she is healthy, thriving, and ready for adoption.',
        'meta'  => 'Golden Retriever Mix • 2 yrs', 'status' => 'Fully Recovered ✓',
    ],
    [
        'number' => '02', 'photo' => "Milo's Photo", 'badge' => '$50 Shelter & Nutrition Kit',
        'image' => 'milo.jpg',
        'title' => "Milo's Second Chance",
        'text'  => 'Found as a stray kitten during winter storms, Milo required intensive veterinary nursery care and rehabilitation. Your donations gave him warm shelter and a safe nursery bed.',
        'meta'  => 'Tabby Kitten • 5 mos', 'status' => 'Safe in Foster Care ✓',
    ],
];

$channels = [
    [
        'theme' => 'gcash', 'logo' => 'G', 'name' => 'GCash', 'type' => 'E-Wallet',
        'accountName' => 'Adoptly Animal Welfare Foundation Inc.',
        'numberLabel' => 'Mobile / Account Number',
        'number' => '0917-123-4567', 'numberNote' => '(0917-XXX-ADOPT)',
        'qr' => 'GCash QR Code', 'qrCaption' => 'Scan to Pay via GCash App',
      'qrImage' => 'gcash.jpg',],
    [
        'theme' => 'maya', 'logo' => 'M', 'name' => 'Maya / PayMaya', 'type' => 'E-Wallet',
        'accountName' => 'Adoptly Rescue & Care Fund',
        'numberLabel' => 'Mobile / Account Number',
        'number' => '0918-987-6543', 'numberNote' => '(0918-XXX-MAYA)',
        'qr' => 'Maya QR Code', 'qrCaption' => 'Scan to Pay via Maya App',
      'qrImage' => 'maya.jpg',],
    [
        'theme' => 'bdo', 'logo' => 'BDO', 'name' => 'BDO', 'type' => 'Bank Transfer',
        'accountName' => 'Adoptly Animal Foundation Org',
        'numberLabel' => 'Savings Account Number',
        'number' => '0012-3456-7890', 'numberNote' => 'PHP Savings',
        'branch' => 'BDO Ortigas North Branch', 'swift' => 'BNORPHMM',
            'qr' => 'BDO QR Code', 'qrCaption' => 'Scan to Pay via BDO App', 'qrImage' => 'dbo.jpg',
    ],
];

$exploreCards = [
    [
        'image' => 'dog and cat pet.jpg',
        'alt' => 'Adopt a pet', 'tag' => 'Find a Companion', 'title' => 'Start Adopting',
        'text' => 'Explore thousands of verified rescue cats and dogs pets waiting for a loving home.',
        'cta' => 'Browse Pets', 'ctaClass' => 'btn--coral', 'badge' => '14,200+ Available',
    ],
    [
        'image' => 'dogcat.jpg',
        'alt' => 'Adoption process guide', 'tag' => 'Adoption Pathway', 'title' => 'Learn the Process',
        'text' => 'Follow our simple, transparent 7-step guide to finding and bringing home your perfect companion.',
        'cta' => 'View Adoption Guide', 'ctaClass' => 'btn--glass', 'badge' => '7-Step Guide',
    ],
];

$footerCols = [
    'Help Tabs' => [['Process Overview', '#process'], ['Requirements Check', '#requirements'], ['Adoption Fees', '#fees'], ['Adoption FAQ', '#faq'], ['Online Application', '#next-steps']],
    'Resources' => [['Pet Care Guides', '#'], ['Foster Program', '#'], ['Volunteer Network', '#'], ['Donate to Us', '#'], ['Post-Adoption Support', '#']],
];

$socials = ['Facebook' => 'f', 'Twitter' => 't', 'Instagram' => 'in', 'LinkedIn' => 'li', 'YouTube' => 'yt'];

/** Newsletter form handling (server-side, no JavaScript). */
$newsletter = ['status' => null, 'email' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form'] ?? '') === 'newsletter') {
    $email = trim((string) ($_POST['email'] ?? ''));
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // TODO: store the address or send it to your mailing-list provider here.
        $newsletter['status'] = 'success';
    } else {
        $newsletter['status'] = 'error';
        $newsletter['email']  = $email;
    }
}

