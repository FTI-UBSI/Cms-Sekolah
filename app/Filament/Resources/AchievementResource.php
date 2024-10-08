<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy'; // Ikon di CMS
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make()
                ->schema([
                    Toggle::make('is_active')
                        ->label('Status')
                        ->default(true)
                        ->required(),
                ]),
            Section::make()
                ->schema([
                    TextInput::make('judul')
                        ->required()
                        ->label('Nama Penghargaan'),
                    TextInput::make('tingkat')
                        ->required()
                        ->label('Tingkat Penghargaan'),
                    TextInput::make('nama_siswa')
                        ->required()
                        ->label('Nama Siswa'),
                    TextInput::make('peringkat')
                        ->required()
                        ->label('Peringkat Penghargaan'),
                    FileUpload::make('image')
                        ->label('Upload Gambar')
                        ->imageResizeTargetWidth('1920')
                        ->imageResizeTargetHeight('1080')
                        ->imageEditor()
                        ->disk('public'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {        
        return $table
            ->columns([
                ToggleColumn::make('is_active')->label('Status'),
                TextColumn::make('judul')->label('Judul')->sortable()->searchable(),
                TextColumn::make('tingkat')->label('Tingkatan')->sortable(),
                TextColumn::make('nama_siswa')->label('Nama Siswa')->sortable(),
                TextColumn::make('peringkat')->label('Peringkat')->sortable(),
                ImageColumn::make('image')->label('Gambar'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}

