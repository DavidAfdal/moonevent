<?php

namespace App\Filament\Resources\Entertainments\Pages;

use App\Filament\Resources\Entertainments\EntertainmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEntertainments extends ListRecords
{
    protected static string $resource = EntertainmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
