<?php

namespace App\Filament\Resources\InstagramPostUrls;

use App\Filament\Resources\InstagramPostUrls\Pages\CreateInstagramPostUrl;
use App\Filament\Resources\InstagramPostUrls\Pages\EditInstagramPostUrl;
use App\Filament\Resources\InstagramPostUrls\Pages\ListInstagramPostUrls;
use App\Filament\Resources\InstagramPostUrls\Schemas\InstagramPostUrlForm;
use App\Filament\Resources\InstagramPostUrls\Tables\InstagramPostUrlsTable;
use App\Models\InstagramPostUrl;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstagramPostUrlResource extends Resource
{
    protected static ?string $model = InstagramPostUrl::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'url';

    public static function form(Schema $schema): Schema
    {
        return InstagramPostUrlForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstagramPostUrlsTable::configure($table);
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
            'index' => ListInstagramPostUrls::route('/'),
            'create' => CreateInstagramPostUrl::route('/create'),
            'edit' => EditInstagramPostUrl::route('/{record}/edit'),
        ];
    }
}
