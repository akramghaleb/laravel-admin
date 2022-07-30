<?php

namespace App\Filament\Resources\AuthorsResource\Pages;

use App\Filament\Resources\AuthorsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAuthors extends CreateRecord
{
    protected static string $resource = AuthorsResource::class;
}
