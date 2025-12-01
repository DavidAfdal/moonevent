<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\MUA;
use Illuminate\Auth\Access\HandlesAuthorization;

class MUAPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MUA');
    }

    public function view(AuthUser $authUser, MUA $mUA): bool
    {
        return $authUser->can('View:MUA');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MUA');
    }

    public function update(AuthUser $authUser, MUA $mUA): bool
    {
        return $authUser->can('Update:MUA');
    }

    public function delete(AuthUser $authUser, MUA $mUA): bool
    {
        return $authUser->can('Delete:MUA');
    }

    public function restore(AuthUser $authUser, MUA $mUA): bool
    {
        return $authUser->can('Restore:MUA');
    }

    public function forceDelete(AuthUser $authUser, MUA $mUA): bool
    {
        return $authUser->can('ForceDelete:MUA');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MUA');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MUA');
    }

    public function replicate(AuthUser $authUser, MUA $mUA): bool
    {
        return $authUser->can('Replicate:MUA');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MUA');
    }

}