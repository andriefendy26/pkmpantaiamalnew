<?php

namespace App\Filament\Resources\KunjunganPasiens\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KunjunganPasienForm
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
                TextInput::make('kategori')
                    ->label('Kategori')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh: Januari, Triwulan 1, atau Jenis Layanan'),
                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'laki_laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ])
                    ->required(),
                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->placeholder('0'),
            ]);
    }
}
