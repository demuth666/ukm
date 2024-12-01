<?php

namespace App\Filament\Resources\UkmResource\Pages;

use App\Filament\Resources\UkmResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUkm extends ViewRecord
{
    protected static string $resource = UkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
