<?php

namespace App\Filament\Resources\PackageBookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PackageBookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer.name')
                    ->sortable(),
                TextColumn::make('tour.name')
                    ->label("package")
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('total_amount')
                    ->label("  Total")
                    ->numeric()
                    ->sortable(),
                TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('booking_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                 Filter::make('date_range')
                    ->schema([
                        DatePicker::make('start')->label('Start Date'),
                        DatePicker::make('end')->label('End Date'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['start'], fn($q, $date) => $q->whereDate('booking_date', '>=', $date))
                            ->when($data['end'], fn($q, $date) => $q->whereDate('booking_date', '<=', $date));
                    })
                    ->label('Date Range'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
