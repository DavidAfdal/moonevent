<?php

namespace App\Filament\Widgets;

use App\Models\PackageBooking;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Filament\Widgets\Widget;
use Illuminate\Support\Carbon;

class CalendarEventWidget extends Widget implements HasForms
{
     use InteractsWithForms; 
    protected static bool $isLazy = false;

    public ?PackageBooking $eventModel = null;
    public ?array $eventData = []; 
    protected  string $view = 'filament.widgets.calendar-event-widget';
    protected int | string | array $columnSpan = 'full';


    // public function mount(): void
    // {
    //     $this->form->fill();
    // }
 

    public function getViewData(): array
    {
        $bookings = PackageBooking::select(
            'package_bookings.id',
            'package_bookings.booking_date',
            'package_bookings.booking_time',
            'package_tours.name as package_name',
            'users.name as user_name',
            'package_bookings.status'
        )
        ->join('package_tours', 'package_bookings.package_tour_id', '=', 'package_tours.id')
        ->join('users', 'package_bookings.user_id', '=', 'users.id')
        ->get();

        $events = $bookings
            ->filter(fn ($b) => $b->status !== 'declined')
            ->map(function ($b) {
                $timestr = $b->booking_time->format('H:i:s');
                $date =  Carbon::parse($b->booking_date)->format("Y-m-d");
                return [
                    'id'  => $b->id,
                    'title' => "{$b->package_name} - {$b->user_name}",
                    'start' => "{$date}T{$timestr}",
                    'end'   => "{$date}T{$timestr}",
                    'color' => match ($b->status) {
                        'success' => '#16a34a', 
                        'pending' => '#f59e0b',
                        'rejected' => '#E62727',
                        default => '#3b82f6',    // biru (default)
                    },
                ];
            })
            ->values();
    

        return ['events' => $events];
    }

    public function viewEvent(string $eventId): void
    {
    
       $this->eventModel = PackageBooking::find($eventId);
        
        if (! $this->eventModel) {
            Notification::make()
                ->title('Event tidak ditemukan!')
                ->danger()
                ->send();
            return;
        }
        
        $timestr = $this->eventModel->booking_time->format('H:i:s');
        $date =  Carbon::parse($this->eventModel->booking_date)->format("Y-m-d");
        $title = "{$this->eventModel->tour->name} - {$this->eventModel->customer->name}";
        // Mengisi form/modal dengan data event
        $this->eventData = [
            'title' => $title,
            'booking_date' => $date,
            'booking_time' => $timestr,
            'customer' => $this->eventModel->customer->name,
        ];

        $this->dispatch('open-modal', id: 'event-view-modal');
    }
    
  protected function schema(): Schema
{
    return Schema::make()
        ->statePath('eventData')
        ->components([
            TextInput::make('title')
                ->label('Judul Event')
                ->disabled(),
            TextInput::make('booking_date')
                ->label('Tanggal Booking')
                ->disabled(),
            TextInput::make('booking_time')
                ->label('Waktu Booking')
                ->disabled(),
            TextInput::make('customer')
                ->label('Customer')
                ->disabled(),
        ]);
}
}
