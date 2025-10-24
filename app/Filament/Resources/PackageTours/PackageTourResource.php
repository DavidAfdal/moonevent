<?php

namespace App\Filament\Resources\PackageTours;

use App\Filament\Resources\PackageTours\Pages\CreatePackageTour;
use App\Filament\Resources\PackageTours\Pages\EditPackageTour;
use App\Filament\Resources\PackageTours\Pages\ListPackageTours;
use App\Filament\Resources\PackageTours\Schemas\PackageTourForm;
use App\Filament\Resources\PackageTours\Tables\PackageToursTable;
use App\Models\PackageTour;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageTourResource extends Resource
{
    protected static ?string $model = PackageTour::class;

     protected static ?string $navigationLabel = 'Package Wedding';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getPluralLabel(): ?string
    {
        return 'Package Wedding';
    }

    public static function form(Schema $schema): Schema
    {
        return PackageTourForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PackageToursTable::configure($table);
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
            'index' => ListPackageTours::route('/'),
            'create' => CreatePackageTour::route('/create'),
            'edit' => EditPackageTour::route('/{record}/edit'),
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
