<?php

namespace App\Filament\Resources\ProbriResource\Pages;

use App\Filament\Resources\ProbriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProbris extends ListRecords
{
    protected static string $resource = ProbriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
