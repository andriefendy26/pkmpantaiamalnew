<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
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
                Select::make('post_category_id')
                    ->label('Post Category')
                    ->relationship('postCategory', 'name')
                    ->searchable()
                    ->required(),
                Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->searchable(),
                TextInput::make('author_name')
                    ->label('Author Name')
                    ->maxLength(255),
                RichEditor::make('content')
                    ->label('Content')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('posts')
                    ->disk('public')
                    ->maxSize(2048)
                    ->columnSpanFull(),
                DateTimePicker::make('publishing_date')
                    ->label('Publishing Date'),
                Toggle::make('is_featured')
                    ->label('Featured'),
                MultiSelect::make('tags')
                    ->relationship('tags', 'name')
                    ->label('Tags'),
            ]);
    }
}
