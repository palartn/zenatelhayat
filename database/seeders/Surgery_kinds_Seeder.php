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
            'surgery_kind_id' => '0',
            'name' => 'صور أشعة', ]);

            DB::table('surgery_kinds')->insert([
                'surgery_kind_id' => '0',
                'name' => 'عمليات', ]);

                DB::table('surgery_kinds')->insert([
                    'surgery_kind_id' => '0',
                    'name' => 'تجميد', ]);

                DB::table('surgery_kinds')->insert([
                    'surgery_kind_id' => '0',
                    'name' => 'تحاليل', ]);

                DB::table('surgery_kinds')->insert([
                    'surgery_kind_id' => '0',
                    'name' => 'أخرى', ]);

                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '4',
                        'name' => 'صورة', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '4',
                        'name' => 'تحاليل', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'عملية زراعة', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'فصل', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'عملية تنظيفات', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'عملية سحب كيس', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '5',
                        'name' => 'كشف', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '5',
                        'name' => 'تخطيط', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'عملية حقن', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'فك غرزة', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '5',
                        'name' => 'كتابة تقرير', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'عملية قيصيرية', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'ارجاع اجنة', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'خدش بالليزر', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '1',
                        'name' => 'PCT', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'تركيب لولب', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '3',
                        'name' => 'تجميد أجنة', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '1',
                        'name' => 'تركيب محلول', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '3',
                        'name' => 'تجميد سائل', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'عملية قرحة بالرحم', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'سحب جنين', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'لحمية على الرحم', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'سحب بويضات', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '4',
                        'name' => 'تحليل جينات', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '4',
                        'name' => 'تحاليل', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'كي مع بنج', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '2',
                        'name' => 'مواد فحص وراثي', ]);
                    DB::table('surgery_kinds')->insert([
                        'surgery_kind_id' => '5',
                        'name' => 'Breast Ultra Sound', ]);
    

    }
}
