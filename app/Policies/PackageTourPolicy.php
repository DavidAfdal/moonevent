<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PackageTour;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackageTourPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PackageTour');
    }

    public function view(AuthUser $authUser, PackageTour $packageTour): bool
    {
        return $authUser->can('View:PackageTour');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PackageTour');
    }

    public function update(AuthUser $authUser, PackageTour $packageTour): bool
    {
        return $authUser->can('Update:PackageTour');
    }

    public function delete(AuthUser $authUser, PackageTour $packageTour): bool
    {
        return $authUser->can('Delete:PackageTour');
    }

    public function restore(AuthUser $authUser, PackageTour $packageTour): bool
    {
        return $authUser->can('Restore:PackageTour');
    }

    public function forceDelete(AuthUser $authUser, PackageTour $packageTour): bool
    {
        return $authUser->can('ForceDelete:PackageTour');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PackageTour');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PackageTour');
    }

    public function replicate(AuthUser $authUser, PackageTour $packageTour): bool
    {
        return $authUser->can('Replicate:PackageTour');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PackageTour');
    }

}