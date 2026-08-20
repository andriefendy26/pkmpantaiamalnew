<?php

namespace App\Filament\Resources\ProdukLayanans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProdukLayanansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('layanan')
                    ->label('Produk / Layanan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pelayanan UGD' => 'danger',
                        'Pencabutan keteter' => 'warning',
                        'Pemeriksaan Umum' => 'success',
                        'Imunisasi' => 'info',
                        'Laboratorium' => 'purple',
                        'Farmasi' => 'pink',
                        'KB/Kesehatan Reproduksi' => 'teal',
                        'Kesehatan Ibu & Anak' => 'indigo',
                        'Kesehatan Masyarakat' => 'gray',
                        default => 'gray',
                    })
                    ->searchable(),
                TextColumn::make('biaya_tarif')
                    ->label('Biaya / Tarif')
                    ->searchable(),
                TextColumn::make('is_published')
                    ->label('Published')
                    ->badge()
                    ->color(fn (bool $state): string => $state ? 'success' : 'gray')
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Ya' : 'Tidak'),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
