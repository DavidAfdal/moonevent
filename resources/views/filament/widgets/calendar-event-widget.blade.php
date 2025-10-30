<x-filament-widgets::widget>
    <x-filament::section>
        <div>
            {{-- <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-100">
                📅 Jadwal Booking
            </h2> --}}
            <div wire:ignore id="calendar" class="min-h-[600px]"></div>
        </div>

    </x-filament::section>

    <x-filament::modal 
        id="event-view-modal" 
        width="lg" 
        :heading="__('Detail Event')"
    >
        <form wire:submit="create">
            {{ $this->form }}
        </form>
        
        {{-- Tombol aksi jika diperlukan, misalnya: Edit --}}
        <x-slot name="footer">
            <x-filament::button
                wire:click="$dispatch('close-modal', { id: 'event-view-modal' })"
                color="secondary"
            >
                Tutup
            </x-filament::button>
        </x-slot>
    </x-filament::modal>

      @push('scripts')
            <script>
                function initCalendar() {
                    console.log('test')
                    const el = document.getElementById('calendar')
                    if (!el) return

                    const events = @json($events)

                    const calendar = new FullCalendar.Calendar(el, {
                        initialView: 'dayGridMonth',
                        height: 'auto',
                        events,
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay'
                        },
                        eventClick: function(info) {
                            // Hentikan perilaku default (mencegah link atau navigasi)
                            info.jsEvent.preventDefault(); 
                            
                            // Ambil ID event dari objek info.event

                            
                            const eventId = info.event.id; 

                            console.log(eventId)

                            // Panggil metode Livewire 'viewEvent' dengan ID event.
                            // '@this' adalah Alpine.js shortcut untuk instance Livewire.
                            @this.call('viewEvent', eventId);
                        },
                    })

                    calendar.render()
                }

                document.addEventListener('livewire:initialized', initCalendar)
            </script>
        @endpush

    
</x-filament-widgets::widget>