<?php

namespace App\Filament\Resources\KunjunganPasiens\Pages;

use App\Filament\Resources\KunjunganPasiens\KunjunganPasienResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKunjunganPasiens extends ListRecords
{
    protected static string $resource = KunjunganPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
