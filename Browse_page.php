
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Adoptly - Browse Pets</title>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        brand: { DEFAULT: '#D96552', hover: '#c55644', light: '#FAECE9', dark: '#27292D', muted: '#7A7D84' },
        page: '#FAF5F3'
      },
      fontFamily: { sans: ['Poppins', 'sans-serif'] }
    }
  }
}
</script>
<style>
body { background-color: #FAF5F3; font-family: 'Poppins', sans-serif; color: #333333; }
.custom-select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23D96552' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right 0.75rem center;
  background-repeat: no-repeat;
  background-size: 1.25em 1.25em;
  padding-right: 2.5rem;
  appearance: none;
}
.chevron {
  transition: transform 0.2s ease;
}
.rotate-180 {
  transform: rotate(180deg);
}
/* Heart button (same as Donation page) */
.fav { 
  width: 36px; 
  height: 36px; 
  border: 0; 
  border-radius: 50%; 
  background: #FFE1DD; 
  color: #E05A4F; 
  font-size: 16px; 
  cursor: pointer; 
  transition: .2s; 
}
.fav:hover { 
  background: #E05A4F; 
  color: #fff; 
}
</style>
</head>
<body class="min-h-screen flex flex-col antialiased selection:bg-rose-100 selection:text-brand">

<!-- NavigationBar -->
<header class="w-full bg-[#FAF5F3] border-b border-[#F0E6E3] sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
    <a href="#" class="flex items-center">
  <img src="../photos/image-removebg-preview (1).png" alt=".logo" class="h-10 w-auto">
</a>
    <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
      <a class="text-brand font-semibold transition-colors" href="../php/Browse_page.php">Browse pets</a>
      <a class="text-gray-600 hover:text-brand transition-colors" href="../php/Adoption_process.php">adoption process</a>
      <a class="text-gray-600 hover:text-brand transition-colors" href="../php/Donation.php">Donate</a>
      <a class="text-gray-600 hover:text-brand transition-colors" href="../php/About_us.php">About</a>
    </nav>
    <div class="flex items-center space-x-6">
      <button aria-label="Favorites" class="fav">
          <i class="fa-solid fa-heart"></i>
        </button>
      <a class="text-sm font-medium text-brand hover:underline" href="../php/Log_in.php">Login</a>
      <a class="px-6 py-2 rounded-full bg-brand text-white text-sm font-medium hover:bg-brand-hover transition-colors shadow-sm" href="../php/Sign_in.php">Sign in</a>
    </div>
  </div>
</header>

