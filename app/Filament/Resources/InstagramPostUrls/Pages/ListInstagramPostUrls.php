<?php

namespace App\Filament\Resources\InstagramPostUrls\Pages;

use App\Filament\Resources\InstagramPostUrls\InstagramPostUrlResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstagramPostUrls extends ListRecords
{
    protected static string $resource = InstagramPostUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
