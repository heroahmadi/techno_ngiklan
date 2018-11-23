<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriEndorsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_endorsers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('endorser_id');
            $table->integer('kategori_id');
            $table->timestamps();

            // $table->foreign('endorser_id')->references('id')->on('endorser');
            // $table->foreign('kategori_id')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_endorsers');
    }
}
