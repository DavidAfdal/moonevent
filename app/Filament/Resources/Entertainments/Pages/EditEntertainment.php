<?php

namespace App\Filament\Resources\Entertainments\Pages;

use App\Filament\Resources\Entertainments\EntertainmentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditEntertainment extends EditRecord
{
    protected static string $resource = EntertainmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
