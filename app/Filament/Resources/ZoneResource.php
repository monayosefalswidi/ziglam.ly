<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZoneResource\Pages;
use App\Filament\Resources\ZoneResource\RelationManagers;
use App\Models\Zone;
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

class ZoneResource extends Resource
{
    protected static ?string $model = Zone::class;
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            //   image 
            Forms\Components\FileUpload::make('image')
            ->storeFileNamesIn('attachment_file_names')
            ->columnspanfull() 
            ->label('Zone image ')
            ->directory('zone/images')
            ->image(),
            // endimage 
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('city_id')
                ->label('City')
                ->relationship('city', 'name')
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image')
            ->label('Zone image')
            ->disk('public'),
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
           
            Tables\Columns\TextColumn::make('city.name')->label('City')
            ->sortable()->searchable(),
            ])
            ->filters([
                Filter::make('name')
                ->form([
                    TextInput::make('name'),
                ])
                ->query(function (Builder $query, array $data) {
                    return $query->where('name', 'like', '%' . $data['name'] . '%');
                }),
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
            'index' => Pages\ListZones::route('/'),
            'create' => Pages\CreateZone::route('/create'),
            'edit' => Pages\EditZone::route('/{record}/edit'),
        ];
    }
}
