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

        Schema::table('languages', function (Blueprint $table) {
            $table->string('tw_title', 160);
            $table->string('tw_description', 15);
            $table->string('tw_type', 10)->default('summary');
            $table->string('tw_image', 100); 
        });
        //
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
