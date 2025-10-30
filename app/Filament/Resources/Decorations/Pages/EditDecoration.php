<?php

namespace App\Filament\Resources\Decorations\Pages;

use App\Filament\Resources\Decorations\DecorationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditDecoration extends EditRecord
{
    protected static string $resource = DecorationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
