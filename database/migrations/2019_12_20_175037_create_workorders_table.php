<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_site_id');
            $table->bigInteger('equipment_id');
            $table->string('name');
            $table->string('status');
            $table->timestamps();
            $table->datetime('closed_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
}
