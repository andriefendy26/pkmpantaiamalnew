<?php

namespace App\Filament\Resources\GalleryItems\Schemas;

use App\Enums\MediaType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('gallery_id')
                    ->label('Gallery')
                    ->relationship('gallery', 'title')
                    ->searchable()
                    ->required(),
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('caption')
                    ->label('Caption')
                    ->rows(3),
                Select::make('media_type')
                    ->label('Media Type')
                    ->options(array_combine(array_map(fn($type) => $type->value, MediaType::cases()), array_map(fn($type) => $type->getLabel(), MediaType::cases())))
                    ->required(),
                TextInput::make('file_path')
                    ->label('File Path')
                    ->maxLength(255),
                TextInput::make('thumbnail')
                    ->label('Thumbnail URL')
                    ->maxLength(255),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric(),
                Toggle::make('is_active')
                    ->label('Is Active'),
            ]);
    }
}
