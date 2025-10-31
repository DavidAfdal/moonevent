<?php

namespace App\Filament\Resources\Decorations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DecorationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('decoration_name')
                    ->required()
            ]);
    }
}
