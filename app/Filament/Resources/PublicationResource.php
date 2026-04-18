<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('title')
                ->required()
                ->columnSpanFull(),
            TextInput::make('author')
                ->required(),
            TextInput::make('institution')
                ->required()
                ->placeholder('Contoh: STFT Jakarta, UKDW, UKSW'),
           DatePicker::make('publication_year')
    ->native(false) // Menggunakan UI pemilih tanggal Filament yang lebih rapi
    ->displayFormat('d/m/Y') // Format yang dilihat user
    ->required(),
            TextInput::make('external_link')
                ->url()
                ->placeholder('https://...'),
            FileUpload::make('document_file')
                ->acceptedFileTypes(['application/pdf'])
                ->directory('publications')
                ->columnSpanFull(),
            Textarea::make('abstract')
                ->columnSpanFull(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('title')->searchable()->wrap(),
            TextColumn::make('author')->searchable(),
            TextColumn::make('institution')->badge()->searchable(),
            TextColumn::make('publication_year')->sortable(),
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