<main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
  <nav class="text-xs text-gray-500 mb-6 flex items-center gap-2">
    <a class="hover:underline text-gray-600 font-medium" href="../php/index.php">Home</a>
    <i class="fa-solid fa-chevron-right text-[10px] text-gray-400"></i>
    <span class="text-brand font-medium">Browse Pets</span>
  </nav>

  <section class="mb-8">
    <h1 class="text-3xl sm:text-4xl font-bold text-[#2A2B2E] tracking-tight">Find Your Perfect Companion</h1>
    <p class="mt-2 text-gray-500 text-sm sm:text-base">Browse adoptable pets from trusted shelters and rescue organizations.</p>
  </section>

  <div class="flex flex-col lg:flex-row items-start gap-8">
    <!-- Filter Sidebar -->
    <aside class="w-full lg:w-[310px] flex-shrink-0">
      <div class="bg-white rounded-3xl p-6 shadow-sm border border-[#F3EBE7]">
        <div class="mb-5">
          <h2 class="text-xl font-bold text-brand tracking-tight">Filter Results</h2>
          <p class="text-xs text-gray-500 mt-0.5 font-normal">Find your perfect match</p>
        </div>

        <form class="space-y-4" onsubmit="event.preventDefault();">
          <!-- Pet Type -->
          <div>
            <label class="block text-xs font-medium text-gray-700 mb-1.5">Pet Type</label>
            <select id="filterType" class="custom-select w-full rounded-2xl border-gray-200 text-xs py-3 px-4 focus:ring-1 focus:ring-brand focus:border-brand bg-white text-gray-700 shadow-sm">
              <option value="All" selected>All Animals</option>
              <option value="Dog">Dogs</option>
              <option value="Cat">Cats</option>
              <option value="Rabbit">Rabbits</option>
              <option value="Bird">Birds</option>
            </select>
          </div>

          <!-- Breed -->
          <div>
            <label class="block text-xs font-medium text-gray-700 mb-1.5">breed</label>
            <select id="filterBreed" class="custom-select w-full rounded-2xl border-gray-200 text-xs py-3 px-4 focus:ring-1 focus:ring-brand focus:border-brand bg-white text-gray-700 shadow-sm">
              <option value="All" selected>Any Breed</option>
              <option value="Domestic Short Hair">Domestic Short Hair</option>
              <option value="Husky">Husky</option>
              <option value="American">American</option>
              <option value="Catahoula">Catahoula Leopard Dog & Boxer</option>
              <option value="Lovebird">Lovebird</option>
              <option value="Mixed">Mixed Breed</option>
            </select>
          </div>

          <!-- Location -->
          <div>
            <label class="block text-xs font-medium text-gray-700 mb-1.5">Location</label>
            <input id="filterLocation" class="w-full rounded-2xl border-gray-200 text-xs py-3 px-4 focus:ring-1 focus:ring-brand focus:border-brand placeholder-gray-400 shadow-sm" placeholder="Enter City" type="text">
          </div>

          <!-- Expandable Filters (now connected to pets) -->
          <div class="pt-2 space-y-3">
            <!-- Age -->
            <div class="filter-group">
              <div class="filter-header flex items-center justify-between border border-gray-200 rounded-2xl px-4 py-3 cursor-pointer hover:border-brand transition-colors bg-white">
                <div class="flex items-center gap-3">
                  <i class="fa-solid fa-cake-candles text-brand text-sm w-4"></i>
                  <span class="text-xs font-medium text-gray-700">Age</span>
                </div>
                <i class="fa-solid fa-chevron-down text-brand text-xs chevron"></i>
              </div>
              <div class="filter-content hidden mt-2 pl-2 space-y-2 text-xs text-gray-600">
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="age-filter rounded text-brand" value="kitten"> Kitten</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="age-filter rounded text-brand" value="young"> Young</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="age-filter rounded text-brand" value="adult"> Adult</label>
            
              </div>
            </div>

            <!-- Size -->
            <div class="filter-group">
              <div class="filter-header flex items-center justify-between border border-gray-200 rounded-2xl px-4 py-3 cursor-pointer hover:border-brand transition-colors bg-white">
                <div class="flex items-center gap-3">
                  <i class="fa-solid fa-ruler-combined text-brand text-sm w-4"></i>
                  <span class="text-xs font-medium text-gray-700">Size</span>
                </div>
                <i class="fa-solid fa-chevron-down text-brand text-xs chevron"></i>
              </div>
              <div class="filter-content hidden mt-2 pl-2 space-y-2 text-xs text-gray-600">
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="size-filter rounded text-brand" value="small"> Small</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="size-filter rounded text-brand" value="medium"> Medium</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="size-filter rounded text-brand" value="large"> Large</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="size-filter rounded text-brand" value="xlarge"> Extra Large</label>
              </div>
            </div>

            <!-- Gender -->
            <div class="filter-group">
              <div class="filter-header flex items-center justify-between border border-gray-200 rounded-2xl px-4 py-3 cursor-pointer hover:border-brand transition-colors bg-white">
                <div class="flex items-center gap-3">
                  <i class="fa-solid fa-venus text-brand text-sm w-4"></i>
                  <span class="text-xs font-medium text-gray-700">Gender</span>
                </div>
                <i class="fa-solid fa-chevron-down text-brand text-xs chevron"></i>
              </div>
              <div class="filter-content hidden mt-2 pl-2 space-y-2 text-xs text-gray-600">
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="gender-filter rounded text-brand" value="male"> Male</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="gender-filter rounded text-brand" value="female"> Female</label>
              </div>
            </div>

            <!-- Color -->
            <div class="filter-group">
              <div class="filter-header flex items-center justify-between border border-gray-200 rounded-2xl px-4 py-3 cursor-pointer hover:border-brand transition-colors bg-white">
                <div class="flex items-center gap-3">
                  <i class="fa-solid fa-palette text-brand text-sm w-4"></i>
                  <span class="text-xs font-medium text-gray-700">color</span>
                </div>
                <i class="fa-solid fa-chevron-down text-brand text-xs chevron"></i>
              </div>
              <div class="filter-content hidden mt-2 pl-2 space-y-2 text-xs text-gray-600">
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="color-filter rounded text-brand" value="black"> Black</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="color-filter rounded text-brand" value="white"> White</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="color-filter rounded text-brand" value="brown"> Brown</label>
                <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="color-filter rounded text-brand" value="mixed"> Mixed</label>
              </div>
            </div>

           <!-- Good With -->
