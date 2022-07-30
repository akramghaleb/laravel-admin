<?php

namespace App\Filament\Resources\AuthorsResource\Pages;

use App\Filament\Resources\AuthorsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAuthors extends ListRecords
{
    protected static string $resource = AuthorsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
