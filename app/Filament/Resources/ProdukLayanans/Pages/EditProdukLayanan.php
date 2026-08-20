<?php

namespace App\Filament\Resources\ProdukLayanans\Pages;

use App\Filament\Resources\ProdukLayanans\ProdukLayananResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProdukLayanan extends EditRecord
{
    protected static string $resource = ProdukLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
