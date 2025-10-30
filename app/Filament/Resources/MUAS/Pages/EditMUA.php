<?php

namespace App\Filament\Resources\MUAS\Pages;

use App\Filament\Resources\MUAS\MUAResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditMUA extends EditRecord
{
    protected static string $resource = MUAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
