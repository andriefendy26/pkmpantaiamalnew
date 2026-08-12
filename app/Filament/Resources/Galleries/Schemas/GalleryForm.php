<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Description')
                    ->rows(4),
                TextInput::make('cover_image')
                    ->label('Cover Image URL')
                    ->maxLength(255),
                DatePicker::make('event_date')
                    ->label('Event Date'),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric(),
                Toggle::make('is_active')
                    ->label('Is Active'),
            ]);
    }
}
