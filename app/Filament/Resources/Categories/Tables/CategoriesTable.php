<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")->sortable()->searchable(),
                TextColumn::make("slug"),
                ToggleColumn::make('is_wedding')
                 ->label('Wedding?')
                 ->visible(fn () => auth()->user()->can('SetWedding:Category')),
            ])
            ->defaultSort("name")
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Category')),
                    ForceDeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Category')),
                    RestoreBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Category')),
                ]),
            ]);
    }
}
