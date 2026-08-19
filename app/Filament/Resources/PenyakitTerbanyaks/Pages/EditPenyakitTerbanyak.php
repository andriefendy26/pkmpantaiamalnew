<?php

namespace App\Filament\Resources\PenyakitTerbanyaks\Pages;

use App\Filament\Resources\PenyakitTerbanyaks\PenyakitTerbanyakResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenyakitTerbanyak extends EditRecord
{
    protected static string $resource = PenyakitTerbanyakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
