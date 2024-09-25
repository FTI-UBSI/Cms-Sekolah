<?php

namespace App\Filament\Resources\ProbriResource\Pages;

use App\Filament\Resources\ProbriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProbri extends EditRecord
{
    protected static string $resource = ProbriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
