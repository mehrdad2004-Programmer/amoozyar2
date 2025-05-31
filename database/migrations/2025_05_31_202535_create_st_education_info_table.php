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
        Schema::create('st_education_info', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('st_reg_info_id');
            $table->string('school_name');
            $table->string('degree');
            $table->string('major');
            $table->date('graduation_date')->nullable();
            $table->timestamps();
            $table->foreign('st_reg_info_id')->references('id')->on('st_reg_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st_education_info');
    }
};
