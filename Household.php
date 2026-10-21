<?php
declare(strict_types=1);
require_once __DIR__ . '/adoption_flow.php';
adoption_flow_guard('household');
require_once __DIR__ . '/profile_data.php';

$householdOptions = [
	'residence_type' => ['single_family', 'townhouse', 'apartment', 'rural', 'mobile', 'other'],
	'residence_ownership' => ['own', 'rent', 'family', 'military', 'other'],
	'household_agreement' => ['yes', 'discussion', 'hesitant'],
	'allergies' => ['no', 'yes'],
];
$householdOld = is_array($_SESSION['household_information'] ?? null) ? $_SESSION['household_information'] : [];
$householdErrors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$posted = [];
	foreach ($householdOptions as $field => $choices) {
		$value = (string)($_POST[$field] ?? '');
		$posted[$field] = in_array($value, $choices, true) ? $value : '';
	}
	foreach (['adults', 'children', 'seniors', 'dogs', 'cats'] as $field) {
		$posted[$field] = max(0, min(50, (int)($_POST[$field] ?? 0)));
	}
	$features = ['fenced_yard', 'enclosed_patio', 'pet_friendly_building', 'garden_access'];
	$posted['property_features'] = array_values(array_intersect($features, (array)($_POST['property_features'] ?? [])));
	$householdOld = array_merge($householdOld, $posted);
	foreach (['residence_type', 'residence_ownership', 'household_agreement', 'allergies'] as $field) {
		if ($householdOld[$field] === '') {
			$householdErrors[] = 'Please complete all required household selections.';
			break;
		}
	}
	if (array_sum(array_intersect_key($householdOld, array_flip(['adults', 'children', 'seniors']))) < 1) {
		$householdErrors[] = 'At least one household resident is required.';
	}
	$_SESSION['household_information'] = $householdOld;
	if ($householdErrors === []) {
		header('Location: Security.php?unlocked=1');
		exit;
	}
}

$householdPercent = adoption_flow_percent('household');
$householdJson = htmlspecialchars(
	json_encode($householdOld, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP) ?: '{}',
	ENT_QUOTES,
	'UTF-8'
);
$fullName = trim($user['first'] . ' ' . $user['last']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Adoptly - Household Information</title>
	<!-- Google Fonts: Poppins -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
		rel="stylesheet">
	<!-- Tailwind CSS v3 with Forms Plugin -->
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						sans: ['Poppins', 'sans-serif'],
					},
					colors: {
						coral: {
							50: '#FFF5F4',
							100: '#FFE1DD',
							200: '#FFC5BF',
							500: '#E05A4F',
							600: '#CF4C41',
							700: '#B8382E',
						},
						surface: '#FCF9F8',
						charcoal: '#1F1F1F',
						warmBorder: '#EAE5E3',
						warmGray: '#8A8583',
					}
				}
			}
		}
	</script>
	<!-- Custom Styles for Theme Refinement -->
	<style data-purpose="typography">
		:root {
			--coral: #E05A4F;
		}

		body {
			font-family: 'Poppins', sans-serif;
			background-color: #FCF9F8;
			color: #2D2D2D;
			-webkit-font-smoothing: antialiased;
		}
	</style>
	<style data-purpose="form-components">
		/* Subtle custom focus ring */
		.input-focus-coral:focus {
			border-color: #E05A4F;
			box-shadow: 0 0 0 2px rgba(224, 90, 79, 0.15);
			outline: none;
		}
	</style>
	<!-- Styles for interactive counters -->
	<style>
		.counter-btn {
			width: 1.75rem;
			height: 1.75rem;
			border-radius: 0.5rem;
			border: 1px solid #EAE5E3;
			background: white;
			font-weight: 700;
			font-size: 0.875rem;
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			transition: all 0.15s;
			user-select: none;
		}

		.counter-btn:hover {
			background: #f5f5f5;
			border-color: #E05A4F;
			color: #E05A4F;
		}

		.counter-btn:active {
			transform: scale(0.92);
		}

		.age-box {
			cursor: default;
			transition: all 0.15s;
		}

		.age-box:hover {
			border-color: #E05A4F !important;
		}

		.pet-counter {
			display: inline-flex;
			align-items: center;
			gap: 0.4rem;
			padding: 0.35rem 0.6rem;
			border-radius: 0.5rem;
			background: white;
			border: 1px solid #EAE5E3;
			font-weight: 600;
			font-size: 0.75rem;
		}

		/* Heart button (same as Adoption Process) */
		.fav {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 36px;
			height: 36px;
			border: 0;
			border-radius: 50%;
			background: #FFE1DD;
			color: var(--coral);
			cursor: pointer;
			transition: all .2s ease;
		}

		.fav:hover {
			background: var(--coral);
			color: #fff;
		}
	</style>
</head>

