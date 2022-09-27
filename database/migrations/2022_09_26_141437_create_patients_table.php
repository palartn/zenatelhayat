<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->primary('idc'); //رقم هوية المريض
            $table->integer('file_no')->unique(); //رقم الملف
            $table->string('patient_fname'); // إسم المريض الأول
            $table->string('patient_sname'); // إسم المريض الثاني
            $table->string('patient_tname'); //  إسم المريض الثالث
            $table->string('patient_lname'); // إسم المريض الرابع
            $table->date('patient_dob'); // تاريخ الميلاد
            $table->string('occupation'); // العمل
            $table->string('address'); // العنوان
            $table->integer('mobile'); // جوال
            $table->integer('mobile_second'); // جوال ثاني
            $table->boolean('gender'); // الجنس
            $table->string('husband_name'); //اسم الزوج
            $table->string('husband_occupation'); // عمل الزوج
            $table->date('husband_dob'); // تاريخ ميلاد الزوج
            $table->integer('husband_pic');  // صورة الزوج
            $table->string('notes'); // ملاحظات

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
