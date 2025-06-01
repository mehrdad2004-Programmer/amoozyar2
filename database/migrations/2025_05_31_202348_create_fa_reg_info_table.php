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
        Schema::create('st_fa_reg', function (Blueprint $table) {
            $table->id();
            $table->string('fa_fname');
            $table->string('fa_lname');
            $table->string('fa_job');
            $table->string('fa_work_address');
            $table->string('fa_phone');
            $table->string('fa_id_no');
            $table->string('fa_education');
            $table->string("st_id_no");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st_fa_reg');
    }
};

