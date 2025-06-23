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
        Schema::create('bookings', function (Blueprint $table) 
        {
            $table->id();
            $table->string('full_name');
            $table->string('mobile');
            $table->date('date');
            $table->time('time');
            $table->string('branch');
            $table->integer('number_of_people');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
