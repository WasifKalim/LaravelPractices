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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id');
            // $table->timestamps();
            $table->string('name',30);
            $table->string('email', 255)->unique()->nullable();
            $table->float('percentage',3,2)->comment('Student Percent');
            $table->primary('student_id');
            $table->string('city')->default('No City');
            $table->integer()
            // we can make any column nullable except prim and foreign column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
