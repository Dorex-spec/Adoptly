<?php
session_start();

$popupType = '';
$popupTitle = '';$popupMessage = '';

// Handle Form Submission (Both Email form and Social popup form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {$email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Check if session user already exists AND matches the exact email entered
    if (isset($_SESSION['loggedInUser']) && strtolower($_SESSION['loggedInUser']) === strtolower($email)) {$popupType = 'error';
        $popupTitle = 'Sign In Error';$popupMessage = 'This account has already been Signed in.';
    } elseif (empty($email) || !str_ends_with(strtolower($email), '@gmail.com')) {$popupType = 'error';
        $popupTitle = 'Sign In Error';$popupMessage = 'Invalid account. You must use an @gmail.com address.';
    } else {
        $_SESSION['loggedInUser'] = strtolower($email);$popupType = 'success';
        $popupTitle = 'Login Successful';$popupMessage = '✔️ Your account is now logged in for this session.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Adoptly - Sign In</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            coral: '#E05A4F',
                            coralHover: '#cc4b41',
                            dark: '#1C1917'
                        }
                    }
                }
            }
        };
    </script>
    <style>
        :root {
            --coral: #E05A4F;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F8F5F4;
        }

        /* Suppress browser's native built-in password reveal icon */
        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear,
        input[type="text"]::-ms-reveal,
        input[type="text"]::-ms-clear {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }

        .popup-overlay {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            background-color: rgba(0, 0, 0, 0.45) !important;
            backdrop-filter: blur(8px) !important;
            -webkit-backdrop-filter: blur(8px) !important;
            display: none;
            align-items: center !important;
            justify-content: center !important;
            z-index: 99999 !important;
        }

        .popup-card {
            background: #ffffff !important;
            border-radius: 20px !important;
            padding: 28px !important;
            max-width: 400px !important;
            width: 100% !important;
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2) !important;
            animation: popupFadeIn 0.2s ease-out;
        }

        @keyframes popupFadeIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .prompt-input {
            width: 100% !important;
            padding: 12px 14px !important;
            border: 1px solid #e05a4f !important;
            border-radius: 10px !important;
            font-size: 14px !important;
            outline: none !important;
            margin-top: 12px !important;
            margin-bottom: 20px !important;
            box-sizing: border-box !important;
        }

        .prompt-input:focus {
            box-shadow: 0 0 0 3px rgba(224, 90, 79, 0.15) !important;
        }

        .popup-cancel-btn {
            background: #f3f4f6 !important;
            color: #4b5563 !important;
            border: none !important;
            padding: 10px 18px !important;
            border-radius: 10px !important;
            cursor: pointer !important;
            font-weight: 600 !important;
            font-size: 13px !important;
        }

        .popup-submit-btn {
            background: #e05a4f !important;
            color: #ffffff !important;
            border: none !important;
            padding: 10px 18px !important;
            border-radius: 10px !important;
            cursor: pointer !important;
            font-weight: 600 !important;
            font-size: 13px !important;
        }

        .popup-close-btn {
            background: #e05a4f !important;
            color: #ffffff !important;
            border: none !important;
            padding: 10px 24px !important;
            border-radius: 10px !important;
            cursor: pointer !important;
            font-weight: 600 !important;
            width: 100% !important;
            font-size: 14px !important;
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

<body class="min-h-screen flex flex-col justify-between">
    <!-- MAIN HEADER SECTION -->
    <header class="w-full bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">

            <!-- Brand Logo -->
            <a class="flex items-center" href="#">
                <img src="../photos/image-removebg-preview (1).png" alt="Adoptly Logo" class="h-10 w-auto">
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
                <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full"
                    href="../php/Browse_page.php">Browse pets</a>
                <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full"
                    href="../php/Adoption_process.php">Adoption Process</a>
                <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full"
                    href="../php/Donation.php">Donate</a>
                <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full"
                    href="../php/About_us.php">About</a>
            </nav>

            <!-- Right Actions -->
            <div class="flex items-center gap-4">
                <button class="fav" type="button" aria-label="View Saved Pets">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </button>

                <!-- Sign In Button -->
                <a class="px-5 py-2.5 rounded-full text-xs font-bold bg-[#E05A4F] text-white hover:bg-red-500 shadow-sm transition"
                    href="Log_in.php">Log In</a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow py-8 md:py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
        <div class="w-full max-w-[1180px] bg-white rounded-[2rem] shadow-xl border border-gray-100 overflow-hidden flex flex-col lg:flex-row">
            
            <!-- Left Column (Welcome Back Image area with Trust Badge & Statistics Card) -->
            <section class="w-full lg:w-[46%] bg-[#FCF8F7] p-8 sm:p-12 flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-[#F0E6E1]" data-purpose="brand-reassurance">
                <div>
                    <!-- Pill Tag -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-[#EADFD9] text-[11px] font-bold tracking-wider text-brand-coral uppercase mb-6 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-brand-coral"></span>
                        WELCOME BACK • ADOPTLY COMMUNITY
                    </div>
                    
                    <!-- Main Heading -->
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-[1.2] mb-4">
                        Welcome Back to Your <span class="text-brand-coral">Journey Home.</span>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-gray-600 text-sm sm:text-[14.5px] leading-relaxed mb-8">
                        Pick up where you left off. Review your saved companions, check submitted application statuses, and connect directly with verified shelter partners.
                    </p>

                    <!-- Image Container with 100% Certified Shelters Badge -->
                    <div class="rounded-2xl h-56 sm:h-64 w-full relative flex flex-col items-center justify-end p-4 overflow-hidden bg-[#F5EFEB]">
                        <!-- Background Image -->
                        <img src="../photos/for log in&sign in/new_happy_dog.webp" alt="Happy rescue dog" class="absolute inset-0 w-full h-full object-cover object-bottom z-0" />

                        <!-- Trust Badge Overlaid at Bottom of Image -->
                        <div class="relative z-10 inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-sm border border-[#34D399]/40 text-[#059669] text-xs font-semibold px-4 py-1.5 rounded-full shadow-sm">
                            <svg class="w-3.5 h-3.5 stroke-[2.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M4.5 12.75l6 6 9-13.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>100% Certified 501(c)(3) Shelters</span>
                        </div>
                    </div>

                    <!-- Bottom Testimonial / Statistic Card -->
                    <div class="mt-8 bg-white border border-[#ECE2DC] rounded-xl p-4 flex items-center gap-3.5 shadow-sm">
                        <div class="w-10 h-10 rounded-full bg-[#FFF0ED] flex items-center justify-center text-brand-coral shrink-0 text-sm">
                            🐾
                        </div>
                        <div>
                            <p class="text-[13px] text-gray-800 font-medium leading-snug">
                                Over <strong>14,200+</strong> pets matched with loving families nationwide.
                            </p>
                            <p class="text-[11px] text-gray-400 mt-0.5">Secure, verified adoption process</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Right Form Column -->
            <section class="w-full lg:w-[54%] p-8 sm:p-12 bg-white flex flex-col justify-center">
                <div class="max-w-md w-full mx-auto">
                    <!-- Title & Description -->
                    <div class="mb-8">
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0f172a] tracking-tight">Sign In to Adoptly</h2>
                        <p class="text-[15px] text-gray-500 mt-3 leading-relaxed">Enter your credentials to access your saved animals, ongoing applications, and shelter chats.</p>
                    </div>

                    <!-- Social Logins -->
                    <div class="flex flex-row gap-4 mb-8 w-full">
                        <button type="button" onclick="openSocialPrompt('Google')" class="flex-1 flex items-center justify-center gap-2.5 py-3 px-4 rounded-[14px] border border-gray-200 hover:bg-gray-50 hover:border-gray-300 text-sm font-semibold text-[#1e293b] transition duration-200 shadow-sm cursor-pointer">
                            <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                            <span>Sign in with Google</span>
                        </button>
                        
                        <button type="button" onclick="openSocialPrompt('Apple')" class="flex-1 flex items-center justify-center gap-2.5 py-3 px-4 rounded-[14px] border border-gray-200 hover:bg-gray-50 hover:border-gray-300 text-sm font-semibold text-[#1e293b] transition duration-200 shadow-sm cursor-pointer">
                            <svg class="w-5 h-5 flex-shrink-0 fill-current text-gray-900" viewBox="0 0 24 24">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.19c.62-.75 1.04-1.8 0.92-2.85-.9.04-2 .61-2.65 1.37-.58.68-.99 1.74-.85 2.76 1.01.08 2.05-.53 2.58-1.28z"/>
                            </svg>
                            <span>Sign in with Apple</span>
                        </button>
                    </div>

                    <!-- Divider -->
                    <div class="relative flex items-center justify-center mb-8">
                        <div class="border-t border-gray-200 w-full"></div>
                        <span class="bg-white px-4 text-[12px] font-bold tracking-wide uppercase text-[#94a3b8] absolute">OR LOG IN WITH EMAIL</span>
                    </div>

                    <!-- Email Form -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="space-y-5">
                        
                        <!-- Email Input -->
                        <div>
                            <label class="block text-[13px] font-bold text-[#334155] uppercase tracking-wide mb-2" for="email">
                                Email Address <span class="text-brand-coral">*</span>
                            </label>
                            <div class="relative">
                                <input class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[12px] px-4 py-3 text-[15px] text-gray-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-coral/20 focus:border-brand-coral transition" id="email" name="email" placeholder="e.g. sarah.jenkins@example.com" required type="email">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div>
                            <label class="block text-[13px] font-bold text-[#334155] uppercase tracking-wide mb-2" for="password">
                                Password <span class="text-brand-coral">*</span>
                            </label>
                            <div class="relative">
                                <input class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[12px] px-4 py-3 pr-11 text-[15px] text-gray-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-coral/20 focus:border-brand-coral transition" id="password" name="password" placeholder="••••••••" required type="password" oninput="handlePasswordInput()">
                                <button type="button" id="passwordToggleBtn" onclick="togglePasswordVisibility()" aria-label="Toggle password visibility" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none cursor-default pointer-events-none">
                                    <!-- Default @ icon -->
                                    <svg id="defaultIcon" class="h-5 w-5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                    </svg>
                                    <!-- Eye Icon -->
                                    <svg id="eyeIcon" class="h-5 w-5 pointer-events-none hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Options -->
                        <div class="flex items-center justify-between pt-1 pb-2">
                            <label class="flex items-center gap-2.5 cursor-pointer">
                                <input class="w-[18px] h-[18px] rounded text-brand-coral border-gray-300 focus:ring-brand-coral" type="checkbox">
                                <span class="text-[15px] text-[#475569]">Remember me on this device</span>
                            </label>
                            <a class="text-[15px] font-semibold text-brand-coral hover:underline" href="#">Forgot password?</a>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button class="w-full bg-[#E05A4F] hover:bg-[#cc4b41] text-white font-bold py-3.5 px-4 rounded-[12px] shadow-[0_4px_14px_0_rgba(224,90,79,0.39)] hover:shadow-[0_6px_20px_rgba(224,90,79,0.23)] transition duration-200 flex items-center justify-center gap-2 text-[16px]" type="submit">
                                <span>Sign In to Account</span>
                                <span>→</span>
                            </button>
                        </div>
                    </form>

                    <!-- Create Account Link -->
                    <div class="mt-10 pt-8 border-t border-gray-100 text-center">
                        <p class="text-[15px] text-[#64748b]">
                            Don't have an account yet? 
                            <a href="#" class="font-bold text-brand-coral hover:underline">Create a free account →</a>
                        </p>
                    </div>

                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#121212] text-gray-400 text-sm mt-12 border-t border-neutral-800">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 pt-14 pb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
                <!-- Left Brand Description -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="#" class="inline-block">
                        <img src="../photos/adoptly logo.png" alt="Adoptly Logo" class="h-9 w-auto object-contain">
                    </a>

                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed max-w-sm">
                        Helping rescue pets find safe, loving homes and lifelong companionship. Partnered with certified
                        no-kill shelters nationwide.
                    </p>
                    <!-- Social Icons -->
                    <div class="flex items-center gap-2.5 pt-2">
                        <a class="w-8 h-8 rounded-lg bg-neutral-800 hover:bg-neutral-700 flex items-center justify-center text-gray-300 transition text-xs font-bold" href="#">f</a>
                        <a class="w-8 h-8 rounded-lg bg-neutral-800 hover:bg-neutral-700 flex items-center justify-center text-gray-300 transition text-xs font-bold" href="#">t</a>
                        <a class="w-8 h-8 rounded-lg bg-neutral-800 hover:bg-neutral-700 flex items-center justify-center text-gray-300 transition text-xs font-bold" href="#">in</a>
                        <a class="w-8 h-8 rounded-lg bg-neutral-800 hover:bg-neutral-700 flex items-center justify-center text-gray-300 transition text-xs font-bold" href="#">li</a>
                        <a class="w-8 h-8 rounded-lg bg-neutral-800 hover:bg-neutral-700 flex items-center justify-center text-gray-300 transition text-xs font-bold" href="#">yt</a>
                    </div>
                </div>
                <!-- Column 1: Browse -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Browse</h3>
                    <ul class="space-y-2.5 text-xs text-gray-400">
                        <li><a class="hover:text-white transition" href="#">Browse Pets</a></li>
                        <li><a class="hover:text-white transition" href="#">Adoption Process</a></li>
                        <li><a class="hover:text-white transition" href="#">Success Stories</a></li>
                        <li><a class="hover:text-white transition" href="#">About Us</a></li>
                    </ul>
                </div>
                <!-- Column 2: Resources -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Resources</h3>
                    <ul class="space-y-2.5 text-xs text-gray-400">
                        <li><a class="hover:text-white transition" href="#">FAQ</a></li>
                        <li><a class="hover:text-white transition" href="#">Pet Care Tips</a></li>
                        <li><a class="hover:text-white transition" href="#">Volunteer</a></li>
                        <li><a class="hover:text-white transition" href="#">Support Center</a></li>
                    </ul>
                </div>
                <!-- Column 3: Contact -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Contact</h3>
                    <ul class="space-y-2.5 text-xs text-gray-400">
                        <li class="hover:text-white transition">helloadoptly@gmail.com</li>
                        <li class="hover:text-white transition">+1 (234) 567-890</li>
                        <li class="hover:text-white transition">New York, USA</li>
                    </ul>
                </div>
            </div>
            <!-- Copyright Sub-bar -->
            <div class="mt-12 pt-6 border-t border-neutral-800 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500">
                <p>© 2026 Adoptly. All rights reserved.</p>
                <div class="flex items-center gap-4 mt-3 sm:mt-0">
                    <a class="hover:text-gray-300 transition" href="#">Privacy Policy</a>
                    <span>|</span>
                    <a class="hover:text-gray-300 transition" href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- 1. Social Login Input Prompt Popup -->
    <div id="socialPromptPopup" class="popup-overlay">
        <div class="popup-card">
            <h3 id="socialPromptTitle" style="font-size: 20px; font-weight: 800; color: #1c1917; margin: 0 0 8px 0;">Sign in with Google</h3>
            <p id="socialPromptMessage" style="font-size: 14px; color: #6b7280; margin: 0 0 16px 0;">Please enter your Google account to continue:</p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="email" name="email" id="socialEmailInput" class="prompt-input" placeholder="e.g. user@gmail.com" required>
                <div style="display: flex; justify-content: flex-end; gap: 12px;">
                    <button type="button" class="popup-cancel-btn" onclick="closeSocialPrompt()">Cancel</button>
                    <button type="submit" class="popup-submit-btn">OK</button>
                </div>
            </form>
        </div>
    </div>

    <!-- 2. Final Status Alert Modal (Success / Error) -->
    <div id="customPopup" class="popup-overlay">
        <div class="popup-card" style="text-align: center !important;">
            <div id="popupIcon" style="font-size: 42px; margin-bottom: 12px;"></div>
            <h3 id="popupTitle" style="font-size: 18px; font-weight: 700; color: #1c1917; margin: 0 0 8px 0;"></h3>
            <p id="popupMessage" style="font-size: 13px; color: #6b7280; margin: 0 0 20px 0;"></p>
            <button onclick="closePopup()" class="popup-close-btn" type="button">OK</button>
        </div>
    </div>

    <!-- JavaScript to Handle Popups and Password Toggle -->
    <script>
        function handlePasswordInput() {
            const passwordInput = document.getElementById('password');
            const defaultIcon = document.getElementById('defaultIcon');
            const eyeIcon = document.getElementById('eyeIcon');
            const toggleBtn = document.getElementById('passwordToggleBtn');

            if (passwordInput.value.length > 0) {
                defaultIcon.classList.add('hidden');
                eyeIcon.classList.remove('hidden');
                toggleBtn.classList.remove('cursor-default', 'pointer-events-none');
                toggleBtn.classList.add('cursor-pointer');
            } else {
                defaultIcon.classList.remove('hidden');
                eyeIcon.classList.add('hidden');
                toggleBtn.classList.remove('cursor-pointer');
                toggleBtn.classList.add('cursor-default', 'pointer-events-none');
                
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908A8.982 8.982 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21M3 3l18 18"></path>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }

        function openSocialPrompt(provider) {
            document.getElementById('socialPromptTitle').innerText = 'Sign in with ' + provider;
            document.getElementById('socialPromptMessage').innerText = 'Please enter your ' + provider + ' account to continue:';
            document.getElementById('socialEmailInput').value = ''; 
            document.getElementById('socialPromptPopup').style.display = 'flex';
        }

        function closeSocialPrompt() {
            document.getElementById('socialPromptPopup').style.display = 'none';
        }

        function showPopup(type, title, message) {
            const popup = document.getElementById('customPopup');
            const icon = document.getElementById('popupIcon');

            document.getElementById('popupTitle').innerText = title;
            document.getElementById('popupMessage').innerText = message;

            if (type === 'success') {
                icon.innerHTML = '✔️';
            } else {
                icon.innerHTML = '⚠️';
            }

            popup.style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('customPopup').style.display = 'none';
        }

        <?php if (!empty($popupType)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                showPopup('<?php echo $popupType; ?>', '<?php echo addslashes($popupTitle); ?>', '<?php echo addslashes($popupMessage); ?>');
            });
        <?php endif; ?>
    </script>
</body>
</html>