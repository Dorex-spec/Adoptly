<?php
session_start();

$sections = [
  [
    'title' => 'Adoption Information',
    'code' => '#ADP-SPEC',
    'description' => 'Tell us which type of companion you’re hoping to welcome home.',
    'fields' => [
      [
        'intent',
        'Which of the following best describes why you’re filling out the form?',
        'cards',
        [
          ['dog', 'I’m applying to adopt a dog from the shelter', 'Companion dogs, puppies, and senior canines'],
          ['cat', 'I’m applying to adopt a cat from the shelter', 'Indoor companions, kittens, and bonded pairs'],
          ['other', 'I’m applying for another pet', 'Rabbits, birds, small animals, or foster consultations'],
        ]
      ],
    ],
  ],
  [
    'title' => 'Applicant’s Personal Information',
    'code' => '#APP-PERS',
    'description' => 'Please provide your current contact details and identification information.',
    'fields' => [
      ['full_name', 'Full Name', 'text', null, 'Enter your full legal name'],
      ['email', 'Email', 'email', null, 'you@example.com'],
      ['address', 'Home Address', 'textarea', null, 'House/unit, street, barangay, city'],
      ['phone', 'Contact Number', 'tel', null, '+63 900 000 0000'],
      ['dob', 'Date of Birth (Must be 18+)', 'date'],
      [
        'income_source',
        'Source of Income',
        'checks',
        [
          ['employed', 'Employed (Full-time)'],
          ['freelance', 'Freelance / Remote Contractor'],
          ['allowance', 'Allowance / Student Support'],
          ['retired', 'Retired / Pensioner'],
          ['other', 'Other Income Source'],
        ]
      ],
      [
        'income',
        'Monthly Income / Allowance Range',
        'select',
        [
          ['below20k', 'Below ₱20k'],
          ['20k-50k', '₱20k – ₱50k'],
          ['50k-100k', '₱50k – ₱100k'],
          ['above100k', '₱100k+'],
        ]
      ],
      ['facebook', 'Facebook Link (or preferred social profile)', 'text', null, 'https://facebook.com/your-profile', true],
      [
        'contact_preference',
        'How do you prefer to be contacted?',
        'cards',
        [
          ['call', 'Phone Call'],
          ['email', 'Email'],
          ['sms', 'SMS / Viber'],
        ]
      ],
      ['valid_id', 'Upload Valid ID', 'file'],
    ],
  ],
  [
    'title' => 'Adoption Information',
    'code' => '#ADP-INF',
    'description' => 'Share your preferred rescue, household composition, and motivation for adopting.',
    'fields' => [
      ['shelter', 'Shelter Location', 'select', [['bulacan', 'Bulacan Rescue Haven'], ['bacolod', 'Bacolod Sanctuary']]],
      ['target_pet', 'Pet you want to adopt', 'text', null, 'Pet name or ID'],
      [
        'alternative',
        'If the animal is already adopted, are you willing to adopt another pet?',
        'cards',
        [
          ['open', 'Yes, open to other compatible rescues'],
          ['specific', 'No, specifically interested in this pet'],
          ['recommendation', 'I need a recommendation from an adoption counselor'],
        ]
      ],
      [
        'household_count',
        'How many are you in the house?',
        'cards',
        [
          ['1', '1 person (solo)'],
          ['2-3', '2–3 people'],
          ['4-5', '4–5 people'],
          ['6+', '6+ people'],
        ]
      ],
      ['household_people', 'How old are they and who do they live with?', 'textarea', null, 'List household members, ages, and relationships'],
      [
        'prior_experience',
        'Does the applicant have prior experience with animal guardianship?',
        'cards',
        [
          ['experienced', 'Experienced guardian', 'Currently has pets or previously owned cats or dogs independently'],
          ['first', 'First-time pet parent', 'Eager to learn and follow shelter guidance'],
          ['family', 'Occasional pet sitter / family pet experience'],
        ]
      ],
      [
        'financial_payer',
        'Who will be financially responsible for the rescue’s needs?',
        'cards',
        [
          ['primary', 'Primary Applicant'],
          ['shared', 'Shared Household'],
          ['sponsor', 'Co-sign / Sponsor'],
        ]
      ],
      ['reason', 'Reason for Adopting', 'textarea', null, 'Tell us why you want to adopt'],
    ],
  ],
  [
    'title' => 'Household Information',
    'code' => '#APP-HOUSE',
    'description' => 'Help us understand your residence and ensure everyone at home is ready.',
    'fields' => [
      [
        'residence_type',
        'Type of Residence',
        'cards',
        [
          ['house', 'Single Family House (with yard)'],
          ['townhouse', 'Townhouse / Duplex'],
          ['condo', 'Apartment / Condominium'],
          ['gated', 'Gated Community Compound'],
          ['rural', 'Rural / Farm property'],
          ['other', 'Other residence type'],
        ]
      ],
      [
        'residence',
        'Residence Ownership',
        'select',
        [
          ['owned', 'Owned (Sole Owner / Family)'],
          ['rented', 'Rented (Pet-friendly approved)'],
          ['family', 'Living with Parents / Relatives'],
          ['employer', 'Employer-Provided Housing'],
        ]
      ],
      [
        'household_members',
        'Number of household members (including yourself)',
        'cards',
        [
          ['1', '1 person'],
          ['2-3', '2–3 people'],
          ['4-5', '4–5 people'],
          ['6+', '6+ people'],
        ]
      ],
      [
        'agreement',
        'Are all members of your household on board with the adoption?',
        'cards',
        [
          ['yes', 'Yes, everyone is enthusiastic and fully supportive'],
          ['mostly', 'Mostly on board — some members have questions'],
          ['surprise', 'Surprise gift / not everyone is aware yet'],
        ]
      ],
      ['household_notes', 'Notes on household agreement or allergy considerations', 'textarea', null, 'Children, allergies, other pets, or anything we should know', true],
    ],
  ],
  [
    'title' => 'Animal Care / Experience',
    'code' => '#APP-CARE',
    'description' => 'Tell us about your history with companion animals and veterinary care readiness.',
    'fields' => [
      [
        'care_experience',
        'Which best describes your experience as an animal guardian?',
        'cards',
        [
          ['current', 'Currently have companion pets'],
          ['lifelong', 'Lifelong pet owner'],
          ['rescue', 'Previous rescue pet guardian'],
          ['special', 'Experienced with senior or special-needs pets'],
          ['first', 'First-time primary caregiver'],
        ]
      ],
      [
        'current_animals',
        'Are there companion animals currently living in your household?',
        'checks',
        [
          ['dogs', 'Dogs'],
          ['cats', 'Cats'],
          ['other', 'Small mammals / Birds / Other'],
          ['none', 'None currently'],
        ]
      ],
      [
        'past_rescue',
        'Have you ever given a home to a rescue before?',
        'cards',
        [
          ['shelter', 'Yes, from a registered shelter or rescue foundation'],
          ['street', 'Yes, rescued an abandoned or stray animal directly'],
          ['no', 'No, this will be my first rescue adoption'],
        ]
      ],
      [
        'disease_knowledge',
        'How familiar are you with common animal diseases or viruses?',
        'cards',
        [
          ['very', 'Very familiar & vigilant'],
          ['moderate', 'Moderately familiar'],
          ['novice', 'Novice / Learning'],
        ]
      ],
      ['clinic', 'Veterinary Clinic Name', 'text', null, 'Clinic name'],
      ['clinic_location', 'Clinic Location', 'text', null, 'Clinic address or city'],
      [
        'emergency',
        'Is this clinic open 24/7 for emergencies?',
        'select',
        [
          ['yes', 'Yes, 24/7 emergency facility'],
          ['partner', 'Standard hours with emergency partner'],
          ['no', 'Standard clinic hours only'],
          ['unsure', 'Unsure / Need shelter recommendation'],
        ]
      ],
      [
        'breeding_history',
        'Have you ever bred or sold companion animals?',
        'cards',
        [
          ['never', 'No, never and never will'],
          ['no', 'No, never engaged in breeding or resale'],
          ['yes', 'Yes — subject to committee evaluation'],
        ]
      ],
    ],
  ],
  [
    'title' => 'Home Environment',
    'code' => '#APP-ENV',
    'description' => 'Help us verify that your physical living space is safe and secure for a rescue.',
    'fields' => [
      [
        'outdoor_space',
        'Do you have a yard or outdoor space accessible to the rescue?',
        'checks',
        [
          ['fenced', 'Fully fenced private yard (height: 5ft+)'],
          ['unfenced', 'Unfenced private yard / open lawn'],
          ['balcony', 'Balcony / Terrace with secure pet railing or netting'],
          ['park', 'Common apartment park / community dog run'],
          ['indoor', 'No outdoor yard / Indoor-only home'],
        ]
      ],
      [
        'pet_stay',
        'Where will the rescue primarily stay?',
        'checks',
        [
          ['inside', 'Inside main home with family'],
          ['room', 'Designated indoor pet room'],
          ['mixed', 'Indoors at night, secure yard during day'],
          ['crate', 'Crated / Penned when away'],
          ['porch', 'Enclosed porch / climate-controlled terrace'],
        ]
      ],
      [
        'move_plans',
        'Are you planning to move in the future?',
        'select',
        [
          ['none', 'No immediate plans (Permanent residence)'],
          ['6-12', 'Yes, within 6–12 months'],
          ['1-3', 'Yes, within 1–3 years'],
          ['possible', 'Possible relocation / Lease dependent'],
        ]
      ],
      [
        'move_commitment',
        'If you move, will the rescue move with you?',
        'select',
        [
          ['yes', 'Yes, 100% committed'],
          ['housing', 'Yes, will ensure pet-friendly housing'],
          ['conditional', 'Conditional / Family guardianship transfer'],
        ]
      ],
      ['home_photos', 'Current Home Environment Photos', 'file'],
    ],
  ],
  [
    'title' => 'Health and Vaccination',
    'code' => '#APP-HLTH',
    'description' => 'Share the current health and preventive care status of companion animals in your home.',
    'fields' => [
      [
        'vaccination',
        'Are your companion animals’ vaccinations up to date?',
        'cards',
        [
          ['current', 'Yes, fully up to date'],
          ['partial', 'Partially up to date'],
          ['none', 'No current companion animals'],
          ['overdue', 'No, overdue or not vaccinated'],
        ]
      ],
      [
        'parasites',
        'Have your dogs ever been diagnosed with heartworm or blood parasite disease?',
        'cards',
        [
          ['no', 'No, routinely tested negative & on preventive care'],
          ['cleared', 'Yes, treated and fully cleared'],
          ['treatment', 'Currently undergoing treatment'],
          ['na', 'Not applicable'],
        ]
      ],
      [
        'altered',
        'Are your companion animals spayed/neutered?',
        'cards',
        [
          ['all', 'Yes, all altered'],
          ['some', 'Some altered'],
          ['none', 'No, not yet'],
          ['na', 'Not applicable'],
        ]
      ],
      ['not_altered_reason', 'If not yet spayed/neutered, please share the reason', 'textarea', null, 'Provide details if applicable', true],
      [
        'recent_illness',
        'In the past 6–12 months, has a companion animal experienced serious illness or passed away?',
        'cards',
        [
          ['no', 'No — all animals have remained in stable health'],
          ['illness', 'Yes, an animal experienced serious illness'],
          ['passed', 'Yes, an animal passed away'],
        ]
      ],
      ['illness_details', 'Please share what happened (diagnosis, cause, or reason)', 'textarea', null, 'Provide details if applicable', true],
    ],
  ],
  [
    'title' => 'Adoption Commitment and Readiness',
    'code' => '#APP-READY',
    'description' => 'Confirm your long-term care plan and commitment to responsible rescue guardianship.',
    'fields' => [
      [
        'readiness',
        'How would you rate yourself in the following areas when it comes to adopting and caring for a rescue?',
        'rating',
        [
          ['patience', 'Patience & Positive Reinforcement Training', 'Helping a rescue adjust using kind, consistent training'],
          ['financial', 'Ongoing Financial Readiness', 'Food, veterinary care, grooming, and emergency funds'],
          ['medical', 'Emergency Medical Preparedness', 'Ability to handle unexpected treatment or hospitalization'],
          ['time', 'Daily Time Commitment & Stimulation', 'Exercise, enrichment, companionship, and training'],
          ['decompression', 'Rescue Decompression & 3-3-3 Rule', 'Patience during transition and settling into a new home'],
        ]
      ],
      [
        'daily_care',
        'Who will be responsible for the daily care of the rescue?',
        'cards',
        [
          ['primary', 'Primary Applicant'],
          ['partner', 'Shared with Partner / Spouse'],
          ['family', 'Designated Family Member'],
          ['caretaker', 'Assisted by Household Caretaker'],
        ]
      ],
      ['care_plan', 'Primary caregiver name(s) and daytime supervision plan', 'textarea', null, 'Describe feeding, exercise, and supervision arrangements'],
      [
        'life_commitment',
        'If your circumstances change, are you committed to keeping the rescue?',
        'cards',
        [
          ['yes', 'Yes, 100% committed — the rescue is immediate family'],
          ['housing', 'Yes, I will filter for pet-friendly housing'],
          ['contact', 'I will contact Adoptly before any major decision'],
        ]
      ],
      [
        'kapon',
        'Are you willing to have the rescue spayed or neutered (kapon)?',
        'cards',
        [
          ['agree', 'Yes, fully agree and will strictly comply'],
          ['already', 'The rescue is already spayed/neutered'],
          ['consult', 'I request additional consultation'],
        ]
      ],
      [
        'breeding_pledge',
        'Zero Commercial Breeding Pledge',
        'cards',
        [
          ['pledge', 'I affirm this rescue will remain a companion and never be used for breeding'],
        ]
      ],
    ],
  ],
  [
    'title' => 'Virtual Interview Schedule',
    'code' => '#APP-SLOTS',
    'description' => 'Provide your preferred one-hour interview slot in Asia/Manila time.',
    'fields' => [
      ['timezone', 'Standard Timezone', 'select', [['manila', 'Asia/Manila (PHT)'], ['other', 'Another timezone']]],
      ['date', 'Option 1 — Primary Preferred Date', 'date'],
      ['time', 'Option 1 — 1-Hour Time Window', 'time'],
      ['date2', 'Option 2 — Alternative Date', 'date'],
      ['time2', 'Option 2 — 1-Hour Time Window', 'time'],
      ['date3', 'Option 3 — Alternative Date', 'date'],
      ['time3', 'Option 3 — 1-Hour Time Window', 'time'],
      [
        'platform',
        'Preferred Video Conferencing Platform',
        'cards',
        [
          ['meet', 'Google Meet', 'Calendar invite link sent by email'],
          ['zoom', 'Zoom Video', 'Meeting ID and passcode sent by SMS or email'],
          ['viber', 'WhatsApp / Viber', 'Direct video call to your mobile number'],
        ]
      ],
      ['interview_notes', 'Special Notes or Household Availability', 'textarea', null, 'Optional scheduling notes', true],
    ],
  ],
];

