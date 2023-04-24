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
            $table->string('og_title', 160);
            $table->string('og_type', 10);
            $table->string('og_image', 100);
            $table->string('og_description', 15)->default('website');
        });
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
