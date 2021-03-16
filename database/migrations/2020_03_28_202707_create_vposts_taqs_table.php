<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpostsTaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vposts_taqs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vpost_id')->unsigned();
            $table->foreign('vpost_id')->references('id')->on('vposts')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('vtaq_id')->unsigned();
            $table->foreign('vtaq_id')->references('id')->on('vtaqs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('vposts_taqs');
    }
}
