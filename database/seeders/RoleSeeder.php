<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $adminRole = Role::create(['name' => 'admin']);
        $doctorRole = Role::create(['name' => 'doctor']);
        $employeesRole = Role::create(['name' => 'employee']);
        $accountantRole = Role::create(['name' => 'Accountant']);
        

        $permissions = Permission::get(['id'])->toArray();
        $adminRole->syncPermissions($permissions);


        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt('123456'),
            'address' =>'Gaza',
            'phone' =>'123456',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole($adminRole);

        $doctor = User::create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'password' =>bcrypt('123456'),
            'address' =>'Gaza',
            'phone' =>'123456',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $doctor->assignRole($doctorRole);

        $employee = User::create([
            'name' => 'employee',
            'email' => 'employee@gmail.com',
            'password' =>bcrypt('123456'),
            'phone' =>'123456',
            'address' =>'Gaza',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $employee->assignRole($employeesRole);

        $accountant = User::create([
            'name' => 'accountant',
            'email' => 'accountant@gmail.com',
            'password' =>bcrypt('123456'),
            'phone' =>'123456',
            'address' =>'Gaza',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $employee->assignRole($accountantRole);
    }
}
