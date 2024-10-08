<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaSosialResource\Pages;
use App\Filament\Resources\MediaSosialResource\RelationManagers;
use App\Models\Medsos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaSosialResource extends Resource
{
    protected static ?string $model = Medsos::class;

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

                Forms\Components\Section::make('Instagram')
                ->schema([
                    Forms\Components\TextInput::make('Instagram_url')
                    ->url()
                    ->default(null),
                    Forms\Components\FileUpload::make('gambarinstagram_cover')
                    ->label('Instagram')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('photo'),
                ]),
            Forms\Components\Section::make('Facebook')
                ->schema([
                    Forms\Components\TextInput::make('Facebook_url')
                    ->url()
                    ->default(null),
                    Forms\Components\FileUpload::make('gambarfacebook_cover')
                    ->label('Facebook')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('photo'),
                ]),


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
                Tables\Columns\ImageColumn::make('gambarinstagram_cover')
                ->label('Gambar Instagram'),
                Tables\Columns\ImageColumn::make('gambarfacebook_cover')
                ->label('Gambar Facebook'),
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
            'index' => Pages\ListMediaSosials::route('/'),
            'create' => Pages\CreateMediaSosial::route('/create'),
            'edit' => Pages\EditMediaSosial::route('/{record}/edit'),
        ];
    }
}
