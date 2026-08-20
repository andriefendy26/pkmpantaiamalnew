<?php

namespace App\Filament\Resources\ProdukLayanans\Pages;

use App\Filament\Resources\ProdukLayanans\ProdukLayananResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProdukLayanans extends ListRecords
{
    protected static string $resource = ProdukLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
