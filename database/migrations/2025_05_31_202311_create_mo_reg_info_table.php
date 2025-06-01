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
        Schema::create('st_mo_reg', function (Blueprint $table) {
            $table->id();
            $table->string('mo_fname');
            $table->string('mo_lname');
            $table->string('mo_job');
            $table->string('mo_work_address');
            $table->string('mo_phone');
            $table->string('mo_id_no');
            $table->string('mo_education');
            $table->string("st_id_no");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st_mo_reg');
    }
};

