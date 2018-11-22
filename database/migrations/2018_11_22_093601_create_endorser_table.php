<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndorserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_endorser');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->integer('fk_id_sosmed')->references('id')->on('sosmed');
            $table->integer('fk_id_kategori')->references('id')->on('kategori');
            $table->integer('fk_id_product_owner')->references('id')->on('product_owner');
            $table->integer('fk_id_review')->references('id')->on('review');
            $table->integer('fk_id_paket_endorse')->references('id')->on('paket_endorse');
            $table->integer('jumlah_koin');
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
        Schema::dropIfExists('endorser');
    }
}
