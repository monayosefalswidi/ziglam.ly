<?php

namespace App\Filament\Resources;
use App\Models\city;
use App\Models\zone;
use App\Filament\Resources\RepresentativeResource\Pages;
use App\Filament\Resources\RepresentativeResource\RelationManagers;
use App\Models\representative;
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

class RepresentativeResource extends Resource
{
    protected static ?string $model = Representative::class;
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('phone1')
                ->label('Phone numbr ')
                ->required()
                ->tel(),
                Forms\Components\TextInput::make('phone2')
                ->label('other Phone number')
                ->tel(),
            
                Forms\Components\Select::make('city_id')
                ->label('City')
                ->options(city::all()->pluck('name', 'id'))
                ->reactive() // Reacts to changes
                ->afterStateUpdated(fn ($state, callable $set) => $set('zone_id', null)), // Reset city when country changes

                Forms\Components\Select::make('zone_id')
                ->label('Zone')
                ->options(function (callable $get) {
                    $city_id = $get('city_id');
                    if (!$city_id) {
                        return [];
                    }
                    return zone::where('city_id', $city_id)->pluck('name', 'id');
                })
                ->reactive() // Reacts to changes
                ->disabled(fn (callable $get) => $get('city_id') === null), // Disable until country is selected
     
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('phone1')->label('phone number')->searchable(),
            Tables\Columns\TextColumn::make('phone2')->label('another phone number')->searchable(),
            Tables\Columns\TextColumn::make('zone.city.name')->label('City'),
            Tables\Columns\TextColumn::make('zone.name')->label('Zone')
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
            'index' => Pages\ListRepresentatives::route('/'),
            'create' => Pages\CreateRepresentative::route('/create'),
            'edit' => Pages\EditRepresentative::route('/{record}/edit'),
        ];
    }
}
