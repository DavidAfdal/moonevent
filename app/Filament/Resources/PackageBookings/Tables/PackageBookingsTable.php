<?php

namespace App\Filament\Resources\PackageBookings\Tables;

use App\Models\PackageBooking;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
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
                    ->label("Package")
                    ->badge(),
                TextColumn::make('total_amount')
                    ->label("  Total")
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),
                TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('booking_time')
                    ->time()
                    ->formatStateUsing(fn ($state) => $state->format('H:i'))
                    ->sortable(),
                 TextColumn::make('status')
                    ->badge()
                     ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'success' => 'success',
                        'rejected' => 'danger',
                    })
                    ->searchable(),
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
                    SelectFilter::make('status')
                        ->multiple()
                        ->options([
                            'pending' => 'Pending',
                            'success' => 'Success',
                            'rejected' => 'Rejected',
                    ])
            ])
            ->recordActions([
                ViewAction::make(),
               Action::make('approve')
                    ->color('success')
                    ->icon(Heroicon::CheckCircle)
                    ->visible(fn (PackageBooking $record) => $record->status === 'pending' || $record->status === 'rejected')
                    ->action(function (array $data, PackageBooking $record) {
                        $record->update([
                            'status' => 'success',
                        ]);
                    })
                    ->successNotificationTitle('Approved Booking'),

                Action::make('rejected')
                        ->color('danger')
                        ->icon(Heroicon::XCircle)
                        ->visible(fn (PackageBooking $record) => $record->status === 'pending' || $record->status === 'success')
                        ->action(function (array $data, PackageBooking $record) {
                            $record->update([
                                'status' => 'rejected',
                            ]);
                        })
                        ->successNotificationTitle('Rejected Booking')
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