if (!isset($_SESSION['adoptly'])) {
  $_SESSION['adoptly'] = ['page' => 0, 'answers' => [], 'files' => []];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'] ?? 'next';
  $page = (int) ($_POST['page'] ?? $_SESSION['adoptly']['page']);

  if ($action === 'restart') {
    $_SESSION['adoptly'] = ['page' => 0, 'answers' => [], 'files' => []];
  } else {
    // Preserve edits on both Next and Back. Clear checkbox groups first so
    // unchecking every option is also saved correctly.
    if ($page >= 2 && $page <= 10) {
      foreach ($sections[$page - 2]['fields'] as $field) {
        if (($field[2] ?? '') === 'checks') {
          $_SESSION['adoptly']['answers'][$field[0]] = [];
        }
      }
    }
    foreach ($_POST as $key => $value) {
      if (!in_array($key, ['action', 'page', 'target'], true)) {
        $_SESSION['adoptly']['answers'][$key] = is_array($value)
          ? array_map('strip_tags', $value)
          : trim(strip_tags($value));
      }
    }
    foreach ($_FILES as $key => $file) {
      if (($file['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_OK) {
        $_SESSION['adoptly']['files'][$key] = basename($file['name']);
      }
    }

    if ($action === 'back') {
      $_SESSION['adoptly']['page'] = max(0, $page - 1);
    } elseif ($action === 'goto') {
      $_SESSION['adoptly']['page'] = max(0, min(12, (int) ($_POST['target'] ?? 0)));
    } else {
      $_SESSION['adoptly']['page'] = min(12, $page + 1);
    }
  }
  header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
  exit;
}

$page = (int) $_SESSION['adoptly']['page'];
$answers = $_SESSION['adoptly']['answers'];
$files = $_SESSION['adoptly']['files'];

function e($value): string
{
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
function answer(string $key, $default = '')
{
  global $answers;
  return $answers[$key] ?? $default;
}
function selected(string $key, string $value): bool
{
  $answer = answer($key);
  return is_array($answer) ? in_array($value, $answer, true) : $answer === $value;
}
function labelFor(string $key, array $sections): string
{
  $value = answer($key);
  foreach ($sections as $section)
    foreach ($section['fields'] as $field) {
      if ($field[0] !== $key || empty($field[3]))
        continue;
      foreach ($field[3] as $option)
        if (($option[0] ?? '') === $value)
          return $option[1] ?? $value;
    }
  return is_array($value) ? implode(', ', $value) : (string) $value;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adoptly — Adoption Application</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --coral: #df594d;
      --coral-dark: #c94b41;
      --soft: #ffe1dd;
      --ink: #1f1f1f;
      --line: #eee2d8;
      --muted: #77706b
    }

    * {
      box-sizing: border-box
    }

    body {
      margin: 0;
      min-width: 320px;
      min-height: 100vh;
      font-family: Poppins, sans-serif;
      font-weight: 400;
      color: var(--ink);
      background: #332b27 url('https://images.unsplash.com/photo-1718885433034-908d5bca08cf?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&q=88&w=2000') center/cover fixed no-repeat
    }

    body:before {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(rgba(25, 20, 18, .36), rgba(25, 20, 18, .64));
      z-index: 0
    }

    .page {
      position: relative;
      z-index: 1;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      align-items: center;
      padding: 30px 20px 20px
    }

    .top {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 22px
    }

    .brand {
      color: var(--coral);
      filter: drop-shadow(0 2px 14px rgba(0, 0, 0, .2))
    }

    .word {
      position: relative;
      display: flex;
      align-items: center;
      font-size: 34px;
      font-weight: 700;
      letter-spacing: -2.5px;
      line-height: 1
    }

    .word svg {
      width: 32px;
      height: 32px;
      margin: 0 1px;
      fill: #fff
    }

    .word b {
      position: absolute;
      top: -8px;
      right: -13px;
      font-size: 12px
    }

    .brand small {
      display: block;
      margin-top: 6px;
      color: #fff;
      font-size: 10px;
      font-weight: 700
    }

    .brand i {
      color: var(--coral);
      font-style: normal
    }

    .status {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-top: 17px;
      padding: 6px 11px;
      border-radius: 999px;
      background: rgba(255, 255, 255, .92);
      color: #3c9952;
      font-size: 9px;
      font-weight: 700
    }

    .status i {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #4caf50
    }

    .status span {
      padding-left: 7px;
      border-left: 1px solid #ddd;
      color: #777;
      font-weight: 400
    }

    .card {
      width: 100%;
      max-width: 700px;
      margin: auto;
      padding: 34px 38px;
      border: 1px solid rgba(255, 255, 255, .65);
      border-radius: 24px;
      background: rgba(255, 255, 255, .97);
      box-shadow: 0 24px 70px rgba(28, 19, 17, .28);
      backdrop-filter: blur(12px)
    }

    h1 {
      margin: 0;
      font-size: 25px;
      font-weight: 700;
      line-height: 1.25;
      letter-spacing: -.035em
    }

    .intro {
      text-align: center
    }

    .badge {
      display: inline-flex;
      padding: 5px 11px;
      border-radius: 999px;
      background: var(--soft);
      color: #d64f44;
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase
    }

    .intro h1 {
      margin-top: 13px
    }

    .intro-copy {
      margin: 25px 0;
      color: #65605c;
      font-size: 12px;
      line-height: 1.75;
      text-align: left
    }

    .intro-copy strong {
      display: block;
      padding-top: 4px;
      color: var(--coral);
      font-size: 14px
    }

    .heading {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 27px;
      padding-bottom: 17px;
      border-bottom: 1px solid var(--line)
    }

    .heading h1 {
      margin-top: 9px;
      font-weight: 700
    }

    .heading code {
      color: #aaa39c;
      font-size: 10px;
      font-weight: 700
    }

    .description {
      max-width: 480px;
      margin: 7px 0 0;
      color: var(--muted);
      font-size: 10px;
      font-weight: 700;
      line-height: 1.55
    }

    .fields {
      display: flex;
      flex-direction: column;
      gap: 20px
    }

    .field {
      display: block;
      margin: 0;
      padding: 0;
      border: 0
    }

    .field>span,
    .field legend {
      display: block;
      margin-bottom: 8px;
      font-size: 11px;
      font-weight: 700
    }

    .field em {
      color: var(--coral);
      font-style: normal
    }

    .field input:not([type=radio]):not([type=checkbox]),
    .field select,
    .field textarea {
      width: 100%;
      outline: none;
      border: 1px solid #ddd7d1;
      border-radius: 11px;
      background: #fff;
      color: #252321;
      font-size: 12px;
      transition: .2s
    }

    .field input:not([type=radio]):not([type=checkbox]):not([type=file]),
    .field select {
      height: 44px;
      padding: 0 13px
    }

    .field textarea {
      padding: 12px 13px;
      resize: vertical
    }

    .field input[type=file] {
      padding: 11px 13px;
      border-style: dashed;
      background: #fff8f7
    }

    .field input:focus,
    .field select:focus,
    .field textarea:focus {
      border-color: var(--coral);
      box-shadow: 0 0 0 3px rgba(223, 89, 77, .1)
    }

    .options {
      display: grid;
      gap: 9px
    }

    .option {
      position: relative;
      display: flex;
      align-items: flex-start;
      gap: 11px;
      padding: 13px 14px;
      border: 1.5px solid #e2ddd8;
      border-radius: 13px;
      background: #fff;
      cursor: pointer
    }

    .option.active,
    .option:has(input:checked) {
      border-color: var(--coral);
      background: #fff6f4
    }

    .option input {
      position: absolute;
      opacity: 0
    }

    .mark {
      position: relative;
      flex: 0 0 16px;
      width: 16px;
      height: 16px;
      margin-top: 1px;
      border: 1.5px solid #bcb5af;
      background: #fff
    }

    .radio {
      border-radius: 50%;
      box-shadow: inset 0 0 0 4px #fff
    }

    .option.active .radio,
    .option:has(input:checked) .radio {
      border-color: var(--coral);
      background: var(--coral)
    }

    .check {
      border-radius: 4px
    }

    .option.active .check,
    .option:has(input:checked) .check {
      border-color: var(--coral);
      background: var(--coral)
    }

    .option.active .check:after,
    .option:has(input:checked) .check:after {
      content: "";
      position: absolute;
      left: 4px;
      top: 1px;
      width: 5px;
      height: 9px;
      border: solid #fff;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg)
    }

    .option strong,
    .option small {
      display: block
    }

    .option strong {
      font-size: 11px
    }

    .option small {
      margin-top: 3px;
      color: #87817c;
      font-size: 9px
    }

    .actions {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-top: 28px;
      padding-top: 19px;
      border-top: 1px solid var(--line)
    }

    button {
      border: 0;
      font-family: Poppins, sans-serif;
      font-size: 10px;
      font-weight: 700;
      cursor: pointer
    }

    .primary {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      min-height: 42px;
      padding: 0 20px;
      border-radius: 10px;
      background: var(--coral);
      color: #fff;
      box-shadow: 0 7px 17px rgba(197, 65, 54, .18)
    }

    .secondary {
      min-height: 40px;
      padding: 0 18px;
      border: 1px solid #d8d3ce;
      border-radius: 10px;
      background: #fff;
      color: #57514c
    }

    .text-button {
      background: none;
      color: #88817b
    }

    .process {
      display: flex;
      flex-direction: column;
      gap: 17px;
      color: #5e5955;
      font-size: 12px
    }

    .process-row {
      display: flex;
      gap: 13px
    }

    .process-row>b {
      display: grid;
      place-items: center;
      flex: 0 0 25px;
      height: 25px;
      border-radius: 50%;
      background: var(--soft);
      color: #d64f44
    }

    .process-row p {
      margin: 2px 0;
      line-height: 1.6
    }

    .process-row strong {
      display: block
    }

    .process aside {
      padding: 15px 17px;
      border-radius: 13px;
      background: #f8eee2
    }

    .summary {
      display: grid;
      gap: 10px
    }

    .summary>div {
      position: relative;
      padding: 14px 55px 14px 15px;
      border: 1px solid #ebddd1;
      border-radius: 13px;
      background: #fcf6ef
    }

    .summary small,
    .summary strong,
    .summary span {
      display: block
    }

    .summary small {
      color: #d45348;
      font-size: 8px;
      font-weight: 700;
      text-transform: uppercase
    }

    .summary strong {
      font-size: 12px
    }

    .summary span {
      margin-top: 2px;
      color: #7c756f;
      font-size: 10px
    }

    .summary form {
      position: absolute;
      top: 12px;
      right: 12px
    }

    .summary form button {
      background: none;
      color: #d45348
    }

    .declaration {
      display: flex;
      gap: 10px;
      margin-top: 18px;
      padding: 14px;
      border-radius: 12px;
      background: #f5eee6;
      color: #5c5651;
      font-size: 10px;
      line-height: 1.55
    }

    .declaration input {
      width: 15px;
      height: 15px;
      accent-color: var(--coral)
    }

    .confirmation {
      padding: 18px 0;
      text-align: center
    }

    .confirmation .tick {
      display: grid;
      place-items: center;
      width: 62px;
      height: 62px;
      margin: 0 auto 20px;
      border-radius: 50%;
      background: var(--coral);
      color: #fff;
      font-size: 30px;
      box-shadow: 0 0 0 8px var(--soft)
    }

    .confirmation p {
      color: var(--muted);
      font-size: 11px
    }

    .site-footer {
      margin-top: 22px;
      color: rgba(255, 255, 255, .92);
      font-size: 10px;
      font-style: italic;
      text-align: center
    }

    .site-footer small {
      display: block;
      margin-top: 5px;
      color: rgba(255, 255, 255, .65);
      font-style: normal
    }

    @media(max-width:600px) {
      .page {
        padding: 22px 12px
      }

      .card {
        padding: 25px 20px;
        border-radius: 20px
      }

      .word {
        font-size: 30px
      }

      .heading {
        align-items: center
      }

      .intro .actions {
        flex-direction: column-reverse;
        align-items: stretch
      }

      .intro .primary {
        justify-content: center
      }
    }
  </style>
  <style>
    .intro {
      text-align: left
    }

    .intro h1 {
      margin-top: 0;
      padding-bottom: 22px;
      border-bottom: 1px solid var(--line)
    }

    .process-row strong {
      display: inline
    }

    .process-undecided {
      padding-top: 8px
    }

    .process-undecided h2 {
      margin: 0 0 7px;
      font-size: 15px
    }

    .process-undecided p {
      margin: 0 0 8px;
      line-height: 1.65
    }

    .process-undecided a,
    .faq a {
      color: #2e2a27;
      font-weight: 700;
      text-underline-offset: 3px
    }

    .process aside {
      padding: 17px 0;
      border-block: 1px solid var(--line);
      border-radius: 0;
      background: transparent
    }

    .faq {
      margin: 0;
      color: var(--muted);
      font-size: 10px
    }

    .fields {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 20px 15px
    }

    .field {
      grid-column: 1/-1
    }

    .field-phone,
    .field-dob,
    .field-clinic,
    .field-clinic_location,
    .field-move_plans,
    .field-move_commitment,
    .field-date,
    .field-time,
    .field-date2,
    .field-time2,
    .field-date3,
    .field-time3 {
      grid-column: span 1
    }

    .field-income_source .options,
    .field-residence_type .options,
    .field-current_animals .options,
    .field-pet_stay .options,
    .field-outdoor_space .options,
    .field-daily_care .options {
      grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .field-household_count .options,
    .field-household_members .options,
    .field-financial_payer .options {
      grid-template-columns: repeat(4, minmax(0, 1fr))
    }

    .field-contact_preference .options,
    .field-platform .options {
      grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .field-home_photos input[type=file],
    .field-valid_id input[type=file] {
      min-height: 90px;
      padding: 32px 18px;
      text-align: center
    }

    .rating-table {
      overflow: hidden;
      border: 1px solid #e6e0da;
      border-radius: 11px
    }

    .rating-head,
    .rating-row {
      display: grid;
      grid-template-columns: minmax(250px, 1fr) repeat(5, 38px);
      align-items: center
    }

    .rating-head {
      padding: 8px 12px;
      background: #f7f3ef;
      color: var(--muted);
      font-size: 8px;
      font-weight: 700;
      text-transform: uppercase
    }

    .rating-head span:not(:first-child) {
      text-align: center
    }

    .rating-row {
      min-height: 56px;
      padding: 8px 12px;
      border-top: 1px solid #eee8e2
    }

    .rating-row>span strong,
    .rating-row>span small {
      display: block
    }

    .rating-row>span strong {
      font-size: 10px
    }

    .rating-row>span small {
      margin-top: 2px;
      color: #918a83;
      font-size: 8px
    }

    .rating-row label {
      display: grid;
      place-items: center;
      cursor: pointer
    }

    .rating-row input {
      position: absolute;
      opacity: 0
    }

    .rating-row label span {
      display: grid;
      place-items: center;
      width: 17px;
      height: 17px;
      border: 1px solid #bbb4ad;
      border-radius: 50%;
      color: transparent;
      font-size: 0
    }

    .rating-row label:has(input:checked) span {
      border-color: var(--coral);
      background: var(--coral);
      box-shadow: inset 0 0 0 4px white
    }

    .milestones,
    .application-snapshot {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #e7e1db;
      border-radius: 12px;
      text-align: left
    }

    .milestones>small,
    .application-snapshot>small {
      display: block;
      margin-bottom: 12px;
      color: var(--muted);
      font-size: 8px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase
    }

    .milestones {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 9px
    }

    .milestones>small {
      grid-column: 1/-1
    }

    .milestones>div {
      display: flex;
      flex-direction: column;
      gap: 4px;
      font-size: 8px
    }

    .milestones>div>span {
      display: grid;
      place-items: center;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #ebe6e1;
      color: #8d867f
    }

    .milestones>div>.done {
      background: var(--coral);
      color: white
    }

    .milestones>div>.current {
      border: 1px solid var(--coral);
      background: white;
      color: var(--coral)
    }

    .milestones em {
      color: #9a938d;
      font-style: normal
    }

    .application-snapshot {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px
    }

    .application-snapshot>small {
      grid-column: 1/-1
    }

    .application-snapshot strong,
    .application-snapshot span {
      display: block;
      overflow: hidden;
      font-size: 9px;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .application-snapshot span {
      margin-top: 3px;
      color: #8b847e;
      font-size: 8px
    }

    .confirmation-notice {
      margin-top: 16px;
      padding: 13px 15px;
      border-left: 3px solid var(--coral);
      background: #fff6f4;
      color: #6d6660;
      font-size: 9px;
      line-height: 1.55;
      text-align: left
    }

    .confirmation-actions {
      display: flex;
      justify-content: space-between;
      gap: 12px;
      margin-top: 20px;
      padding-top: 18px;
      border-top: 1px solid var(--line)
    }

    @media(max-width:600px) {
      .fields {
        grid-template-columns: 1fr
      }

      .field-phone,
      .field-dob,
      .field-clinic,
      .field-clinic_location,
      .field-move_plans,
      .field-move_commitment,
      .field-date,
      .field-time,
      .field-date2,
      .field-time2,
      .field-date3,
      .field-time3 {
        grid-column: 1
      }

      .field-income_source .options,
      .field-residence_type .options,
      .field-current_animals .options,
      .field-pet_stay .options,
      .field-outdoor_space .options,
      .field-daily_care .options,
      .field-household_count .options,
      .field-household_members .options,
      .field-financial_payer .options,
      .field-contact_preference .options,
      .field-platform .options {
        grid-template-columns: 1fr
      }

      .rating-head,
      .rating-row {
        grid-template-columns: minmax(130px, 1fr) repeat(5, 28px);
        padding-inline: 8px
      }

      .milestones,
      .application-snapshot {
        grid-template-columns: 1fr 1fr
      }
    }
  </style>
</head>

<body>
  <div class="page">
    <header class="top">
      <a href="index.php" class="brand-link text-button" style="text-decoration:none">
        <div class="brand">
          <div class="word"><span>AD</span><svg viewBox="0 0 40 40">
              <ellipse cx="9" cy="13" rx="4.5" ry="6.5" />
              <ellipse cx="20" cy="8" rx="4.5" ry="6.5" />
              <ellipse cx="31" cy="13" rx="4.5" ry="6.5" />
              <path d="M20 17c-7 0-12 6-12 12 0 5 4 8 8.5 6.5a11 11 0 0 1 7 0C28 37 32 34 32 29c0-6-5-12-12-12Z" />
            </svg><span>PTLY</span><b>♥</b></div><small>A home. A heart. A forever. <i>♥</i></small>
        </div>
      </a>
      <div class="status"><i></i> ONLINE <span>Asia/Manila (PHT)</span></div>
    </header>

    <main class="card">
      <?php if ($page === 0): ?>
        <section class="intro">
          <h1>Bring Love Home: Adoption Application</h1>
          <div class="intro-copy">
            <p>Every rescue in our care has a story. Some were abandoned, some hurt, and many have never known what it
              feels like to be truly loved. By opening this form, you are already becoming part of their journey to
              healing.</p>
            <p>At Adoptly, we believe that you can’t buy love, but you can rescue it. Adoption is more than just giving a
              rescue a home. It’s giving them a second chance at life—the chance to sleep without fear, to eat without
              wondering where the next meal will come from, and to finally feel that they belong.</p>
            <p>Your answers here will help us make sure that each rescue finds not just any home, but the right one. One
              filled with patience, compassion, and the promise of forever.</p>
            <p>Thank you for choosing adoption and for believing that every animal deserves love.</p><strong>Ready to
              bring love home?</strong>
          </div>
          <form method="post" class="actions"><input type="hidden" name="page" value="0"><button type="button"
              class="text-button">Cancel & return to shelter catalog</button><button class="primary" name="action"
              value="next">Start Here →</button></form>
        </section>
      <?php elseif ($page === 1): ?>
        <section>
          <div class="heading">
            <h1>Adoption Process</h1>
          </div>
          <div class="process">
            <div class="process-row">
              <p><strong>Step 1: Fill out this form</strong> and wait to be contacted by our team. Please give us at least
                one week to complete the initial screening.</p>
            </div>
            <div class="process-row">
              <p><strong>Step 2: Virtual interview</strong> with one of our adoption specialists.</p>
            </div>
            <div class="process-row">
              <p><strong>Step 3: Once approved</strong>, visit our shelter, settle the adoption fee of Php 1,000 per
                rescue, and welcome love home through your chosen rescue.</p>
            </div>
            <aside><strong>Important reminders:</strong>
              <p>Our shelters are located in Bulacan and Bacolod. Adopters must be willing to travel to meet and pick up
                their chosen rescue.</p>
              <p>In some cases, adopters may also pick up their rescue during scheduled adoption events.</p>
              <p>The Php 1,000 adoption fee supports rehabilitation and shelter upkeep while ensuring adopters are ready
                to meet their new family member’s lifelong needs.</p>
            </aside>
            <p class="faq">For more details, please check our <a href="#faqs">FAQs</a>.</p>
          </div>
          <form method="post" class="actions"><input type="hidden" name="page" value="1"><button class="secondary"
              name="action" value="back" formnovalidate>Back</button><button class="primary" name="action"
              value="next">Begin Application →</button></form>
        </section>
      <?php elseif ($page >= 2 && $page <= 10): $section = $sections[$page - 2]; ?>
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="page" value="<?= $page ?>">
          <div class="heading">
            <div>
              <div class="badge">Step <?= $page - 1 ?> of <?= count($sections) ?></div>
              <h1><?= e($section['title']) ?></h1>
              <p class="description"><?= e($section['description']) ?></p>
            </div>
          </div>
          <div class="fields">
            <?php foreach ($section['fields'] as $field):
              [$key, $label, $type] = $field;
              $options = $field[3] ?? null;
              $placeholder = $field[4] ?? '';
              $optional = $field[5] ?? false; ?>
              <?php if ($type === 'rating'): ?>
                <fieldset class="field field-<?= e($key) ?> rating-field">
                  <legend><?= e($label) ?> <em>*</em></legend>
                  <div class="rating-table">
                    <div class="rating-head"><span>Capability &
                        commitment</span><?php for ($rating = 1; $rating <= 5; $rating++): ?><span><?= $rating ?></span><?php endfor; ?>
                    </div>
                    <?php foreach ($options as $option): ?>
                      <div class="rating-row">
                        <span><strong><?= e($option[1]) ?></strong><small><?= e($option[2] ?? '') ?></small></span>
                        <?php for ($rating = 1; $rating <= 5; $rating++):
                          $ratingKey = $key . '-' . $option[0]; ?><label><input
                              type="radio" name="<?= e($ratingKey) ?>" value="<?= $rating ?>"
                              <?= answer($ratingKey) === (string) $rating ? 'checked' : '' ?>
                              required><span><?= $rating ?></span></label><?php endfor; ?>
                      </div><?php endforeach; ?>
                  </div>
                </fieldset>
              <?php elseif ($type === 'cards' || $type === 'checks'): ?>
                <fieldset class="field field-<?= e($key) ?>">
                  <legend><?= e($label) ?>       <?php if (!$optional): ?><em>*</em><?php endif; ?></legend>
                  <div class="options">
                    <?php foreach ($options as $option):
                      $active = selected($key, $option[0]); ?>
                      <label class="option <?= $active ? 'active' : '' ?>"><input
                          type="<?= $type === 'cards' ? 'radio' : 'checkbox' ?>"
                          name="<?= e($key) ?><?= $type === 'checks' ? '[]' : '' ?>" value="<?= e($option[0]) ?>" <?= $active ? 'checked' : '' ?>         <?= !$optional && $type === 'cards' ? 'required' : '' ?>><span
                          class="mark <?= $type === 'cards' ? 'radio' : 'check' ?>"></span><span><strong><?= e($option[1]) ?></strong><?php if (!empty($option[2])): ?><small><?= e($option[2]) ?></small><?php endif; ?></span></label>
                    <?php endforeach; ?>
                  </div>
                </fieldset>
              <?php else: ?>
                <label class="field field-<?= e($key) ?>"><span><?= e($label) ?>
                    <?php if (!$optional): ?><em>*</em><?php endif; ?></span>
                  <?php if ($type === 'select'): ?><select name="<?= e($key) ?>" <?= !$optional ? 'required' : '' ?>>
                      <option value="" disabled <?= answer($key) === '' ? 'selected' : '' ?>>Select an option</option>
                      <?php foreach ($options as $option): ?>
                        <option value="<?= e($option[0]) ?>" <?= selected($key, $option[0]) ? 'selected' : '' ?>>
                          <?= e($option[1]) ?></option><?php endforeach; ?>
                    </select>
                  <?php elseif ($type === 'textarea'): ?><textarea name="<?= e($key) ?>" rows="3"
                      placeholder="<?= e($placeholder) ?>" <?= !$optional ? 'required' : '' ?>><?= e(answer($key)) ?></textarea>
                  <?php elseif ($type === 'file'): ?><input type="file" name="<?= e($key) ?>" accept="image/*,.pdf"
                      <?= $key === 'home_photos' ? 'multiple' : '' ?>         <?= empty($files[$key]) ? 'required' : '' ?>><?php if (!empty($files[$key])): ?><small>Uploaded: <?= e($files[$key]) ?></small><?php endif; ?>
                  <?php else: ?><input type="<?= e($type) ?>" name="<?= e($key) ?>" value="<?= e(answer($key)) ?>"
                      placeholder="<?= e($placeholder) ?>" <?= !$optional ? 'required' : '' ?>><?php endif; ?>
                </label>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="actions"><button class="secondary" name="action" value="back" formnovalidate>Back</button><button
              class="primary" name="action" value="next">Next →</button></div>
        </form>
      <?php elseif ($page === 11): ?>
        <section>
          <div class="heading">
            <div>
              <div class="badge">Final Review</div>
              <h1>Review Your Application Summary</h1>
              <p class="description">Please review all your provided details carefully before submitting. You can jump
                back to edit any section if changes are needed.</p>
            </div>
          </div>
          <div class="summary">
            <?php foreach ([
              ['Chosen Pet & Motivation', labelFor('target_pet', $sections), labelFor('shelter', $sections), 4],
              ['Personal Information', answer('full_name'), answer('email') . ' · ' . answer('phone'), 3],
              ['Household Information', labelFor('residence_type', $sections), labelFor('household_members', $sections), 5],
              ['Animal Care & Experience', labelFor('care_experience', $sections), answer('clinic'), 6],
              ['Home Environment & Photos', labelFor('move_plans', $sections), $files['home_photos'] ?? 'No filename', 7],
              ['Health & Kapon Readiness', labelFor('vaccination', $sections), labelFor('kapon', $sections), 8],
              ['Proposed Virtual Interview', answer('date') . ' ' . answer('time'), labelFor('platform', $sections), 10],
            ] as $item): ?>
              <div>
                <small><?= e($item[0]) ?></small><strong><?= e($item[1] ?: 'Not specified') ?></strong><span><?= e($item[2]) ?></span>
                <form method="post"><input type="hidden" name="page" value="11"><input type="hidden" name="target"
                    value="<?= $item[3] ?>"><button name="action" value="goto">Edit</button></form>
              </div><?php endforeach; ?>
          </div>
          <form method="post"><input type="hidden" name="page" value="11"><label class="declaration"><input
                type="checkbox" name="declaration" value="yes" required><span>I certify that all information provided is
                true, complete, and accurate. I agree to Adoptly’s screening process, welfare standards, mandatory kapon
                policy, and zero commercial breeding terms.</span></label>
            <div class="actions"><button class="secondary" name="action" value="back" formnovalidate>Back</button><button
                class="primary" name="action" value="next">Submit Application →</button></div>
          </form>
        </section>
      <?php else: ?>
        <section class="confirmation">
          <div class="tick">✓</div>
          <h1>Thank You! Your Application Has Been Received</h1>
          <p>We’re thrilled you’ve taken the first step toward giving a rescue pet their forever home. Our adoption review
            specialists are already screening your responses.</p>
          <code>Reference ID: <strong>#AD-92841</strong></code>
          <div class="milestones"><small>Application milestones & timeline</small>
            <div><span class="done">✓</span><strong>1. Submitted</strong><em>Today</em></div>
            <div><span class="current">•</span><strong>2. Screening & Review</strong><em>Est. 24–48 hours</em></div>
            <div><span>3</span><strong>3. Virtual Interview</strong><em>Date pending</em></div>
            <div><span>4</span><strong>4. Meet & Handover</strong><em>Final approval</em></div>
          </div>
          <div class="application-snapshot"><small>Application snapshot</small>
            <div>
              <strong><?= e(answer('target_pet', 'Chosen rescue')) ?></strong><span><?= e(labelFor('intent', $sections)) ?></span>
            </div>
            <div>
              <strong><?= e(answer('date', 'Interview pending')) ?></strong><span><?= e(labelFor('platform', $sections)) ?></span>
            </div>
            <div><strong><?= e(answer('full_name', 'Applicant')) ?></strong><span><?= e(answer('email')) ?></span></div>
          </div>
          <div class="confirmation-notice"><strong>Confirmation sent:</strong> A verification link, application copy, and
            initial screening checklist have been emailed to you.</div>
          <div class="confirmation-actions">
            <form method="post"><input type="hidden" name="page" value="12"><input type="hidden" name="target"
                value="11"><button class="secondary" name="action" value="goto">Review Answers</button></form>
            <form method="post"><input type="hidden" name="page" value="12"><button class="primary" name="action"
                value="restart">Start New Application</button></form>
          </div>
        </section>
      <?php endif; ?>
    </main>
    <footer class="site-footer">“A small act of love can change <strong>two</strong> lives.”<small>Adoptly • Connecting
        pets to loving homes and hearts.</small></footer>
  </div>
</body>

</html>