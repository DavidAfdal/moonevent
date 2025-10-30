<?php

namespace App\Filament\Resources\Caterings;

use App\Filament\Resources\Caterings\Pages\CreateCatering;
use App\Filament\Resources\Caterings\Pages\EditCatering;
use App\Filament\Resources\Caterings\Pages\ListCaterings;
use App\Filament\Resources\Caterings\Schemas\CateringForm;
use App\Filament\Resources\Caterings\Tables\CateringsTable;
use App\Models\Catering;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use BackedEnum;
use UnitEnum;

class CateringResource extends Resource
{
    protected static ?string $model = Catering::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cake;
    
    protected static string | UnitEnum | null $navigationGroup = 'Sub Menu';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CateringForm::configure($schema);
    }


    public static function table(Table $table): Table
    {
        return CateringsTable::configure($table);
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
            'index' => ListCaterings::route('/'),
            'create' => CreateCatering::route('/create'),
            'edit' => EditCatering::route('/{record}/edit'),
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
