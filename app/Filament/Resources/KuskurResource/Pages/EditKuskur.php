<?php

namespace App\Filament\Resources\KuskurResource\Pages;

use App\Filament\Resources\KuskurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuskur extends EditRecord
{
    protected static string $resource = KuskurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
