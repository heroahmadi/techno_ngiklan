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
            $table->increments('id_endorser');
            $table->string('nama_endorser');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->integer('fk_id_sosmed')->references('id_sosmed')->on('sosmed');
            $table->integer('fk_id_kategori')->references('id_kategori')->on('kategori');
            $table->integer('fk_id_product_owner')->references('id_owner')->on('product_owner');
            $table->integer('fk_id_review')->references('id_review')->on('review');
            $table->integer('fk_id_paket_endorse')->references('id_paket')->on('paket_endorse');
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
