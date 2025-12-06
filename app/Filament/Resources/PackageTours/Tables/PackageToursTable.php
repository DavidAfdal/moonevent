<?php

namespace App\Filament\Resources\PackageTours\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

use Filament\Tables\Table;

class PackageToursTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('price')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),
                TextColumn::make('pax')
                    ->numeric()
                    ->placeholder('-')
                    ->sortable(),
                TextColumn::make('category.name')
                    ->badge()
                    ->placeholder('-')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make("category")
                    ->relationship("category", "name")
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:PackageTour')),
                    ForceDeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:PackageTour')),
                    RestoreBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:PackageTour')),
                ]),
            ]);
    }
}
