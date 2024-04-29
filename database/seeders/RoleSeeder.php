<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::pluck('id','id')->all();
        $role = Role::create(['name' => 'Super Admin']);
        $role->syncPermissions($permissions);

        $names = [
            'Company list',
            'Company view',
            'Company create',

            'Employee list',
            'Employee view',
            'Employee create',
        ];

        $permissions = Permission::whereIn('name', $names)->pluck('id','id');
        $webrole = Role::create(['name' => 'Manager']);
        $webrole->syncPermissions($permissions);
        $role1 = Role::create(['name' => 'Employer']);
        $role2 = Role::create(['name' => 'Employee']);
    }
}
