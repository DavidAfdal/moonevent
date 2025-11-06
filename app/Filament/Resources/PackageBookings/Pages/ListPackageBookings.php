<?php

namespace App\Filament\Resources\PackageBookings\Pages;

use App\Filament\Resources\PackageBookings\PackageBookingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPackageBookings extends ListRecords
{
    protected static string $resource = PackageBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label("New Booking"),
        ];
    }
}
