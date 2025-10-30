<?php

namespace App\Filament\Resources\Decorations\Pages;

use App\Filament\Resources\Decorations\DecorationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDecorations extends ListRecords
{
    protected static string $resource = DecorationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
