<?php

namespace App\Filament\Resources\PackageBookings;

use App\Filament\Resources\PackageBookings\Pages\CreatePackageBooking;
use App\Filament\Resources\PackageBookings\Pages\EditPackageBooking;
use App\Filament\Resources\PackageBookings\Pages\ListPackageBookings;
use App\Filament\Resources\PackageBookings\Pages\ViewPackageBooking;
use App\Filament\Resources\PackageBookings\Schemas\PackageBookingForm;
use App\Filament\Resources\PackageBookings\Schemas\PackageBookingInfolist;
use App\Filament\Resources\PackageBookings\Tables\PackageBookingsTable;
use App\Models\PackageBooking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageBookingResource extends Resource
{
    protected static ?string $model = PackageBooking::class;
    protected static ?string $navigationLabel = 'Bookings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

     public static function getRecordTitle($record): ?string
    {
        return 'Booking ' . ($record->customer?->name ?? 'Unknown');
    }

    public static function getPluralLabel(): ?string
    {
        return 'Bookings';
    }

    public static function form(Schema $schema): Schema
    {
        return PackageBookingForm::configure($schema);
    }
    

    public static function infolist(Schema $schema): Schema
    {
        return PackageBookingInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PackageBookingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPackageBookings::route('/'),
            'create' => CreatePackageBooking::route('/create'),
            'view' => ViewPackageBooking::route('/{record}'),
            'edit' => EditPackageBooking::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
