<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportSolicitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_solicitations', function (Blueprint $table) {
            $table->id();
            $table->string('province');
            $table->string('sanitary_region');
            $table->string('vaccinations_or_vaccines');
            $table->boolean('checked')->default('false');
            $table->boolean('validated')->default('false');
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
        Schema::dropIfExists('report_solicitations');
    }
}
