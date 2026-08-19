<?php

namespace App\Filament\Resources\SurveyKepuasanMasyarakats;

use App\Filament\Resources\SurveyKepuasanMasyarakats\Pages\CreateSurveyKepuasanMasyarakat;
use App\Filament\Resources\SurveyKepuasanMasyarakats\Pages\EditSurveyKepuasanMasyarakat;
use App\Filament\Resources\SurveyKepuasanMasyarakats\Pages\ListSurveyKepuasanMasyarakats;
use App\Filament\Resources\SurveyKepuasanMasyarakats\Schemas\SurveyKepuasanMasyarakatForm;
use App\Filament\Resources\SurveyKepuasanMasyarakats\Tables\SurveyKepuasanMasyarakatsTable;
use App\Models\SurveyKepuasanMasyarakat;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SurveyKepuasanMasyarakatResource extends Resource
{
    protected static ?string $model = SurveyKepuasanMasyarakat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static string|UnitEnum|null $navigationGroup = 'Survey';

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return SurveyKepuasanMasyarakatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SurveyKepuasanMasyarakatsTable::configure($table);
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
            'index' => ListSurveyKepuasanMasyarakats::route('/'),
            'create' => CreateSurveyKepuasanMasyarakat::route('/create'),
            'edit' => EditSurveyKepuasanMasyarakat::route('/{record}/edit'),
        ];
    }
}
