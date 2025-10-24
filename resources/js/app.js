import './bootstrap';
import AOS from 'aos';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', () => {
  AOS.init({
    // Konfigurasi global opsional:
    duration: 1000, // Durasi animasi dalam ms
    once: true,    // Apakah animasi hanya terjadi sekali saat di-scroll ke bawah
    easing: 'ease-in-out', // Kurva easing default
  });
});

Alpine.start();
