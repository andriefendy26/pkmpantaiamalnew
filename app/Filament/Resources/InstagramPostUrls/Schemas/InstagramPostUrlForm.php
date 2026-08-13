<?php

namespace App\Filament\Resources\InstagramPostUrls\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InstagramPostUrlForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('url')
                    ->url()
                    ->required(),
            ]);
    }
}
