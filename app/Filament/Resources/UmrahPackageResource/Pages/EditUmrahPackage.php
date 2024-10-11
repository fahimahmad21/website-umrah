<?php

namespace App\Filament\Resources\UmrahPackageResource\Pages;

use App\Filament\Resources\UmrahPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUmrahPackage extends EditRecord
{
    protected static string $resource = UmrahPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
