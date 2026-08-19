<?php

namespace App\Filament\Resources\KunjunganPasiens\Pages;

use App\Filament\Resources\KunjunganPasiens\KunjunganPasienResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKunjunganPasien extends EditRecord
{
    protected static string $resource = KunjunganPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
