<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

     protected function afterCreate(): void
    {
       $role = $this->data['role'] ?? null; // Ambil dari form data

        if ($role) {
            $this->record->syncRoles([$role]);
        }
    }
}
