<?php

namespace App\Filament\Resources\PenyakitTerbanyaks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenyakitTerbanyakForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_penyakit')
                    ->label('Nama Penyakit')
                    ->required()
                    ->maxLength(255),
                TextInput::make('jumlah_kasus')
                    ->label('Jumlah Kasus')
                    ->numeric()
                    ->required()
                    ->minValue(0),
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->numeric()
                    ->required()
                    ->maxLength(4)
                    ->placeholder('2025'),
                TextInput::make('peringkat')
                    ->label('Peringkat (1-10)')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(10)
                    ->nullable(),
            ]);
    }
}
