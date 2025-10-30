  <nav id="navbar"
      class="flex w-full items-center justify-between px-[65px] py-4 bg-transparent transition-all duration-300 fixed top-0 left-0 right-0 z-50">
      <div class="flex items-center gap-5">
        <img class="rounded-full w-[55px] h-[55px] object-cover" alt="Ellipse"
          src="../assets/backgrounds/moonevent.jpg" />
        <div
          class="relative w-fit [font-family:'Inter-SemiBold',Helvetica] font-semibold text-[#1b1b1b] text-lg tracking-[0] leading-[normal] whitespace-nowrap">
          Moon Event Organizer
        </div>
      </div>
      <div class="flex gap-4 items-center">

         <div class="flex gap-8 items-center">
           <a href="{{route('front.index')}}">
             Home
           </a>
           <a href="{{ route('front.about') }}">
             About
           </a>
           <a href="{{route('front.team')}}">
             Team
           </a>
           <a href="{{route('front.services') }}">
             Service
           </a>
           <a href="{{route('front.wedding_list')}}">
             Reservasi
           </a>
         </div>

        <div class="flex h-fit">
          <span class="grow w-0.5 bg-orange-500 mr-4"></span>
          @auth
                  <div class="hidden sm:flex sm:items-center">
                  <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                          <button class="inline-flex size-8 items-center border border-transparent text-sm leading-4 font-medium rounded-full text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                              
                          </button>
                      </x-slot>
  
                      <x-slot name="content">
                          <x-dropdown-link :href="route('profile.edit')">
                              {{ __('Profile') }}
                          </x-dropdown-link>

                          <x-dropdown-link :href="route('dashboard.bookings')">
                              {{ __('My Booking') }}
                          </x-dropdown-link>
  
                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
  
                              <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </x-dropdown-link>
                          </form>
                      </x-slot>
                  </x-dropdown>
              </div>
          @endauth
          
          @guest
            <a href="{{route('login')}}" class="px-8 py-3 bg-[#FF7043] rounded-lg text-white font-semibold">Login</a>
          @endguest
          
        </div>
      </div>
</nav>