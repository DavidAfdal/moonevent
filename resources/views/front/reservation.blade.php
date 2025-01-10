
@extends('front.layouts.app')

@section('content')
<section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
    
<div style="text-align: center; padding: 50px; font-family: Arial, sans-serif;">
    <!-- Icon Section -->
    <div style="margin-bottom: 20px;">
        <img src="{{ asset('assets/icons/pending.png') }}" alt="Waiting for confirmation" style="width: 150px text-align: center;">
    </div>

    <!-- Waiting For Confirmation -->
    <div style="width: 100%; padding: 10px; background-color: #4285F4; color: white; border: none; border-radius: 5px; font-size: 18px;">
        Waiting For Confirmation
    </div>

    <!-- WhatsApp Button -->
    <div style="margin-top: 20px;">
        <a href="https://wa.me/6287885619509" target="_blank" style="text-decoration: none;">
            <div style="display: flex; align-items: center; justify-content: center; background-color: #e0e0e0; padding: 10px; border-radius: 5px;">
                <span style="font-size: 30px; margin-right: 5px; margin-left: 20px;"><b>LINK WA ME</b></span>
                <img src="{{ asset('assets/icons/whatsapp_icon.png') }}" alt="WhatsApp Icon" style="width: 70px;">
            </div>
        </a>
    </div>

    <!-- Check Reservation Button -->
    <div style="margin-top: 20px;">
        <a href="{{ url('/dashboard/my-booking') }}">
            <button style="width: 50%; padding: 10px; background-color: #4285F4; color: white; border: none; border-radius: 10px; font-size: 18px;">
                Check Reservation
            </button>
        </a>
    </div>

    @endsection
