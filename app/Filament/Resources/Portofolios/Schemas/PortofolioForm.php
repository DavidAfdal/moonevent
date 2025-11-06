<?php

namespace App\Filament\Resources\Portofolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortofolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label("Name")
                    ->required(),
                TextInput::make('link')
                    ->label("Link")
                    ->required(),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->directory('portofolio/' . date('Y/m/d'))
                    ->disk('public')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
