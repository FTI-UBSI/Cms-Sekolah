<?php

namespace App\Filament\Resources\SeragamResource\Pages;

use App\Filament\Resources\SeragamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeragam extends EditRecord
{
    protected static string $resource = SeragamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
