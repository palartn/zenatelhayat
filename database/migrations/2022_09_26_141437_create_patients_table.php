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
        //    $table->('idc'); //رقم هوية المريض
        $table->string('username')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('patient_fname'); // إسم المريض الأول
            $table->string('patient_sname'); // إسم المريض الثاني
            $table->string('patient_tname'); //  إسم المريض الثالث
            $table->string('patient_lname'); // إسم المريض الرابع
            $table->date('patient_dob'); // تاريخ الميلاد
            $table->string('occupation'); // العمل
            $table->string('address'); // العنوان
            $table->integer('mobile'); // جوال
            $table->integer('mobile_second')->nullable(); // جوال ثاني
            $table->boolean('gender'); // الجنس
            $table->string('husband_name')->nullable(); //اسم الزوج
            $table->string('husband_occupation')->nullable(); // عمل الزوج
            $table->date('husband_dob')->nullable(); // تاريخ ميلاد الزوج
            $table->integer('husband_pic')->nullable();  // صورة الزوج
            $table->text('notes')->nullable(); // ملاحظات
            $table->softDeletes();
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
