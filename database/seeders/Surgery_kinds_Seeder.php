<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Surgery_kinds_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surgery_kinds')->insert([
            'surgery_kind_id' => '1',
            'name' => 'صورة', ]);
        DB::table('surgery_kinds')->insert([
            'surgery_kind_id' => '1',
            'name' => 'تحاليل', ]);
            
    }
}
