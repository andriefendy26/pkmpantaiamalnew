<?php

namespace App\Filament\Resources\SurveyKepuasanMasyarakats\Pages;

use App\Filament\Resources\SurveyKepuasanMasyarakats\SurveyKepuasanMasyarakatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSurveyKepuasanMasyarakats extends ListRecords
{
    protected static string $resource = SurveyKepuasanMasyarakatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
