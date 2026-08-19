<?php

namespace App\Filament\Resources\PenyakitTerbanyaks;

use App\Filament\Resources\PenyakitTerbanyaks\Pages\CreatePenyakitTerbanyak;
use App\Filament\Resources\PenyakitTerbanyaks\Pages\EditPenyakitTerbanyak;
use App\Filament\Resources\PenyakitTerbanyaks\Pages\ListPenyakitTerbanyaks;
use App\Filament\Resources\PenyakitTerbanyaks\Schemas\PenyakitTerbanyakForm;
use App\Filament\Resources\PenyakitTerbanyaks\Tables\PenyakitTerbanyaksTable;
use App\Models\PenyakitTerbanyak;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenyakitTerbanyakResource extends Resource
{
    protected static ?string $model = PenyakitTerbanyak::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBarSquare;

    protected static string|UnitEnum|null $navigationGroup = 'Statistik';

    protected static ?string $recordTitleAttribute = 'nama_penyakit';

    public static function form(Schema $schema): Schema
    {
        return PenyakitTerbanyakForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenyakitTerbanyaksTable::configure($table);
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
            'index' => ListPenyakitTerbanyaks::route('/'),
            'create' => CreatePenyakitTerbanyak::route('/create'),
            'edit' => EditPenyakitTerbanyak::route('/{record}/edit'),
        ];
    }
}
