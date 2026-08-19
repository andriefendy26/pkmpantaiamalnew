<?php

namespace App\Filament\Resources\KunjunganPasiens\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KunjunganPasiensTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->searchable(),
                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'laki_laki' => 'success',
                        'perempuan' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'laki_laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                        default => $state,
                    }),
                TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->sortable()
                    ->numeric(),
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
