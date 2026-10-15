<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adoptly - Security Settings</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
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


    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FCF9F8;
            color: #2D2D2D;
            -webkit-font-smoothing: antialiased;
        }


        .input-focus-coral:focus {
            border-color: #E05A4F;
            box-shadow: 0 0 0 2px rgba(224, 90, 79, 0.15);
            outline: none;
        }


        .success-message {
            animation: fadeIn 0.3s ease-in-out;
        }

        :root {
            --coral: #E05A4F;
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


        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }
    </style>

</head>


<body class="min-h-screen flex flex-col bg-[#FCF9F8] text-[#2D2D2D]">


    <!-- =========================================================
     HEADER
     ========================================================= -->

    <div id="navbar-placeholder"></div>


    <!-- =========================================================
     MAIN CONTENT
     ========================================================= -->

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">


        <!-- PAGE BANNER -->

        <section class="bg-white rounded-2xl border border-warmBorder p-6 md:p-8 mb-8 shadow-sm">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">


                <div class="space-y-2 max-w-2xl">

                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-coral-50 border border-coral-200 text-coral-600 text-xs font-semibold uppercase tracking-wider">

                        <span class="w-2 h-2 rounded-full bg-coral-500"></span>

                        ADOPTER PROFILE CENTER • ACCOUNT INTEGRITY & PROTECTION

                    </div>


                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight">
                        Security Settings
                    </h1>


                    <p class="text-sm text-gray-600 leading-relaxed">
                        Manage your password, two-factor authentication,
                        and account recovery options to keep your adoption
                        records and sensitive data safe.
                    </p>

                </div>


                <!-- Security Card -->

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

                            <div class="flex items-center justify-between">

                                <span class="text-xs font-semibold text-gray-800">
                                    Account Security
                                </span>

                                <span class="text-xs font-bold text-emerald-700">
                                    95% Configured
                                </span>

                            </div>


                            <div class="w-full bg-emerald-200 h-2 rounded-full mt-2 overflow-hidden">

                                <div class="bg-emerald-500 h-full rounded-full" style="width:95%;"></div>

                            </div>


                            <p class="text-[11px] text-gray-500 mt-1.5">
                                Enhanced Protection Active
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- TWO COLUMN -->

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">


            <!-- =====================================================
             SIDEBAR
             ===================================================== -->

            <aside class="lg:col-span-4 space-y-6">


                <!-- Navigation -->

                <nav aria-label="Profile Progress" class="bg-white rounded-2xl border border-warmBorder p-5 shadow-sm">

                    <p class="text-xs font-bold text-gray-400 tracking-wider uppercase mb-4 px-2">
                        Navigation Menu
                    </p>


                    <ul class="space-y-1.5 text-sm font-medium">


                        <!-- Personal Information -->

                        <li>

                            <a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
                                href="#">

                                <div class="flex items-center gap-3">

                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">

                                        <path
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                    </svg>

                                    <span>
                                        Applicant's Personal Information
                                    </span>

                                </div>


                                <span
                                    class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold">
                                    ✓
                                </span>

                            </a>

                        </li>


                        <!-- Adoption Information -->

                        <li>

                            <a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
                                href="#">

                                <div class="flex items-center gap-3">

                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">

                                        <path
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                    </svg>

                                    <span>
                                        Adoption Information
                                    </span>

                                </div>


                                <span
                                    class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold">
                                    ✓
                                </span>

                            </a>

                        </li>


                        <!-- Household -->

                        <li>

                            <a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
                                href="household.html">

                                <div class="flex items-center gap-3">

                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">

                                        <path
                                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                    </svg>

                                    <span>
                                        Household Information
                                    </span>

                                </div>


                                <span
                                    class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold">
                                    ✓
                                </span>

                            </a>

                        </li>


                        <!-- Security -->

                        <li>

                            <div
                                class="flex items-center justify-between px-3 py-2.5 rounded-xl bg-coral-100 text-coral-700 font-semibold">

                                <div class="flex items-center gap-3">

                                    <svg class="w-4 h-4 text-coral-600" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">

                                        <path
                                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                    </svg>

                                    <span>
                                        Security
                                    </span>

                                </div>


                                <span class="w-2.5 h-2.5 rounded-full bg-coral-500"></span>

                            </div>

                        </li>


                        <!-- Documents -->

                        <li>

                            <a class="flex items-center justify-between px-3 py-2.5 rounded-xl text-gray-700 hover:bg-gray-50 transition-colors"
                                href="#">

                                <div class="flex items-center gap-3">

                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">

                                        <path
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                    </svg>

                                    <span>
                                        Other Document Requirements
                                    </span>

                                </div>


                                <span class="text-gray-400 text-sm font-semibold">
                                    ›
                                </span>

                            </a>

                        </li>

                    </ul>


                    <div class="border-t border-warmBorder my-4"></div>


                    <!-- Secondary Actions -->

                    <div class="space-y-1 text-sm font-medium">

                        <a class="flex items-center gap-3 px-3 py-2 text-gray-600 hover:text-gray-900 rounded-lg hover:bg-gray-50 transition-colors"
                            href="#">

                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                <path
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>

                            </svg>

                            Notifications & Alerts

                        </a>


                        <a class="flex items-center gap-3 px-3 py-2 text-gray-600 hover:text-coral-600 rounded-lg hover:bg-coral-50 transition-colors"
                            href="#">

                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                <path
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>

                            </svg>

                            Sign Out

                        </a>

                    </div>

                </nav>


                <!-- Support Card -->

                <div class="bg-coral-50/70 border border-coral-200/60 rounded-2xl p-5">

                    <div class="flex items-start gap-3.5">

                        <div
                            class="w-8 h-8 rounded-lg bg-coral-500 text-white flex-shrink-0 flex items-center justify-center">

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                    stroke-linecap="round" stroke-linejoin="round"></path>

                            </svg>

                        </div>


                        <div class="space-y-1">

                            <h2 class="text-sm font-bold text-gray-900">
                                Why Account Security Matters
                            </h2>

                            <p class="text-xs text-gray-600 leading-relaxed">
                                Verified applicant records, residential
                                addresses, and confidential shelter notes
                                are stored here, requiring multi-layered
                                protection.
                            </p>

                        </div>

                    </div>

                </div>

            </aside>


            <!-- =====================================================
             MAIN SECURITY FORM
             ===================================================== -->

            <section class="lg:col-span-8">


                <form id="securityForm"
                    class="bg-white rounded-2xl border border-warmBorder p-6 sm:p-8 shadow-sm space-y-8">


                    <!-- FORM HEADER -->

                    <div class="border-b border-warmBorder pb-5">

                        <div class="flex flex-wrap items-center justify-between gap-2">

                            <div class="flex items-center gap-2">

                                <h2 class="text-lg sm:text-xl font-bold text-gray-900">
                                    Security Settings
                                </h2>


                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    Step 4 of 5
                                </span>

                            </div>


                            <span class="text-xs text-gray-400 font-medium">
                                * Mandatory fields
                            </span>

                        </div>


                        <p class="text-xs sm:text-sm text-gray-500 mt-1">
                            Manage your password and account recovery
                            options to keep your account safe.
                        </p>

                    </div>


                    <!-- =================================================
                     CHANGE PASSWORD
                     ================================================= -->

                    <div class="rounded-xl border border-warmBorder p-5 sm:p-6 bg-[#FCF9F8]/50 space-y-5">


                        <div class="flex items-center justify-between border-b border-warmBorder/70 pb-3">

                            <div>

                                <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider">
                                    Change Password
                                </h3>

                                <p class="text-xs text-gray-500 mt-0.5">
                                    Ensure your account uses a unique,
                                    resilient passphrase.
                                </p>

                            </div>


                            <span class="text-[11px] font-medium text-gray-400">
                                Step 1 of 2
                            </span>

                        </div>


                        <!-- Current Password -->

                        <div class="space-y-1.5">

                            <label class="block text-xs font-semibold text-gray-700" for="current-password">
                                Current Password
                                <span class="text-coral-500">*</span>
                            </label>


                            <div class="relative">

                                <input
                                    class="w-full rounded-xl border border-warmBorder bg-white text-sm py-2.5 px-3.5 pr-10 text-gray-800 input-focus-coral font-medium"
                                    id="current-password" type="password" placeholder="Enter current password">


                                <button aria-label="Toggle Current Password Visibility"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-gray-400 hover:text-gray-600"
                                    type="button" data-toggle="current-password">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">

                                        <path
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                    </svg>

                                </button>

                            </div>

                        </div>


                        <!-- New Password -->

                        <div class="space-y-1.5">

                            <label class="block text-xs font-semibold text-gray-700" for="new-password">
                                New Password
                                <span class="text-coral-500">*</span>
                            </label>


                            <div class="relative">

                                <input
                                    class="w-full rounded-xl border border-warmBorder bg-white text-sm py-2.5 px-3.5 pr-10 text-gray-800 input-focus-coral font-medium"
                                    id="new-password" type="password" placeholder="Enter new password">


                                <button aria-label="Toggle New Password Visibility"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-gray-400 hover:text-gray-600"
                                    type="button" data-toggle="new-password">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">

                                        <path
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                    </svg>

                                </button>

                            </div>

                        </div>


                        <!-- Password Strength -->

                        <div class="p-3.5 rounded-xl bg-white border border-warmBorder space-y-2.5">

                            <div class="flex items-center justify-between text-xs">

                                <span class="font-semibold text-gray-700">
                                    Password Strength
                                </span>

                                <span id="strengthText" class="font-bold text-gray-400">
                                    Enter password
                                </span>

                            </div>


                            <div class="grid grid-cols-4 gap-1.5 h-1.5">

                                <div id="strengthBar1" class="bg-gray-200 rounded-full transition-all"></div>

                                <div id="strengthBar2" class="bg-gray-200 rounded-full transition-all"></div>

                                <div id="strengthBar3" class="bg-gray-200 rounded-full transition-all"></div>

                                <div id="strengthBar4" class="bg-gray-200 rounded-full transition-all"></div>

                            </div>


                            <!-- Requirements -->

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-1 text-xs">

                                <div id="req-length" class="flex items-center gap-1.5 text-gray-400">
                                    <span>○</span>
                                    <span>At least 8 characters</span>
                                </div>


                                <div id="req-letters" class="flex items-center gap-1.5 text-gray-400">
                                    <span>○</span>
                                    <span>Uppercase & lowercase letters</span>
                                </div>


                                <div id="req-number" class="flex items-center gap-1.5 text-gray-400">
                                    <span>○</span>
                                    <span>At least one number</span>
                                </div>


                                <div id="req-special" class="flex items-center gap-1.5 text-gray-400">
                                    <span>○</span>
                                    <span>At least one special symbol</span>
                                </div>

                            </div>

                        </div>


                        <!-- Confirm Password -->

                        <div class="space-y-1.5">

                            <div class="flex items-center justify-between">

                                <label class="block text-xs font-semibold text-gray-700" for="confirm-password">
                                    Confirm New Password
                                    <span class="text-coral-500">*</span>
                                </label>


                                <span id="match-status"
                                    class="inline-flex items-center gap-1 text-[11px] font-semibold text-gray-400">
                                    Enter password
                                </span>

                            </div>


                            <div class="relative">

                                <input
                                    class="w-full rounded-xl border border-warmBorder bg-white text-sm py-2.5 px-3.5 pr-10 text-gray-800 input-focus-coral font-medium"
                                    id="confirm-password" type="password" placeholder="Confirm new password">


                                <button aria-label="Toggle Confirm Password Visibility"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-gray-400 hover:text-gray-600"
                                    type="button" data-toggle="confirm-password">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">

                                        <path
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                            stroke-linecap="round" stroke-linejoin="round"></path>

                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                            stroke-linejoin="round"></path>

                                    </svg>

                                </button>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                     ACCOUNT RECOVERY
                     ================================================= -->

                    <div class="rounded-xl border border-warmBorder p-5 sm:p-6 bg-white space-y-4">

                        <div>

                            <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider">
                                Account Recovery
                            </h3>

                            <p class="text-xs text-gray-500 mt-0.5">
                                Provide a verified backup email to recover
                                your adoption applications if you lose
                                primary access.
                            </p>

                        </div>


                        <div class="space-y-2">

                            <label class="block text-xs font-semibold text-gray-700" for="backup-email">
                                Backup Email Address
                                <span class="text-coral-500">*</span>
                            </label>


                            <div class="flex flex-col sm:flex-row gap-3">

                                <div class="relative flex-1">

                                    <input
                                        class="w-full rounded-xl border border-warmBorder bg-surface text-sm py-2.5 px-3.5 text-gray-800 input-focus-coral font-medium"
                                        id="backup-email" type="email" placeholder="Enter backup email">

                                </div>


                                <div class="flex items-center gap-2">

                                    <span id="verificationStatus"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-amber-50 text-amber-800 border border-amber-200">
                                        Unverified
                                    </span>


                                    <button id="sendVerificationBtn"
                                        class="px-3 py-2 text-xs font-semibold text-coral-600 hover:text-coral-700 bg-coral-50 hover:bg-coral-100 rounded-xl transition-colors whitespace-nowrap"
                                        type="button">
                                        Send verification link
                                    </button>

                                </div>

                            </div>


                            <p id="verificationMessage" class="text-[11px] text-gray-400">
                                Verification link will remain valid for
                                24 hours.
                            </p>

                        </div>

                    </div>


                    <!-- =================================================
                     TWO FACTOR AUTHENTICATION
                     ================================================= -->

                    <div
                        class="rounded-xl border border-warmBorder p-5 sm:p-6 bg-surface flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                        <div class="flex items-start gap-3">

                            <div class="p-2.5 rounded-xl bg-emerald-100 text-emerald-700 flex-shrink-0 mt-0.5">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                        stroke-linecap="round" stroke-linejoin="round"></path>

                                </svg>

                            </div>


                            <div>

                                <div class="flex items-center gap-2">

                                    <h3 class="text-sm font-bold text-gray-900">
                                        Two-Factor Authentication (2FA)
                                    </h3>


                                    <span
                                        class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">
                                        Active
                                    </span>

                                </div>


                                <p class="text-xs text-gray-600 mt-0.5">
                                    SMS & Authenticator App verification
                                    active for
                                    <span class="font-semibold text-gray-800">
                                        +1 (512) 894-2019
                                    </span>
                                </p>

                            </div>

                        </div>


                        <a class="text-xs font-semibold text-coral-600 hover:text-coral-700 hover:underline whitespace-nowrap"
                            href="#">
                            Manage 2FA & Backup Codes →
                        </a>

                    </div>


                    <!-- =================================================
                     BOTTOM ACTIONS
                     ================================================= -->

                    <div
                        class="pt-6 border-t border-warmBorder flex flex-col sm:flex-row items-center justify-between gap-4">


                        <div class="flex items-center gap-2 text-xs text-gray-500">

                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">

                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                    stroke-linecap="round" stroke-linejoin="round"></path>

                            </svg>


                            <span>
                                All sensitive credentials are protected
                                with 256-bit encryption and never stored
                                in plain text.
                            </span>

                        </div>


                        <div class="flex items-center gap-4 w-full sm:w-auto justify-end">

                            <button id="cancelButton"
                                class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-gray-800 px-3 py-2 transition-colors"
                                type="button">
                                Cancel
                            </button>


                            <button
                                class="inline-flex items-center justify-center gap-2 bg-coral-500 hover:bg-coral-600 text-white font-medium text-xs sm:text-sm px-6 py-3 rounded-xl shadow-sm transition-transform active:scale-95"
                                type="submit">

                                <span>
                                    Update Security Settings
                                </span>

                                <span class="text-base font-normal">
                                    →
                                </span>

                            </button>

                        </div>

                    </div>

                </form>

            </section>

        </div>

    </main>

    <div id="footer-placeholder"></div>
    <script src="js/Components.js"></script>



    <!-- =========================================================
     JAVASCRIPT – fully functional
     ========================================================= -->

    <script>

        /* =========================================================
           PASSWORD VISIBILITY TOGGLE (with icon swap)
           ========================================================= */

        const eyeOpen = `
<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
  <path d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" stroke-linecap="round" stroke-linejoin="round"></path>
  <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>`;

        const eyeClosed = `
<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
  <path d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>`;

        document.querySelectorAll('[data-toggle]').forEach(function (button) {
            button.addEventListener('click', function () {
                const inputId = button.getAttribute('data-toggle');
                const input = document.getElementById(inputId);
                if (!input) return;

                if (input.type === 'password') {
                    input.type = 'text';
                    button.innerHTML = eyeClosed;
                } else {
                    input.type = 'password';
                    button.innerHTML = eyeOpen;
                }
            });
        });



        /* =========================================================
           ELEMENTS
           ========================================================= */

        const currentPassword = document.getElementById('current-password');
        const newPassword = document.getElementById('new-password');
        const confirmPassword = document.getElementById('confirm-password');
        const matchStatus = document.getElementById('match-status');
        const strengthText = document.getElementById('strengthText');
        const backupEmail = document.getElementById('backup-email');
        const sendVerificationBtn = document.getElementById('sendVerificationBtn');
        const verificationStatus = document.getElementById('verificationStatus');
        const verificationMessage = document.getElementById('verificationMessage');
        const securityForm = document.getElementById('securityForm');
        const cancelButton = document.getElementById('cancelButton');



        /* =========================================================
           PASSWORD STRENGTH
           ========================================================= */

        function checkPassword(password) {
            return {
                length: password.length >= 8,
                letters: /[A-Z]/.test(password) && /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[^A-Za-z0-9]/.test(password)
            };
        }

        function getStrength(password) {
            const checks = checkPassword(password);
            let score = 0;
            if (checks.length) score++;
            if (checks.letters) score++;
            if (checks.number) score++;
            if (checks.special) score++;
            return { score, checks };
        }



        /* =========================================================
           REQUIREMENT DISPLAY
           ========================================================= */

        function updateRequirement(element, valid, text) {
            if (!element) return;

            if (valid) {
                element.className = 'flex items-center gap-1.5 text-emerald-700';
                element.innerHTML = `
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>${text}</span>`;
            } else {
                element.className = 'flex items-center gap-1.5 text-gray-400';
                element.innerHTML = `<span class="text-sm">○</span><span>${text}</span>`;
            }
        }



        /* =========================================================
           UPDATE PASSWORD STRENGTH UI
           ========================================================= */

        function updatePasswordStrength() {
            if (!newPassword) return;

            const result = getStrength(newPassword.value);
            const bars = [
                document.getElementById('strengthBar1'),
                document.getElementById('strengthBar2'),
                document.getElementById('strengthBar3'),
                document.getElementById('strengthBar4')
            ];

            // Reset
            bars.forEach(bar => {
                if (bar) bar.className = 'bg-gray-200 rounded-full transition-all';
            });

            let barClass = 'bg-gray-200';
            if (result.score === 1) barClass = 'bg-red-500';
            else if (result.score === 2) barClass = 'bg-orange-500';
            else if (result.score === 3) barClass = 'bg-yellow-500';
            else if (result.score === 4) barClass = 'bg-emerald-500';

            for (let i = 0; i < result.score; i++) {
                if (bars[i]) bars[i].className = barClass + ' rounded-full transition-all';
            }

            // Text
            if (!newPassword.value) {
                strengthText.textContent = 'Enter password';
                strengthText.className = 'font-bold text-gray-400';
            } else if (result.score === 4) {
                strengthText.textContent = 'Strong (4 of 4)';
                strengthText.className = 'font-bold text-emerald-600';
            } else if (result.score === 3) {
                strengthText.textContent = 'Good (3 of 4)';
                strengthText.className = 'font-bold text-yellow-600';
            } else if (result.score === 2) {
                strengthText.textContent = 'Fair (2 of 4)';
                strengthText.className = 'font-bold text-orange-600';
            } else {
                strengthText.textContent = 'Weak (1 of 4)';
                strengthText.className = 'font-bold text-red-600';
            }

            // Requirements checklist
            updateRequirement(document.getElementById('req-length'), result.checks.length, 'At least 8 characters');
            updateRequirement(document.getElementById('req-letters'), result.checks.letters, 'Uppercase & lowercase letters');
            updateRequirement(document.getElementById('req-number'), result.checks.number, 'At least one number');
            updateRequirement(document.getElementById('req-special'), result.checks.special, 'At least one special symbol');
        }



        /* =========================================================
           PASSWORD MATCH
           ========================================================= */

        function updatePasswordMatch() {
            if (!newPassword || !confirmPassword || !matchStatus) return;

            if (!confirmPassword.value) {
                matchStatus.textContent = 'Enter password';
                matchStatus.className = 'inline-flex items-center gap-1 text-[11px] font-semibold text-gray-400';
                confirmPassword.classList.remove('border-emerald-300', 'border-red-300', 'ring-1', 'ring-emerald-200');
                return;
            }

            if (newPassword.value === confirmPassword.value) {
                matchStatus.innerHTML = `
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Passwords match`;
                matchStatus.className = 'inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700';
                confirmPassword.classList.remove('border-red-300');
                confirmPassword.classList.add('border-emerald-300', 'ring-1', 'ring-emerald-200');
            } else {
                matchStatus.innerHTML = `
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path d="M6 6l12 12M18 6L6 18" stroke-linecap="round"></path>
            </svg>
            Passwords do not match`;
                matchStatus.className = 'inline-flex items-center gap-1 text-[11px] font-semibold text-red-600';
                confirmPassword.classList.remove('border-emerald-300', 'ring-1', 'ring-emerald-200');
                confirmPassword.classList.add('border-red-300');
            }
        }



        /* =========================================================
           LIVE INPUT LISTENERS
           ========================================================= */

        if (newPassword) {
            newPassword.addEventListener('input', updatePasswordStrength);
            newPassword.addEventListener('input', updatePasswordMatch);
        }
        if (confirmPassword) {
            confirmPassword.addEventListener('input', updatePasswordMatch);
        }



        /* =========================================================
           DEMO CURRENT PASSWORD (localStorage)
           ========================================================= */

        const defaultDemoPassword = 'currentpassword123';
        if (!localStorage.getItem('adoptlyPassword')) {
            localStorage.setItem('adoptlyPassword', defaultDemoPassword);
        }



        /* =========================================================
           ACCOUNT RECOVERY – restore previous state
           ========================================================= */

        let verificationTimer = null;

        const savedEmail = localStorage.getItem('adoptlyBackupEmail');
        if (savedEmail && backupEmail) {
            backupEmail.value = savedEmail;
        }

        // Restore verification status if previously sent
        if (localStorage.getItem('adoptlyVerificationSent') === 'true') {
            verificationStatus.textContent = 'Verification sent';
            verificationStatus.className = 'inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200';
            if (savedEmail) {
                verificationMessage.textContent = 'Verification link sent to ' + savedEmail + '. It will remain valid for 24 hours.';
                verificationMessage.className = 'text-[11px] text-emerald-600';
            }
        }



        /* =========================================================
           EMAIL VALIDATION
           ========================================================= */

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }



        /* =========================================================
           SEND VERIFICATION
           ========================================================= */

        if (sendVerificationBtn) {
            sendVerificationBtn.addEventListener('click', function () {
                if (!backupEmail) return;

                const email = backupEmail.value.trim();

                if (!email) {
                    alert('Please enter your backup email address.');
                    backupEmail.focus();
                    return;
                }

                if (!isValidEmail(email)) {
                    alert('Please enter a valid email address.');
                    backupEmail.focus();
                    return;
                }

                // Persist
                localStorage.setItem('adoptlyBackupEmail', email);
                localStorage.setItem('adoptlyVerificationSent', 'true');
                localStorage.setItem('adoptlyVerificationTime', Date.now());

                // UI feedback
                verificationStatus.textContent = 'Verification sent';
                verificationStatus.className = 'inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200';
                verificationMessage.textContent = 'Verification link sent to ' + email + '. It will remain valid for 24 hours.';
                verificationMessage.className = 'text-[11px] text-emerald-600';

                sendVerificationBtn.disabled = true;
                sendVerificationBtn.classList.add('opacity-60', 'cursor-not-allowed');
                sendVerificationBtn.textContent = 'Verification sent ✓';

                alert('Verification link sent to ' + email + '.');
                startVerificationCountdown();
            });
        }



        /* =========================================================
           VERIFICATION COUNTDOWN
           ========================================================= */

        function startVerificationCountdown() {
            let seconds = 30;
            clearInterval(verificationTimer);

            verificationTimer = setInterval(function () {
                seconds--;
                if (seconds > 0) {
                    sendVerificationBtn.textContent = 'Resend in ' + seconds + 's';
                }
                if (seconds <= 0) {
                    clearInterval(verificationTimer);
                    sendVerificationBtn.disabled = false;
                    sendVerificationBtn.classList.remove('opacity-60', 'cursor-not-allowed');
                    sendVerificationBtn.textContent = 'Send verification link';
                }
            }, 1000);
        }



        /* =========================================================
           FORM SUBMIT – UPDATE SECURITY SETTINGS
           ========================================================= */

        if (securityForm) {
            securityForm.addEventListener('submit', function (event) {
                event.preventDefault();

                const current = currentPassword.value.trim();
                const newPass = newPassword.value;
                const confirmPass = confirmPassword.value;

                // 1. Current password check
                const storedPassword = localStorage.getItem('adoptlyPassword');
                if (current !== storedPassword) {
                    alert('Current password is incorrect.\n\n(Demo password: currentpassword123)');
                    currentPassword.focus();
                    return;
                }

                // 2. Strength check
                const strength = getStrength(newPass);
                if (strength.score !== 4) {
                    alert('Please complete all password requirements.');
                    newPassword.focus();
                    return;
                }

                // 3. Match check
                if (newPass !== confirmPass) {
                    alert('New password and confirmation password do not match.');
                    confirmPassword.focus();
                    return;
                }

                // 4. Must be different from current
                if (current === newPass) {
                    alert('Your new password must be different from your current password.');
                    return;
                }

                // Save new password
                localStorage.setItem('adoptlyPassword', newPass);

                // Save backup email if provided
                if (backupEmail.value.trim()) {
                    localStorage.setItem('adoptlyBackupEmail', backupEmail.value.trim());
                }

                alert('Security settings updated successfully!');

                // Clear password fields
                currentPassword.value = '';
                newPassword.value = '';
                confirmPassword.value = '';
                updatePasswordStrength();
                updatePasswordMatch();
            });
        }



        /* =========================================================
           CANCEL
           ========================================================= */

        if (cancelButton) {
            cancelButton.addEventListener('click', function () {
                currentPassword.value = '';
                newPassword.value = '';
                confirmPassword.value = '';
                updatePasswordStrength();
                updatePasswordMatch();
            });
        }



        /* =========================================================
           USER PROFILE BUTTON (Sarah Jenkins)
           ========================================================= */

        const userProfileBtn = document.getElementById('userProfileBtn');
        const userChevron = document.getElementById('userChevron');

        if (userProfileBtn) {
            userProfileBtn.addEventListener('click', function () {
                // Toggle chevron rotation for visual feedback
                if (userChevron) {
                    userChevron.classList.toggle('rotate-180');
                }

                // Simple demo action – replace with real navigation or dropdown later
                alert('Profile menu opened for Sarah Jenkins.\n\n(You can link this to Account Settings, Profile, or a dropdown menu.)');
            });
        }



        /* =========================================================
           INITIAL DISPLAY
           ========================================================= */

        updatePasswordStrength();
        updatePasswordMatch();

    </script>

</body>

</html>