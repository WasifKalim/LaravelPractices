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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')->references('id')
            //         ->on('students')->onUpdate('cascade')
            //         ->onDelete('cascade'); // cascade to delete related data 
            //                                // & set null to not delete related data
            //                                // restrict (defualt) not allow to delete


            // $table->foreignId('stu_id')->constrained('students') can be done this way alse without changing the id name
            $table->foreignId('student_id')->constrained()
                                            ->cascadeOnUpdate()
                                            ->cascadeOnDelete();

        
            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
            // soft Delete recovery is possible 
            $table->softDeletes(); // null - then data can be retrieved & date give - then data permanently delete

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
