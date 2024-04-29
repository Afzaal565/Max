<?php

namespace App\Policies;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EmployeePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('Employee list') ? true : false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Employee $employee): bool
    {
        return $user->hasPermissionTo('Employee view') ? true : false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('Employee create') ? true : false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Employee $employee): bool
    {
        return $user->hasPermissionTo('Employee edit') ? true : false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Employee $employee): bool
    {
        return $user->hasPermissionTo('Employee delete') ? true : false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Employee $employee): bool
    // {
    //     return $user->hasPermissionTo('Employee restore') ? true : false;
    // }

    /**
     * Determine whether the user can permanently delete the model.
     */
    // public function forceDelete(User $user, Employee $employee): bool
    // {
    //     return $user->hasPermissionTo('Employee permanent delete') ? true : false;
    // }
}
