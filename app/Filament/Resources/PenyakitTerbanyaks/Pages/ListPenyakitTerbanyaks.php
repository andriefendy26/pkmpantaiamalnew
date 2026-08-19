<?php

namespace App\Filament\Resources\PenyakitTerbanyaks\Pages;

use App\Filament\Resources\PenyakitTerbanyaks\PenyakitTerbanyakResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenyakitTerbanyaks extends ListRecords
{
    protected static string $resource = PenyakitTerbanyakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
