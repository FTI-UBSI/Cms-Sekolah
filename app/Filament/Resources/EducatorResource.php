<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducatorResource\Pages;
use App\Filament\Resources\EducatorResource\RelationManagers;
use App\Models\Educator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducatorResource extends Resource
{
    protected static ?string $model = Educator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Status')
                            ->default(true)
                            ->required(),
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_gtk')
                            ->label('Nama GTK')
                            ->placeholder('Masukkan Nama')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\TextInput::make('posisi_gtk')
                            ->label('Posisi GTK')
                            ->placeholder('Masukkan Posisi')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\FileUpload::make('foto_gtk')
                            ->label('Gambar GTK')
                            ->image()
                            ->maxSize(1024)
                            ->imageResizeTargetWidth('500')
                            ->imageResizeTargetHeight('500')
                            ->imageEditor()
                            ->disk('public'),
                    ]),
                ]);
    }
    
    public static function table(Table $table): Table
    {        
        return $table
            ->columns([
                Tables\Columns\ToggleColumn::make('is_active')
                ->label('Status'),
                Tables\Columns\TextColumn::make('nama_gtk')
                    ->label('Nama GTK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('posisi_gtk')
                        /**
                         * File upload for the educator's photo.
                         */
                    ->label('Posisi GTK')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto_gtk')
                    ->label('Foto GTK'),
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
            'index' => Pages\ListEducators::route('/'),
            'create' => Pages\CreateEducator::route('/create'),
            'edit' => Pages\EditEducator::route('/{record}/edit'),
        ];
    }
}
