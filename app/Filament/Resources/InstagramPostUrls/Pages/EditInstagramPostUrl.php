<?php

namespace App\Filament\Resources\InstagramPostUrls\Pages;

use App\Filament\Resources\InstagramPostUrls\InstagramPostUrlResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInstagramPostUrl extends EditRecord
{
    protected static string $resource = InstagramPostUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
