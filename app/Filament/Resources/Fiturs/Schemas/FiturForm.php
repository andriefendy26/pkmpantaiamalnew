<?php

namespace App\Filament\Resources\Fiturs\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FiturForm
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
                TextInput::make('icon')
                    ->label('Icon')
                    ->maxLength(255),
                TextInput::make('image')
                    ->label('Image URL')
                    ->maxLength(255),
                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->maxLength(255),
                Textarea::make('short_description')
                    ->label('Short Description')
                    ->rows(3),
                RichEditor::make('description')
                    ->label('Description')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric(),
                Toggle::make('is_active')
                    ->label('Is Active'),
            ]);
    }
}
