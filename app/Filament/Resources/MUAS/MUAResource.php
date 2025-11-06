<?php

namespace App\Filament\Resources\MUAS;

use App\Filament\Resources\MUAS\Pages\CreateMUA;
use App\Filament\Resources\MUAS\Pages\EditMUA;
use App\Filament\Resources\MUAS\Pages\ListMUAS;
use App\Filament\Resources\MUAS\Schemas\MUAForm;
use App\Filament\Resources\MUAS\Tables\MUASTable;
use App\Models\MUA;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class MUAResource extends Resource
{
    protected static ?string $model = MUA::class;

      protected static ?string $navigationLabel = 'MUA';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string | UnitEnum | null $navigationGroup = 'Sub Menu';

    protected static ?string $recordTitleAttribute = 'mua_name';

    public static function getPluralLabel(): ?string
    {
        return 'MUA';
    }


    public static function form(Schema $schema): Schema
    {
        return MUAForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MUASTable::configure($table);
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
            'index' => ListMUAS::route('/'),
            'create' => CreateMUA::route('/create'),
            'edit' => EditMUA::route('/{record}/edit'),
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
