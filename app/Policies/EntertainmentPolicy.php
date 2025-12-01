<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Entertainment;
use Illuminate\Auth\Access\HandlesAuthorization;

class EntertainmentPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Entertainment');
    }

    public function view(AuthUser $authUser, Entertainment $entertainment): bool
    {
        return $authUser->can('View:Entertainment');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Entertainment');
    }

    public function update(AuthUser $authUser, Entertainment $entertainment): bool
    {
        return $authUser->can('Update:Entertainment');
    }

    public function delete(AuthUser $authUser, Entertainment $entertainment): bool
    {
        return $authUser->can('Delete:Entertainment');
    }

    public function restore(AuthUser $authUser, Entertainment $entertainment): bool
    {
        return $authUser->can('Restore:Entertainment');
    }

    public function forceDelete(AuthUser $authUser, Entertainment $entertainment): bool
    {
        return $authUser->can('ForceDelete:Entertainment');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Entertainment');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Entertainment');
    }

    public function replicate(AuthUser $authUser, Entertainment $entertainment): bool
    {
        return $authUser->can('Replicate:Entertainment');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Entertainment');
    }

}