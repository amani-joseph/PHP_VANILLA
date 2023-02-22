<div class="px-6 pt-6 lg:px-8">
    <div>
      <nav class="flex h-9 items-center justify-between" aria-label="Global">
        <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:align-bottom lg:gap-x-12">
          <a href="/" class="<?php if($_SERVER['REQUEST_URI'] === "/"){echo "rounded-lg  border-double border-4 border-sky-500 px-3 py-1 text-center ";}?> font-semibold text-gray-900 hover:text-gray-900">HOME</a>

          <a href="/about" class="<?php if($_SERVER['REQUEST_URI'] === "/about"){echo "rounded-lg  border-double border-4 border-sky-500 px-3 py-1 text-center ";}?> font-semibold text-gray-900 hover:text-gray-900">ABOUT</a>

          <a href="/contact" class="<?php if($_SERVER['REQUEST_URI'] === "/contact"){echo "rounded-lg  border-double border-4 border-sky-500 px-3 py-1 text-center ";}?> font-semibold text-gray-900 hover:text-gray-900">CONTACT</a>

          
        </div>
        
      </nav>
      
    </div>
  </div>