<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Role list',
            'Role view',
            'Role create',
            'Role edit',
            'Role delete',            
            'Role permanent delete',

            'User list',
            'User view',
            'User create',
            'User edit',
            'User delete',                        
            'User permanent delete',

            'Permission list',
            'Permission view',
            'Permission create',
            'Permission edit',
            'Permission delete',                        
            'Permission permanent delete',

            'Company list',
            'Company view',
            'Company create',
            'Company edit',
            'Company delete',            
            'Company permanent delete',

            'Employee list',
            'Employee view',
            'Employee create',
            'Employee edit',
            'Employee delete',                        
            'Employee permanent delete',
        ];

        foreach ($permissions as $key => $permission) {
            Permission::create([
                'name' => $permission
                // 'guard_name'=> 'web'
            ]);
        }

    }
}
