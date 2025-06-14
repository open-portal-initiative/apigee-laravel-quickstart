<?php

namespace App\Filament\Resources\FAQResource\Pages;

use App\Filament\Resources\FAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use NinjaPortal\FilamentTranslations\Resources\Pages\ListRecords\Concerns\Translatable;
use NinjaPortal\FilamentTranslations\Actions\LocaleSwitcher;


class ListFAQS extends ListRecords
{

    use Translatable;
    protected static string $resource = FAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            LocaleSwitcher::make(),
        ];
    }
}
