<?php

namespace App\Filament\Resources\PenyakitTerbanyaks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenyakitTerbanyaksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('peringkat')
                    ->label('Peringkat')
                    ->sortable()
                    ->badge()
                    ->color('success'),
                TextColumn::make('nama_penyakit')
                    ->label('Nama Penyakit')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('jumlah_kasus')
                    ->label('Jumlah Kasus')
                    ->sortable()
                    ->numeric(),
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),
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
