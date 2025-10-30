<?php

namespace App\Filament\Resources\MCS;

use App\Filament\Resources\MCS\Pages\CreateMC;
use App\Filament\Resources\MCS\Pages\EditMC;
use App\Filament\Resources\MCS\Pages\ListMCS;
use App\Filament\Resources\MCS\Schemas\MCForm;
use App\Filament\Resources\MCS\Tables\MCSTable;
use App\Models\MC;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class MCResource extends Resource
{
    protected static ?string $model = MC::class;

    protected static ?string $navigationLabel = 'MC';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Microphone;
     protected static string | UnitEnum | null $navigationGroup = 'Sub Menu';

    protected static ?string $recordTitleAttribute = 'mc_name';

    public static function form(Schema $schema): Schema
    {
        return MCForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MCSTable::configure($table);
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
            'index' => ListMCS::route('/'),
            'create' => CreateMC::route('/create'),
            'edit' => EditMC::route('/{record}/edit'),
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
