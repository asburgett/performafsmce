<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zipcode');
            $table->string('zipcode_type');
            $table->string('city');
            $table->string('state');
            $table->string('lat');
            $table->string('lon');
            $table->string('world_region');
            $table->string('country');
            $table->string('tax_returns_filed');
            $table->string('estimated_population');
            $table->string('total_wages');
            $table->string('notes');
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
        Schema::dropIfExists('zipcodes');
    }
}
