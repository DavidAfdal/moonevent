<?php

namespace App\Filament\Resources\PackageBookings\Pages;

use App\Filament\Resources\PackageBookings\PackageBookingResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPackageBooking extends ViewRecord
{
    protected static string $resource = PackageBookingResource::class;

    public function getTitle(): string
    {
        return 'View Booking ' . ($this->record->customer?->name ?? 'Unknown');
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
