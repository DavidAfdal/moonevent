<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('name')
                ->required(),

            TextInput::make('phone_number')
                ->tel()
                ->required(),


            TextInput::make('email')
                ->label('Email address')
                ->email()
                ->unique(ignoreRecord: true)
                ->required(),


            TextInput::make('password')
                ->password()
                ->revealable()
                ->required(fn (string $operation) => $operation === 'create')
                ->dehydrateStateUsing(fn($state) => $state ? bcrypt($state) : null)
                ->dehydrated(fn($state) => filled($state))
                ->label('Password'),

            Select::make('role')
                ->label('Role')
                ->options(Role::pluck('name', 'name'))
                ->searchable()
                ->required(),

            FileUpload::make('avatar')
                ->label('Avatar')
                ->directory('avatars')
                ->disk('public')
                ->imageEditor(),
            ]);
    }
}
