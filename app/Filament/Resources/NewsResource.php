<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Status')
                            ->default(true)
                            ->required(),
                        Forms\Components\DatePicker::make('publish_date')
                            ->label('Tanggal Terbit')
                            ->required(),
                    ]),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->placeholder('Masukan Judul')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->placeholder('Masukan Deskripsi')
                            ->label('Deskripsi')
                            ->maxLength(1000),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->maxSize(1024)
                            ->imageResizeTargetWidth('500')
                            ->imageResizeTargetHeight('500')
                            ->imageEditor()
                            ->disk('public')
                            ->directory('berita'),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ToggleColumn::make('is_active')
                ->label('Status'),
            Tables\Columns\TextColumn::make('publish_date')
                ->label('Terbit'),
            Tables\Columns\TextColumn::make('title')
                ->label('Judul')
                ->limit(20)
                ->toolTip(fn($record) => $record->title)
                ->searchable(),
            Tables\Columns\TextColumn::make('slug'),
            Tables\Columns\TextColumn::make('description')
                ->label('Deskripsi')
                ->html()
                ->limit(20)
                ->searchable(),
            Tables\Columns\ImageColumn::make('image')
                ->label('Gambar'),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
