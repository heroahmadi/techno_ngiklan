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
            $table->increments('id');
            $table->integer('endorser_id');
            $table->integer('product_owner_id');
            $table->integer('nilai_transaksi');
            $table->string('status');
            $table->timestamps();

            // $table->foreign('endorser_id')->references('id')->on('endorser');
            // $table->foreign('product_owner_id')->references('id')->on('product_owner');
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
