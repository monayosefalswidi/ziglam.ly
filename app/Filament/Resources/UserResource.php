<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
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
class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
               
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
              Forms\Components\TextInput::make('email')
                ->label('Email address')
                ->email()
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('password')
                ->password()
                ->autocomplete(false)
                ->hiddenOn(Pages\EditUser::class),
               
         
              
             
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('type')->sortable()->searchable(),     
            Tables\Columns\TextColumn::make('created_at'),
        ])
            ->filters([
                Filter::make('name')
                ->form([
                    TextInput::make('name'),
                ])
                ->query(function (Builder $query, array $data) {
                    return $query->where('name', 'like', '%' . $data['name'] . '%');
                }),
                Filter::make('email')
                ->form([
                    TextInput::make('email'),
                ])
                ->query(function (Builder $query, array $data) {
                    return $query->where('email', 'like', '%' . $data['email'] . '%');
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
