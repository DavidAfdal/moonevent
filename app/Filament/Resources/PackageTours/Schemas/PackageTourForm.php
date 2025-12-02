<?php

namespace App\Filament\Resources\PackageTours\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
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
                    ->prefix('Rp')
                    ->extraInputAttributes([
                        'x-data' => '{}',
                        'x-on:input' => "
                            let start = \$el.selectionStart;
                            let end = \$el.selectionEnd;

                            let raw = \$el.value.replace(/[^0-9]/g, '');
                            if (raw) {
                                let formatted = raw.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                \$el.value = formatted;

                                let diff = formatted.length - raw.length;
                                \$nextTick(() => {
                                    \$el.setSelectionRange(start + diff, end + diff);
                                });
                            } else {
                                \$el.value = '';
                            }
                        ",
                    ])
                    ->dehydrateStateUsing(fn($state) => 
                        (int) preg_replace('/[^0-9]/', '', (string) $state)
                    ),     
                TextInput::make('pax')
                    ->numeric(),
                TextInput::make('location')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                RichEditor::make('general_information')
                      ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'h2',
                        'h3',
                        'bulletList',
                        'orderedList',
                        'blockquote',
                        'codeBlock',
                        'undo',
                        'redo',
                    ])
                    ->mergeTags([])
                    ->label("General Information"),
                // RichEditor::make('legal_services')
                //     ->label("KUA Legal Services"),
                // RichEditor::make('event_crew')
                //     ->label("Our Event Crew")
                //     ->columnSpanFull(),
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
