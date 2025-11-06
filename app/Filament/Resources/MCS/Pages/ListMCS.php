<?php

namespace App\Filament\Resources\MCS\Pages;

use App\Filament\Resources\MCS\MCResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMCS extends ListRecords
{
    protected static string $resource = MCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label("New MC"),
        ];
    }
}
