<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KalenderResource\Pages;
use App\Filament\Resources\KalenderResource\RelationManagers;
use App\Livewire\Agenda;
use App\Models\Kalender;
use App\Models\KalenderAgenda;
use App\Models\MediaBeritanews;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KalenderResource extends Resource
{
    protected static ?string $model = KalenderAgenda::class;

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
                Forms\Components\TextInput::make('title')
                ->label('Judul')
                ->required(),
                Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->maxLength(1000)
                ->required(),
                Forms\Components\FileUpload::make('image_cover')
                ->label('Gambar')
                ->image()
                ->disk('public'),
                Forms\Components\DatePicker::make('start_date')
                ->required(),
                Forms\Components\DatePicker::make('end_date')
                ->required(),
            ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ToggleColumn::make('is_active')
                ->label('Status'),
                Tables\Columns\TextColumn::make('title')
                ->label('Judul'),
                Tables\Columns\TextColumn::make('description')
                ->label('Deskripsi')
                ->searchable(),
                Tables\Columns\ImageColumn::make('image_cover')
                ->label('Gambar Cover'),
                Tables\Columns\TextColumn::make('start_date')
                ->label('Tanggal Mulai'),
                Tables\Columns\TextColumn::make('end_date')
                ->label('Tanggal Mulai'),
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
            'index' => Pages\ListKalenders::route('/'),
            'create' => Pages\CreateKalender::route('/create'),
            'edit' => Pages\EditKalender::route('/{record}/edit'),
            // 'view' => Pages\ViewCalender::route('/{record}'),
        ];
    }
}
