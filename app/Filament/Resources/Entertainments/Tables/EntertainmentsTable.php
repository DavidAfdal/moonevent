<?php

namespace App\Filament\Resources\Entertainments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class EntertainmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('entertainment_name')
                    ->searchable(),
               TextColumn::make('created_at')
                    ->dateTimeTooltip()
                    ->sortable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Entertaiment')),
                    ForceDeleteBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Entertaiment')),
                    RestoreBulkAction::make()->authorize(fn () => auth()->user()->can('Delete:Entertaiment')),
                ]),
            ]);
    }
}
