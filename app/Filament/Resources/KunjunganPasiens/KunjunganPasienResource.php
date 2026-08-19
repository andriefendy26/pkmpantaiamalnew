<?php

namespace App\Filament\Resources\KunjunganPasiens;

use App\Filament\Resources\KunjunganPasiens\Pages\CreateKunjunganPasien;
use App\Filament\Resources\KunjunganPasiens\Pages\EditKunjunganPasien;
use App\Filament\Resources\KunjunganPasiens\Pages\ListKunjunganPasiens;
use App\Filament\Resources\KunjunganPasiens\Schemas\KunjunganPasienForm;
use App\Filament\Resources\KunjunganPasiens\Tables\KunjunganPasiensTable;
use App\Models\KunjunganPasien;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KunjunganPasienResource extends Resource
{
    protected static ?string $model = KunjunganPasien::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static string|UnitEnum|null $navigationGroup = 'Statistik';

    protected static ?string $recordTitleAttribute = 'kategori';

    public static function form(Schema $schema): Schema
    {
        return KunjunganPasienForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KunjunganPasiensTable::configure($table);
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
            'index' => ListKunjunganPasiens::route('/'),
            'create' => CreateKunjunganPasien::route('/create'),
            'edit' => EditKunjunganPasien::route('/{record}/edit'),
        ];
    }
}
