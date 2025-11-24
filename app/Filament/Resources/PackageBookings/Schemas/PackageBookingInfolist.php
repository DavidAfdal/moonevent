<?php

namespace App\Filament\Resources\PackageBookings\Schemas;

use App\Models\PackageBooking;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PackageBookingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Booking Information')
                ->description('Detail informasi pemesanan paket.')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextEntry::make('status')
                                ->badge()
                                ->color(fn (string $state): string => match ($state) {
                                    'pending' => 'warning',
                                    'success' => 'success',
                                    'rejected' => 'danger',
                                    default => 'gray',
                                })
                                ->label('Status'),

                            TextEntry::make('tour.name')
                                ->label('Wedding Package')
                                ->placeholder('-'),

                            TextEntry::make('customer.name')
                                ->label('Customer Name')
                                ->placeholder('-'),

                            TextEntry::make('total_amount')
                                ->label('Total Amount')
                                ->money('IDR', locale: 'id_ID')
                                ->color('primary'),
                        ]),
                ]),

            Section::make('Service Packages')
                ->collapsible()
                ->schema([
                    Grid::make(3)
                        ->schema([
                            TextEntry::make('catering.catering_name')->label('Catering')->placeholder('-'),
                            TextEntry::make('decoration.decoration_name')->label('Decoration')->placeholder('-'),
                            TextEntry::make('photograph.photography_name')->label('Photography')->placeholder('-'),
                            TextEntry::make('mc.mc_name')->label('MC')->placeholder('-'),
                            TextEntry::make('entertainment.entertainment_name')->label('Entertainment')->placeholder('-'),
                            TextEntry::make('mua.mua_name')->label('MUA')->placeholder('-'),
                        ]),
                ]),

            Section::make('Schedule')
                ->collapsible()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextEntry::make('booking_date')
                                ->label('Booking Date')
                                ->date('d F Y')
                                ->color('info'),

                            TextEntry::make('booking_time')
                                ->label('Booking Time')
                                ->color('info'),
                        ]),
                ]),

            Section::make('Created Information')
                ->collapsed()
                ->schema([
                    TextEntry::make('created_at')
                        ->label('Created At')
                        ->dateTime('d M Y, H:i')
                        ->color('gray'),
                ]),
            ]);
    }
}