<div class="filter-group">
  <div class="filter-header flex items-center justify-between border border-gray-200 rounded-2xl px-4 py-3 cursor-pointer hover:border-brand transition-colors bg-white">
    <div class="flex items-center gap-3">
      <i class="fa-solid fa-tags text-brand text-sm w-4"></i>
      <span class="text-xs font-medium text-gray-700">Good With</span>
    </div>
    <i class="fa-solid fa-chevron-down text-brand text-xs chevron"></i>
  </div>
  <div class="filter-content hidden mt-2 pl-2 space-y-2 text-xs text-gray-600">
    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" class="goodwith-filter rounded text-brand" value="dog"> Dogs
    </label>
    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" class="goodwith-filter rounded text-brand" value="cat"> Cats
    </label>
    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" class="goodwith-filter rounded text-brand" value="bird"> Birds
    </label>
    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" class="goodwith-filter rounded text-brand" value="rabbit"> Rabbits
    </label>
  </div>
</div>

    </aside>

    <!-- Listing Section -->
    <section class="flex-1 w-full">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">
        <div class="flex items-center w-full sm:max-w-md gap-2">
          <div class="relative flex-1">
            <input id="petSearchInput" class="w-full rounded-2xl border-gray-200 bg-white text-xs py-3 px-4 focus:ring-1 focus:ring-brand focus:border-brand placeholder-gray-400 shadow-sm" placeholder="Search by name or keyword..." type="text">
          </div>
          <button aria-label="Search" class="bg-brand text-white w-10 h-10 rounded-xl flex items-center justify-center hover:bg-brand-hover transition-colors flex-shrink-0 shadow-sm">
            <i class="fa-solid fa-magnifying-glass text-sm"></i>
          </button>
        </div>

        <!-- Sorted by -->
        <div class="relative self-end sm:self-center">
          <div id="sortHeader" class="flex items-center gap-2 cursor-pointer text-xs font-medium text-gray-600 hover:text-brand transition-colors">
            <span>Sorted by</span>
            <i id="sortChevron" class="fa-solid fa-chevron-down text-brand text-[10px] transition-transform"></i>
          </div>
          <div id="sortDropdown" class="hidden absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-xl shadow-lg py-2 z-20 text-xs">
            <button class="sort-option w-full text-left px-4 py-2 hover:bg-brand-light hover:text-brand transition-colors" data-sort="newest">Newest</button>
            <button class="sort-option w-full text-left px-4 py-2 hover:bg-brand-light hover:text-brand transition-colors" data-sort="oldest">Oldest</button>
            <button class="sort-option w-full text-left px-4 py-2 hover:bg-brand-light hover:text-brand transition-colors" data-sort="name-asc">Name A-Z</button>
            <button class="sort-option w-full text-left px-4 py-2 hover:bg-brand-light hover:text-brand transition-colors" data-sort="name-desc">Name Z-A</button>
          </div>
        </div>
      </div>

      <div id="noResultsMsg" class="hidden py-12 text-center text-gray-500 text-sm">
        No pets found matching your criteria.
      </div>

     <div id="petsGrid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        <!-- All your original pet cards stay here exactly the same -->
        <!-- Card 1: Bella -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="../photos/BROWSE PAGE/BELLA.jpg" alt="Bella" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bella</h3>
            <button aria-label="Favorite Bella" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
			<a href="../php/Pet_details.php" class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</a>
              <a href="../php/Pet_details.php" class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
  <i class="fa-solid fa-info-circle text-xs"></i>
  <span>More About Me</span>
