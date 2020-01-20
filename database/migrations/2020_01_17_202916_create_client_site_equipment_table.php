<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSiteEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_site_equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_site_id');
            $table->unsignedBigInteger('equipment_id');
            $table->timestamps();

            $table->unique(['client_site_id', 'equipment_id']);

            $table->foreign('client_site_id')->references('id')->on('client_sites')->onDelete('cascade');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_site_equipment');
    }
}
