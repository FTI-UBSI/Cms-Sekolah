<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducatorResource\Pages;
use App\Filament\Resources\EducatorResource\RelationManagers;
use App\Models\Educator;
use App\Models\Position;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Illuminate\Support\Str;
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
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Tendik')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->placeholder('Masukan Nama Guru')
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Masukan Deskripsi')
                            ->default(null),
                        Forms\Components\Select::make('position_id')
                            ->label('Posisi')
                            ->options(Position::all()->pluck('name', 'id'))
                            ->relationship('position', 'name')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->columnSpan(3)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->required()
                                    ->placeholder('Masukan Posisi')
                                    ->label('Posisi'),
                                Forms\Components\TextInput::make('slug')
                                    ->columnSpan(3)
                                    ->disabled()
                                    ->required()
                                    ->label('Slug'),
                            ]),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->maxSize(1024)
                            ->imageResizeTargetWidth('500')
                            ->imageResizeTargetHeight('500')
                            ->imageEditor()
                            ->disk('public')
                            ->directory('gtk'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Status'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Tendik')
                    ->limit(20)
                    ->toolTip(fn($record) => $record->name)
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('position.name')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(20)
                    ->toolTip(fn($record) => $record->description)
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar Cover'),
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
            'index' => Pages\ListEducators::route('/'),
            'create' => Pages\CreateEducator::route('/create'),
            'edit' => Pages\EditEducator::route('/{record}/edit'),
        ];
    }
}
