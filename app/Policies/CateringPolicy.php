<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Catering;
use Illuminate\Auth\Access\HandlesAuthorization;

class CateringPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Catering');
    }

    public function view(AuthUser $authUser, Catering $catering): bool
    {
        return $authUser->can('View:Catering');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Catering');
    }

    public function update(AuthUser $authUser, Catering $catering): bool
    {
        return $authUser->can('Update:Catering');
    }

    public function delete(AuthUser $authUser, Catering $catering): bool
    {
        return $authUser->can('Delete:Catering');
    }

    public function restore(AuthUser $authUser, Catering $catering): bool
    {
        return $authUser->can('Restore:Catering');
    }

    public function forceDelete(AuthUser $authUser, Catering $catering): bool
    {
        return $authUser->can('ForceDelete:Catering');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Catering');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Catering');
    }

    public function replicate(AuthUser $authUser, Catering $catering): bool
    {
        return $authUser->can('Replicate:Catering');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Catering');
    }

}