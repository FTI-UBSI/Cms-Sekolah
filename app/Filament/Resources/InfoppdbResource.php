<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoppdbResource\Pages;
use App\Filament\Resources\InfoppdbResource\RelationManagers;
use App\Models\Infoppdb;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfoppdbResource extends Resource
{
    protected static ?string $model = Infoppdb::class;

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
            Forms\Components\Textarea::make('description')
                ->placeholder('Masukan Deskripsi')
                ->label('Deskripsi')
                ->required()
                ->maxLength(1000),
            Forms\Components\TextInput::make('button_text')
                ->maxLength(255)
                ->default(null),
            Forms\Components\TextInput::make('button_link')
                ->maxLength(255)
                ->default(null),
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
            Tables\Columns\TextColumn::make('description')
                ->label('Deskripsi')
                ->limit(20)
                ->toolTip(fn($record) => $record->description)
                ->searchable(),
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
            'index' => Pages\ListInfoppdbs::route('/'),
            'create' => Pages\CreateInfoppdb::route('/create'),
            'edit' => Pages\EditInfoppdb::route('/{record}/edit'),
        ];
    }
}
