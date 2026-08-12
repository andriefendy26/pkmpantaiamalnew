<?php

namespace App\Enums;

enum ContentType: string
{
    case Artikel = 'artikel';
    case Berita = 'berita';

    public function label(): string
    {
        return match ($this) {
            self::Artikel => 'Artikel',
            self::Berita => 'Berita',
        };
    }
}
