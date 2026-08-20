<?php

namespace App\Filament\Resources\ProdukLayanans;

use App\Filament\Resources\ProdukLayanans\Pages\CreateProdukLayanan;
use App\Filament\Resources\ProdukLayanans\Pages\EditProdukLayanan;
use App\Filament\Resources\ProdukLayanans\Pages\ListProdukLayanans;
use App\Filament\Resources\ProdukLayanans\Schemas\ProdukLayananForm;
use App\Filament\Resources\ProdukLayanans\Tables\ProdukLayanansTable;
use App\Models\ProdukLayanan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProdukLayananResource extends Resource
{
    protected static ?string $model = ProdukLayanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShoppingBag;

    protected static string|UnitEnum|null $navigationGroup = 'Produk';

    protected static ?string $recordTitleAttribute = 'nama_produk';

    public static function form(Schema $schema): Schema
    {
        return ProdukLayananForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProdukLayanansTable::configure($table);
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
            'index' => ListProdukLayanans::route('/'),
            'create' => CreateProdukLayanan::route('/create'),
            'edit' => EditProdukLayanan::route('/{record}/edit'),
        ];
    }
}
