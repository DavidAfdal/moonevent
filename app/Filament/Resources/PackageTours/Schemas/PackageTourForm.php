<?php

namespace App\Filament\Resources\PackageTours\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Str;

class PackageTourForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->required()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                TextInput::make('pax')
                    ->required()
                    ->numeric(),
                TextInput::make('location')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Textarea::make('about')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->directory('thumbnails/' . date('Y/m/d'))
                    ->disk('public')
                    ->required()
                    ->columnSpanFull(),
              Repeater::make('package_photos')
                ->label('Galeri Foto')
                ->relationship('package_photos')
                ->schema([
                    FileUpload::make('photo')
                        ->label('Foto')
                        ->disk('public')
                        ->directory('package_photos')
                        ->visibility('public')
                        ->previewable(true) 
                ])
                ->columns(1)
                ->minItems(3)
                ->maxItems(3)
                ->required()
                ->columnSpanFull(),
                ]);
               
    }
}
