<?php

namespace App\Filament\Resources\SurveyKepuasanMasyarakats\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SurveyKepuasanMasyarakatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->numeric()
                    ->required()
                    ->maxLength(4)
                    ->placeholder('2025'),
                TextInput::make('judul')
                    ->label('Judul Survey')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('file_path')
                    ->label('Flyer / Foto Survey')
                    ->image()
                    ->directory('survey-kepuasan')
                    ->disk('public')
                    ->maxSize(5120)
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->label('Published')
                    ->default(true)
                    ->required(),
            ]);
    }
}
