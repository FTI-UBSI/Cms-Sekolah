<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

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
                            ->directory('slider'),
                        Forms\Components\TextInput::make('button_text')
                            ->placeholder('Masukan Teks Tombol')
                            ->label('Tombol Teks')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('button_link')
                            ->placeholder('Masukan Link Tombol')
                            ->label('Tombol Link')
                            ->maxLength(255)
                            ->default(null),
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
                Tables\Columns\TextColumn::make('button_text')
                    ->label('Tombol Teks')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_link')
                    ->label('Tombol Link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
