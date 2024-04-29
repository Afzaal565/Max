<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CompanyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('Company list') ? true : false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Company $company): bool
    {
        return $user->hasPermissionTo('Company view') ? true : false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('Company create') ? true : false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Company $company): bool
    {
        return $user->hasPermissionTo('Company edit') ? true : false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Company $company): bool
    {
        return $user->hasPermissionTo('Company delete') ? true : false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Company $company): bool
    // {
    //     return $user->hasPermissionTo('Company restore') ? true : false;
    // }

    /**
     * Determine whether the user can permanently delete the model.
     */
    // public function forceDelete(User $user, Company $company): bool
    // {
    //     return $user->hasPermissionTo('Company permanent delete') ? true : false;
    // }

}
