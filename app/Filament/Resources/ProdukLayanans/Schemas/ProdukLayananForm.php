<?php

namespace App\Filament\Resources\ProdukLayanans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProdukLayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_produk')
                    ->label('Nama Produk Layanan')
                    ->required()
                    ->maxLength(255),
                Select::make('layanan')
                    ->label('Produk / Layanan')
                    ->options([
                        'Pelayanan UGD' => 'Pelayanan UGD',
                        'Pencabutan keteter' => 'Pencabutan keteter',
                        'Pemeriksaan Umum' => 'Pemeriksaan Umum',
                        'Imunisasi' => 'Imunisasi',
                        'Laboratorium' => 'Laboratorium',
                        'Farmasi' => 'Farmasi',
                        'KB/Kesehatan Reproduksi' => 'KB/Kesehatan Reproduksi',
                        'Kesehatan Ibu & Anak' => 'Kesehatan Ibu & Anak',
                        'Kesehatan Masyarakat' => 'Kesehatan Masyarakat',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->searchable()
                    ->preload()
                    ->nullable(),
                Textarea::make('detail')
                    ->label('Sistem, Mekanisme dan Prosedur')
                    ->rows(4)
                    ->columnSpanFull()
                    ->nullable(),
                Textarea::make('persyaratan')
                    ->label('Persyaratan')
                    ->rows(4)
                    ->columnSpanFull(),
                Textarea::make('waktu_penyelesaian')
                    ->label('Waktu Penyelesaian')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('biaya_tarif')
                    ->label('Biaya / Tarif')
                    ->placeholder('Contoh: Rp 50.000 atau Gratis')
                    ->maxLength(255),
                Toggle::make('is_published')
                    ->label('Published')
                    ->default(true)
                    ->required(),
            ]);
    }
}
