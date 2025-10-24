<?php

namespace App\Filament\Resources\PackageBookings\Schemas;

use App\Models\PackageBooking;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PackageBookingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('status'),
                TextEntry::make('package_tour_id')
                    ->numeric(),
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('catering_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('decoration_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('photographie_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('mc_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('entertainment_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('mua_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('total_amount')
                    ->numeric(),
                TextEntry::make('booking_date')
                    ->date(),
                TextEntry::make('booking_time')
                    ->time(),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (PackageBooking $record): bool => $record->trashed()),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
