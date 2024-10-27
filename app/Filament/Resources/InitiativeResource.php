<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InitiativeResource\Pages;
use App\Filament\Resources\InitiativeResource\RelationManagers;
use App\Models\initiative;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
//
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Select;
use Filament\Tables\Columns\BooleanColumn;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\Filter;  // Correct import
use App\Filament\Columns\UserRolesColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;


class InitiativeResource extends Resource
{
    protected static ?string $model = Initiative::class;
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 //   image 
                 Forms\Components\FileUpload::make('image')
                 ->storeFileNamesIn('attachment_file_names')
                 ->columnspanfull() 
                 ->label(' image ')
                 ->directory('initiative/images')
                 ->image()
                 ->hint('Upload an image'),
                 // endimage 
                 Forms\Components\TextInput::make('title')
                     ->required(),
                 Forms\Components\MarkdownEditor::make('description')
                    ->columnspanfull()    
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->label(' image')
                ->disk('public'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('description')->sortable()->searchable(),
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
            'index' => Pages\ListInitiatives::route('/'),
            'create' => Pages\CreateInitiative::route('/create'),
            'edit' => Pages\EditInitiative::route('/{record}/edit'),
        ];
    }
}
