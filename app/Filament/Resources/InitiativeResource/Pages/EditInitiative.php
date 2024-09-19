<?php

namespace App\Filament\Resources\InitiativeResource\Pages;

use App\Filament\Resources\InitiativeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;

class EditInitiative extends EditRecord
{
    protected static string $resource = InitiativeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
