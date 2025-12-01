<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Decoration;
use Illuminate\Auth\Access\HandlesAuthorization;

class DecorationPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Decoration');
    }

    public function view(AuthUser $authUser, Decoration $decoration): bool
    {
        return $authUser->can('View:Decoration');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Decoration');
    }

    public function update(AuthUser $authUser, Decoration $decoration): bool
    {
        return $authUser->can('Update:Decoration');
    }

    public function delete(AuthUser $authUser, Decoration $decoration): bool
    {
        return $authUser->can('Delete:Decoration');
    }

    public function restore(AuthUser $authUser, Decoration $decoration): bool
    {
        return $authUser->can('Restore:Decoration');
    }

    public function forceDelete(AuthUser $authUser, Decoration $decoration): bool
    {
        return $authUser->can('ForceDelete:Decoration');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Decoration');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Decoration');
    }

    public function replicate(AuthUser $authUser, Decoration $decoration): bool
    {
        return $authUser->can('Replicate:Decoration');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Decoration');
    }

}