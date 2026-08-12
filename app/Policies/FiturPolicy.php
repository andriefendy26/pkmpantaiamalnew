<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Fitur;
use Illuminate\Auth\Access\HandlesAuthorization;

class FiturPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Fitur');
    }

    public function view(AuthUser $authUser, Fitur $fitur): bool
    {
        return $authUser->can('View:Fitur');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Fitur');
    }

    public function update(AuthUser $authUser, Fitur $fitur): bool
    {
        return $authUser->can('Update:Fitur');
    }

    public function delete(AuthUser $authUser, Fitur $fitur): bool
    {
        return $authUser->can('Delete:Fitur');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Fitur');
    }

    public function restore(AuthUser $authUser, Fitur $fitur): bool
    {
        return $authUser->can('Restore:Fitur');
    }

    public function forceDelete(AuthUser $authUser, Fitur $fitur): bool
    {
        return $authUser->can('ForceDelete:Fitur');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Fitur');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Fitur');
    }

    public function replicate(AuthUser $authUser, Fitur $fitur): bool
    {
        return $authUser->can('Replicate:Fitur');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Fitur');
    }

}