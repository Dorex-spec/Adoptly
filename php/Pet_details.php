<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Adoptly - Bella | Pet Detail Wireframe</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS v3 with Forms and Container Queries Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Configuration for Custom Palette matching reference -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            primary: '#d35f4f',
                            hover: '#be4e3f',
                            subtle: '#faebe8',
                            surface: '#fffaf8',
                            cardbg: '#fcfbfa',
                            footer: '#27292d',
                            dark: '#1e2024'
                        }
                    }
                }
            }
        }
    </script>
    <!-- BEGIN: Custom Wireframe Styles -->
    <style data-purpose="wireframe-x-placeholder">
        /* Architectural wireframe placeholder with geometric X stroke lines */
        .wireframe-box {
            background-color: #f1f3f5;
            position: relative;
            overflow: hidden;
        }

        .wireframe-box svg.wireframe-cross {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
    </style>
    <style data-purpose="typography-utilities">
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdfaf8;
            color: #333333;
        }

        /* FAQ Accordion */
        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }
    </style>
    <Style>
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
    </Style>
    <!-- END: Custom Wireframe Styles -->
</head>

<body class="min-h-screen flex flex-col antialiased selection:bg-brand-primary selection:text-white">
    <!-- BEGIN: MainHeader -->
    <header class="w-full bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a class="flex items-center" href="#">
                <img src="../photos/image-removebg-preview (1).png" alt="Adoptly Logo" class="h-10 w-auto">
            </a>
            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-600">
                <a class="hover:text-brand-primary transition-colors" href="../php/Browse_page.php">Browse pets</a>
                <a class="hover:text-brand-primary transition-colors" href="../php/Adoption_process.php">adoption
                    process</a>
                <a class="hover:text-brand-primary transition-colors" href="../php/Donation.php">Donate</a>
                <a class="hover:text-brand-primary transition-colors" href="../php/About_us.php">About</a>
            </nav>
            <!-- Header Action Items -->
            <div class="flex items-center space-x-6">
                <!-- Favorites Icon -->
                <button class="fav" type="button" aria-label="View Saved Pets">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20"
                        height="20">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </button>
                <!-- Login Link -->
                <a class="text-sm font-semibold text-brand-primary hover:underline" href="../php/Log_in.php">Login</a>
                <!-- Sign in Button -->
                <a class="px-6 py-2.5 rounded-full bg-brand-primary text-white text-sm font-semibold hover:bg-brand-hover shadow-sm transition-colors"
                    href="../php/Sign_in.php">
                    Sign in
                </a>
            </div>
        </div>
    </header>
    <!-- END: MainHeader -->
    <!-- BEGIN: BreadcrumbNavigation -->
    <nav aria-label="Breadcrumb" class="max-w-7xl mx-auto px-6 py-4 w-full">
        <ol class="flex items-center space-x-2 text-xs text-gray-500 font-medium">
            <li class=""><a class="hover:text-brand-primary" href="../php/index.php">Home</a></li>
            <li class=""><span class="text-gray-400">&gt;</span></li>
            <li class=""><a class="hover:text-brand-primary" href="../php/Browse_pets.php">Browse Pets</a></li>
            <li class=""><span class="text-gray-400">&gt;</span></li>
            <li class=""><a class="hover:text-brand-primary" href="#">Cats</a></li>
            <li class=""><span class="text-gray-400">&gt;</span></li>
            <li aria-current="page" class="text-brand-primary font-semibold">Bella</li>
        </ol>
    </nav>
    <!-- END: BreadcrumbNavigation -->
    <!-- BEGIN: MainContentContainer -->
    <main class="max-w-7xl mx-auto px-6 pb-20 w-full flex-grow">
        <!-- BEGIN: TopDetailGrid (Hero Gallery + Sticky Action Sidebar) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start mb-10">
            <!-- Left Column: Gallery & Extended Bio Details -->
            <section class="lg:col-span-8 space-y-6">
                <!-- Large Hero Image Wireframe Box -->
                <div class="w-full aspect-[16/10] sm:aspect-[16/9] rounded-2xl border border-gray-200 shadow-sm relative flex items-center justify-center">
                    <img id="mainPetImage" src="browse1.jpg" alt="Bella"
                        class="absolute inset-0 w-full h-full object-cover rounded-2xl">
                    <!-- Top Right Overlay Controls: Favorite & Share -->
                    <div class="absolute top-4 right-4 flex space-x-2.5 z-20">
                        <button
                            class="w-9 h-9 rounded-full bg-white/90 hover:bg-white text-brand-primary flex items-center justify-center shadow-md transition-transform active:scale-95"
                            title="Save to favorites">
                            <svg class="w-5 h-5 stroke-current stroke-2 fill-none" viewBox="0 0 24 24">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                        <button
                            class="w-9 h-9 rounded-full bg-white/90 hover:bg-white text-gray-700 flex items-center justify-center shadow-md transition-transform active:scale-95"
                            title="Share profile">
                            <svg class="w-4 h-4 fill-none stroke-current stroke-2" viewBox="0 0 24 24">
                                <circle cx="18" cy="5" r="3"></circle>
                                <circle cx="6" cy="12" r="3"></circle>
                                <circle cx="18" cy="19" r="3"></circle>
                                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- 4 Gallery Thumbnail Row -->
                <div class="grid grid-cols-4 gap-3.5 sm:gap-4">
                    <!-- Thumbnail 1 -->
                    <div class="thumbnail aspect-square rounded-xl border-2 border-brand-primary overflow-hidden relative cursor-pointer shadow-sm"
                        data-src="browse1.jpg">
                        <img src="browse1.jpg" alt="Bella 1" class="w-full h-full object-cover">
                    </div>
                    <!-- Thumbnail 2 -->
                    <div class="thumbnail aspect-square rounded-xl border border-gray-200 overflow-hidden relative cursor-pointer opacity-85 hover:opacity-100 transition-opacity"
                        data-src="bella2.jpg">
                        <img src="bella2.jpg" alt="Bella 2" class="w-full h-full object-cover">
                    </div>
                    <!-- Thumbnail 3 -->
                    <div class="thumbnail aspect-square rounded-xl border border-gray-200 overflow-hidden relative cursor-pointer opacity-85 hover:opacity-100 transition-opacity"
                        data-src="bella3.jpg">
                    </div>
                    <!-- Thumbnail 4 -->
                    <div class="thumbnail aspect-square rounded-xl border border-gray-200 overflow-hidden relative cursor-pointer opacity-85 hover:opacity-100 transition-opacity"
                        data-src="bella4.jpg">
                        <img src="bella4.jpg" alt="Bella 4" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Pet Identification & Quote Block -->
                <div class="pt-3">
                    <!-- Shelter Verification Pill -->
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold mb-2">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                            <path clip-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                fill-rule="evenodd"></path>
                        </svg>
                        Verified Shelter
                    </div>
                    <div class="flex items-baseline gap-3">
                        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Bella</h1>
                        <span class="text-sm font-medium text-gray-600 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z">
                                </path>
                            </svg>
                            • Austin, TX
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-gray-600 italic leading-relaxed font-normal">
                        "Friendly, curious, and always ready for a cuddle. Bella is a gentle soul searching for a
                        sunbeam to nap in and a family to love."
                    </p>
                </div>
                <hr class="border-gray-200 my-6">
                <!-- Quick Facts Matrix Section -->
                <section aria-labelledby="quick-facts-heading">
                    <h2 class="text-base font-bold text-gray-900 mb-4" id="quick-facts-heading">Quick Facts</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-y-4 gap-x-6 text-xs">
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">BREED</span>
                            <p class="font-bold text-gray-800">Domestic Short Hair Mix</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">AGE</span>
                            <p class="font-bold text-gray-800">Kitten <span class="font-normal text-gray-500">(less than
                                    1 year)</span></p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">GENDER</span>
                            <p class="font-bold text-gray-800">Female</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">COAT
                                LENGTH</span>
                            <p class="font-bold text-gray-800">Short</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">HOUSE
                                TRAINED</span>
                            <p class="font-bold text-gray-800">Yes</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">SIZE</span>
                            <p class="font-bold text-gray-800">Medium (9 lbs)</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">SPAYED</span>
                            <p class="font-bold text-gray-800">Yes</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">MICROCHIPPED</span>
                            <p class="font-bold text-gray-800">Yes</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">VACCINATED</span>
                            <p class="font-bold text-gray-800">Up to date</p>
                        </div>
                        <div>
                            <span
                                class="uppercase tracking-wider text-gray-400 font-semibold block text-[10px] mb-0.5">HEALTH
                                STATUS</span>
                            <p class="font-bold text-gray-800">Excellent</p>
                        </div>
                    </div>
                </section>
            </section>
            <!-- Right Column: Sidebar (Action Card + Shelter Info + Testimonial) -->
            <aside class="lg:col-span-4 space-y-6">
                <!-- Primary Adoption Action Card -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <span
                                class="inline-block px-2.5 py-0.5 rounded text-[11px] font-bold bg-emerald-600 text-white tracking-wider uppercase mb-1">
                                AVAILABLE
                            </span>
                            <h2 class="text-2xl font-black text-gray-900">Bella</h2>
                        </div>
                        <div class="text-right">
                            <span class="text-[11px] font-medium text-gray-500 block">Adoption Fee</span>
                            <span class="text-2xl font-extrabold text-brand-primary">$150</span>
                        </div>
                    </div>
                    <!-- CTA Buttons -->
                    <div class="space-y-2.5 mt-5">
                        <button
                            class="w-full py-3 rounded-xl bg-brand-primary text-white font-bold text-sm tracking-wide hover:bg-brand-hover shadow transition-colors">
                            Start Application
                        </button>
                    </div>
                    <!-- Highlight Checklist -->
                    <div class="mt-6 bg-[#fff6f4] rounded-xl p-4 space-y-2 text-xs font-medium text-gray-700">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="">Fully Vaccinated</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="">Negative for FIV/FeLV</span>
                        </div>
                    </div>
                    <hr class="border-gray-100 my-5">
                    <!-- The Caretakers Section -->
                    <div>
                        <h3 class="text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-3">THE CARETAKERS
                        </h3>
                        <div class="flex items-center space-x-3 mb-2.5">
                            <!-- Caretaker Avatar Wireframe Box -->
                            <div
                                class="wireframe-box w-11 h-11 rounded-full border border-gray-300 flex-shrink-0 flex items-center justify-center">
                                <svg class="wireframe-cross" preserveAspectRatio="none" viewBox="0 0 100 100">
                                    <line stroke="#cbd5e1" stroke-width="2" x1="0" x2="100" y1="0" y2="100"></line>
                                    <line stroke="#cbd5e1" stroke-width="2" x1="0" x2="100" y1="100" y2="0"></line>
                                </svg>
                            </div>
                            <div>
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-bold text-sm text-gray-900">Austin Paws Rescue</h4>
                                    <svg class="w-3.5 h-3.5 text-emerald-600 fill-current" viewBox="0 0 20 20">
                                        <path clip-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="text-[11px] text-gray-500 font-medium">Austin, TX • 500+ Adoptions</p>
                            </div>
                        </div>
                        <p class="text-[11px] text-gray-500 leading-normal">
                            A non-profit dedicated to connecting loving families with their perfect feline companions.
                            Our cats are fostered in homes, not cages.
                        </p>
                    </div>
                </div>
                <!-- Recent Success Testimonial Card -->
                <div class="bg-[#fcefe9] rounded-2xl p-5 border border-[#f5dbd3]">
                    <div class="flex items-center gap-1 text-brand-primary mb-1">
                        <span class="text-xl font-serif font-bold">“</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-primary">Recent
                            Success</span>
                    </div>
                    <p class="text-xs italic text-gray-700 leading-relaxed mb-3">
                        "We found our soulmate through Austin Paws. The process was so thorough and supportive!"
                    </p>
                    <div class="flex items-center space-x-2.5">
                        <!-- Testimonial Avatar Wireframe Box -->
                        <div
                            class="wireframe-box w-8 h-8 rounded-full border border-gray-300 flex-shrink-0 flex items-center justify-center">
                            <svg class="wireframe-cross" preserveAspectRatio="none" viewBox="0 0 100 100">
                                <line stroke="#cbd5e1" stroke-width="2" x1="0" x2="100" y1="0" y2="100"></line>
                                <line stroke="#cbd5e1" stroke-width="2" x1="0" x2="100" y1="100" y2="0"></line>
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-[11px] font-bold text-gray-800 leading-tight">The Miller Family</h5>
                            <span class="text-[10px] text-gray-500">Adopted 'Max' in Oct 2023</span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- END: TopDetailGrid -->
        <!-- BEGIN: InDepthBiographySection -->
        <section class="max-w-3xl space-y-4 mb-12">
            <h2 class="text-base font-bold text-gray-900">Meet Bella</h2>
            <!-- Trait Tags -->
            <div class="flex flex-wrap gap-2 pt-1 pb-2">
                <span
                    class="px-3 py-1 rounded-full bg-brand-subtle text-brand-primary text-xs font-semibold">Playful</span>
                <span
                    class="px-3 py-1 rounded-full bg-brand-subtle text-brand-primary text-xs font-semibold">Affectionate</span>
                <span
                    class="px-3 py-1 rounded-full bg-brand-subtle text-brand-primary text-xs font-semibold">Curious</span>
                <span
                    class="px-3 py-1 rounded-full bg-brand-subtle text-brand-primary text-xs font-semibold">Gentle</span>
                <span
                    class="px-3 py-1 rounded-full bg-brand-subtle text-brand-primary text-xs font-semibold">Calm</span>
                <span
                    class="px-3 py-1 rounded-full bg-brand-subtle text-brand-primary text-xs font-semibold">Social</span>
            </div>
            <!-- Narrative Text -->
            <div class="space-y-3.5 text-xs sm:text-sm text-gray-600 leading-relaxed font-normal">
                <p class="">
                    Bella is a ray of sunshine in cat form. She arrived at our rescue a few months ago after her
                    previous owner had to move abroad, and she hasn't stopped stealing hearts since. She is a true
                    social butterfly who loves to be in the same room as her humans, often "helping" with work from home
                    by sitting just out of reach of the keyboard.
                </p>
                <p class="">
                    Her morning routine consists of gentle head-butts to remind you that it's breakfast time, followed
                    by a vigorous session with her favorite feather wand. She is surprisingly athletic for her calm
                    demeanor and loves to climb her cat tree to survey her kingdom.
                </p>
                <p class="">
                    What makes Bella truly special is her intuitive nature. She seems to know when someone is having a
                    rough day and will quietly sit beside them, offering her comforting presence without being
                    demanding. She is house-trained, well-behaved, and ready to find her forever lap.
                </p>
            </div>
        </section>
        <!-- END: InDepthBiographySection -->
        <!-- BEGIN: CompatibilityGrid -->
        <section class="mb-12">
            <h2 class="text-sm font-bold text-gray-900 mb-4">Is Bella Right For You?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3.5 max-w-4xl">
                <!-- Apartment -->
                <div class="bg-white rounded-xl border border-gray-200 p-3.5 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600">
                        <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                            <path
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-800 block">Apartment</span>
                        <span class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1">
                            ✓ Perfect
                        </span>
                    </div>
                </div>
                <!-- Children -->
                <div class="bg-white rounded-xl border border-gray-200 p-3.5 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600">
                        <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" x2="9.01" y1="9" y2="9"></line>
                            <line x1="15" x2="15.01" y1="9" y2="9"></line>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-800 block">Children</span>
                        <span class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1">
                            ✓ Great
                        </span>
                    </div>
                </div>
                <!-- Other Dogs -->
                <div class="bg-white rounded-xl border border-gray-200 p-3.5 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <circle cx="6" cy="8" r="2"></circle>
                            <circle cx="18" cy="8" r="2"></circle>
                            <circle cx="10" cy="5" r="1.8"></circle>
                            <circle cx="14" cy="5" r="1.8"></circle>
                            <path d="M12 11c-3 0-5 1.5-5 4 0 2 1.8 3.5 5 3.5s5-1.5 5-3.5c0-2.5-2-4-5-4z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-800 block">Other Dogs</span>
                        <span class="text-[11px] font-semibold text-amber-700 flex items-center gap-1">
                            ⓘ Selective
                        </span>
                    </div>
                </div>
                <!-- Other Cats -->
                <div class="bg-white rounded-xl border border-gray-200 p-3.5 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600">
                        <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                            <path d="M12 2l3 5h6v6l-4 4v5H7v-5l-4-4V7h6l3-5z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-800 block">Other Cats</span>
                        <span class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1">
                            ✓ Friendly
                        </span>
                    </div>
                </div>
                <!-- First-Timer -->
                <div class="bg-white rounded-xl border border-gray-200 p-3.5 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600">
                        <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                            <path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <line x1="19" x2="19" y1="8" y2="14"></line>
                            <line x1="22" x2="16" y1="11" y2="11"></line>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-800 block">First-Timer</span>
                        <span class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1">
                            ✓ Ideal
                        </span>
                    </div>
                </div>
                <!-- Energy Level -->
                <div class="bg-white rounded-xl border border-gray-200 p-3.5 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600">
                        <svg class="w-5 h-5 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-800 block">Energy Level</span>
                        <span class="text-[11px] font-semibold text-gray-700 flex items-center gap-1">
                            🔄 Moderate
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: CompatibilityGrid -->
        <!-- BEGIN: JourneyTimelineSection -->
        <section class="mb-12 max-w-4xl bg-[#fdf2ee] rounded-2xl p-6 sm:p-8 border border-[#f9dfd5]">
            <h3 class="text-center text-xs font-bold text-gray-800 mb-8 tracking-wide">Your Journey to Bella</h3>
            <!-- Step items container -->
            <div class="relative flex flex-col sm:flex-row items-center justify-between gap-6 sm:gap-2">
                <!-- Connecting Line for Desktop -->
                <div class="hidden sm:block absolute top-5 left-8 right-8 h-0.5 bg-[#f0cbc1] z-0"></div>
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center relative z-10">
                    <div
                        class="w-10 h-10 rounded-full bg-brand-primary text-white font-bold text-xs flex items-center justify-center mb-2 ring-4 ring-[#fdf2ee]">
                        1
                    </div>
                    <span class="text-xs font-bold text-gray-800">Apply</span>
                    <span class="text-[10px] text-gray-500">Submit online form</span>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center relative z-10">
                    <div
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-700 font-bold text-xs flex items-center justify-center mb-2 ring-4 ring-[#fdf2ee]">
                        2
                    </div>
                    <span class="text-xs font-bold text-gray-800">Review</span>
                    <span class="text-[10px] text-gray-500">24-48 hr process</span>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center relative z-10">
                    <div
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-700 font-bold text-xs flex items-center justify-center mb-2 ring-4 ring-[#fdf2ee]">
                        3
                    </div>
                    <span class="text-xs font-bold text-gray-800">Meet</span>
                    <span class="text-[10px] text-gray-500">Virtual or in-person</span>
                </div>
                <!-- Step 4 -->
                <div class="flex flex-col items-center text-center relative z-10">
                    <div
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-700 font-bold text-xs flex items-center justify-center mb-2 ring-4 ring-[#fdf2ee]">
                        4
                    </div>
                    <span class="text-xs font-bold text-gray-800">Approve</span>
                    <span class="text-[10px] text-gray-500">Home check &amp; finalize</span>
                </div>
                <!-- Step 5 -->
                <div class="flex flex-col items-center text-center relative z-10">
                    <div
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-700 font-bold text-xs flex items-center justify-center mb-2 ring-4 ring-[#fdf2ee]">
                        5
                    </div>
                    <span class="text-xs font-bold text-gray-800">Forever</span>
                    <span class="text-[10px] text-gray-500">Bring Bella home!</span>
                </div>
            </div>
        </section>
        <!-- END: JourneyTimelineSection -->
        <!-- BEGIN: InclusionsCard -->
        <section class="max-w-4xl rounded-2xl border border-[#f5d9d2] bg-white overflow-hidden mb-12 shadow-sm">
            <div class="bg-[#fcefe9] px-6 py-3.5 border-b border-[#f5d9d2] flex items-center gap-2 text-brand-primary">
                <svg class="w-4 h-4 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" x2="12" y1="16" y2="12"></line>
                    <line x1="12" x2="12.01" y1="8" y2="8"></line>
                </svg>
                <h3 class="text-xs font-bold text-gray-800">What's included in the $150 fee?</h3>
            </div>
            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-y-3.5 gap-x-8 text-xs font-medium text-gray-700">
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="">All Core Vaccinations</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="">Microchip Registration</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="">Spay / Neuter Surgery</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="">De-worming &amp; Flea Treatment</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="">Comprehensive Health Exam</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 stroke-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="">Starter Bag &amp; Care Guides</span>
                </div>
            </div>
        </section>
        <!-- END: InclusionsCard -->
        <!-- BEGIN: FAQAccordion -->
        <section class="max-w-4xl mb-14">
            <h2 class="text-center text-sm font-bold text-gray-900 mb-6">Common Questions</h2>
            <div class="space-y-3">

                <!-- Question 1 -->
                <div class="faq-item bg-[#fcefe9] rounded-2xl border border-[#f5dbd3] p-5">
                    <div class="faq-header flex items-center justify-between cursor-pointer select-none">
                        <h3 class="text-xs font-bold text-gray-900">How do I meet Bella?</h3>
                        <svg class="faq-icon w-4 h-4 text-gray-600 transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-content mt-3 text-xs text-gray-600 leading-relaxed font-normal"
                        style="display:none;">
                        After your application is reviewed, we'll schedule a video call or an in-person meeting at our
                        rescue center in Austin. This ensures a comfortable first interaction for both you and Bella.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-item bg-[#fcefe9] rounded-2xl border border-[#f5dbd3] p-5">
                    <div class="faq-header flex items-center justify-between cursor-pointer select-none">
                        <h3 class="text-xs font-bold text-gray-900">Can I adopt if I have other pets?</h3>
                        <svg class="faq-icon w-4 h-4 text-gray-600 transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            </path>
                        </svg>
                    </div>
                    <div class="faq-content mt-3 text-xs text-gray-600 leading-relaxed font-normal"
                        style="display:none;">
                        Yes! Bella is friendly with other cats and can live with dogs that are calm and respectful of
                        cats. We will discuss your current pets during the application review to make sure everyone gets
                        along.
                    </div>
                </div>

            </div>
        </section>
        <!-- END: FAQAccordion -->
        <!-- BEGIN: RecommendationsSection -->
        <section>
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-sm font-bold text-gray-900">You May Also Fall In Love With</h2>
                <a class="text-xs font-bold text-brand-primary hover:underline flex items-center gap-1"
                    href="../php/Browse_p.php">
                    View All Pets →
                </a>
            </div>
            <!-- 4 Card Recommendations Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
                <!-- Pet Card 1: Kimmie -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm flex flex-col">
                    <!-- Wireframe Box Image Container with Heart Button -->
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="kimmie.jpg" alt="Kimmie" class="w-full h-full object-cover">
                        <svg class="wireframe-cross" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="0" y2="100"></line>
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="100" y2="0"></line>
                        </svg>
                        <button aria-label="Favorite Kimmie"
                            class="absolute top-2.5 right-2.5 w-7 h-7 rounded-full bg-white/90 hover:bg-white text-brand-primary flex items-center justify-center shadow">
                            <svg class="w-3.5 h-3.5 stroke-current stroke-2 fill-none" viewBox="0 0 24 24">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                        <div class="absolute bottom-2 left-3 text-white font-black text-lg drop-shadow-md">
                            Kimmie
                        </div>
                    </div>
                    <!-- Card Info Body -->
                    <div class="p-3.5 space-y-2 flex-grow flex flex-col justify-between text-[11px] text-gray-500">
                        <div class="space-y-1">
                            <div class="flex items-center gap-1">
                                <span class="">📍</span>
                                <span class="">Halifax, NS</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="">🐾</span>
                                <span class="">Tabby &amp; Domestic Short Hair Mix</span>
                            </div>
                            <div class="flex items-center gap-3 pt-1 text-gray-600 font-medium">
                                <span class="">🎂 (1-3 years)</span>
                                <span class="">♀ Female</span>
                            </div>
                        </div>
                        <!-- Card Buttons -->
                        <div class="pt-2 flex items-center gap-1.5">
                            <button
                                class="flex-1 py-1.5 rounded-lg bg-brand-primary text-white text-[10px] font-bold hover:bg-brand-hover">
                                Adopt Me
                            </button>
                            <button
                                class="flex-1 py-1.5 rounded-lg border border-gray-200 text-brand-primary text-[10px] font-bold hover:bg-gray-50 flex items-center justify-center gap-0.5">
                                <span class="">More About Me</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pet Card 2: Ellie -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm flex flex-col">
                    <!-- Wireframe Box Image Container with Heart Button -->
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="ellie.jpg" alt="Ellie" class="w-full h-full object-cover">
                        <svg class="wireframe-cross" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="0" y2="100"></line>
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="100" y2="0"></line>
                        </svg>
                        <button aria-label="Favorite Ellie"
                            class="absolute top-2.5 right-2.5 w-7 h-7 rounded-full bg-white/90 hover:bg-white text-brand-primary flex items-center justify-center shadow">
                            <svg class="w-3.5 h-3.5 stroke-current stroke-2 fill-none" viewBox="0 0 24 24">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                        <div class="absolute bottom-2 left-3 text-white font-black text-lg drop-shadow-md">
                            Ellie
                        </div>
                    </div>
                    <!-- Card Info Body -->
                    <div class="p-3.5 space-y-2 flex-grow flex flex-col justify-between text-[11px] text-gray-500">
                        <div class="space-y-1">
                            <div class="flex items-center gap-1">
                                <span class="">📍</span>
                                <span class="">Warrensburg, MO</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="">🐾</span>
                                <span class="">Domestic Long Hair</span>
                            </div>
                            <div class="flex items-center gap-3 pt-1 text-gray-600 font-medium">
                                <span class="">🎂 Adult</span>
                                <span class="">♀ Female</span>
                            </div>
                        </div>
                        <!-- Card Buttons -->
                        <div class="pt-2 flex items-center gap-1.5">
                            <button
                                class="flex-1 py-1.5 rounded-lg bg-brand-primary text-white text-[10px] font-bold hover:bg-brand-hover">
                                Adopt Me
                            </button>
                            <button
                                class="flex-1 py-1.5 rounded-lg border border-gray-200 text-brand-primary text-[10px] font-bold hover:bg-gray-50 flex items-center justify-center gap-0.5">
                                <span class="">More About Me</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pet Card 3: Polly -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm flex flex-col">
                    <!-- Wireframe Box Image Container with Heart Button -->
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="browse2.jpg" alt="Ellie" class="w-full h-full object-cover">
                        <svg class="wireframe-cross" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="0" y2="100"></line>
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="100" y2="0"></line>
                        </svg>
                        <button aria-label="Favorite Polly"
                            class="absolute top-2.5 right-2.5 w-7 h-7 rounded-full bg-white/90 hover:bg-white text-brand-primary flex items-center justify-center shadow">
                            <svg class="w-3.5 h-3.5 stroke-current stroke-2 fill-none" viewBox="0 0 24 24">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                        <div class="absolute bottom-2 left-3 text-white font-black text-lg drop-shadow-md">
                            Polly
                        </div>
                    </div>
                    <!-- Card Info Body -->
                    <div class="p-3.5 space-y-2 flex-grow flex flex-col justify-between text-[11px] text-gray-500">
                        <div class="space-y-1">
                            <div class="flex items-center gap-1">
                                <span class="">📍</span>
                                <span class="">Sedalia, MO</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="">🐾</span>
                                <span class="">Domestic Short Hair</span>
                            </div>
                            <div class="flex items-center gap-3 pt-1 text-gray-600 font-medium">
                                <span class="">🎂 Kitten</span>
                                <span class="">♀ Female</span>
                            </div>
                        </div>
                        <!-- Card Buttons -->
                        <div class="pt-2 flex items-center gap-1.5">
                            <button
                                class="flex-1 py-1.5 rounded-lg bg-brand-primary text-white text-[10px] font-bold hover:bg-brand-hover">
                                Adopt Me
                            </button>
                            <button
                                class="flex-1 py-1.5 rounded-lg border border-gray-200 text-brand-primary text-[10px] font-bold hover:bg-gray-50 flex items-center justify-center gap-0.5">
                                <span class="">More About Me</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pet Card 4: Bailey -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm flex flex-col">
                    <!-- Wireframe Box Image Container with Heart Button -->
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="browse6.jpg" alt="Ellie" class="w-full h-full object-cover">
                        <svg class="wireframe-cross" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="0" y2="100"></line>
                            <line stroke="#cbd5e1" stroke-width="1.5" vector-effect="non-scaling-stroke" x1="0" x2="100"
                                y1="100" y2="0"></line>
                        </svg>
                        <button aria-label="Favorite Bailey"
                            class="absolute top-2.5 right-2.5 w-7 h-7 rounded-full bg-white/90 hover:bg-white text-brand-primary flex items-center justify-center shadow">
                            <svg class="w-3.5 h-3.5 stroke-current stroke-2 fill-none" viewBox="0 0 24 24">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                        <div class="absolute bottom-2 left-3 text-white font-black text-lg drop-shadow-md">
                            Bailey
                        </div>
                    </div>
                    <!-- Card Info Body -->
                    <div class="p-3.5 space-y-2 flex-grow flex flex-col justify-between text-[11px] text-gray-500">
                        <div class="space-y-1">
                            <div class="flex items-center gap-1">
                                <span class="">📍</span>
                                <span class="">Warrensburg, MO</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="">🐾</span>
                                <span class="">Domestic Long Hair</span>
                            </div>
                            <div class="flex items-center gap-3 pt-1 text-gray-600 font-medium">
                                <span class="">🎂 (3-8 years)</span>
                                <span class="">♀ Female</span>
                            </div>
                        </div>
                        <!-- Card Buttons -->
                        <div class="pt-2 flex items-center gap-1.5">
                            <button
                                class="flex-1 py-1.5 rounded-lg bg-brand-primary text-white text-[10px] font-bold hover:bg-brand-hover">
                                Adopt Me
                            </button>
                            <button
                                class="flex-1 py-1.5 rounded-lg border border-gray-200 text-brand-primary text-[10px] font-bold hover:bg-gray-50 flex items-center justify-center gap-0.5">
                                <span class="">More About Me</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: RecommendationsSection -->
    </main>
    <!-- END: MainContentContainer -->
    <!-- BEGIN: MainFooter -->
    <footer class="w-full bg-[#27292d] text-white pt-14 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 pb-12 border-b border-gray-700/60">
                <!-- Footer Column 1: Brand & Bio -->
                <div class="md:col-span-4 space-y-4">
                    <a href="#" class="flex items-center">
                        <img src="footer.png" alt="Adoptly Logo" class="h-10 w-auto">
                    </a>
                    <p class="text-xs text-gray-400 max-w-xs leading-relaxed">
                        Helping rescue pets find safe, loving homes and lifelong companionship.
                    </p>
                    <!-- Social Icons -->
                    <div class="flex items-center space-x-2.5 pt-2">
                        <a class="w-7 h-7 rounded bg-[#373a40] flex items-center justify-center text-gray-300 hover:text-white hover:bg-brand-primary transition-colors text-xs font-bold"
                            href="#">f</a>
                        <a class="w-7 h-7 rounded bg-[#373a40] flex items-center justify-center text-gray-300 hover:text-white hover:bg-brand-primary transition-colors text-xs font-bold"
                            href="#">t</a>
                        <a class="w-7 h-7 rounded bg-[#373a40] flex items-center justify-center text-gray-300 hover:text-white hover:bg-brand-primary transition-colors text-xs font-bold"
                            href="#">in</a>
                        <a class="w-7 h-7 rounded bg-[#373a40] flex items-center justify-center text-gray-300 hover:text-white hover:bg-brand-primary transition-colors text-xs font-bold"
                            href="#">ig</a>
                        <a class="w-7 h-7 rounded bg-[#373a40] flex items-center justify-center text-gray-300 hover:text-white hover:bg-brand-primary transition-colors text-xs font-bold"
                            href="#">yt</a>
                    </div>
                </div>
                <!-- Footer Column 2: Browse Links -->
                <div class="md:col-span-2 md:col-start-6 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-200">Browse</h4>
                    <ul class="space-y-2 text-xs text-gray-400">
                        <li class=""><a class="hover:text-white transition-colors" href="#">Browse Pets</a></li>
                        <li class=""><a class="hover:text-white transition-colors" href="#">Adoption Process</a></li>
                        <li class=""><a class="hover:text-white transition-colors" href="#">Success Stories</a></li>
                        <li class=""><a class="hover:text-white transition-colors" href="#">About Us</a></li>
                    </ul>
                </div>
                <!-- Footer Column 3: Resources Links -->
                <div class="md:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-200">Resources</h4>
                    <ul class="space-y-2 text-xs text-gray-400">
                        <li class=""><a class="hover:text-white transition-colors" href="#">FAQ</a></li>
                        <li class=""><a class="hover:text-white transition-colors" href="#">Pet Care Tips</a></li>
                        <li class=""><a class="hover:text-white transition-colors" href="#">Volunteer</a></li>
                        <li class=""><a class="hover:text-white transition-colors" href="#">Support Center</a></li>
                    </ul>
                </div>
                <!-- Footer Column 4: Contact Links -->
                <div class="md:col-span-3 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-200">Contact</h4>
                    <ul class="space-y-1.5 text-xs text-gray-400 leading-relaxed">
                        <li class=""><a class="hover:text-white transition-colors"
                                href="mailto:helloadoptly@gmail.com">helloadoptly@gmail.com</a></li>
                        <li class="">+1 (234) 567-890</li>
                        <li class="">New York, USA</li>
                    </ul>
                </div>
            </div>
            <!-- Legal & Copyright Line -->
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-[11px] text-gray-500">
                <div class="">© 2026 Adoptly. All rights reserved.</div>
                <div class="flex space-x-4 mt-2 sm:mt-0">
                    <a class="hover:text-gray-400" href="#">Privacy Policy</a>
                    <span class="">|</span>
                    <a class="hover:text-gray-400" href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: MainFooter -->

    <script>
        // Make Share Profile button work
        document.querySelector('button[title="Share profile"]')?.addEventListener('click', async () => {
            const shareData = {
                title: 'Adopt Bella on Adoptly',
                text: 'Meet Bella – a sweet cat looking for a forever home!',
                url: window.location.href
            };
            try {
                // Use native share if available (mobile)
                if (navigator.share) {
                    await navigator.share(shareData);
                } else {
                    // Fallback: copy link to clipboard
                    await navigator.clipboard.writeText(window.location.href);
                    alert('Link copied to clipboard!');
                }
            } catch (err) {
                console.log('Share cancelled or failed');
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const mainImage = document.getElementById('mainPetImage');
            const thumbnails = document.querySelectorAll('.thumbnail');
            if (!mainImage) {
                console.log('Main image not found');
                return;
            }
            thumbnails.forEach(function (thumb) {
                thumb.addEventListener('click', function () {
                    const newSrc = this.getAttribute('data-src');
                    mainImage.src = newSrc;
                    // Reset all thumbnails
                    thumbnails.forEach(function (t) {
                        t.classList.remove('border-2', 'border-brand-primary');
                        t.classList.add('border', 'border-gray-200', 'opacity-85');
                    });
                    // Highlight the clicked one
                    this.classList.remove('border', 'border-gray-200', 'opacity-85');
                    this.classList.add('border-2', 'border-brand-primary');
                });
            });

            // Make all heart icons clickable
            document.querySelectorAll('button[title="Save to favorites"], button[aria-label^="Favorite"]').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const svg = this.querySelector('svg');
                    const path = svg.querySelector('path');
                    // Toggle filled / empty
                    if (path.getAttribute('fill') === 'currentColor' || path.classList.contains('filled')) {
                        // Make empty
                        path.setAttribute('fill', 'none');
                        path.classList.remove('filled');
                        this.classList.remove('text-brand-primary');
                        this.classList.add('text-gray-700');
                    } else {
                        // Make filled
                        path.setAttribute('fill', 'currentColor');
                        path.classList.add('filled');
                        this.classList.remove('text-gray-700');
                        this.classList.add('text-brand-primary');
                    }
                });
            });

            // FAQ Accordion
            document.querySelectorAll('.faq-header').forEach(header => {
                header.addEventListener('click', () => {
                    const item = header.closest('.faq-item');
                    const content = item.querySelector('.faq-content');
                    const isOpen = item.classList.contains('active');

                    // Close all other items
                    document.querySelectorAll('.faq-item').forEach(other => {
                        other.classList.remove('active');
                        other.querySelector('.faq-content').style.display = 'none';
                    });

                    // Toggle current item
                    if (!isOpen) {
                        item.classList.add('active');
                        content.style.display = 'block';
                    }
                });
            });
        });
    </script>
</body>

</html>