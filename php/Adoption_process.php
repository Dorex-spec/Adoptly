<?php
declare(strict_types=1);

// Navigation Links
$navLinks = [
  ['Browse Pets', 'Browse_page.php'],
  ['Adoption Process', 'Adoption_process.php'],
  ['Donate', 'Donation.php'],
  ['About', 'About_us.php'],
];
$activePage = 'Adoption Process';

// Page Data Arrays
$stats = [
  ['100%', 'Verified Screening'],
  ['24-48h', 'Review Turnaround'],
  ['4,220+', 'Successful Adoptions']
];

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

// Load View Template
include 'Adoption_process.html';
?>