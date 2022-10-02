<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Permission::truncate();

   //     $permissionDashboard = Permission::create(['name' => 'dashboard']);

        
        //User
        $permissionIndexUser = Permission::create(['name' => 'index_user']);
        $permissionCreateUser = Permission::create(['name' => 'create_user']);
        $permissionEditUser = Permission::create(['name' => 'edit_user']);
        $permissionDeleteUser = Permission::create(['name' => 'delete_user']);

        //Role
        $permissionIndexRole = Permission::create(['name' => 'index_role']);
        $permissionCreateRole = Permission::create(['name' => 'create_role']);
        $permissionEditRole = Permission::create(['name' => 'edit_role']);
        $permissionDeleteRole = Permission::create(['name' => 'delete_role']);

    }
}
