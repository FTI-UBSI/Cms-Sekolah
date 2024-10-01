<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeragamResource\Pages;
use App\Filament\Resources\SeragamResource\RelationManagers;
use App\Models\Seragam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeragamResource extends Resource
{
    protected static ?string $model = Seragam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('order')
                ->hidden()
                ->numeric()
                ->default(0),
                Forms\Components\Section::make()
                ->schema([
                    Forms\Components\Toggle::make('is_active')
                        ->label('Status')
                        ->default(true)
                        ->required(),
                ]),
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(1000),
            Forms\Components\FileUpload::make('image_cover')
            ->required()    
            ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                ->numeric()
                ->hidden()
                ->sortable(),
            Tables\Columns\ToggleColumn::make('is_active')
                ->label('Status'),
            Tables\Columns\TextColumn::make('title')
                ->label('Judul')
                ->limit(20)
                ->toolTip(fn($record) => $record->title)
                ->searchable(),
            Tables\Columns\ImageColumn::make('image_cover')
                ->label('Gambar Cover'),
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
            'index' => Pages\ListSeragams::route('/'),
            'create' => Pages\CreateSeragam::route('/create'),
            'edit' => Pages\EditSeragam::route('/{record}/edit'),
        ];
    }
}
