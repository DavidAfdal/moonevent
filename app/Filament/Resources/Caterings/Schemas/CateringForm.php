<?php

namespace App\Filament\Resources\Caterings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CateringForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('catering_name')
                    ->required()
            ]);
    }
}
