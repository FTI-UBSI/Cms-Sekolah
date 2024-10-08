<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SosmedResource\Pages;
use App\Filament\Resources\SosmedResource\RelationManagers;
use App\Models\Sosmed;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SosmedResource extends Resource
{
    protected static ?string $model = Sosmed::class;

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
                Forms\Components\TextInput::make('E_Mail')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('No_HP')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Jam_Operasional')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Fb_link')
                    ->required()
                    ->url()
                    ->maxLength(1000),
                Forms\Components\TextInput::make('ig_link')
                    ->required()
                    ->url()
                    ->maxLength(1000),
                Forms\Components\TextInput::make('ytb_link')
                    ->required()
                    ->url()
                    ->maxLength(1000),
                Forms\Components\TextInput::make('Wa_link')
                    ->required()
                    ->url()
                    ->maxLength(1000),
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
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('E_Mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('No_HP')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Jam_Operasional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Fb_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ig_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ytb_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Wa_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSosmeds::route('/'),
            'create' => Pages\CreateSosmed::route('/create'),
            'edit' => Pages\EditSosmed::route('/{record}/edit'),
        ];
    }
}
