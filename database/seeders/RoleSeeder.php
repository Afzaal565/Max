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

        $role1 = Role::create(['name' => 'Employer']);
        $role2 = Role::create(['name' => 'Employee']);
    }
}
