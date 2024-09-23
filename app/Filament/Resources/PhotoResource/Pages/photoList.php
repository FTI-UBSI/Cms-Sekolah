<?php

namespace App\Filament\Resources\PhotoResource\Pages;

use App\Filament\Resources\PhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class photoList extends ListRecords
{
    protected static string $resource = PhotoResource::class;
}
