<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiEndorseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_endorse', function (Blueprint $table) {
            $table->increments('id_transaksi_endorser');
            $table->integer('fk_id_endorser')->references('id_endorser')->on('endorser');
            $table->integer('fk_product_owner')->references('id_owner')->on('product_owner');
            $table->integer('nilai_transaksi');
            $table->string('status');
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
        Schema::dropIfExists('transaksi_endorse');
    }
}
