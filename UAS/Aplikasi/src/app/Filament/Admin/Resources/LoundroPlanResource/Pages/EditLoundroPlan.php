<?php

namespace App\Filament\Admin\Resources\LoundroPlanResource\Pages;

use App\Filament\Admin\Resources\LoundroPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoundroPlan extends EditRecord
{
    protected static string $resource = LoundroPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
