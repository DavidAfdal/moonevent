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
      <div class="flex gap-8 items-center relative">
        <a href="{{route('front.index')}}">
          Home
        </a>
        <a href="">
          About
        </a>
        <a href="{{route('front.team')}}">
          Team
        </a>
        <a href="">
          Service
        </a>
        <a href="{{route('front.wedding_list')}}">
          Reservasi
        </a>
        <span class="absolute top-0 right-[7.9rem] h-full w-[2px] bg-orange-500 transform translate-x-full"></span>
        <a href="{{route('login')}}" class="px-8 py-3 bg-[#FF7043] rounded-lg text-white font-semibold">Login</a>
      </div>
</nav>