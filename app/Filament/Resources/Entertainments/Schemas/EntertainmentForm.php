<?php

namespace App\Filament\Resources\Entertainments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EntertainmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('entertainment_name')
                    ->required(),
                TextInput::make('icon')
                    ->required(),
            ]);
    }
}
