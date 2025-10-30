<?php

namespace App\Filament\Resources\Photographies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PhotographyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('photography_name')
                    ->required(),
                TextInput::make('icon')
                    ->required(),
            ]);
    }
}
