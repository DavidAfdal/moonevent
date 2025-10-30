<?php

namespace App\Filament\Resources\Entertainments;

use App\Filament\Resources\Entertainments\Pages\CreateEntertainment;
use App\Filament\Resources\Entertainments\Pages\EditEntertainment;
use App\Filament\Resources\Entertainments\Pages\ListEntertainments;
use App\Filament\Resources\Entertainments\Schemas\EntertainmentForm;
use App\Filament\Resources\Entertainments\Tables\EntertainmentsTable;
use App\Models\Entertainment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class EntertainmentResource extends Resource
{
    protected static ?string $model = Entertainment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::MusicalNote;
     protected static string | UnitEnum | null $navigationGroup = 'Sub Menu';

    protected static ?string $recordTitleAttribute = 'entertainment_name';

    public static function form(Schema $schema): Schema
    {
        return EntertainmentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EntertainmentsTable::configure($table);
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
            'index' => ListEntertainments::route('/'),
            'create' => CreateEntertainment::route('/create'),
            'edit' => EditEntertainment::route('/{record}/edit'),
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
