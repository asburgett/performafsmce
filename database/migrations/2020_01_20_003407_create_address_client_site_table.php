<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressClientSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_client_site', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('client_site_id');
            $table->timestamps();

            $table->unique(['address_id', 'client_site_id']);

            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('client_site_id')->references('id')->on('client_sites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_client_site');
    }
}
