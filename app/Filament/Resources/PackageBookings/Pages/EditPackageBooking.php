<?php

namespace App\Filament\Resources\PackageBookings\Pages;

use App\Filament\Resources\PackageBookings\PackageBookingResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPackageBooking extends EditRecord
{
    protected static string $resource = PackageBookingResource::class;

    public function getTitle(): string
    {
        return 'Edit Booking ' . ($this->record->customer?->name ?? 'Unknown');
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
