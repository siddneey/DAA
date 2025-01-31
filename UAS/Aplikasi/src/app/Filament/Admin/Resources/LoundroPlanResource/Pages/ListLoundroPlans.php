<?php

namespace App\Filament\Admin\Resources\LoundroPlanResource\Pages;

use App\Filament\Admin\Resources\LoundroPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoundroPlans extends ListRecords
{
    protected static string $resource = LoundroPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
