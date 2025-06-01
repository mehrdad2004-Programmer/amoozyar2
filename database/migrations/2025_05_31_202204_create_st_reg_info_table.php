<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('st_reg_info', function (Blueprint $table) {
            $table->id();
            $table->string('st_fname');
            $table->string('st_lname');
            $table->string('st_faname');
            $table->string('st_id_no');
            $table->string('st_series');
            $table->date('st_birthdate');
            $table->string('st_birthplace');
            $table->string('st_id_card_exportion');
            $table->string('st_phone');
            $table->string('st_home_phone');
            $table->string('st_personal_pic');
            $table->string('st_address');
            $table->string('st_field');
            $table->string('st_grade');
            $table->string('st_group');
            $table->string('request_date');
            $table->string('mianpaye')->default("0");
            $table->string('st_reg_code');
            $table->string('st_condition')->default("0");
            $table->string('status')->default("0");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st_reg_info');
    }
};

