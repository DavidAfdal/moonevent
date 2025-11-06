<?php

namespace App\Filament\Resources\MUAS\Pages;

use App\Filament\Resources\MUAS\MUAResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMUAS extends ListRecords
{
    protected static string $resource = MUAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label("New Mua"),
        ];
    }
}
