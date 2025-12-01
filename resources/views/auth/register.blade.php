@extends('front.layouts.app')

@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .entryarea-float {
      position: relative;
      height: 55px;
      line-height: 55px;
      box-shadow: 0px 2px 3px -1px rgba(0, 0, 0, 0.1), 0px 1px 0px 0px rgba(25, 28, 33, 0.02), 0px 0px 0px 1px rgba(25, 28, 33, 0.08);
      border-radius: 10px;
    }

    .labelline-float {
      position: absolute;
      color: black;
      transition: 0.2s ease;
      /* padding: 0 25px; */
      margin: 0 20px;
      top: 15px;
      line-height: 80px;
      z-index: 1;
    }

    .input-float:focus,
    .input-float:valid {
      color: #FF7043;
      border-width: 2px;
      border-color: #FF7043;
    }

    .input-float:focus+.labelline-float,
    .input-float:valid+.labelline-float {
      color: #FF7043;
      background-color: white;
      height: 30px;
      /* line-height: 30px; */
      /* padding: 0 12px; */
      transform: translate(-15px, -28px) scale(0.88);
      z-index: 1111;
    }
  </style>
@endpush

@section('content')
  <section class="px-5 md:px-0 lg:px-10">
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 w-full max-w-7xl mx-auto">

      <div class="relative w-full min-h-[450px] sm:min-h-[550px] md:min-h-[550px] lg:h-screen overflow-visible lg:overflow-hidden bg-white">

        <div
          class="absolute top-5 left-5 w-[65%] md:w-[60%] lg:w-[55%] h-[200px] md:h-[300px] lg:h-[350px] z-10 rounded-2xl overflow-hidden shadow-xl">
          <img
            src="https://plus.unsplash.com/premium_photo-1663076211121-36754a46de8d?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8d2VkZGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=500"
            alt="Pasangan di Jembatan Pegunungan" class="w-full h-full object-cover">
        </div>

        <div
          class="absolute top-[120px] md:top-[190px] lg:top-[150px] right-0 md:right-4 lg:right-10 w-[45%] h-[190px] md:h-[250px] lg:h-[300px] z-20 rounded-2xl p-2 bg-white overflow-hidden shadow-2xl">
          <img
            src="https://plus.unsplash.com/premium_photo-1711132425055-1c289c69b950?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fHdlZGRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=500"
            alt="Pasangan di Tepi Danau" class="w-full h-full object-cover rounded-2xl">
        </div>

        <div class="absolute bottom-5 left-1/2 -translate-x-1/2 w-4/5 md:w-full max-w-[600px] mt-10 z-30">
          <div class="text-center">
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold mb-2 text-gray-800">
              Begin Planning Your Perfect Event
            </h1>
            <p class="text-sm lg:text-base text-black/70">
              Share your ideas with us, and we’ll help you turn your vision into a beautifully executed celebration.
            </p>
          </div>
        </div>

        <div class="absolute top-[-20px] right-[20px] h-40 rounded-full ">
          <a href="/"
            class="flex items-center gap-5 border-2 border-[#FF7043]/80 w-fit flex-shrink-0 rounded-full px-3 py-1 group text-[#FF7043] hover:text-white hover:bg-[#FF7043] font-semibold transition-all duration-300 mt-10">
            <i class="fa-solid fa-house w-fit h-auto rounded-full flex-shrink-0 p-2 transition duration-300"></i>
          </a>
        </div>
        <div class="absolute bottom-[-50px] left-[-50px] w-40 h-40 rounded-full bg-pink-300/40"></div>
      </div>

      <div class="py-10 px-5 md:px-10 flex flex-col justify-center">

        <div class="flex items-center justify-center gap-4">
          <img class="rounded-full w-12 h-12 object-cover" alt="Ellipse" src="../assets/backgrounds/moonevent.jpg" />
          <p class="font-bold text-lg text-gray-800">Moon Event Organizer</p>
        </div>

        <div class="mt-6 text-center">
          <h1 class="text-3xl md:text-4xl font-semibold text-gray-900">
            Create Your <span class="text-[#FF7043]">Account</span>
          </h1>
          <p class="max-w-md text-black/70 text-sm md:text-base mx-auto mt-3">
            your partner event solution.
          </p>
        </div>

        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="md:max-w-lg mx-auto mt-5 md:mt-8">

             @if($errors->any())
              @foreach($errors->all() as $e)
                <div
                  class="w-full h-fit py-2 mb-4  bg-red-400/50 border border-red-500 rounded-lg text-center  text-red-500 mx-auto">
                  {{ $e }}
                </div>
              @endforeach
            @endif

            <div>
              <div class="entryarea-float w-full">
                <input type="text" name="name" placeholder=" " required
                  class="input-float absolute w-full text-xl py-[26px] px-[30px] h-[20px] rounded-xl border border-[#f0ffff] bg-transparent transition ease duration-100 z-10 focus:outline-none">

                <div class="labelline-float text-lg text-black/70">
                  Fullname
                </div>
              </div>
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>


            <div>
              <div class="entryarea-float w-full mt-6">
                <input type="email" name="email" placeholder=" " required
                  class="input-float absolute w-full text-lg md:text-xl py-[26px] px-[30px] h-[20px] rounded-xl border border-[#f0ffff] bg-transparent transition ease duration-100 z-10 focus:outline-none">

                <div class="labelline-float text-base md:text-lg text-black/70">
                  Email
                </div>
              </div>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
              <div class="entryarea-float w-full mt-6">
                <input type="text" name="phone_number" placeholder=" " required
                  class="input-float absolute w-full text-lg md:text-xl py-[26px] px-[30px] h-[20px] rounded-xl border border-[#f0ffff] bg-transparent transition ease duration-100 z-10 focus:outline-none">

                <div class="labelline-float text-base md:text-lg text-black/70">
                  Phone Number
                </div>
              </div>
              <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 md:mt-5 lg:mt-6">

              <div class="entryarea-float w-full  relative">
                <input type="password" name="password" id="password" placeholder=" " required
                  class="input-float absolute w-full text-lg md:text-xl py-[26px] px-[30px] h-[20px] rounded-xl border border-[#f0ffff] bg-transparent transition ease duration-100 z-10 focus:outline-none">

                <div class="labelline-float text-base md:text-lg text-black/70">
                  Password
                </div>

                <!-- 👁️ Icon Mata -->
                <i id="togglePassword"
                  class="fa-solid fa-eye absolute right-5 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer z-20"></i>
              </div>

              <div class="entryarea-float w-full relative">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder=" " required
                  class="input-float absolute w-full text-lg md:text-xl py-[26px] px-[30px] h-[20px] rounded-xl border border-[#f0ffff] bg-transparent transition ease duration-100 z-10 focus:outline-none">

                <div class="labelline-float text-base md:text-lg text-black/70">
                  Confirm Password
                </div>

                <!-- 👁️ Icon Mata -->
                <i id="togglePassword_confirmation"
                  class="fa-solid fa-eye absolute right-5 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer z-20"></i>
              </div>

            </div>

            <button type="submit"
              class="bg-[#FF7043] hover:bg-opacity-90 transition text-white font-semibold text-base md:text-lg w-full mt-8 mb-5 py-3 rounded-xl shadow-lg">
              REGISTER
            </button>

            <p class="text-black/70 text-center text-sm">
              Already have an account? <a href="/login" class="text-[#FF7043] font-bold hover:underline">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script>
    const togglePassword = document.getElementById("togglePassword");
    const password = document.getElementById("password");

    const togglePasswordConfirmation = document.getElementById("togglePassword_confirmation");
    const passwordConfirmation = document.getElementById("password_confirmation");

    togglePassword.addEventListener("click", () => {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      togglePassword.classList.toggle("fa-eye");
      togglePassword.classList.toggle("fa-eye-slash");
    });

    togglePasswordConfirmation.addEventListener("click", () => {
      const type =  passwordConfirmation.getAttribute("type") === "password" ? "text" : "password";
      passwordConfirmation.setAttribute("type", type);

      togglePasswordConfirmation.classList.toggle("fa-eye");
      togglePasswordConfirmation.classList.toggle("fa-eye-slash");
    });


  </script>
@endsection