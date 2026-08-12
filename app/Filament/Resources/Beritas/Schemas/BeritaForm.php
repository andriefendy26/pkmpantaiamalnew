<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BeritaForm
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
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),
                Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->searchable(),
                TextInput::make('author_name')
                    ->label('Author Name')
                    ->maxLength(255),
                Textarea::make('excerpt')
                    ->label('Excerpt')
                    ->rows(3),
                RichEditor::make('content')
                    ->label('Content')
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('beritas')
                    ->disk('public')
                    ->maxSize(2048)
                    ->columnSpanFull(),
                TextInput::make('source')
                    ->label('Source')
                    ->maxLength(255),
                TextInput::make('source_url')
                    ->label('Source URL')
                    ->url()
                    ->maxLength(255),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])
                    ->required(),
                Toggle::make('is_featured')
                    ->label('Featured'),
                DateTimePicker::make('published_at')
                    ->label('Published At'),
                MultiSelect::make('tags')
                    ->relationship('tags', 'name')
                    ->label('Tags'),
                TextInput::make('meta_title')
                    ->label('Meta Title')
                    ->maxLength(255),
                Textarea::make('meta_description')
                    ->label('Meta Description')
                    ->rows(3),
                TextInput::make('canonical_url')
                    ->label('Canonical URL')
                    ->url()
                    ->maxLength(255),
                TextInput::make('og_image')
                    ->label('OG Image URL')
                    ->maxLength(255),
            ]);
    }
}
