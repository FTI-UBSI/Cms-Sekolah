<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ViewResource\Pages;
use App\Filament\Resources\ViewResource\RelationManagers;
use App\Models\View;
use App\Models\ViewCount;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ViewResource extends Resource
{
    protected static ?string $model = ViewCount::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function view($record)
    {
        // Logika view count
        $viewCount = ViewCount::firstOrCreate(['page' => 'post-' . $record->id]);
        $viewCount->increment('count');

        return view('filament.resources.views.view', compact('record', 'viewCount'));
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page')
                    ->searchable(),
                Tables\Columns\TextColumn::make('count')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListViews::route('/'),
            'create' => Pages\CreateView::route('/create'),
            'edit' => Pages\EditView::route('/{record}/edit'),
        ];
    }
}
