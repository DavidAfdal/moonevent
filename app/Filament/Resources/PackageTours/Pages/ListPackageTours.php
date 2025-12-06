<?php

namespace App\Filament\Resources\PackageTours\Pages;

use App\Filament\Resources\PackageTours\PackageTourResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPackageTours extends ListRecords
{
    protected static string $resource = PackageTourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                        ->label("New Package"),
        ];
    }
}
