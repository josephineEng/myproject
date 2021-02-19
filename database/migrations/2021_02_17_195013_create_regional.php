<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional', function (Blueprint $table) {
            $table->id();
            $table->string('Hospital_name');
            $table->string('Location');
           $table->integer('Number_of_health_workers');
            $table->integer('Number_of_patients'); 
            $table->string('Contact');
            $table->string('Superintendent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regional');
    }
}
