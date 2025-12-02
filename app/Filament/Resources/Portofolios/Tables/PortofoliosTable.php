<?php

namespace App\Filament\Resources\Portofolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class PortofoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('link'),
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
                    DeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Portofolio')),
                    ForceDeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Portofolio')),
                    RestoreBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Portofolio')),
                ]),
            ]);
    }
}
