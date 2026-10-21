<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function adoption_flow_percent(string $step): int
{
    $data = match ($step) {
        'profile' => $_SESSION['adopter_profile_draft'] ?? ($_SESSION['adopter_profile'] ?? []),
        'adoption' => $_SESSION['adoption_information'] ?? [],
        'household' => $_SESSION['household_information'] ?? [],
        'security' => $_SESSION['security_settings'] ?? [],
        'requirements' => $_SESSION['adoption_documents'] ?? [],
        default => [],
    };
    if (!is_array($data)) {
        $data = [];
    }

    $required = match ($step) {
        'profile' => ['first_name', 'last_name', 'email', 'phone', 'address', 'city', 'state', 'zip'],
        'adoption' => [
            'adoption_category', 'shelter_location', 'pet_name', 'occupants_count',
            'occupants_details', 'experience_level', 'financial_responsibility', 'adoption_reason',
        ],
        'household' => [
            'residence_type', 'residence_ownership', 'residents', 'household_agreement', 'allergies',
        ],
        'security' => ['complete'],
        'requirements' => ['government_id', 'income_proof', 'home_photos'],
        default => [],
    };

    if ($required === []) {
        return 0;
    }

    if ($step === 'household') {
        $data['residents'] = (int)($data['adults'] ?? 0)
            + (int)($data['children'] ?? 0)
            + (int)($data['seniors'] ?? 0);
    }

    $completed = 0;
    foreach ($required as $key) {
        $value = $data[$key] ?? null;
        if ($step === 'requirements') {
            $isComplete = (is_string($value) && $value !== '')
                || (is_array($value) && $value !== []);
        } elseif ($step === 'household' && $key === 'residents') {
            $isComplete = (int)$value > 0;
        } elseif ($step === 'security' && $key === 'complete') {
            $isComplete = $value === true;
        } elseif ($step === 'profile' && $key === 'email') {
            $isComplete = filter_var(trim((string)$value), FILTER_VALIDATE_EMAIL) !== false;
        } elseif ($step === 'profile' && $key === 'phone') {
            $isComplete = preg_match_all('/\d/', (string)$value) >= 7;
        } else {
            $isComplete = trim((string)$value) !== '';
        }
        if ($isComplete) {
            $completed++;
        }
    }

    return (int)round($completed / count($required) * 100);
}

function adoption_flow_guard(string $step): void
{
    $previous = [
        'adoption' => ['profile', '../Resume_profile.php'],
        'household' => ['adoption', 'php/Adoption_information.php'],
        'security' => ['household', 'Household.php'],
        'requirements' => ['household', '../Household.php'],
    ][$step] ?? null;

    if ($previous !== null && !adoption_flow_is_complete($previous[0])) {
        header('Location: ' . $previous[1] . '?blocked=1');
        exit;
    }
}

function adoption_flow_is_complete(string $step): bool
{
    if ($step === 'profile') {
        return !empty($_SESSION['profile_complete']) && adoption_flow_percent('profile') === 100;
    }
    return adoption_flow_percent($step) === 100;
}
