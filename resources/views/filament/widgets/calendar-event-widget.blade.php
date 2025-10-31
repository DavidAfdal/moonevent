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
          @if ($eventData)
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 shadow-inner space-y-6">
                    {{-- Header --}}
                    <div class="text-center border-b pb-4">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100">
                            {{ $eventData['title'] }}
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">Informasi lengkap pemesanan paket</p>
                    </div>

                    {{-- Detail Grid --}}
                    <div class="grid grid-cols-2  gap-6">

                        <div class="flex items-center space-x-3">
                            <x-filament::icon icon="heroicon-o-user" class="w-5 h-5 text-primary-500" />
                            <div>
                                <p class="text-sm text-gray-500">Customer</p>
                                <p class="font-semibold text-gray-800 dark:text-gray-100">
                                    {{ $eventData['customer'] }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <x-filament::icon icon="heroicon-o-calendar" class="w-5 h-5 text-primary-500" />
                            <div class="w-fit">
                                <p class="text-sm text-gray-500">Tanggal Booking</p>
                                <p class="font-semibold text-gray-800 dark:text-gray-100">
                                    {{ \Carbon\Carbon::parse($eventData['booking_date'])->translatedFormat('l, d F Y') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <x-filament::icon icon="heroicon-o-clock" class="w-5 h-5 text-primary-500" />
                            <div>
                                <p class="text-sm text-gray-500">Waktu</p>
                                <p class="font-semibold text-gray-800 dark:text-gray-100">
                                    {{ $eventData['booking_time'] }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <x-filament::icon icon="heroicon-o-ticket" class="w-5 h-5 text-primary-500" />
                            <div>
                                <p class="text-sm text-gray-500">Paket</p>
                                <p class="font-semibold text-gray-800 dark:text-gray-100">
                                    {{ explode(' - ', $eventData['title'])[0] ?? '-' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="p-6 text-center text-gray-500">
                    <x-filament::icon icon="heroicon-o-information-circle" class="w-8 h-8 mx-auto mb-2 text-gray-400" />
                    <p>Tidak ada data event yang dipilih.</p>
                </div>
            @endif

        <x-slot name="footer">
             <x-filament::button color="gray" wire:click="$dispatch('close-modal', { id: 'event-view-modal' })">
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
                        eventDisplay: 'block',
                        slotLabelFormat: {
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: false,
                        },
                        eventTimeFormat: {
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: false,
                            meridiem: false, 
                            separator: '.',
                        },
                         eventContent: function (arg) {
                            const event = arg.event;
                            const time = event.start
                                ? event.start.toLocaleTimeString('id-ID', {
                                    hour: '2-digit',
                                    minute: '2-digit',
                                    hour12: false, 
                                }).replace(':', '.') : '';
                                const title = event.title ?? '';

                            return {
                                html: `
                                    <div class="fc-event-block">
                                        <div class="fc-event-time">${time}</div>
                                        <div class="fc-event-title">${title}</div>
                                    </div>
                                `,
                            };
                        },
                        eventClick: function(info) {
                          
                            info.jsEvent.preventDefault(); 
            
                            
                            const eventId = info.event.id; 

                            @this.call('viewEvent', eventId);
                        },
                    })

                    calendar.render()
                }

                document.addEventListener('livewire:initialized', initCalendar)
            </script>
        @endpush

    
</x-filament-widgets::widget>