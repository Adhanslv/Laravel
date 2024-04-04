<script src="//unpkg.com/alpinejs" defer></script>
<nav x-data="{ open: false }"
  class="Navbar-Section mt-5 items-center justify-between px-[3vw] text-white md:block">
  <div class="flex justify-between">
    <h1 class="text-3xl font-semibold">Dashboard_</h1>
    <div class="flex items-center gap-2">
      <ul class="hidden cursor-pointer gap-x-1 text-white md:block">
        <x-navbar.navlink href="/">Home</x-navbar.navlink>
        <x-navbar.navlink href="/orders">Orders</x-navbar.navlink>
        <x-navbar.navlink href="/product">Products</x-navbar.navlink>
        <x-navbar.navlink href="/analytics">Analytics</x-navbar.navlink>
        <x-navbar.navlink href="/users">Users</x-navbar.navlink>
      </ul>
      <span class="hidden text-white/30 md:block">|</span>
      <button class="hidden rounded-full p-2 md:block"><svg
          xmlns="http://www.w3.org/2000/svg" class="text-white/60"
          width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-search">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
          <path d="M21 21l-6 -6" />
        </svg>
      </button>
      <button @click="open = ! open" class="rounded-full p-2 md:hidden"
        aria-controls="mobile-menu" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 6h16" />
          <path d="M7 12h13" />
          <path d="M10 18h10" />
        </svg>
      </button>
      {{-- Mobile Navbar --}}
      <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute right-0 top-20 w-full md:hidden" id="mobile-menu">
        <ul
          class="flex flex-col rounded-b-sm border-b border-white/20 bg-gray-950 px-3 py-2.5">
          <x-navbar.navlink href="/">Home</x-navbar.navlink>
          <x-navbar.navlink href="/orders">Orders</x-navbar.navlink>
          <x-navbar.navlink href="/product">Products</x-navbar.navlink>
          <x-navbar.navlink href="/analytics">Analytics</x-navbar.navlink>
          <x-navbar.navlink href="/users">Users</x-navbar.navlink>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="mb-10 mt-3 h-px bg-white/20"></div>

{{-- <button
  class="p h-9 cursor-pointer rounded-md bg-white px-4 text-[14px] text-black text-black outline-none"><a
    href="https://www.google.com" target="_blank">Login</a></button> --}}
