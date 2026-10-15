const navbarHTML = `
  <header class="w-full bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
      <a class="flex items-center" href="#">
        <img src="../photos/image-removebg-preview (1).png" alt="Adoptly Logo" class="h-10 w-auto">
      </a>
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
        <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full" href="Browse_page.php">Browse pets</a>
        <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full" href="Adoption_process.php">Adoption Process</a>
        <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full" href="Donation.php">Donate</a>
        <a class="relative pb-1 hover:text-[#E05A4F] transition-colors after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-current after:transition-all after:duration-300 hover:after:w-full" href="About.php">About</a>
      </nav>
      <div class="flex items-center gap-4">
        <button class="fav" type="button" aria-label="View Saved Pets">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
        </button>
        <a class="text-sm font-semibold text-gray-700 hover:text-[#E05A4F] transition-colors hidden sm:inline-block" href="Log_in.php">Login</a>
        <a class="px-5 py-2.5 rounded-full text-xs font-bold bg-[#E05A4F] text-white hover:bg-red-500 shadow-sm transition" href="Sign_in.php">Sign in</a>
      </div>
    </div>
  </header>
`;

const footerHTML = `
  <footer class="bg-[#181818] text-gray-300 pt-16 pb-8 border-t border-gray-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-gray-800">
        <div class="md:col-span-4 space-y-4">
          <div class="flex items-center space-x-2">
            <img src="../photos/adoptly logo.png" alt="Adoptly Logo" class="h-10 w-auto">
          </div>
          <p class="text-xs text-gray-400 max-w-xs leading-relaxed">
            Helping rescue pets find safe, loving homes and lifelong companionship.
          </p>
          <div class="flex items-center space-x-3 pt-2">
            <a aria-label="Facebook" class="w-7 h-7 bg-gray-800 hover:bg-brand rounded flex items-center justify-center text-white text-xs font-bold transition" href="#">f</a>
            <a aria-label="Twitter" class="w-7 h-7 bg-gray-800 hover:bg-brand rounded flex items-center justify-center text-white text-xs font-bold transition" href="#">t</a>
            <a aria-label="Instagram" class="w-7 h-7 bg-gray-800 hover:bg-brand rounded flex items-center justify-center text-white text-xs font-bold transition" href="#">in</a>
            <a aria-label="LinkedIn" class="w-7 h-7 bg-gray-800 hover:bg-brand rounded flex items-center justify-center text-white text-xs font-bold transition" href="#">li</a>
            <a aria-label="YouTube" class="w-7 h-7 bg-gray-800 hover:bg-brand rounded flex items-center justify-center text-white text-xs font-bold transition" href="#">yt</a>
          </div>
        </div>
        <div class="hidden md:block md:col-span-1"></div>
        <div class="md:col-span-2 space-y-3">
          <h4 class="text-sm font-bold text-white tracking-wide">Browse</h4>
          <ul class="space-y-2 text-xs text-gray-400">
            <li><a class="hover:text-white transition" href="#browse">Browse Pets</a></li>
            <li><a class="hover:text-white transition" href="#process">Adoption Process</a></li>
            <li><a class="hover:text-white transition" href="#stories">Success Stories</a></li>
            <li><a class="hover:text-white transition" href="#about">About Us</a></li>
          </ul>
        </div>
        <div class="md:col-span-2 space-y-3">
          <h4 class="text-sm font-bold text-white tracking-wide">Resources</h4>
          <ul class="space-y-2 text-xs text-gray-400">
            <li><a class="hover:text-white transition" href="#faq">FAQ</a></li>
            <li><a class="hover:text-white transition" href="#tips">Pet Care Tips</a></li>
            <li><a class="hover:text-white transition" href="#volunteer">Volunteer</a></li>
            <li><a class="hover:text-white transition" href="#support">Support Center</a></li>
          </ul>
        </div>
        <div class="md:col-span-3 space-y-3">
          <h4 class="text-sm font-bold text-white tracking-wide">Contact</h4>
          <ul class="space-y-2 text-xs text-gray-400">
            <li>helloadoptly@gmail.com</li>
            <li>+1 (234) 567-890</li>
            <li>New York, USA</li>
          </ul>
        </div>
      </div>
      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500">
        <p>© 2026 Adoptly. All rights reserved.</p>
        <div class="flex items-center space-x-4 mt-3 sm:mt-0">
          <a class="hover:text-gray-400 transition" href="#privacy">Privacy Policy</a>
          <span>|</span>
          <a class="hover:text-gray-400 transition" href="#terms">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>
`;

// Inject the components into the DOM when the page loads
document.addEventListener("DOMContentLoaded", () => {
  const headerPlaceholder = document.getElementById("navbar-placeholder");
  const footerPlaceholder = document.getElementById("footer-placeholder");

  if (headerPlaceholder) {
    headerPlaceholder.innerHTML = navbarHTML;
  }

  if (footerPlaceholder) {
    footerPlaceholder.innerHTML = footerHTML;
  }
});