</a>
            </div>
          </div>
        </article>

        <!-- Card 2: Polly -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="../photos/BROWSE PAGE/POLLY.jpg" alt="Polly" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Polly</h3>
            <button aria-label="Favorite Polly" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="../photos/BROWSE PAGE/MARLEY.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="../photos/BROWSE PAGE/MALEFICENT.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="../photos/BROWSE PAGE/BAILEY.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="../photos/BROWSE PAGE/MARY KATE.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		  <!-- Card 1: Kitty -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="kitty1.jpg" alt="Kitty" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Kitty</h3>
            <button aria-label="Favorite Kity" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Des -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Des1.jpg" alt="Des" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Des</h3>
            <button aria-label="Favorite Des" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
      <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="jai1.jpg" alt="Jai" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Jai</h3>
            <button aria-label="Favorite Jai" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(2-4 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Missy -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Missy" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Missy</h3>
            <button aria-label="Favorite Missy" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse4.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse7.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse8.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		  <!-- Card 1: Stell -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Stell1.jpg" alt="Stell" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Stell</h3>
            <button aria-label="Favorite Stell" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Daisy -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Daisy" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Daisy</h3>
            <button aria-label="Favorite Daisy" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(2-3 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Sam -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Sam1.jpg" alt="Sam" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Sam</h3>
            <button aria-label="Favorite Sam" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Yenyen -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Yenyen" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Yenyen</h3>
            <button aria-label="Favorite Yenyen" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Stefan -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Stefan1.jpg" alt="Stefan" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Stefan</h3>
            <button aria-label="Favorite Stefan" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>4 Years Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Zyn -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Zyn" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Zyn</h3>
            <button aria-label="Favorite Zyn" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic No Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>3 Years Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Fery -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Fery1.jpg" alt="Fery" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Fery</h3>
            <button aria-label="Favorite Fery" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>2 Years Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Vinz -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Vinz" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Vinz</h3>
            <button aria-label="Favorite Vinz" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(1-4 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Blackie -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Blackie1.jpg" alt="Blackie" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Blackie</h3>
            <button aria-label="Favorite Blackie" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>1 Year Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Jen -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Jen" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Jen</h3>
            <button aria-label="Favorite Jen" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(4-7 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Stella -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Stella1.jpg" alt="Stella" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Stella</h3>
            <button aria-label="Favorite Stella" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>5 Years Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Kain -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Kain" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Kain</h3>
            <button aria-label="Favorite Kain" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Browny -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Browny1.jpg" alt="Browny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Browny</h3>
            <button aria-label="Favorite Browny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>2 Year Old</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: haily -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Haily" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Haily</h3>
            <button aria-label="Favorite Haily" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(1-6 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Dim -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Dim1.jpg" alt="Dim" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Dim</h3>
            <button aria-label="Favorite Dim" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short HairMix</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(1-4 Years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Alex -->
        <article data-type="Cat" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Alex" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Alex</h3>
            <button aria-label="Favorite Alex" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
       <article data-type="Dog" data-size= "Extra Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
       <article data-type="Bird" data-size= "Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" data-size= "Extra Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" data-size="Meduim" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" data-size= "Small" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" data-size= "Small" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" data-size= "Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
		
		 <!-- Card 1: Mely -->
        <article data-type="Cat" data-size= "Meduim" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="Mely1.jpg" alt="Mely" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mely</h3>
            <button aria-label="Favorite Mely" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Austin, TX</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Kitten</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 2: Alexis -->
        <article data-type="Cat" data-size= "Meduim" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse2.jpg" alt="Alexis" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Alexis</h3>
            <button aria-label="Favorite Alexis" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Sedalia, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Short Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(5-8 Years Old)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 3: Marley -->
        <article data-type="Dog" data-size= "Extra Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse3.jpg" alt="Marley" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Marley</h3>
            <button aria-label="Favorite Marley" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Green Ridge, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Catahoula Leopard Dog & Boxer</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 4: Casper -->
        <article data-type="Rabbit" data-size= "Small" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit.jpg" alt="Casper" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Casper</h3>
            <button aria-label="Favorite Casper" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 5: Maleficent -->
        <article data-type="Dog" data-size= "Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse5.jpg" alt="Maleficent" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Maleficent</h3>
            <button aria-label="Favorite Maleficent" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Husky</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 6: Bailey -->
        <article data-type="Cat" data-size= "Meduim"  class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse6.jpg" alt="Bailey" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Bailey</h3>
            <button aria-label="Favorite Bailey" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Domestic Long Hair</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>(3-8 years)</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 7: Lemon -->
        <article data-type="Bird" data-size= "Large" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="bird.jpg" alt="Lemon" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Lemon</h3>
            <button aria-label="Favorite Lemon" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Grandview, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-feather text-brand w-3.5"></i>
                <span class="breed-text">Lovebird</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Adult</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 8: Danny -->
        <article data-type="Rabbit" data-size= "Small"  class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="rabbit2.jpg" alt="Danny" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Danny</h3>
            <button aria-label="Favorite Danny" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Lee's Summit, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">American</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Young</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-mars text-brand w-3.5"></i>
                  <span>Male</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Card 9: Mary Kate -->
        <article data-type="Dog" data-size= "Meduim" class="pet-card bg-white rounded-3xl overflow-hidden shadow-sm border border-[#F3EBE7] flex flex-col">
          <div class="relative h-56 w-full overflow-hidden">
            <img src="browse9.jpg" alt="Mary Kate" class="w-full h-full object-cover">
            <div class="w-full h-full bg-[#f3f4f6] flex items-center justify-center text-gray-300"><i class="fa-solid fa-paw text-5xl opacity-40"></i></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <h3 class="absolute bottom-3 left-4 text-xl font-bold text-white tracking-wide">Mary Kate</h3>
            <button aria-label="Favorite Mary Kate" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-brand hover:bg-white transition-all shadow-sm">
              <i class="fa-regular fa-heart text-sm"></i>
            </button>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between text-xs text-gray-600 space-y-3">
            <div class="space-y-2 border-b border-gray-100 pb-3">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand w-3.5"></i>
                <span class="location-text">Warrensburg, MO</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-brand w-3.5"></i>
                <span class="breed-text">Mixed Breed</span>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-cake-candles text-brand w-3.5"></i>
                  <span>Puppy</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i class="fa-solid fa-venus text-brand w-3.5"></i>
                  <span>Female</span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 pt-1">
              <button class="flex-1 bg-brand text-white font-medium py-2 px-3 rounded-full hover:bg-brand-hover transition-colors shadow-sm text-center">Adopt Me</button>
              <button class="flex items-center justify-center gap-1.5 px-3 py-2 text-brand font-medium hover:bg-brand-light rounded-full transition-colors">
                <i class="fa-solid fa-info-circle text-xs"></i>
                <span>More About Me</span>
              </button>
            </div>
          </div>
        </article>
      </div>

      <!-- Pagination -->
      <!-- Pagination -->
<div class="mt-12 flex items-center justify-center gap-2 text-sm font-medium text-gray-600 flex-wrap">
  <button aria-label="Previous Page" class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors">
    <i class="fa-solid fa-chevron-left text-xs"></i>
  </button>

  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full bg-brand text-white shadow-sm font-semibold" data-page="1">1</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="2">2</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="3">3</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="4">4</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="5">5</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="6">6</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="7">7</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="8">8</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="9">9</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="10">10</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="11">11</button>
  <button class="page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors" data-page="12">12</button>

  <button aria-label="Next Page" class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors">
    <i class="fa-solid fa-chevron-right text-xs"></i>
  </button>
</div>
</main>

<!-- FOOTER -->
<footer class="bg-[#23262A] text-[#9A9EA6] mt-20 relative overflow-hidden">
  <i class="fa-solid fa-paw absolute -top-10 left-40 text-white/[0.03] text-[160px] pointer-events-none select-none"></i>
  <i class="fa-solid fa-paw absolute top-0 right-20 text-white/[0.03] text-[200px] pointer-events-none select-none"></i>
  <i class="fa-solid fa-cat absolute -bottom-8 left-10 text-white/[0.03] text-8xl pointer-events-none select-none"></i>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-8 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
      <div class="lg:col-span-2 space-y-5">
        <a href="#" class="flex items-center">
  <img src="../photos/Adoptly logo.png" alt="Adoptly Logo" class="h-9 w-auto">
</a>
        <p class="text-sm text-gray-400 max-w-xs leading-relaxed">
          Helping rescue pets find safe, loving homes and lifelong companionship.
        </p>
        <div class="flex items-center gap-3 pt-1">
          <a href="#" class="w-9 h-9 rounded bg-[#35393F] text-gray-300 flex items-center justify-center hover:bg-brand hover:text-white transition-colors"><i class="fa-brands fa-facebook-f text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded bg-[#35393F] text-gray-300 flex items-center justify-center hover:bg-brand hover:text-white transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded bg-[#35393F] text-gray-300 flex items-center justify-center hover:bg-brand hover:text-white transition-colors"><i class="fa-brands fa-instagram text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded bg-[#35393F] text-gray-300 flex items-center justify-center hover:bg-brand hover:text-white transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded bg-[#35393F] text-gray-300 flex items-center justify-center hover:bg-brand hover:text-white transition-colors"><i class="fa-brands fa-youtube text-sm"></i></a>
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-sm font-semibold text-white">Browse</h4>
        <ul class="space-y-2.5 text-sm">
          <li><a href="#" class="hover:text-brand transition-colors">Browse Pets</a></li>
          <li><a href="#" class="hover:text-brand transition-colors">Adoption Process</a></li>
          <li><a href="#" class="hover:text-brand transition-colors">Success Stories</a></li>
          <li><a href="#" class="hover:text-brand transition-colors">About Us</a></li>
        </ul>
      </div>
      <div class="space-y-4">
        <h4 class="text-sm font-semibold text-white">Resources</h4>
        <ul class="space-y-2.5 text-sm">
          <li><a href="#" class="hover:text-brand transition-colors">FAQ</a></li>
          <li><a href="#" class="hover:text-brand transition-colors">Pet Care Tips</a></li>
          <li><a href="#" class="hover:text-brand transition-colors">Volunteer</a></li>
          <li><a href="#" class="hover:text-brand transition-colors">Support Center</a></li>
        </ul>
      </div>
      <div class="space-y-4">
        <h4 class="text-sm font-semibold text-white">Contact</h4>
        <ul class="space-y-2.5 text-sm text-gray-400">
          <li>helloadoptly@gmail.com</li>
          <li>+1 (234) 567-890</li>
          <li>New York, USA</li>
        </ul>
      </div>
    </div>
    <div class="mt-12 pt-6 border-t border-white/10 text-center text-xs text-gray-500">
      © 2026 Adoptly. All rights reserved. &nbsp;|&nbsp;
      <a href="#" class="hover:text-brand transition-colors">Privacy Policy</a> &nbsp;
      <a href="#" class="hover:text-brand transition-colors">Terms of Service</a>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('petSearchInput');
  const filterType = document.getElementById('filterType');
  const filterBreed = document.getElementById('filterBreed');
  const filterLocation = document.getElementById('filterLocation');
  const petsGrid = document.getElementById('petsGrid');
  const petCards = Array.from(document.querySelectorAll('.pet-card'));
  const noResultsMsg = document.getElementById('noResultsMsg');

  const prevBtn = document.querySelector('[aria-label="Previous Page"]');
  const nextBtn = document.querySelector('[aria-label="Next Page"]');
  const pageButtons = document.querySelectorAll('.page-btn');

  const originalOrder = [...petCards];
  let currentPage = 1;
  const itemsPerPage = 9;

  // ========== MAIN FILTER ==========
   // ========== MAIN FILTER ==========
  function filterPets() {
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    const selectedType = filterType ? filterType.value.toLowerCase() : 'all';
    const selectedBreed = filterBreed ? filterBreed.value.toLowerCase() : 'all';
    const locationQuery = filterLocation ? filterLocation.value.toLowerCase().trim() : '';

    // Advanced filters
    const selectedAges = Array.from(document.querySelectorAll('.age-filter:checked')).map(cb => cb.value);
    const selectedGenders = Array.from(document.querySelectorAll('.gender-filter:checked')).map(cb => cb.value);
    const selectedSizes = Array.from(document.querySelectorAll('.size-filter:checked')).map(cb => cb.value);
    const selectedColors = Array.from(document.querySelectorAll('.color-filter:checked')).map(cb => cb.value);
    const selectedGoodWith = Array.from(document.querySelectorAll('.goodwith-filter:checked')).map(cb => cb.value);
    const selectedShelters = Array.from(document.querySelectorAll('.shelter-filter:checked')).map(cb => cb.value);

    petCards.forEach(card => {
      const fullText = card.textContent.toLowerCase();
      const petType = (card.getAttribute('data-type') || '').toLowerCase();
      const breedElement = card.querySelector('.breed-text');
      const petBreed = breedElement ? breedElement.textContent.toLowerCase() : '';
      const locationElement = card.querySelector('.location-text');
      const petLocation = locationElement ? locationElement.textContent.toLowerCase() : '';

      // Basic filters
      const matchesSearch = !query || fullText.includes(query);
      const matchesType = selectedType === 'all' || petType === selectedType;
      const matchesBreed = selectedBreed === 'all' || petBreed.includes(selectedBreed);
      const matchesLocation = !locationQuery || petLocation.includes(locationQuery);

      // Age filter
      let matchesAge = true;
      if (selectedAges.length > 0) {
        matchesAge = selectedAges.some(age => {
          if (age === 'kitten') return fullText.includes('kitten') || fullText.includes('puppy') || fullText.includes('baby');
          if (age === 'young') return fullText.includes('young');
          if (age === 'adult') return fullText.includes('adult') || fullText.includes('(3-8 years)');
          if (age === 'senior') return fullText.includes('senior');
          return fullText.includes(age);
        });
      }

      // Gender filter (fixed)
let matchesGender = true;
if (selectedGenders.length > 0) {
  matchesGender = selectedGenders.some(g => {
    if (g === 'male') {
      // Must contain "male" but NOT "female"
      return fullText.includes('male') && !fullText.includes('female');
    }
    if (g === 'female') {
      return fullText.includes('female');
    }
    return false;
  });
}	

      // Size filter (using data-size attribute)
let matchesSize = true;
if (selectedSizes.length > 0) {
  const petSize = (card.getAttribute('data-size') || '').toLowerCase();
  matchesSize = selectedSizes.includes(petSize);
}
      // Color filter
      let matchesColor = true;
      if (selectedColors.length > 0) {
        matchesColor = selectedColors.some(color => fullText.includes(color));
      }

      // Good With filter (filters by pet type)
let matchesGoodWith = true;
if (selectedGoodWith.length > 0) {
  const petType = (card.getAttribute('data-type') || '').toLowerCase();
  matchesGoodWith = selectedGoodWith.includes(petType);
}


      // Shelter filter
      let matchesShelter = true;
      if (selectedShelters.length > 0) {
        matchesShelter = selectedShelters.some(s => fullText.includes(s));
      }

      // Final decision
      const isVisible = matchesSearch && matchesType && matchesBreed && matchesLocation &&
                        matchesAge && matchesGender && matchesSize && matchesColor &&
                        matchesGoodWith && matchesShelter;

      card.dataset.visible = isVisible ? 'true' : 'false';
    });

    currentPage = 1;
    showPage(currentPage);
  }

  if (searchInput) searchInput.addEventListener('input', filterPets);
  if (filterType) filterType.addEventListener('change', filterPets);
  if (filterBreed) filterBreed.addEventListener('change', filterPets);
  if (filterLocation) filterLocation.addEventListener('input', filterPets);

  // Advanced filter checkboxes
  document.querySelectorAll('.age-filter, .size-filter, .gender-filter, .color-filter, .goodwith-filter, .shelter-filter')
    .forEach(cb => cb.addEventListener('change', filterPets));

  // ========== EXPANDABLE FILTERS ==========
  document.querySelectorAll('.filter-header').forEach(header => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      const chevron = header.querySelector('.chevron');
      content.classList.toggle('hidden');
      chevron.classList.toggle('rotate-180');
    });
  });

  // ========== SORT ==========
  const sortHeader = document.getElementById('sortHeader');
  const sortDropdown = document.getElementById('sortDropdown');
  const sortChevron = document.getElementById('sortChevron');

  function sortPets(type) {
    let sorted = [...petCards];

    if (type === 'newest') {
      sorted = [...originalOrder];
    } else if (type === 'oldest') {
      sorted = [...originalOrder].reverse();
    } else if (type === 'name-asc') {
      sorted.sort((a, b) => {
        const nameA = a.querySelector('h3').textContent.trim().toLowerCase();
        const nameB = b.querySelector('h3').textContent.trim().toLowerCase();
        return nameA.localeCompare(nameB);
      });
    } else if (type === 'name-desc') {
      sorted.sort((a, b) => {
        const nameA = a.querySelector('h3').textContent.trim().toLowerCase();
        const nameB = b.querySelector('h3').textContent.trim().toLowerCase();
        return nameB.localeCompare(nameA);
      });
    }

    sorted.forEach(card => petsGrid.appendChild(card));
    currentPage = 1;
    showPage(currentPage);
  }

  if (sortHeader) {
    sortHeader.addEventListener('click', (e) => {
      e.stopPropagation();
      sortDropdown.classList.toggle('hidden');
      sortChevron.classList.toggle('rotate-180');
    });
  }

  document.addEventListener('click', () => {
    if (sortDropdown && !sortDropdown.classList.contains('hidden')) {
      sortDropdown.classList.add('hidden');
      sortChevron.classList.remove('rotate-180');
    }
  });

  document.querySelectorAll('.sort-option').forEach(option => {
    option.addEventListener('click', () => {
      const sortType = option.getAttribute('data-sort');
      const text = option.textContent;
      sortHeader.querySelector('span').textContent = `Sorted by: ${text}`;
      sortPets(sortType);
      sortDropdown.classList.add('hidden');
      sortChevron.classList.remove('rotate-180');
    });
  });

// ========== PAGINATION ==========
  function showPage(page) {
    currentPage = page;
    const visibleCards = petCards.filter(card => card.dataset.visible !== 'false');
    const totalPages = Math.ceil(visibleCards.length / itemsPerPage) || 1;

    // Hide all cards first
    petCards.forEach(card => card.classList.add('hidden'));

    // Show only the cards for the current page
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    visibleCards.slice(start, end).forEach(card => {
      card.classList.remove('hidden');
    });

    // Show/hide "No results" message
    if (noResultsMsg) {
      noResultsMsg.classList.toggle('hidden', visibleCards.length > 0);
    }

    // Update active style on page buttons
    pageButtons.forEach(btn => {
      const btnPage = parseInt(btn.getAttribute('data-page'));
      if (btnPage === currentPage) {
        btn.className = "page-btn w-9 h-9 flex items-center justify-center rounded-full bg-brand text-white shadow-sm font-semibold";
      } else {
        btn.className = "page-btn w-9 h-9 flex items-center justify-center rounded-full border border-gray-200 bg-white hover:border-brand hover:text-brand transition-colors";
      }
    });
  }

  // Previous button
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      if (currentPage > 1) showPage(currentPage - 1);
    });
  }

  // Next button
  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      const visibleCards = petCards.filter(card => card.dataset.visible !== 'false');
      const totalPages = Math.ceil(visibleCards.length / itemsPerPage) || 1;
      if (currentPage < totalPages) showPage(currentPage + 1);
    });
  }

  // Page number buttons (1 to 12)
  pageButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const page = parseInt(btn.getAttribute('data-page'));
      showPage(page);
    });
  });

  // Initialize
  petCards.forEach(card => card.dataset.visible = 'true');
  showPage(1);
});

// Make heart icons clickable
  document.querySelectorAll('.pet-card button[aria-label^="Favorite"]').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      const icon = this.querySelector('i');

      if (icon.classList.contains('fa-regular')) {
        // Change to filled heart
        icon.classList.remove('fa-regular');
        icon.classList.add('fa-solid');
        icon.style.color = '#D96552'; // brand color
      } else {
        // Change back to empty heart
        icon.classList.remove('fa-solid');
        icon.classList.add('fa-regular');
        icon.style.color = ''; // reset color
      }
    });
  });
</script>
</body>
</html>