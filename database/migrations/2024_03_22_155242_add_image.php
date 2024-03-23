<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    /**
     * Run the migrations.
     */


    // add new column to table 
    public function up(): void
    {
        Schema::table("student", function (Blueprint $table) {
            $table->string('image_path');
        });
    }
    /**
     * Reverse the migrations.
     */


    // function down : back lai
    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            $table->dropColumn('image_path');
        });
    }
};
