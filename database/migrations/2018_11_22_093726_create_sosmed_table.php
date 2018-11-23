<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSosmedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosmed', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link_sosmed');
            $table->string('type');
            $table->integer('endorser_id');
            $table->timestamps();

            // $table->foreign('endorser_id')->references('id')->on('endorser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sosmed');
    }
}
