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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('visit_date');
            $table->date('next_visit_date');
            $table->foreignId('patient_id')->constrained()->cascadeOnDelete();
            // $table->double('cost');
            $table->string('event'); //حالة الزيارة | منتهية - لا زالت قيد المتابعة
            // $table->double('paid');
            // $table->double('remaining_amount');
            // $table->date('pay_date');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('appointments');
    }
};
