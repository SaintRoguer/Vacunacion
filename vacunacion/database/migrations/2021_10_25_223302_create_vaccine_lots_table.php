<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_lots', function (Blueprint $table) {
            $table->id();
            $table->integer('lot_number')->unique();
            $table->string('vaccine');
            $table->integer('ammount_of_vaccines');
            $table->date('date_of_caducity');
            $table->string('sanitary_region');
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
        Schema::dropIfExists('vaccine_lots');
    }
}
