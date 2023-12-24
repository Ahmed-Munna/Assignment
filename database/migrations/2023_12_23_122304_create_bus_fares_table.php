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
        Schema::create('bus_fares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_id');
            $table->string('boarding_point');
            $table->time('boarding_time');
            $table->string('dropping_point');
            $table->time('dropping_time');
            $table->decimal('fare', 10, 2); // Assuming fare is a decimal with 10 digits in total and 2 decimal places
            $table->timestamps();

            // Define foreign key constraint with onUpdate('cascade')
            $table->foreign('bus_id')
                  ->references('id')
                  ->on('buses')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_fares');
    }
};
