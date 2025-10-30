<?php

namespace App\Filament\Resources\PackageBookings\Pages;

use App\Filament\Resources\PackageBookings\PackageBookingResource;
use App\Models\PackageBooking;
use Filament\Actions\Action;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
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
            ForceDeleteAction::make(),
            RestoreAction::make(),
            Action::make('approve')
                ->color("success")
                ->action(function (array $data, PackageBooking $record) {
                    $record->update([
                        'status' => 'success'
                    ]);
                })
                ->successNotificationTitle('Approved Booking'),
            Action::make('rejected')
                ->color("danger")
                 ->action(function (array $data, PackageBooking $record) {
                    $record->update([
                        'status' => 'rejected'
                    ]);
                })
                ->successNotificationTitle('Rejected Booking'),
        ];
    }
}
