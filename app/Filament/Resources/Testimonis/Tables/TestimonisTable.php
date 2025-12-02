<?php

namespace App\Filament\Resources\Testimonis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class TestimonisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('video_link'),
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->imagesize(100)
                    ->square()
                    ->visibility('public')
                    ->disk('public')
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Testimoni')),
                    ForceDeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Testimoni')),
                    RestoreBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Testimoni')),
                ]),
            ]);
    }
}
