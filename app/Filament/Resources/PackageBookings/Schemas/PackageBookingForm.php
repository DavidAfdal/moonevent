<?php

namespace App\Filament\Resources\PackageBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
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
                            $set('is_wedding_selected', $tour?->category?->is_wedding ?? false);
                        } else {
                            $set('total_amount', 0);
                             $set('is_wedding_selected', false);
                        }
                    })
                    ->required(),
                Select::make('user_id')
                    ->label("Costumer")
                    ->relationship(
                          name: 'customer',
                          titleAttribute: 'name',
                          modifyQueryUsing: fn ($query) => $query->whereHas('roles', fn ($q) => $q->where('name', 'customer'))
                    )
                    ->required(),
                Select::make('decoration_id')
                    ->relationship('decoration', 'decoration_name')
                    ->hidden(fn (callable $get) => !$get('is_wedding_selected')),
                Select::make('mc_id')
                    ->relationship('mc', 'mc_name')
                    ->hidden(fn (callable $get) => !$get('is_wedding_selected')),
                Select::make('entertainment_id')
                    ->relationship('entertainment', 'entertainment_name')
                    ->hidden(fn (callable $get) => !$get('is_wedding_selected')),
                Select::make('photographie_id')
                    ->relationship('photograph', 'photography_name')
                    ->hidden(fn (callable $get) => !$get('is_wedding_selected')),
                Select::make('mua_id')
                    ->relationship('mua', 'mua_name')
                    ->hidden(fn (callable $get) => !$get('is_wedding_selected')),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required()
                   ->unique(ignoreRecord: true)
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
                    "Morning" => "Morning",
                    "Night"   => "Night",
                ])
                ->required()
            ]);
    }
}
