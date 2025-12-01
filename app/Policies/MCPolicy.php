<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\MC;
use Illuminate\Auth\Access\HandlesAuthorization;

class MCPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MC');
    }

    public function view(AuthUser $authUser, MC $mC): bool
    {
        return $authUser->can('View:MC');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MC');
    }

    public function update(AuthUser $authUser, MC $mC): bool
    {
        return $authUser->can('Update:MC');
    }

    public function delete(AuthUser $authUser, MC $mC): bool
    {
        return $authUser->can('Delete:MC');
    }

    public function restore(AuthUser $authUser, MC $mC): bool
    {
        return $authUser->can('Restore:MC');
    }

    public function forceDelete(AuthUser $authUser, MC $mC): bool
    {
        return $authUser->can('ForceDelete:MC');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MC');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MC');
    }

    public function replicate(AuthUser $authUser, MC $mC): bool
    {
        return $authUser->can('Replicate:MC');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MC');
    }

}