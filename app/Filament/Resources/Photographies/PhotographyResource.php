<?php

namespace App\Filament\Resources\Photographies;

use App\Filament\Resources\Photographies\Pages\CreatePhotography;
use App\Filament\Resources\Photographies\Pages\EditPhotography;
use App\Filament\Resources\Photographies\Pages\ListPhotographies;
use App\Filament\Resources\Photographies\Schemas\PhotographyForm;
use App\Filament\Resources\Photographies\Tables\PhotographiesTable;
use App\Models\Photography;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class PhotographyResource extends Resource
{
    protected static ?string $model = Photography::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Camera;

     protected static string | UnitEnum | null $navigationGroup = 'Sub Menu';

    protected static ?string $recordTitleAttribute = 'photography_name';

    public static function form(Schema $schema): Schema
    {
        return PhotographyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PhotographiesTable::configure($table);
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
            'index' => ListPhotographies::route('/'),
            'create' => CreatePhotography::route('/create'),
            'edit' => EditPhotography::route('/{record}/edit'),
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
