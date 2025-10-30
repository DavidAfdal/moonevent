<?php

namespace App\Filament\Resources\Decorations;

use App\Filament\Resources\Decorations\Pages\CreateDecoration;
use App\Filament\Resources\Decorations\Pages\EditDecoration;
use App\Filament\Resources\Decorations\Pages\ListDecorations;
use App\Filament\Resources\Decorations\Schemas\DecorationForm;
use App\Filament\Resources\Decorations\Tables\DecorationsTable;
use App\Models\Decoration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class DecorationResource extends Resource
{
    protected static ?string $model = Decoration::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    
    protected static string | UnitEnum | null $navigationGroup = 'Sub Menu';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return DecorationForm::configure($schema);
    }

 


    public static function table(Table $table): Table
    {
        return DecorationsTable::configure($table);
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
            'index' => ListDecorations::route('/'),
            'create' => CreateDecoration::route('/create'),
            'edit' => EditDecoration::route('/{record}/edit'),
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
