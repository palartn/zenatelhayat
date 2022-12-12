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
            $table->date('next_visit_date')->nullable();
            $table->foreignId('patient_id')->constrained()->cascadeOnDelete();
            $table->foreignId('surgery_kind_id')->constrained('surgery_kinds')->cascadeOnDelete();
            $table->foreignId('surgery_kind_id_child')->constrained('surgery_kinds')->cascadeOnDelete();
            $table->double('qty_packages')->nullable();
            $table->date('freez_start_date')->nullable();
            $table->date('freez_end_date')->nullable();
            $table->string('campaign_year')->nullable();
            $table->double('amount_before_discount')->comment('المبلغ قبل الخصم '); //المبلغ قبل الخصم
            $table->double('discount_value')->nullable()->comment('قيمة الخصم '); //قيمة الخصم 
            $table->double('amount_after_discount')->comment('المبلغ بعد الخصم'); //المبلغ بعد الخصم
            $table->string('notes')->nullable();
            $table->integer('is_paid_complete')->default(0)->comment('0 عليه فلوس');
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
