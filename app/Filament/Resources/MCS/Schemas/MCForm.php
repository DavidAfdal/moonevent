<?php

namespace App\Filament\Resources\MCS\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MCForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mc_name')
                    ->required(),
            ]);
    }
}
