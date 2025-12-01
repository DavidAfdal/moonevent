<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Photography;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotographyPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Photography');
    }

    public function view(AuthUser $authUser, Photography $photography): bool
    {
        return $authUser->can('View:Photography');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Photography');
    }

    public function update(AuthUser $authUser, Photography $photography): bool
    {
        return $authUser->can('Update:Photography');
    }

    public function delete(AuthUser $authUser, Photography $photography): bool
    {
        return $authUser->can('Delete:Photography');
    }

    public function restore(AuthUser $authUser, Photography $photography): bool
    {
        return $authUser->can('Restore:Photography');
    }

    public function forceDelete(AuthUser $authUser, Photography $photography): bool
    {
        return $authUser->can('ForceDelete:Photography');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Photography');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Photography');
    }

    public function replicate(AuthUser $authUser, Photography $photography): bool
    {
        return $authUser->can('Replicate:Photography');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Photography');
    }

}