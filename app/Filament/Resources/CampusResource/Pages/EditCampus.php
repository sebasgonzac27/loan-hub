<?php

namespace App\Filament\Resources\CampusResource\Pages;

use App\Filament\Resources\CampusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCampus extends EditRecord
{
    protected static string $resource = CampusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
