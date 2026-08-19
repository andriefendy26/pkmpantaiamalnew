<?php

namespace App\Filament\Resources\SurveyKepuasanMasyarakats\Pages;

use App\Filament\Resources\SurveyKepuasanMasyarakats\SurveyKepuasanMasyarakatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSurveyKepuasanMasyarakat extends EditRecord
{
    protected static string $resource = SurveyKepuasanMasyarakatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
