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
            $table->string('st_lname');
            $table->string('st_faname');
            $table->string('st_id_no');
            $table->date('st_birth_date');
            $table->string('st_birth_place');
            $table->string('st_grade');
            $table->string('st_field');
            $table->string('st_exp_place')->nullable();
            $table->string('st_series');
            $table->string('st_fname');
            $table->string('st_phone');
            $table->string('st_telephone')->nullable();
            $table->string('st_personal_pic')->nullable();
            $table->string('st_address');

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

