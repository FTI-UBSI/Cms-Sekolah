<?php

namespace App\Filament\Resources\PhotoResource\Pages;

use App\Filament\Resources\PhotoResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreatePhoto extends CreateRecord
{
    protected static string $resource = PhotoResource::class;

    public $id;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // dd($this->id);
        if ($this->id) {
            $data['parent_id'] = $this->id;
            $data['tipe'] = 'image';
        }
        // dd($data);
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return  $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
    public function getTitle(): string|Htmlable
    {
        $this->id = request()->query('folder'); // Mengambil query parameter
        if ($this->id) {
            return 'Upload Photo';
        }
        return 'Create Folder';
    }

}
