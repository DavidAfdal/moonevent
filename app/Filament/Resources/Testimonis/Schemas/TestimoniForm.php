<?php

namespace App\Filament\Resources\Testimonis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimoniForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label("Title")
                    ->required(),
                TextInput::make('desc')
                    ->label("Description")
                    ->required(),
                TextInput::make('video_link')
                    ->label("Video Link (YT Shorts)")
                    ->columnSpanFull()
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
