<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Saved Animals &amp; Favorite Pets | Adoptly</title>
    <!-- Google Fonts: Poppins & Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS v3 with Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coral: {
                            DEFAULT: '#E05A4F',
                            50: '#FDF6F5',
                            100: '#FAEBE9',
                            500: '#E05A4F',
                            600: '#CC4A3F',
                            700: '#B03C32',
                        },
                        warmBeige: '#F7E9D7',
                        pageBg: '#FCF9F8',
                        cardBorder: '#EAE6E4',
                        darkFooter: '#181818',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Custom Styles: Wireframe Diagonal Lines and Utilities -->
    <style data-purpose="wireframe-styling">
        .wireframe-photo {
            position: relative;
            background-color: #F1EBE7;
            overflow: hidden;
        }

        .wireframe-photo::before,
        .wireframe-photo::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .wireframe-photo::before {
            background: linear-gradient(to top right, transparent calc(50% - 0.75px), #D4C9C3 calc(50% - 0.5px), #D4C9C3 calc(50% + 0.5px), transparent calc(50% + 0.75px));
        }

        .wireframe-photo::after {
            background: linear-gradient(to bottom right, transparent calc(50% - 0.75px), #D4C9C3 calc(50% - 0.5px), #D4C9C3 calc(50% + 0.5px), transparent calc(50% + 0.75px));
        }
    </style>
    <style data-purpose="interactive-helpers">
        .card-transition {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-transition:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.03);
        }

        .pet-card.hidden {
            display: none;
        }

        :root {
            --coral: #E05A4F;

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
        }
    </style>
</head>

<body class="bg-pageBg text-neutral-800 font-poppins min-h-screen flex flex-col antialiased">
    <!-- BEGIN: MainHeader -->
    <div id="navbar-placeholder"></div>
    <!-- END: MainHeader -->
    <!-- BEGIN: MainContent -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-6">
        <!-- BEGIN: Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="flex items-center text-xs font-medium text-neutral-500 mb-4">
            <a class="hover:text-neutral-800" href="index.php">Home</a>
            <span class="mx-2 text-neutral-400">/</span>
            <span class="text-neutral-900 font-semibold">Saved Animals</span>
        </nav>
        <!-- END: Breadcrumbs -->
        <!-- BEGIN: SavedAnimalBanner -->
        <section
            class="bg-gradient-to-r from-coral-50 via-warmBeige/40 to-white rounded-2xl p-6 sm:p-8 border border-[#EAE6E4] mb-8 relative overflow-hidden"
            data-purpose="banner-header">
            <div class="max-w-3xl relative z-10">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-coral-200 text-coral text-xs font-semibold uppercase tracking-wider mb-3">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                        </path>
                    </svg>
                    Wishlist &amp; Watchlist
                </div>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-neutral-900 tracking-tight">Your Saved
                    Animals &amp; Favorites</h1>
                <p class="mt-2 text-sm sm:text-base text-neutral-600 leading-relaxed">
                    You have <strong class="text-neutral-800 font-semibold">4 animals</strong> in your wishlist. Track
                    their real-time adoption status, review profile details, or take the next step toward welcoming them
                    home.
                </p>
                <!-- Summary Pills & Share Wishlist Action -->
                <div class="mt-5 flex flex-wrap items-center gap-3">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-md text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5"></span>
                        3 Available for Adoption
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-md text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-1.5"></span>
                        1 Application In Review
                    </span>
                    <button
                        class="ml-auto inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-700 bg-white hover:bg-neutral-50 px-3 py-1.5 rounded-lg border border-neutral-300 shadow-sm transition"
                        type="button">
                        <svg class="w-3.5 h-3.5 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        Share Wishlist
                    </button>
                </div>
            </div>
        </section>
        <!-- END: SavedAnimalBanner -->
        <!-- BEGIN: ControlsBar -->
        <section
            class="mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-4 rounded-xl border border-[#EAE6E4]"
            data-purpose="filtering-and-sorting">
            <!-- Filter Tabs -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0" id="filterTabs">
                <button data-filter="all"
                    class="filter-btn px-3.5 py-1.5 text-xs font-semibold rounded-lg bg-neutral-900 text-white shadow-sm">All
                    Animals (4)</button>
                <button data-filter="cat"
                    class="filter-btn px-3.5 py-1.5 text-xs font-medium rounded-lg text-neutral-600 hover:bg-neutral-100 transition">Cats
                    (3)</button>
                <button data-filter="dog"
                    class="filter-btn px-3.5 py-1.5 text-xs font-medium rounded-lg text-neutral-600 hover:bg-neutral-100 transition">Dogs
                    (1)</button>
                <div class="h-4 w-px bg-neutral-200 mx-1"></div>
                <button data-filter="available"
                    class="filter-btn px-3.5 py-1.5 text-xs font-medium rounded-lg text-emerald-700 bg-emerald-50/60 hover:bg-emerald-100 transition">Available
                    Only (3)</button>
            </div>
            <!-- Sort Dropdown & Search -->
            <div class="flex items-center gap-3">
                <label class="text-xs font-medium text-neutral-500 whitespace-nowrap" for="sortPets">Sort by:</label>
                <select
                    class="text-xs font-medium text-neutral-700 border-neutral-300 rounded-lg py-1.5 pl-2.5 pr-8 focus:ring-coral focus:border-coral"
                    id="sortPets">
                    <option value="recent">Recently Saved</option>
                    <option value="available">Status: Available First</option>
                    <option value="age">Age: Youngest First</option>
                    <option value="distance">Distance: Closest</option>
                </select>
            </div>
        </section>
        <!-- END: ControlsBar -->
        <!-- BEGIN: FavoritePetCardsGrid -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" data-purpose="saved-pets-grid"
            id="petsGrid">
            <!-- CARD 1: Bella (Available) -->
            <article
                class="pet-card bg-white rounded-2xl border border-[#EAE6E4] overflow-hidden flex flex-col card-transition shadow-sm"
                data-purpose="pet-card" data-species="cat" data-status="available" data-saved="2" data-age="0.5"
                data-distance="4.2">
                <div class="aspect-[4/3] w-full relative overflow-hidden">
                    <img src="browse1.jpg" alt="Bella" class="w-full h-full object-cover">
                    <button aria-label="Remove Bella from Favorites"
                        class="absolute top-3 right-3 z-10 w-8 h-8 rounded-full bg-white/90 hover:bg-white text-coral flex items-center justify-center shadow-sm transition hover:scale-105"
                        title="Remove Bella from Favorites" type="button">
                        <svg class="w-4 h-4 fill-coral" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 flex-grow flex flex-col">
                    <div class="flex items-center justify-between mb-2">
                        <span
                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Available
                        </span>
                        <span class="text-[11px] text-neutral-400">Saved 2d ago</span>
                    </div>
                    <div class="mb-3">
                        <h2 class="text-lg font-bold text-neutral-900 leading-tight">Bella</h2>
                        <p class="text-xs text-neutral-500 mt-0.5">Domestic Short Hair Mix</p>
                    </div>
                    <div
                        class="grid grid-cols-2 gap-1.5 py-2 border-y border-neutral-100 text-xs text-neutral-600 mb-3">
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">🎂</span>
                            <span class="">Kitten (6 mos)</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">♀</span>
                            <span class="">Female</span>
                        </div>
                    </div>
                    <div class="text-xs text-neutral-500 mb-4 flex flex-col gap-1">
                        <div class="flex items-start gap-1.5">
                            <svg class="w-3.5 h-3.5 text-neutral-400 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <span class="truncate">Austin Animal Center • Austin, TX</span>
                        </div>
                        <div class="text-[11px] text-neutral-400 pl-5">Approx. 4.2 miles away</div>
                    </div>
                    <div class="mt-auto space-y-2 pt-2 border-t border-neutral-100" data-purpose="quick-actions">
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg bg-coral hover:bg-coral-600 text-white text-xs font-semibold transition shadow-sm"
                            href="petdetails.html">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                </path>
                            </svg>
                            Adopt Me
                        </a>
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg border border-neutral-300 hover:border-neutral-400 bg-white text-neutral-700 text-xs font-medium transition"
                            href="petdetails.html">
                            <svg class="w-3.5 h-3.5 text-neutral-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            More About Me
                        </a>
                        <button
                            class="w-full text-center text-[11px] text-neutral-400 hover:text-neutral-600 transition pt-1"
                            type="button">
                            Remove from Favorites
                        </button>
                    </div>
                </div>
            </article>
            <!-- CARD 2: Polly (Available) -->
            <article
                class="pet-card bg-white rounded-2xl border border-[#EAE6E4] overflow-hidden flex flex-col card-transition shadow-sm"
                data-purpose="pet-card" data-species="cat" data-status="available" data-saved="4" data-age="0.25"
                data-distance="999">
                <div class="aspect-[4/3] w-full relative overflow-hidden">
                    <img src="browse2.jpg" alt="Polly" class="w-full h-full object-cover">
                    <button aria-label="Remove Polly from Favorites"
                        class="absolute top-3 right-3 z-10 w-8 h-8 rounded-full bg-white/90 hover:bg-white text-coral flex items-center justify-center shadow-sm transition hover:scale-105"
                        title="Remove Polly from Favorites" type="button">
                        <svg class="w-4 h-4 fill-coral" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 flex-grow flex flex-col">
                    <div class="flex items-center justify-between mb-2">
                        <span
                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Available
                        </span>
                        <span class="text-[11px] text-neutral-400">Saved 4d ago</span>
                    </div>
                    <div class="mb-3">
                        <h2 class="text-lg font-bold text-neutral-900 leading-tight">Polly</h2>
                        <p class="text-xs text-neutral-500 mt-0.5">Domestic Short Hair</p>
                    </div>
                    <div
                        class="grid grid-cols-2 gap-1.5 py-2 border-y border-neutral-100 text-xs text-neutral-600 mb-3">
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">🎂</span>
                            <span class="">Young Kitten</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">♀</span>
                            <span class="">Female</span>
                        </div>
                    </div>
                    <div class="text-xs text-neutral-500 mb-4 flex flex-col gap-1">
                        <div class="flex items-start gap-1.5">
                            <svg class="w-3.5 h-3.5 text-neutral-400 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <span class="truncate">Sedalia Animal Haven • Sedalia, MO</span>
                        </div>
                        <div class="text-[11px] text-neutral-400 pl-5">Transport Available</div>
                    </div>
                    <div class="mt-auto space-y-2 pt-2 border-t border-neutral-100" data-purpose="quick-actions">
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg bg-coral hover:bg-coral-600 text-white text-xs font-semibold transition shadow-sm"
                            href="#">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                </path>
                            </svg>
                            Adopt Me
                        </a>
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg border border-neutral-300 hover:border-neutral-400 bg-white text-neutral-700 text-xs font-medium transition"
                            href="#">
                            <svg class="w-3.5 h-3.5 text-neutral-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            More About Me
                        </a>
                        <button
                            class="w-full text-center text-[11px] text-neutral-400 hover:text-neutral-600 transition pt-1"
                            type="button">
                            Remove from Favorites
                        </button>
                    </div>
                </div>
            </article>
            <!-- CARD 3: Marley (Pending Adoption) -->
            <article
                class="pet-card bg-white rounded-2xl border border-[#EAE6E4] overflow-hidden flex flex-col card-transition shadow-sm relative"
                data-purpose="pet-card" data-species="dog" data-status="pending" data-saved="7" data-age="5"
                data-distance="120">
                <div class="aspect-[4/3] w-full relative overflow-hidden">
                    <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
                    <button aria-label="Remove Marley from Favorites"
                        class="absolute top-3 right-3 z-10 w-8 h-8 rounded-full bg-white/90 hover:bg-white text-coral flex items-center justify-center shadow-sm transition hover:scale-105"
                        title="Remove Marley from Favorites" type="button">
                        <svg class="w-4 h-4 fill-coral" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 flex-grow flex flex-col">
                    <div class="flex items-center justify-between mb-2">
                        <span
                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-50 text-amber-800 border border-amber-300">
                            <svg class="w-3 h-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                                <path d="M12 6v6l4 2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                </path>
                            </svg>
                            Pending Adoption
                        </span>
                        <span class="text-[11px] text-amber-700 font-medium">Under Review</span>
                    </div>
                    <div class="mb-3">
                        <h2 class="text-lg font-bold text-neutral-900 leading-tight">Marley</h2>
                        <p class="text-xs text-neutral-500 mt-0.5">Catahoula &amp; Boxer Mix</p>
                    </div>
                    <div
                        class="grid grid-cols-2 gap-1.5 py-2 border-y border-neutral-100 text-xs text-neutral-600 mb-3">
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">🎂</span>
                            <span class="">3-8 years</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">♀</span>
                            <span class="">Female</span>
                        </div>
                    </div>
                    <div class="text-xs text-neutral-500 mb-4 flex flex-col gap-1">
                        <div class="flex items-start gap-1.5">
                            <svg class="w-3.5 h-3.5 text-neutral-400 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <span class="truncate">Green Ridge Rescue • MO</span>
                        </div>
                        <div class="text-[11px] text-neutral-400 pl-5">1 applicant ahead in queue</div>
                    </div>
                    <div class="mt-auto space-y-2 pt-2 border-t border-neutral-100" data-purpose="quick-actions">
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg bg-neutral-800 hover:bg-neutral-900 text-white text-xs font-semibold transition shadow-sm"
                            href="#">
                            <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                            </svg>
                            Join Backup Waitlist
                        </a>
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg border border-neutral-300 hover:border-neutral-400 bg-white text-neutral-700 text-xs font-medium transition"
                            href="#">
                            <svg class="w-3.5 h-3.5 text-neutral-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            More About Me
                        </a>
                        <button
                            class="w-full text-center text-[11px] text-neutral-400 hover:text-neutral-600 transition pt-1"
                            type="button">
                            Remove from Favorites
                        </button>
                    </div>
                </div>
            </article>
            <!-- CARD 4: Bailey (Available) -->
            <article
                class="pet-card bg-white rounded-2xl border border-[#EAE6E4] overflow-hidden flex flex-col card-transition shadow-sm"
                data-purpose="pet-card" data-species="cat" data-status="available" data-saved="7" data-age="3"
                data-distance="85">
                <div class="aspect-[4/3] w-full relative overflow-hidden">
                    <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
                    <button aria-label="Remove Bailey from Favorites"
                        class="absolute top-3 right-3 z-10 w-8 h-8 rounded-full bg-white/90 hover:bg-white text-coral flex items-center justify-center shadow-sm transition hover:scale-105"
                        title="Remove Bailey from Favorites" type="button">
                        <svg class="w-4 h-4 fill-coral" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 flex-grow flex flex-col">
                    <div class="flex items-center justify-between mb-2">
                        <span
                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Available
                        </span>
                        <span class="text-[11px] text-neutral-400">Saved 1w ago</span>
                    </div>
                    <div class="mb-3">
                        <h2 class="text-lg font-bold text-neutral-900 leading-tight">Bailey</h2>
                        <p class="text-xs text-neutral-500 mt-0.5">Domestic Long Hair</p>
                    </div>
                    <div
                        class="grid grid-cols-2 gap-1.5 py-2 border-y border-neutral-100 text-xs text-neutral-600 mb-3">
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">🎂</span>
                            <span class="">Adult (3 yrs)</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-neutral-400 text-[10px]">♀</span>
                            <span class="">Female</span>
                        </div>
                    </div>
                    <div class="text-xs text-neutral-500 mb-4 flex flex-col gap-1">
                        <div class="flex items-start gap-1.5">
                            <svg class="w-3.5 h-3.5 text-neutral-400 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <span class="truncate">Warrensburg Care • MO</span>
                        </div>
                        <div class="text-[11px] text-neutral-400 pl-5">Spayed &amp; Microchipped</div>
                    </div>
                    <div class="mt-auto space-y-2 pt-2 border-t border-neutral-100" data-purpose="quick-actions">
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg bg-coral hover:bg-coral-600 text-white text-xs font-semibold transition shadow-sm"
                            href="#">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                </path>
                            </svg>
                            Adopt Me
                        </a>
                        <a class="w-full flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg border border-neutral-300 hover:border-neutral-400 bg-white text-neutral-700 text-xs font-medium transition"
                            href="#">
                            <svg class="w-3.5 h-3.5 text-neutral-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            More About Me
                        </a>
                        <button
                            class="w-full text-center text-[11px] text-neutral-400 hover:text-neutral-600 transition pt-1"
                            type="button">
                            Remove from Favorites
                        </button>
                    </div>
                </div>
            </article>
        </section>
        <!-- END: FavoritePetCardsGrid -->
        <!-- BEGIN: HelperAndNextSteps -->
        <section class="mt-14 mb-8 bg-white border border-[#EAE6E4] rounded-2xl p-6 lg:p-8"
            data-purpose="adoption-tips-and-alerts">
            <div
                class="flex flex-col lg:flex-row items-start lg:items-center justify-between pb-6 mb-6 border-b border-neutral-100 gap-4">
                <div>
                    <h2 class="text-xl font-bold text-neutral-900">Can’t Decide Yet? Next Recommended Steps</h2>
                    <p class="text-sm text-neutral-500 mt-1">Our shelter partners process applicants in order of
                        pre-qualification. Here is how to keep your favorites reserved.</p>
                </div>
                <div
                    class="flex items-center gap-3 bg-coral-50 border border-coral-200 px-4 py-2.5 rounded-xl text-xs text-neutral-700">
                    <svg class="w-4 h-4 text-coral flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class=""><strong>Instant Status Alerts:</strong> SMS/Email notifications on application
                        updates are active.</span>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-4 rounded-xl bg-pageBg border border-neutral-200/80 flex flex-col justify-between">
                    <div>
                        <span
                            class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white font-bold text-coral border border-coral-200 text-xs mb-3 shadow-xs">1</span>
                        <h3 class="text-sm font-semibold text-neutral-900">View Pet Details</h3>
                        <p class="text-xs text-neutral-500 mt-1.5 leading-relaxed">Review in-depth personality profiles,
                            health records, behavioral notes, and daily habits to see which companion aligns with your
                            home.</p>
                    </div>
                    <a class="mt-4 text-xs font-semibold text-coral hover:underline inline-flex items-center gap-1"
                        href="petdetails.html">
                        View pet profiles →
                    </a>
                </div>
                <div class="p-4 rounded-xl bg-pageBg border border-neutral-200/80 flex flex-col justify-between">
                    <div>
                        <span
                            class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white font-bold text-coral border border-coral-200 text-xs mb-3 shadow-xs">2</span>
                        <h3 class="text-sm font-semibold text-neutral-900">Check Fit &amp; Requirements</h3>
                        <p class="text-xs text-neutral-500 mt-1.5 leading-relaxed">Compare pet requirements against your
                            living situation, family dynamic, and lifestyle to ensure a joyful, compatible match.</p>
                    </div>
                    <a class="mt-4 text-xs font-semibold text-coral hover:underline inline-flex items-center gap-1"
                        href="#">
                        Check eligibility &amp; fit →
                    </a>
                </div>
                <div class="p-4 rounded-xl bg-pageBg border border-neutral-200/80 flex flex-col justify-between">
                    <div>
                        <span
                            class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white font-bold text-coral border border-coral-200 text-xs mb-3 shadow-xs">3</span>
                        <h3 class="text-sm font-semibold text-neutral-900">View Adoption Process</h3>
                        <p class="text-xs text-neutral-500 mt-1.5 leading-relaxed">Understand each step from initial
                            screening and landlord checks to virtual meet &amp; greets and homecoming preparation.</p>
                    </div>
                    <a class="mt-4 text-xs font-semibold text-coral hover:underline inline-flex items-center gap-1"
                        href="#">
                        Explore adoption steps →
                    </a>
                </div>
            </div>
        </section>
        <!-- END: HelperAndNextSteps -->
    </main>
    <!-- END: MainContent -->
    <!-- BEGIN: GlobalFooter -->
    <div id="footer-placeholder"></div>
    <script src="js/Components.js"></script>
    <!-- END: GlobalFooter -->
    <script>
        // Filter + Sort functionality for Saved Animals
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const petCards = document.querySelectorAll('.pet-card');
            const sortSelect = document.getElementById('sortPets');
            const grid = document.getElementById('petsGrid');
            let currentFilter = 'all';
            function applyFilterAndSort() {
                // 1. Filter
                petCards.forEach(card => {
                    const species = card.dataset.species;
                    const status = card.dataset.status;
                    let show = false;
                    if (currentFilter === 'all') {
                        show = true;
                    } else if (currentFilter === 'cat' || currentFilter === 'dog') {
                        show = species === currentFilter;
                    } else if (currentFilter === 'available') {
                        show = status === 'available';
                    }
                    card.classList.toggle('hidden', !show);
                });
                // 2. Sort visible cards
                const visibleCards = Array.from(petCards).filter(c => !c.classList.contains('hidden'));
                const sortBy = sortSelect.value;
                visibleCards.sort((a, b) => {
                    if (sortBy === 'recent') {
                        return Number(a.dataset.saved) - Number(b.dataset.saved); // smaller days = more recent
                    }
                    if (sortBy === 'available') {
                        // available first
                        if (a.dataset.status === 'available' && b.dataset.status !== 'available') return -1;
                        if (a.dataset.status !== 'available' && b.dataset.status === 'available') return 1;
                        return 0;
                    }
                    if (sortBy === 'age') {
                        return Number(a.dataset.age) - Number(b.dataset.age); // youngest first
                    }
                    if (sortBy === 'distance') {
                        return Number(a.dataset.distance) - Number(b.dataset.distance); // closest first
                    }
                    return 0;
                });
                // Re-append in sorted order
                visibleCards.forEach(card => grid.appendChild(card));
            }
            // Filter button clicks
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active styles
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-neutral-900', 'text-white', 'shadow-sm', 'font-semibold');
                        b.classList.add('text-neutral-600', 'font-medium');
                        // Special handling for Available Only button
                        if (b.dataset.filter === 'available') {
                            b.classList.remove('bg-emerald-50/60', 'text-emerald-700');
                            b.classList.add('text-neutral-600');
                        }
                    });
                    // Activate clicked button
                    btn.classList.remove('text-neutral-600', 'font-medium');
                    btn.classList.add('bg-neutral-900', 'text-white', 'shadow-sm', 'font-semibold');
                    // Special style for Available Only when active
                    if (btn.dataset.filter === 'available') {
                        btn.classList.remove('bg-neutral-900', 'text-white');
                        btn.classList.add('bg-emerald-600', 'text-white');
                    }
                    currentFilter = btn.dataset.filter;
                    applyFilterAndSort();
                });
            });
            // Sort change
            sortSelect.addEventListener('change', applyFilterAndSort);
            // Initial state
            applyFilterAndSort();
        });
    </script>
</body>

</html>