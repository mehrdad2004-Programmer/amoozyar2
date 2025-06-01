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
            $table->string('last_school');
            $table->string('last_avrage');
            $table->string('last_enzebat');
            $table->string('last_karname');
            $table->string('st_id_no');
            $table->timestamps();
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
