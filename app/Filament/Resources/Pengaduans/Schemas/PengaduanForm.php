<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pelapor')
                    ->label('Nama Pelapor')
                    ->placeholder('Opsional untuk pengaduan anonim')
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->placeholder('opsional@pengaduan.com')
                    ->maxLength(255),
                TextInput::make('no_hp')
                    ->label('No. HP')
                    ->tel()
                    ->placeholder('08xxxxxxxxxx')
                    ->maxLength(20),
                Select::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'pelayanan' => 'Pelayanan',
                        'fasilitas' => 'Fasilitas',
                        'petugas' => 'Petugas',
                        'lainnya' => 'Lainnya',
                    ])
                    ->default('lainnya')
                    ->required(),
                Textarea::make('isi_pengaduan')
                    ->label('Isi Pengaduan')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
