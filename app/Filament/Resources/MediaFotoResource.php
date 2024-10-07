<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaFotoResource\Pages;
use App\Filament\Resources\MediaFotoResource\RelationManagers;
use App\Models\MediaPhoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaFotoResource extends Resource
{
    protected static ?string $model = MediaPhoto::class;

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
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->placeholder('Masukan Judul')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\Textarea::make('description')
                            ->placeholder('Masukan Deskripsi')
                            ->label('Deskripsi')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\FileUpload::make('image_cover')
                            ->label('Gambar Cover')
                            ->image()
                            ->maxSize(1024)
                            ->imageResizeTargetWidth('500')
                            ->imageResizeTargetHeight('500')
                            ->imageEditor()
                            ->disk('public')
                    ])

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
            Tables\Columns\TextColumn::make('description')
                ->label('Deskripsi')
                ->limit(20)
                ->toolTip(fn($record) => $record->description)
                ->searchable(),
            Tables\Columns\ImageColumn::make('image_cover')
                ->label('Gambar Cover'),
        ])
        ->reorderable('order')
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
            'index' => Pages\ListMediaFotos::route('/'),
            'create' => Pages\CreateMediaFoto::route('/create'),
            'edit' => Pages\EditMediaFoto::route('/{record}/edit'),
        ];
    }
}
