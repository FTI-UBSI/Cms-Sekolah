<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoResource\Pages;
use App\Filament\Resources\PhotoResource\Pages\Photo as PagesPhoto;
use App\Filament\Resources\PhotoResource\Pages\photoList;
use App\Filament\Resources\PhotoResource\RelationManagers;
use App\Models\Photo;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PhotoResource extends Resource
{
    protected static ?string $model = Photo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->placeholder('Masukan Judul')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Masukan Deskripsi')
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->maxSize(1024)
                            ->imageResizeTargetWidth('500')
                            ->imageResizeTargetHeight('500')
                            ->imageEditor()
                            ->disk('public')
                            ->directory('photo'),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        $recordId = request()->query('folder'); // Mengambil query parameter
        // dd($recordId);
        return $table
        ->modifyQueryUsing(function (Builder $query) use ( $recordId ) {
            if ($recordId) {
                return $query->where('parent_id', $recordId);
            }
            return $query->where('tipe','folder');
        })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->action(fn($record) => redirect()->route('filament.admin.resources.photos.index', ['folder' => $record->id]))
                    ->searchable(),
                ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit' => Pages\EditPhoto::route('/{record}/edit'),
            'list' => photoList::route('/folder')
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
    // public static function getEloquentQuery(): Builder
    // {
    //     $folder = Photo::where('tipe','folder')->whereNull('parent_id')->pluck('id');
    //     // dd($folder);
    //     return parent::getEloquentQuery()->whereIn('id', $folder);
    // }
}
