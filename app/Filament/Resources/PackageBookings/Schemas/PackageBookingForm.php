<?php

namespace App\Filament\Resources\PackageBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class PackageBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('status')
                    ->required(),
                TextInput::make('package_tour_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('catering_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('decoration_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('photographie_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('mc_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('entertainment_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('mua_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required(),
                TimePicker::make('booking_time')
                    ->required(),
            ]);
    }
}
