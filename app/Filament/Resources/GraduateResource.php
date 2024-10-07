<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraduateResource\Pages;
use App\Filament\Resources\GraduateResource\RelationManagers;
use App\Models\Graduate;
use Filament\Forms;
use Filament\Forms\Components\Section;
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

class GraduateResource extends Resource
{
    protected static ?string $model = Graduate::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Data Management';

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
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Nama Alumni'),
                        Forms\Components\FileUpload::make('photo')
                            ->label('Foto Alumni')
                            ->image()
                            ->directory('alumni_photos')
                            ->required(),
                        Forms\Components\TextInput::make('graduation_year')
                            ->label('Tahun Kelulusan')
                            ->required(),
                    ]),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ToggleColumn::make('is_active')->label('Status'),
                TextColumn::make('name')->label('Nama Alumni'),
                ImageColumn::make('photo')->label('Foto Alumni'),
                TextColumn::make('graduation_year')->label('Tahun Kelulusan'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListGraduates::route('/'),
            'create' => Pages\CreateGraduate::route('/create'),
            'edit' => Pages\EditGraduate::route('/{record}/edit'),
        ];
    }
}
