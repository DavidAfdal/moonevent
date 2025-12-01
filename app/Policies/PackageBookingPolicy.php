<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PackageBooking;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackageBookingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PackageBooking');
    }

    public function view(AuthUser $authUser, PackageBooking $packageBooking): bool
    {
        return $authUser->can('View:PackageBooking');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PackageBooking');
    }

    public function update(AuthUser $authUser, PackageBooking $packageBooking): bool
    {
        return $authUser->can('Update:PackageBooking');
    }

    public function delete(AuthUser $authUser, PackageBooking $packageBooking): bool
    {
        return $authUser->can('Delete:PackageBooking');
    }

    public function restore(AuthUser $authUser, PackageBooking $packageBooking): bool
    {
        return $authUser->can('Restore:PackageBooking');
    }

    public function forceDelete(AuthUser $authUser, PackageBooking $packageBooking): bool
    {
        return $authUser->can('ForceDelete:PackageBooking');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PackageBooking');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PackageBooking');
    }

    public function replicate(AuthUser $authUser, PackageBooking $packageBooking): bool
    {
        return $authUser->can('Replicate:PackageBooking');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PackageBooking');
    }

}