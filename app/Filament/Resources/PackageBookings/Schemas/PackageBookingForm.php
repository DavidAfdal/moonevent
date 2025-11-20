<?php

namespace App\Filament\Resources\PackageBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
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
                    ->label("Wedding Package")
                    ->relationship('tour', 'name')
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $tour = \App\Models\PackageTour::find($state);
                            $set('total_amount', $tour?->price ?? 0);
                        } else {
                            $set('total_amount', 0);
                        }
                    })
                    ->required(),
                Select::make('user_id')
                    ->label("costumer")
                    ->relationship(
                          name: 'customer',
                          titleAttribute: 'name',
                          modifyQueryUsing: fn ($query) => $query->whereHas('roles', fn ($q) => $q->where('name', 'customer'))
                    )
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
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required()
                    ->rules([
                        'unique:package_bookings,booking_date',
                    ])
                    ->extraAttributes(['x-init' => "
                        const bookedDates = " . json_encode(\App\Models\PackageBooking::pluck('booking_date')->toArray()) . ";
                        this._flatpickr.config.disable = bookedDates;
                        this._flatpickr.config.onDayCreate.push(function(dObj, dStr, fp, dayElem) {
                            if (bookedDates.includes(dayElem.dateObj.toISOString().split('T')[0])) {
                                dayElem.classList.add('bg-red-500', 'text-white', 'rounded-full');
                            }
                        });
                    "]),
                Select::make('booking_time')
                ->options([
                    "Pagi",
                    "Malam"
                ])
                    ->required(),
            ]);
    }
}
