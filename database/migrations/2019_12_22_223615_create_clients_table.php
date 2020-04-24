<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('unique_name')->unique()->nullable();
            $table->tinyInteger('status')->default('1');
            $table->bigInteger('mailing_address_id')->unsigned()->default(0);
            $table->bigInteger('account_manager_id')->unsigned()->default(0);
            $table->bigInteger('service_manager_id')->unsigned()->default(0);
            $table->bigInteger('sales_rep_id')->unsigned()->default(0);
            $table->string('user_1')->nullable();
            $table->string('user_2')->nullable();
            $table->string('user_3')->nullable();
            $table->string('user_4')->nullable();
            $table->string('user_5')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
