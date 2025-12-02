<nav id="navbar"
  class="flex w-full items-center justify-between px-6 md:px-12 lg:px-[65px] py-4 fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-in-out bg-transparent backdrop-blur-md">


  <div class="flex items-center gap-3 md:gap-5 ">
    <img class="rounded-full w-[45px] h-[45px] md:w-[55px] md:h-[55px] object-cover" alt="Ellipse"
      src="../assets/backgrounds/moonevent.jpg" />
    <div class="font-semibold text-[#1b1b1b] text-lg md:text-xl whitespace-nowrap">
      Moon Event Organizer
    </div>
  </div>

  <div class="hidden md:hidden lg:flex  gap-6 lg:gap-8 items-center text-[16px] lg:text-[17px] font-medium">
    <a href="{{ route('front.index') }}" class="hover:text-[#FF7043] transition">Home</a>
    <a href="{{ route('front.about') }}" class="hover:text-[#FF7043] transition">About</a>
    <a href="{{ route('front.team') }}" class="hover:text-[#FF7043] transition">Team</a>
    <a href="{{ route('front.services') }}" class="hover:text-[#FF7043] transition">Services</a>
    <a href="{{ route('front.wedding_list') }}" class="hover:text-[#FF7043] transition">Reservasi</a>
  </div>

  <div class="hidden md:flex h-fit items-center">
    <span class="grow w-0.5 bg-orange-500 mr-4"></span>

    @auth
      <div class="hidden sm:flex sm:items-center">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
           <button
                    class="inline-flex items-center justify-center size-8 border border-transparent text-sm leading-4 font-medium rounded-full  hover:opacity-90 focus:outline-none transition ease-in-out duration-150">
                    
                    @php
                        $user = Auth::user();
                        $avatarUrl = "https://ui-avatars.com/api/?name=" . urlencode($user->name) . "&background=F87B1B&color=fff";
                    @endphp

                    
                    <img
                        src="{{ $avatarUrl }}"
                        alt="{{ $user->name }}"
                        class="rounded-full hidden md:hidden lg:block w-8 h-8 object-cover"
                    />
                </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
            <x-dropdown-link :href="route('dashboard.bookings')">My Booking</x-dropdown-link>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                Log Out
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>
    @endauth

    @guest
      <a href="{{ route('login') }}"
        class="hidden md:hidden lg:block px-6 py-2 lg:px-8 lg:py-3 bg-[#FF7043] rounded-lg text-white font-semibold hover:bg-[#ff5722] transition">
        Login
      </a>
    @endguest
  </div>

  <button id="menu-toggle" class="block md:block lg:hidden text-2xl text-[#1b1b1b] focus:outline-none">
    <i class="fa-solid fa-bars"></i>
  </button>
</nav>


<div id="sidebar"
  class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl z-[9999] transform translate-x-full transition-transform duration-500 ease-in-out">
  <div class="flex justify-between items-center p-5 border-b border-gray-200">
    <h2 class="text-xl font-semibold text-[#1b1b1b]">Menu</h2>
    <button id="close-sidebar" class="text-2xl text-gray-600 hover:text-[#FF7043]">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  <div class="flex flex-col p-6 gap-5 text-lg font-medium text-gray-800">
    <a href="{{ route('front.index') }}" class="hover:text-[#FF7043] transition">Home</a>
    <a href="{{ route('front.about') }}" class="hover:text-[#FF7043] transition">About</a>
    <a href="{{ route('front.team') }}" class="hover:text-[#FF7043] transition">Team</a>
    <a href="{{ route('front.services') }}" class="hover:text-[#FF7043] transition">Service</a>
    <a href="{{ route('front.wedding_list') }}" class="hover:text-[#FF7043] transition">Reservasi</a>

    <div class="mt-5 border-t border-gray-300 pt-5">
      @auth
        <a href="{{ route('dashboard.bookings') }}" class="hover:text-[#FF7043] transition">My Booking</a>
        <form method="POST" action="{{ route('logout') }}" class="mt-3">
          @csrf
          <button type="submit" class="hover:text-[#FF7043] transition">Log Out</button>
        </form>
      @endauth

      @guest
        <a href="{{ route('login') }}"
          class="block mt-3 bg-[#FF7043] text-white text-center py-2 rounded-lg font-semibold hover:bg-[#ff5722] transition">
          Login
        </a>
      @endguest
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("menu-toggle");
    const closeBtn = document.getElementById("close-sidebar");
    let lastScrollTop = 0;

    window.addEventListener("scroll", function () {
      const scrollTop = window.scrollY || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
        navbar.classList.remove("translate-y-0", "opacity-100");
        navbar.classList.add("-translate-y-full", "opacity-0");
      } else {
        navbar.classList.remove("-translate-y-full", "opacity-0");
        navbar.classList.add("translate-y-0", "opacity-100");
      }

      if (scrollTop > 50) {
        navbar.classList.remove("bg-transparent", "backdrop-blur-md");
        navbar.classList.add("bg-white", "shadow-md");
      } else {
        navbar.classList.remove("bg-white", "shadow-md");
        navbar.classList.add("bg-transparent", "backdrop-blur-md");
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });

    toggleBtn.addEventListener("click", () => {
      sidebar.classList.remove("translate-x-full");
      sidebar.classList.add("translate-x-0");
    });

    closeBtn.addEventListener("click", () => {
      sidebar.classList.add("translate-x-full");
      sidebar.classList.remove("translate-x-0");
    });
  });
</script>
