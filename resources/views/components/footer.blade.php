<div class="w-full py-20 px-[20px] md:px-[65px]">
  <div class="max-w-[1200px] mx-auto">
    <div class="flex items-center justify-center gap-2">
      <img class="rounded-full w-[55px] h-[55px] object-cover" alt="Ellipse"
        src="../assets/backgrounds/moonevent.jpg" />
      <p class="font-bold text-lg">Moon Event Organizer</p>
    </div>

    <ul class="flex flex-wrap gap-5 justify-center md:gap-14 items-center mx-auto max-w-[200px] md:max-w-[650px] my-7">
      <li class="py-3 px-3 {{ Request::is('/') ? 'border-b-2 border-[#FF7043]' : '' }}">
        <a href="/">Home</a>
      </li>
      <li class="py-3 px-3 {{ Request::is('about') ? 'border-b-2 border-[#FF7043]' : '' }}">
        <a href="/about">About</a>
      </li>
      <li class="py-3 px-3 {{ Request::is('team') ? 'border-b-2 border-[#FF7043]' : '' }}">
        <a href="/team">Team</a>
      </li>
      <li class="py-3 px-3 {{ Request::is('services') ? 'border-b-2 border-[#FF7043]' : '' }}">
        <a href="/services">Services</a>
      </li>
      <li class="py-3 px-3 {{ Request::is('wedding-list') ? 'border-b-2 border-[#FF7043]' : '' }}">
        <a href="/wedding-list">Reservasi</a>
      </li>
    </ul>


    <div class="md:max-w-[850px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
      <div
        class="w-full shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] text-center py-8">
        <h2 class="text-xl font-semibold">Contact</h2>
        <p class="my-3 text-gray-700 te">KAMPUS JAKARTA GLOBAL UNIVERSITY (JGU),
          GRAND DEPOK CITY, JL. BOULEVARD RAYA NO.2
          KOTA DEPOK 16412</p>
        <p class="text-gray-700">0821-1036-1665</p>
      </div>
      <div
        class="w-full shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] text-center py-8">
        <h2 class="text-xl font-semibold">Working Hours</h2>
        <p class="my-6 text-gray-700">Monday-Friday : 09:00 - 05:00</p>
        <p class="text-gray-700">Saturday-Sunday : 09:00 - 05:00</p>
      </div>
    </div>

    <div class="flex gap-6 justify-center items-center mx-auto my-10 ">
      <a href="https://www.instagram.com/mooneventorganizer/" target="_blank" class="px-3 py-1 bg-orange-500/40">
        <i class="fa-brands fa-instagram text-lg"></i>
      </a>
      <a href="https://www.tiktok.com/@moonevent" target="_blank" class="px-3 py-1 bg-orange-500/40">
        <i class="fa-brands fa-tiktok text-lg"></i>
      </a>
    </div>

    <p class="text-center text-gray-700">Copyright by <span class="font-semibold">Moon Event Organizer</span> -
      Powered by <span class="font-semibold">Team Programmer Moon Event Organizer</span></p>
  </div>
</div>