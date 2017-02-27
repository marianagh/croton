<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('description');
            $table->integer('status');
            $table->integer('quantity');
            $table->string('work_purchase_order');
            $table->integer('riskrelease_id')->unsigned();
            $table->foreign('riskrelease_id')->references('id')->on('riskreleases');
            $table->integer('partnumber_id')->unsigned();
            $table->foreign('partnumber_id')->references('id')->on('partnumbers');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
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
       Schema::drop('concessions');
    }
}
