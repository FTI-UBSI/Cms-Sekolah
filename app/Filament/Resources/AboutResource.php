<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

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
                Forms\Components\Section::make('Tentang Kami')
                    ->schema([
                        Forms\Components\Textarea::make('about_us')
                            ->label('Judul')
                            ->placeholder('Masukkan Deskripsi')
                            ->label('Deskripsi')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\FileUpload::make('foto_about_us')
                            ->label('Gambar Cover Tentang Kami')
                            ->image()
                            ->maxSize(1024)
                            ->imageEditor()
                            ->disk('public'),
                    ]),
                Forms\Components\Section::make('Visi dan Misi')
                    ->schema([
                        Forms\Components\TextInput::make('visi')
                            ->label('Visi ')
                            ->placeholder('Masukkan VIsi')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\Textarea::make('misi')
                            ->label('Misi')
                            ->placeholder('Masukkan Misi')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\FileUpload::make('foto_visi_misi')
                            ->label('Gambar Cover Visi dan Misi')
                            ->image()
                            ->maxSize(1024)
                            ->imageEditor()
                            ->disk('public'),
                    ]),
                Forms\Components\Section::make('Core Value')
                    ->schema([
                        Forms\Components\Textarea::make('core_value')
                            ->label('Core Value ')
                            ->placeholder('Masukkan Core Value')
                            ->required()
                            ->maxLength(1000),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Status'),
                Tables\Columns\ImageColumn::make('foto_about_us')
                    ->label('Gambar  Tentang Kami'),
                Tables\Columns\TextColumn::make('about_us')
                    ->label('Tentang Kami')
                    ->limit(1000)
                    ->tooltip(fn($record)=>$record->description)
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto_visi_misi')
                    ->label('Gambar Visi dan Misi'),
                Tables\Columns\TextColumn::make('visi')
                    ->label('Visi')
                    ->limit(1000)
                    ->searchable(),
                Tables\Columns\TextColumn::make('misi')
                    ->label('Misi')
                    ->limit(1000)
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('core_value')
                    ->label('Core Value')
                    ->limit(1000)
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
