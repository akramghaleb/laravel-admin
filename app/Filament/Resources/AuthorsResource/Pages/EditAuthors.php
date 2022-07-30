<?php

namespace App\Filament\Resources\AuthorsResource\Pages;

use App\Filament\Resources\AuthorsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAuthors extends EditRecord
{
    protected static string $resource = AuthorsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
