<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // for ($i = 1; $i <= 100; $i++) {
        //     \App\Models\User::create([
        //         'name' => "admin{$i}",
        //         'email' => "admin{$i}@gmail.com",
        //         'password' => Hash::make('123456'),
        //         'phone' => "0009752222{$i}",
        //         'address' => 'gaza',

        //     ]);
        // }


        $this->call([
            PermissionTableSeeder::class,
            RoleSeeder::class,
        ]);
        $this->call([
            Surgery_kinds_Seeder::class,
        ]);
    }
}
