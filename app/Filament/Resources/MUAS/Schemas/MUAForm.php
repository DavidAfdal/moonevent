<?php

namespace App\Filament\Resources\MUAS\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MUAForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mua_name')
                    ->required(),
            ]);
    }
}
