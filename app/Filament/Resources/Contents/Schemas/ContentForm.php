<?php

namespace App\Filament\Resources\Contents\Schemas;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContentForm
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
                BelongsToSelect::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Category')
                    ->searchable()
                    ->required(),
                BelongsToSelect::make('author_id')
                    ->relationship('author', 'name')
                    ->label('Author')
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
                TextInput::make('thumbnail')
                    ->label('Thumbnail URL')
                    ->maxLength(255),
                TextInput::make('source')
                    ->label('Source')
                    ->maxLength(255),
                TextInput::make('source_url')
                    ->label('Source URL')
                    ->url()
                    ->maxLength(255),
                Select::make('status')
                    ->label('Status')
                    ->options(array_combine(array_map(fn($status) => $status->value, ContentStatus::cases()), array_map(fn($status) => $status->getLabel(), ContentStatus::cases())))
                    ->required(),
                Toggle::make('is_featured')
                    ->label('Featured'),
                DateTimePicker::make('published_at')
                    ->label('Published At'),
                Select::make('type')
                    ->label('Content Type')
                    ->options(array_combine(array_map(fn($type) => $type->value, ContentType::cases()), array_map(fn($type) => $type->label(), ContentType::cases())))
                    ->required(),
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
