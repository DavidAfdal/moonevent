<?php

namespace App\Filament\Resources\PackageBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class PackageBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('package_tour_id')
                    ->relationship('tour', 'name')
                    ->disabled()
                    ->required(),
                Select::make('user_id')
                    ->relationship('customer', 'name')
                    ->disabled()
                    ->required(),
                Select::make('catering_id')
                    ->relationship('catering', 'catering_name')
                    ->required(),
                Select::make('decoration_id')
                    ->relationship('decoration', 'decoration_name')
                    ->required(),
                Select::make('mc_id')
                    ->relationship('mc', 'mc_name')
                    ->required(),
                Select::make('entertainment_id')
                    ->relationship('entertainment', 'entertainment_name')
                    ->required(),
                Select::make('photographie_id')
                    ->relationship('photograph', 'photography_name')
                    ->required(),
                Select::make('mua_id')
                    ->relationship('mua', 'mua_name')
                    ->required(),
                TextInput::make('total_amount')
                    ->required()
                    ->disabled()
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required(),
                TimePicker::make('booking_time')
                    ->required(),
            ]);
    }
}
