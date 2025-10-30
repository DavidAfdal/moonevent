<?php

namespace App\Filament\Resources\Caterings\Pages;

use App\Filament\Resources\Caterings\CateringResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditCatering extends EditRecord
{
    protected static string $resource = CateringResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