<body class="min-h-screen flex flex-col bg-[#FCF9F8] text-[#2D2D2D]">
	<!-- BEGIN: MainHeader -->
	<header class="bg-white border-b border-warmBorder sticky top-0 z-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex items-center justify-between h-20">
				<!-- Left Brand & Main Nav -->
				<div class="flex items-center gap-10">
					<a class="flex items-center" href="Welcome_page.php">
						<img src="photos/logoNav.png" alt="Adoptly Logo" class="h-10 w-auto">
					</a>
					<nav class="hidden md:flex items-center space-x-7 text-[14px] font-medium text-gray-700">
						<?php foreach ($navLinks as $link): ?>
							<a class="hover:text-coral-500 transition-colors" href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
						<?php endforeach; ?>
					</nav>
				</div>
				<!-- Right User Actions -->
				<div class="flex items-center space-x-5">
					<!-- Wishlist Heart -->
					<a class="fav" href="Html/heart.html" aria-label="View Saved Pets">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20"
							height="20">
							<path
								d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
						</svg>
					</a>
					<!-- Notification Bell -->
					<button aria-label="Notifications"
						class="relative p-2 text-gray-600 hover:text-coral-500 transition-colors">
						<svg class="w-6 h-6 stroke-current" fill="none" stroke-width="1.8" viewBox="0 0 24 24">
							<path
								d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
								stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
						<span
							class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-coral-500 rounded-full ring-2 ring-white"></span>
					</button>
					<!-- User Pill -->
					<div class="flex items-center gap-3 pl-2 border-l border-warmBorder">
						<div
							class="w-10 h-10 rounded-full bg-coral-100 text-coral-600 font-semibold flex items-center justify-center text-sm shadow-sm"<?= $user['photo'] !== '' ? ' style="background-image:url(&quot;' . e($user['photo']) . '&quot;);background-size:cover;background-position:center"' : '' ?>>
							<?= $user['photo'] === '' ? e($user['initials'] !== '' ? $user['initials'] : '👤') : '' ?>
						</div>
						<div class="hidden lg:flex flex-col text-left text-xs">
							<span class="font-semibold text-gray-900 leading-tight"><?= e($fullName !== '' ? $fullName : 'New Applicant') ?></span>
							<span class="text-emerald-600 font-medium flex items-center gap-1 text-[11px] mt-0.5">
								<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
								<?= e($user['role']) ?>
							</span>
						</div>
						<svg class="w-4 h-4 text-gray-400 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
							</path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumbs -->
		<div class="bg-surface border-t border-warmBorder/70 py-2.5">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<ol class="flex items-center space-x-2 text-xs text-gray-500 font-medium">
					<li class=""><a class="hover:text-gray-800" href="Welcome_page.php">Home</a></li>
					<li class=""><span class="">/</span></li>
					<li class=""><a class="hover:text-gray-800" href="Welcome_page.php">Dashboard</a></li>
					<li class=""><span class="">/</span></li>
					<li class=""><a class="hover:text-gray-800" href="Resume_profile.php">Account Settings</a>
					</li>
					<li class=""><span class="">/</span></li>
					<li class="text-gray-900 font-semibold">Household Information</li>
				</ol>
			</div>
		</div>
	</header>
	<!-- END: MainHeader -->
	<!-- BEGIN: PageContent -->
	<main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
		<!-- BEGIN: PageBanner -->
		<section class="bg-white rounded-2xl border border-warmBorder p-6 md:p-8 mb-8 shadow-sm">
			<div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
				<div class="space-y-2 max-w-2xl">
					<div
						class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-coral-50 border border-coral-200 text-coral-600 text-xs font-semibold uppercase tracking-wider">
						<span class="w-2 h-2 rounded-full bg-coral-500"></span>
						Adopter Profile Center • Application Readiness
					</div>
					<h1 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight">Household Information</h1>
					<p class="text-sm text-gray-600 leading-relaxed">
						Provide details about your living environment and household dynamics to ensure a safe,
						compatible home match with shelter rescue pets.
					</p>
				</div>
				<!-- Adopter Readiness Card -->
				<div class="flex-shrink-0 bg-[#F2FAF6] border border-emerald-200/80 rounded-xl p-4 sm:min-w-[290px]">
					<div class="flex items-start gap-3">
						<div class="p-2 rounded-lg bg-emerald-100 text-emerald-700">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
								<path
									d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
									stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</div>
						<div class="flex-1">
							<div class="flex items-center justify-between gap-2">
								<span class="text-xs font-semibold text-gray-800">Adopter Readiness</span>
								<span class="text-xs font-bold text-emerald-700"><?= $householdPercent ?>% Complete</span>
							</div>
							<!-- Progress Bar -->
							<div class="w-full bg-emerald-200 h-2 rounded-full mt-2 overflow-hidden">
								<div class="bg-emerald-500 h-full rounded-full transition-all duration-500"
									style="width: <?= $householdPercent ?>%;"></div>
							</div>
							<p class="text-[11px] text-gray-500 mt-1.5">This step is <?= $householdPercent ?>% complete.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: PageBanner -->
		<!-- BEGIN: TwoColumnGrid -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
			<!-- BEGIN: LeftSidebar -->
			<aside class="lg:col-span-4 space-y-6">
				<!-- Navigation Menu Card -->
				<nav aria-label="Profile Progress" class="bg-white rounded-2xl border border-warmBorder p-5 shadow-sm">
					<p class="text-xs font-bold text-gray-400 tracking-wider uppercase mb-4 px-2">Navigation Menu</p>
					<ul class="space-y-1.5 text-sm font-medium">
						<!-- Item 1: Personal Info (Completed) -->
						<li class="">
							<a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
								href="Resume_profile.php">
								<div class="flex items-center gap-3">
									<svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
										stroke-width="1.8" viewBox="0 0 24 24">
										<path
											d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<span class="">Applicant's Personal Information</span>
								</div>
								<span
									class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold">✓</span>
							</a>
						</li>
						<!-- Item 2: Adoption Information (Completed) -->
						<li class="">
							<a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
								href="php/Adoption_information.php">
								<div class="flex items-center gap-3">
									<svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
										stroke-width="1.8" viewBox="0 0 24 24">
										<path
											d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<span class="">Adoption Information</span>
								</div>
								<span
									class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold">✓</span>
							</a>
						</li>
						<!-- Item 3: Household Information (ACTIVE) -->
						<li class="">
							<div
								class="flex items-center justify-between px-3 py-2.5 rounded-xl bg-coral-100 text-coral-700 font-semibold shadow-xs">
								<div class="flex items-center gap-3">
									<svg class="w-4 h-4 text-coral-600" fill="none" stroke="currentColor"
										stroke-width="2" viewBox="0 0 24 24">
										<path
											d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<span class="">Household Information</span>
								</div>
								<span class="w-2.5 h-2.5 rounded-full bg-coral-500"></span>
							</div>
						</li>
						<!-- Item 4: Security -->
						<li>
							<a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
								href="Security.php">
								<div class="flex items-center gap-3">
									<svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
										stroke-width="1.8" viewBox="0 0 24 24">
										<path
											d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<span>Security</span>
								</div>
								<span class="text-gray-400 text-sm font-semibold">›</span>
							</a>
						</li>
						<!-- Item 5: Other Document Requirements -->
						<li class="">
							<a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
								href="php/requirements.php">
								<div class="flex items-center gap-3">
									<svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
										stroke-width="1.8" viewBox="0 0 24 24">
										<path
											d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<span class="">Other Document Requirements</span>
								</div>
								<span class="text-gray-400 text-sm font-semibold">›</span>
							</a>
						</li>
					</ul>
					<!-- Divider -->
					<div class="border-t border-warmBorder my-4"></div>
					<!-- Secondary Actions -->
					<div class="space-y-1 text-sm font-medium">
						<a class="flex items-center gap-3 px-3 py-2 text-gray-600 hover:text-gray-900 rounded-lg hover:bg-gray-50 transition-colors"
							href="Welcome_page.php">
							<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path
									d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
							</svg>
							<span class="">Dashboard</span>
						</a>
						<a class="flex items-center gap-3 px-3 py-2 text-gray-600 hover:text-coral-600 rounded-lg hover:bg-coral-50 transition-colors"
							href="php/sign_out.php">
							<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path
									d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
							</svg>
							<span class="">Sign Out</span>
						</a>
					</div>
				</nav>
				<!-- Supportive Info Card -->
				<div class="bg-coral-50/70 border border-coral-200/60 rounded-2xl p-5">
					<div class="flex items-start gap-3.5">
						<div
							class="w-8 h-8 rounded-full bg-coral-500 text-white flex-shrink-0 flex items-center justify-center font-bold text-sm">
							!
						</div>
						<div class="space-y-1">
							<h2 class="text-sm font-bold text-gray-900">Why Shelters Ask This</h2>
							<p class="text-xs text-gray-600 leading-relaxed">
								Shelters assess your physical dwelling and household members to ensure the pet's safety,
								exercise needs, and routine compatibility before scheduling meet-and-greets.
							</p>
						</div>
					</div>
				</div>
			</aside>
			<!-- END: LeftSidebar -->
			<!-- BEGIN: MainContentFormPanel -->
			<section class="lg:col-span-8">
				<form class="bg-white rounded-2xl border border-warmBorder p-6 sm:p-8 shadow-sm space-y-9"
					method="post" action="Household.php" data-saved-household="<?= $householdJson ?>">
					<?php if ($householdErrors !== []): ?>
						<div role="alert" class="rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
							<?= e(implode(' ', $householdErrors)) ?>
						</div>
					<?php elseif (isset($_GET['saved'])): ?>
						<div role="status" class="rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-700">Household information saved.</div>
					<?php elseif (isset($_GET['unlocked'])): ?>
						<div role="status" class="rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-700">Adoption Information is complete. Household Information is now unlocked.</div>
					<?php elseif (isset($_GET['blocked'])): ?>
						<div role="alert" class="rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">Complete and save Household Information before continuing.</div>
					<?php endif; ?>
					<input type="hidden" name="adults" id="adults-value" value="<?= (int)($householdOld['adults'] ?? 0) ?>">
					<input type="hidden" name="children" id="children-value" value="<?= (int)($householdOld['children'] ?? 0) ?>">
					<input type="hidden" name="seniors" id="seniors-value" value="<?= (int)($householdOld['seniors'] ?? 0) ?>">
					<input type="hidden" name="dogs" id="dogs-value" value="<?= (int)($householdOld['dogs'] ?? 0) ?>">
					<input type="hidden" name="cats" id="cats-value" value="<?= (int)($householdOld['cats'] ?? 0) ?>">
					<!-- Form Header -->
					<div class="border-b border-warmBorder pb-5">
						<div class="flex flex-wrap items-center justify-between gap-2">
							<div class="flex items-center gap-2">
								<h2 class="text-lg sm:text-xl font-bold text-gray-900">Household Living Details</h2>
								<span
									class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
									Step 3 of 5
								</span>
							</div>
							<span class="text-xs text-gray-400 font-medium">* Mandatory fields</span>
						</div>
						<p class="text-xs sm:text-sm text-gray-500 mt-1">
							Accurately describing your residence helps shelter adoption coordinators confirm fencing,
							space suitability, and peaceful cohabitation.
						</p>
					</div>
					<!-- SITEMAP ITEM 1: Type of Residence (checklist) -->
					<!-- BEGIN: ResidenceTypeSection -->
					<fieldset class="space-y-4">
						<div class="flex items-baseline justify-between">
							<legend class="text-xs font-bold text-gray-500 tracking-wider uppercase">
								1. Type of Residence <span class="text-coral-500">*</span>
							</legend>
							<span class="text-[11px] text-gray-400">Select physical dwelling</span>
						</div>
						<p class="text-xs text-gray-500 -mt-2">Select the housing type where the pet will primarily
							reside.</p>
						<!-- Multi-choice residence style cards -->
						<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
							<!-- Card 1: Selected House -->
							<label
								class="relative flex flex-col justify-between p-4 rounded-xl border border-warmBorder bg-white cursor-pointer transition-all hover:border-coral-300 hover:bg-gray-50">
								<input class="sr-only" name="residence_type" type="radio" value="single_family">
								<div class="flex items-start justify-between">
									<div
										class="w-8 h-8 rounded-lg bg-surface border border-warmBorder flex items-center justify-center text-gray-700">
										<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
											viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M3 9.75l9-7.5 9 7.5M4.5 9.75V20.25a.75.75 0 00.75.75h4.5v-6h4.5v6h4.5a.75.75 0 00.75-.75V9.75">
											</path>
										</svg></div>
									<div class="w-4 h-4 rounded-full border border-gray-300"></div>
								</div>
								<div class="mt-3">
									<span class="block text-xs font-bold text-gray-900">Single Family House</span>
									<span class="block text-[11px] text-gray-500 mt-0.5">Standalone home with
										yard</span>
								</div>
							</label>
							<!-- Card 2: Townhouse -->
							<label
								class="relative flex flex-col justify-between p-4 rounded-xl border border-warmBorder bg-white cursor-pointer transition-all hover:border-coral-300 hover:bg-gray-50">
								<input class="sr-only" name="residence_type" type="radio" value="townhouse">
								<div class="flex items-start justify-between">
									<div
										class="w-8 h-8 rounded-lg bg-surface border border-warmBorder flex items-center justify-center text-gray-700">
										<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
											viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M2.25 12l5.25-4.5 5.25 4.5v8.25h-4.5v-4.5h-1.5v4.5H2.25V12zM12.75 7.5L18 3l5.25 4.5v12.75h-4.5v-4.5h-1.5v4.5h-4.5V7.5z">
											</path>
										</svg></div>
									<div class="w-4 h-4 rounded-full border border-gray-300"></div>
								</div>
								<div class="mt-3">
									<span class="block text-xs font-bold text-gray-900">Townhouse / Semi</span>
									<span class="block text-[11px] text-gray-500 mt-0.5">Attached multi-story
										unit</span>
								</div>
							</label>
							<!-- Card 3: Apartment -->
							<label
								class="relative flex flex-col justify-between p-4 rounded-xl border border-warmBorder bg-white cursor-pointer transition-all hover:border-coral-300 hover:bg-gray-50">
								<input class="sr-only" name="residence_type" type="radio" value="apartment">
								<div class="flex items-start justify-between">
									<div
										class="w-8 h-8 rounded-lg bg-surface border border-warmBorder flex items-center justify-center text-gray-700">
										<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
											viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M3.75 21h16.5M6 21V4.5A1.5 1.5 0 017.5 3h9a1.5 1.5 0 011.5 1.5V21M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3.75-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 18h6v3H9v-3z">
											</path>
										</svg></div>
									<div class="w-4 h-4 rounded-full border border-gray-300"></div>
								</div>
								<div class="mt-3">
									<span class="block text-xs font-bold text-gray-900">Apartment / Condo</span>
									<span class="block text-[11px] text-gray-500 mt-0.5">Shared residential
										complex</span>
								</div>
							</label>
							<!-- Card 4: Farm / Rural -->
							<label
								class="relative flex flex-col justify-between p-4 rounded-xl border border-warmBorder bg-white cursor-pointer transition-all hover:border-coral-300 hover:bg-gray-50">
								<input class="sr-only" name="residence_type" type="radio" value="rural">
								<div class="flex items-start justify-between">
									<div
										class="w-8 h-8 rounded-lg bg-surface border border-warmBorder flex items-center justify-center text-gray-700">
										<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
											viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M12 21V9m0 0c0-3 3-6 6-6-1 3-2 6-6 6zm0 0C12 6 9 3 6 3c1 3 2 6 6 6zm0 5c-2 0-4.5-1.5-5.5-4 1.5.5 3.5 0 5.5 4zm0 0c2 0 4.5-1.5 5.5-4-1.5.5-3.5 0-5.5 4z">
											</path>
										</svg></div>
									<div class="w-4 h-4 rounded-full border border-gray-300"></div>
								</div>
								<div class="mt-3">
									<span class="block text-xs font-bold text-gray-900">Rural / Farm / Acreage</span>
									<span class="block text-[11px] text-gray-500 mt-0.5">Open acreage or land</span>
								</div>
							</label>
							<!-- Card 5: Mobile Home -->
							<label
								class="relative flex flex-col justify-between p-4 rounded-xl border border-warmBorder bg-white cursor-pointer transition-all hover:border-coral-300 hover:bg-gray-50">
								<input class="sr-only" name="residence_type" type="radio" value="mobile">
								<div class="flex items-start justify-between">
									<div
										class="w-8 h-8 rounded-lg bg-surface border border-warmBorder flex items-center justify-center text-gray-700">
										<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
											viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M8 17a2 2 0 100-4 2 2 0 000 4zm8 0a2 2 0 100-4 2 2 0 000 4zM3 8a1 1 0 011-1h11a1 1 0 011 1v7H3V8zm13 2h3.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V15h-7v-5z">
											</path>
										</svg></div>
									<div class="w-4 h-4 rounded-full border border-gray-300"></div>
								</div>
								<div class="mt-3">
									<span class="block text-xs font-bold text-gray-900">Manufactured Home</span>
									<span class="block text-[11px] text-gray-500 mt-0.5">Mobile or community park</span>
								</div>
							</label>
							<!-- Card 6: Other Living Structure -->
							<label
								class="relative flex flex-col justify-between p-4 rounded-xl border border-warmBorder bg-white cursor-pointer transition-all hover:border-coral-300 hover:bg-gray-50">
								<input class="sr-only" name="residence_type" type="radio" value="other">
								<div class="flex items-start justify-between">
									<div
										class="w-8 h-8 rounded-lg bg-surface border border-warmBorder flex items-center justify-center text-gray-700">
										<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
											viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M2.25 12l8.954-8.955a1.126 1.126 0 011.592 0L21.75 12M4.5 9.75v10.5a.75.75 0 00.75.75h13.5a.75.75 0 00.75-.75V9.75M9 14.25h6">
											</path>
										</svg></div>
									<div class="w-4 h-4 rounded-full border border-gray-300"></div>
								</div>
								<div class="mt-3">
									<span class="block text-xs font-bold text-gray-900">Other Dwelling</span>
									<span class="block text-[11px] text-gray-500 mt-0.5">Duplex or loft suite</span>
								</div>
							</label>
						</div>
						<!-- Residence Feature Checklists -->
						<div class="mt-4 p-4 rounded-xl bg-surface border border-warmBorder">
							<label class="block text-xs font-bold text-gray-700 mb-2.5">
								Property Features &amp; Safety Checklist (Select all that apply):
							</label>
							<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
								<label
									class="flex items-center gap-2.5 p-2 rounded-lg bg-white border border-warmBorder/80 cursor-pointer hover:border-coral-300">
									<input class="w-4 h-4 rounded border-gray-300 text-coral-500 focus:ring-coral-500"
										type="checkbox" name="property_features[]" value="fenced_yard">
									<span class="text-gray-800 font-medium">Fully Fenced Yard</span>
									<span class="ml-auto text-[10px] text-gray-400">6ft privacy fence</span>
								</label>
								<label
									class="flex items-center gap-2.5 p-2 rounded-lg bg-white border border-warmBorder/80 cursor-pointer hover:border-coral-300">
									<input class="w-4 h-4 rounded border-gray-300 text-coral-500 focus:ring-coral-500"
										type="checkbox" name="property_features[]" value="enclosed_patio">
									<span class="text-gray-800 font-medium">Enclosed Balcony / Patio</span>
								</label>
								<label
									class="flex items-center gap-2.5 p-2 rounded-lg bg-white border border-warmBorder/80 cursor-pointer hover:border-coral-300">
									<input class="w-4 h-4 rounded border-gray-300 text-coral-500 focus:ring-coral-500"
										type="checkbox" name="property_features[]" value="pet_friendly_building">
									<span class="text-gray-800 font-medium">Pet-Friendly Building / Complex</span>
								</label>
								<label
									class="flex items-center gap-2.5 p-2 rounded-lg bg-white border border-warmBorder/80 cursor-pointer hover:border-coral-300">
									<input class="w-4 h-4 rounded border-gray-300 text-coral-500 focus:ring-coral-500"
										type="checkbox" name="property_features[]" value="garden_access">
									<span class="text-gray-800 font-medium">Dog Door / Direct Garden Access</span>
								</label>
							</div>
						</div>
					</fieldset>
					<!-- END: ResidenceTypeSection -->
					<!-- SITEMAP ITEM 2: Residence Ownership (Drop down Menu) -->
					<!-- BEGIN: ResidenceOwnershipSection -->
					<div class="space-y-2 pt-2 border-t border-warmBorder/60">
						<div class="flex items-baseline justify-between">
							<label class="text-xs font-bold text-gray-500 tracking-wider uppercase"
								for="residence-ownership">
								2. Residence Ownership <span class="text-coral-500">*</span>
							</label>
							<span class="text-[11px] text-gray-400">Policy verification</span>
						</div>
						<p class="text-xs text-gray-500">Helps shelters verify landlord permissions or HOA guidelines in
							advance.</p>
						<div class="relative mt-1">
							<select
								class="w-full rounded-xl border border-warmBorder bg-white text-gray-800 text-sm py-3 px-4 pr-10 input-focus-coral transition-colors appearance-none font-medium"
								id="residence-ownership" name="residence_ownership">
								<option value="">Select residence ownership...</option>
								<option value="own">Own (Single Family Home / Free &amp; Clear / Mortgaged)</option>
								<option value="rent">Rent (Landlord approval letter required)</option>
								<option value="family">Live with Parents / Family Members</option>
								<option value="military">Military / Base Housing / Corporate Lease</option>
								<option value="other">Other Living Arrangement</option>
							</select>
							<div
								class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
								<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"
										stroke-width="2"></path>
								</svg>
							</div>
						</div>
						<!-- Ownership Helper Note -->
						<div class="flex items-center gap-2 text-[11px] text-gray-500 mt-1.5 pl-1">
							<svg class="w-3.5 h-3.5 text-emerald-600 flex-shrink-0" fill="currentColor"
								viewBox="0 0 20 20">
								<path clip-rule="evenodd"
									d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
									fill-rule="evenodd"></path>
							</svg>
							<span class="">Homeowners do not require landlord waivers. Proof of homeownership can be
								verified automatically.</span>
						</div>
					</div>
					<!-- END: ResidenceOwnershipSection -->
					<!-- SITEMAP ITEM 3: Number of household members -->
					<div class="space-y-3 pt-2 border-t border-warmBorder/60">
						<div class="flex items-baseline justify-between">
							<label class="text-xs font-bold text-gray-500 tracking-wider uppercase">
								3. Number of Household Members (including yourself) <span
									class="text-coral-500">*</span>
							</label>
							<span class="text-[11px] text-gray-400">Include all permanent residents</span>
						</div>
						<p class="text-xs text-gray-500">Helps rescue teams match animals with suitable energy, noise
							tolerance, and routine fit.</p>
						<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
							<div
								class="p-3.5 rounded-xl border border-warmBorder bg-surface flex flex-col justify-between">
								<span class="text-xs font-semibold text-gray-600">Total Residents:</span>
								<div class="flex items-center justify-between mt-2">
									<button type="button" class="counter-btn" id="total-minus">−</button>
									<span id="total-count" class="text-base font-bold text-gray-900">0 occupants</span>
									<button type="button" class="counter-btn" id="total-plus">+</button>
								</div>
							</div>
							<div
								class="md:col-span-2 p-3.5 rounded-xl border border-warmBorder bg-white flex flex-col justify-between">
								<span class="text-xs font-semibold text-gray-600">Age Breakdown in Dwelling:</span>
								<div class="grid grid-cols-3 gap-2 mt-2">
									<div
										class="age-box text-center p-2 rounded-lg bg-surface border border-warmBorder/60">
										<span class="block text-[10px] text-gray-500 font-medium">Adults (18+)</span>
										<div class="flex items-center justify-center gap-1.5 mt-1">
											<button type="button" class="counter-btn" data-target="adults"
												data-action="minus">−</button>
											<span id="adults-count"
												class="text-sm font-bold text-gray-800 w-5 text-center">0</span>
											<button type="button" class="counter-btn" data-target="adults"
												data-action="plus">+</button>
										</div>
									</div>
									<div
										class="age-box text-center p-2 rounded-lg bg-surface border border-warmBorder/60">
										<span class="block text-[10px] text-gray-600 font-medium">Children
											(&lt;18)</span>
										<div class="flex items-center justify-center gap-1.5 mt-1">
											<button type="button" class="counter-btn" data-target="children"
												data-action="minus">−</button>
											<span id="children-count"
												class="text-sm font-bold text-gray-800 w-5 text-center">0</span>
											<button type="button" class="counter-btn" data-target="children"
												data-action="plus">+</button>
										</div>
									</div>
									<div
										class="age-box text-center p-2 rounded-lg bg-surface border border-warmBorder/60">
										<span class="block text-[10px] text-gray-500 font-medium">Seniors (65+)</span>
										<div class="flex items-center justify-center gap-1.5 mt-1">
											<button type="button" class="counter-btn" data-target="seniors"
												data-action="minus">−</button>
											<span id="seniors-count"
												class="text-sm font-bold text-gray-800 w-5 text-center">0</span>
											<button type="button" class="counter-btn" data-target="seniors"
												data-action="plus">+</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-2">
							<label class="block text-xs font-semibold text-gray-700 mb-1" for="children-ages">
								Ages &amp; interactions of children (if applicable):
							</label>
							<input
								class="w-full rounded-xl border border-warmBorder bg-white text-xs sm:text-sm py-2.5 px-3.5 text-gray-800 input-focus-coral transition-colors font-normal"
								id="children-ages" placeholder="e.g., 7 years old - has lived with a family dog"
								type="text" value="">
							<span class="text-[11px] text-gray-400 mt-1 block">Rescue coordinators verify safe
								temperaments around young children.</span>
						</div>
					</div>
					<!-- SITEMAP ITEM 4 -->
					<fieldset class="space-y-3 pt-2 border-t border-warmBorder/60">
						<div class="flex items-baseline justify-between">
							<legend class="text-xs font-bold text-gray-500 tracking-wider uppercase">
								4. Are all members of your household on board with the adoption? <span
									class="text-coral-500">*</span>
							</legend>
							<span class="text-[11px] text-gray-400">Household agreement</span>
						</div>
						<p class="text-xs text-gray-500">Adoptions are most successful when everyone sharing the home is
							aligned on responsibilities, daily care, and training.</p>
						<div class="space-y-2.5 pt-1">
							<label
								class="flex items-start gap-3 p-3.5 rounded-xl border border-warmBorder bg-white cursor-pointer transition-colors hover:bg-gray-50">
								<input class="mt-0.5 w-4 h-4 text-coral-500 border-gray-300 focus:ring-coral-500"
									name="household_agreement" type="radio" value="yes">
								<div class="flex-1">
									<div class="flex items-center gap-2">
										<span class="text-xs font-bold text-gray-900">Yes, everyone is fully excited and
											committed</span>
										<span
											class="inline-flex items-center px-2 py-0.2 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">Recommended</span>
									</div>
									<p class="text-xs text-gray-600 mt-0.5">All roommates and family members have agreed
										upon routines, daily walking schedules, and feeding duties.</p>
								</div>
							</label>
							<label
								class="flex items-start gap-3 p-3.5 rounded-xl border border-warmBorder bg-white cursor-pointer transition-colors hover:bg-gray-50">
								<input class="mt-0.5 w-4 h-4 text-coral-500 border-gray-300 focus:ring-coral-500"
									name="household_agreement" type="radio" value="discussion">
								<div class="flex-1">
									<span class="text-xs font-bold text-gray-900">Under discussion, but generally
										supportive</span>
									<p class="text-xs text-gray-500 mt-0.5">We are discussing task allocation and want
										to meet the dog/cat before final commitment.</p>
								</div>
							</label>
							<label
								class="flex items-start gap-3 p-3.5 rounded-xl border border-warmBorder bg-white cursor-pointer transition-colors hover:bg-gray-50">
								<input class="mt-0.5 w-4 h-4 text-coral-500 border-gray-300 focus:ring-coral-500"
									name="household_agreement" type="radio" value="hesitant">
								<div class="flex-1">
									<span class="text-xs font-bold text-gray-900">No, some members are hesitant or
										undecided</span>
									<p class="text-xs text-gray-500 mt-0.5">May require an introductory counseling
										session with a shelter adoption counselor.</p>
								</div>
							</label>
						</div>
						<!-- Extra Co-living Context: Allergies & Existing Pets -->
						<div class="mt-4 pt-3 grid grid-cols-1 sm:grid-cols-2 gap-4">
							<!-- Allergies Question -->
							<div class="p-3.5 rounded-xl bg-surface border border-warmBorder">
								<span class="block text-xs font-bold text-gray-800">Any pet allergies in
									household?</span>
								<div class="flex items-center gap-4 mt-2">
									<label
										class="inline-flex items-center gap-1.5 text-xs text-gray-700 cursor-pointer">
										<input class="text-coral-500 focus:ring-coral-500" name="allergies"
											type="radio" value="no">
										<span>No known allergies</span>
									</label>
									<label
										class="inline-flex items-center gap-1.5 text-xs text-gray-700 cursor-pointer">
										<input class="text-coral-500 focus:ring-coral-500" name="allergies" type="radio"
											value="yes">
										<span>Yes (controlled)</span>
									</label>
								</div>
							</div>
							<!-- Existing Pets - NOW INTERACTIVE -->
							<div class="p-3.5 rounded-xl bg-surface border border-warmBorder">
								<span class="block text-xs font-bold text-gray-800">Current pets living in home?</span>
								<div class="flex flex-wrap items-center gap-2 mt-2 text-xs">
									<!-- Dogs counter -->
									<div class="pet-counter">
										<button type="button" class="counter-btn" data-pet="dogs" data-action="minus"
											style="width:1.4rem;height:1.4rem;font-size:0.75rem;">−</button>
										<span id="dogs-count">0 Dogs</span>
										<button type="button" class="counter-btn" data-pet="dogs" data-action="plus"
											style="width:1.4rem;height:1.4rem;font-size:0.75rem;">+</button>
									</div>
									<!-- Cats counter -->
									<div class="pet-counter">
										<button type="button" class="counter-btn" data-pet="cats" data-action="minus"
											style="width:1.4rem;height:1.4rem;font-size:0.75rem;">−</button>
										<span id="cats-count">0 Cats</span>
										<button type="button" class="counter-btn" data-pet="cats" data-action="plus"
											style="width:1.4rem;height:1.4rem;font-size:0.75rem;">+</button>
									</div>
									<button id="addPetButton"
										class="text-coral-600 hover:text-coral-700 text-xs font-medium underline ml-auto"
										type="button">+ Add pet</button>
								</div>
								<!-- Container for additional pets -->
								<div id="additionalPetsContainer" class="mt-3 space-y-2"></div>
								<div class="mt-2 text-[11px] text-gray-500">
									Total pets: <span id="totalPetsDisplay" class="font-semibold text-gray-700">0
										Pets</span>
								</div>
							</div>
						</div>
					</fieldset>
					<!-- Bottom Action Toolbar -->
					<div
						class="pt-6 border-t border-warmBorder flex flex-col sm:flex-row items-center justify-between gap-4">
						<div class="flex items-center gap-2 text-xs text-gray-500">
							<svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor"
								viewBox="0 0 24 24">
								<path
									d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
							</svg>
							<span>All household data is encrypted and strictly used for shelter adoption
								verification.</span>
						</div>
						<div class="flex items-center gap-4 w-full sm:w-auto justify-end">
							<button
								class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-gray-800 px-3 py-2 transition-colors"
								type="button">Cancel</button>
							<button
								class="inline-flex items-center justify-center gap-2 bg-coral-500 hover:bg-coral-600 text-white font-medium text-xs sm:text-sm px-6 py-3 rounded-xl shadow-sm transition-transform active:scale-95"
								type="submit">
								Save &amp; Continue to Security <span class="text-base font-normal">→</span>
							</button>
						</div>
					</div>
				</form>
			</section>
		</div>
	</main>
	
	<!-- Scripts -->
	<script data-purpose="form-interactions">
		const householdForm = document.querySelector('form[data-saved-household]');
		const householdSaved = JSON.parse(householdForm.dataset.savedHousehold || '{}');
		const householdChoices = ['residence_type', 'residence_ownership', 'household_agreement', 'allergies'];
		householdChoices.forEach(name => {
			const value = householdSaved[name];
			if (value) {
				const field = householdForm.querySelector(`[name="${name}"][value="${value}"]`);
				if (field) field.checked = true;
				const select = householdForm.querySelector(`select[name="${name}"]`);
				if (select) select.value = value;
			}
		});
		(householdSaved.property_features || []).forEach(value => {
			const field = householdForm.querySelector(`[name="property_features[]"][value="${value}"]`);
			if (field) field.checked = true;
		});

		document.querySelectorAll('input[name="residence_type"]').forEach(radio => {
			radio.addEventListener('change', function () {
				document.querySelectorAll('input[name="residence_type"]').forEach(r => {
					const card = r.closest('label');
					if (r.checked) {
						card.classList.add('border-2', 'border-coral-500', 'bg-coral-50/30');
						card.classList.remove('border-warmBorder', 'bg-white');
						const check = card.querySelector('div.w-4.h-4');
						if (check) {
							check.className = 'w-4 h-4 rounded-full bg-coral-500 text-white flex items-center justify-center text-[10px]';
							check.textContent = '✓';
						}
					} else {
						card.classList.remove('border-2', 'border-coral-500', 'bg-coral-50/30');
						card.classList.add('border-warmBorder', 'bg-white');
						const check = card.querySelector('div.w-4.h-4');
						if (check) {
							check.className = 'w-4 h-4 rounded-full border border-gray-300';
							check.textContent = '';
						}
					}
				});
			});
			if (radio.checked) radio.dispatchEvent(new Event('change'));
		});
	</script>
	<script>
		(function () {
			// ===== Household Members =====
			const form = document.querySelector('form[data-saved-household]');
			const saved = JSON.parse(form.dataset.savedHousehold || '{}');
			let adults = Number(saved.adults || 0);
			let children = Number(saved.children || 0);
			let seniors = Number(saved.seniors || 0);
			const totalEl = document.getElementById('total-count');
			const adultsEl = document.getElementById('adults-count');
			const childrenEl = document.getElementById('children-count');
			const seniorsEl = document.getElementById('seniors-count');

			function updateHouseholdUI() {
				const total = adults + children + seniors;
				totalEl.textContent = total + (total === 1 ? ' occupant' : ' occupants');
				adultsEl.textContent = adults;
				childrenEl.textContent = children;
				seniorsEl.textContent = seniors;
				document.getElementById('adults-value').value = adults;
				document.getElementById('children-value').value = children;
				document.getElementById('seniors-value').value = seniors;
			}

			document.querySelectorAll('.counter-btn[data-target]').forEach(btn => {
				btn.addEventListener('click', () => {
					const target = btn.dataset.target;
					const action = btn.dataset.action;
					if (target === 'adults') {
						if (action === 'plus') adults++;
						else if (adults > 0) adults--;
					} else if (target === 'children') {
						if (action === 'plus') children++;
						else if (children > 0) children--;
					} else if (target === 'seniors') {
						if (action === 'plus') seniors++;
						else if (seniors > 0) seniors--;
					}
					updateHouseholdUI();
				});
			});

			document.getElementById('total-plus').addEventListener('click', () => {
				adults++;
				updateHouseholdUI();
			});

			document.getElementById('total-minus').addEventListener('click', () => {
				if (adults + children + seniors > 0) {
					if (adults > 0) adults--;
					else if (children > 0) children--;
					else if (seniors > 0) seniors--;
					updateHouseholdUI();
				}
			});

			updateHouseholdUI();
		})();
	</script>
	<script>
		(function () {
			const saved = JSON.parse(document.querySelector('form[data-saved-household]').dataset.savedHousehold || '{}');
			let dogs = Number(saved.dogs || 0);
			let cats = Number(saved.cats || 0);
			const dogsEl = document.getElementById('dogs-count');
			const catsEl = document.getElementById('cats-count');
			const addPetButton = document.getElementById('addPetButton');
			const additionalPetsContainer = document.getElementById('additionalPetsContainer');
			const totalPetsDisplay = document.getElementById('totalPetsDisplay');

			let additionalPets = [];

			function updatePetsUI() {
				dogsEl.textContent = dogs + (dogs === 1 ? ' Dog' : ' Dogs');
				catsEl.textContent = cats + (cats === 1 ? ' Cat' : ' Cats');

				let additionalTotal = 0;
				additionalPets.forEach(function (pet) {
					additionalTotal += pet.count;
				});

				const total = dogs + cats + additionalTotal;
				totalPetsDisplay.textContent = total + (total === 1 ? ' Pet' : ' Pets');
				document.getElementById('dogs-value').value = dogs;
				document.getElementById('cats-value').value = cats;
			}

			document.querySelectorAll('.counter-btn[data-pet]').forEach(function (btn) {
				btn.addEventListener('click', function () {
					const pet = btn.dataset.pet;
					const action = btn.dataset.action;
					if (pet === 'dogs') {
						if (action === 'plus') dogs++;
						if (action === 'minus' && dogs > 0) dogs--;
					}
					if (pet === 'cats') {
						if (action === 'plus') cats++;
						if (action === 'minus' && cats > 0) cats--;
					}
					updatePetsUI();
				});
			});

			addPetButton.addEventListener('click', function () {
				const petId = Date.now();
				const newPet = {
					id: petId,
					type: 'Birds',
					count: 1
				};
				additionalPets.push(newPet);
				createAdditionalPet(newPet);
				updatePetsUI();
			});

			function createAdditionalPet(pet) {
				const petRow = document.createElement('div');
				petRow.className = 'flex flex-wrap items-center gap-3 p-3 bg-white border border-warmBorder rounded-xl';
				petRow.dataset.id = pet.id;

				petRow.innerHTML = `
	  <select class="pet-type-select border border-warmBorder rounded-lg text-xs px-3 py-2 focus:border-coral-500 focus:ring-coral-500">
		<option value="Birds">Birds</option>
		<option value="Rabbits">Rabbits</option>
		<option value="Other">Other</option>
	  </select>
	  <div class="pet-counter">
		<button type="button" class="counter-btn additional-minus" style="width:1.4rem;height:1.4rem;font-size:0.75rem;">−</button>
		<span class="additional-pet-count">1 Bird</span>
		<button type="button" class="counter-btn additional-plus" style="width:1.4rem;height:1.4rem;font-size:0.75rem;">+</button>
	  </div>
	  <button type="button" class="remove-pet text-red-500 hover:text-red-700 text-xs font-semibold ml-auto">Remove</button>
	`;

				additionalPetsContainer.appendChild(petRow);

				const select = petRow.querySelector('.pet-type-select');
				const countText = petRow.querySelector('.additional-pet-count');
				const plusButton = petRow.querySelector('.additional-plus');
				const minusButton = petRow.querySelector('.additional-minus');
				const removeButton = petRow.querySelector('.remove-pet');

				function updateAdditionalPetText() {
					let name = select.value;
					if (pet.count === 1) {
						if (name === 'Birds') name = 'Bird';
						if (name === 'Rabbits') name = 'Rabbit';
						if (name === 'Other') name = 'Other Pet';
					}
					countText.textContent = pet.count + ' ' + name;
					updatePetsUI();
				}

				plusButton.addEventListener('click', function () {
					pet.count++;
					updateAdditionalPetText();
				});

				minusButton.addEventListener('click', function () {
					if (pet.count > 1) {
						pet.count--;
						updateAdditionalPetText();
					}
				});

				select.addEventListener('change', function () {
					pet.type = select.value;
					updateAdditionalPetText();
				});

				removeButton.addEventListener('click', function () {
					additionalPets = additionalPets.filter(function (item) {
						return item.id !== pet.id;
					});
					petRow.remove();
					updatePetsUI();
				});

				updateAdditionalPetText();
			}

			updatePetsUI();
		})();
	</script>
</body>

</html>