<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiKoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_koin', function (Blueprint $table) {
            $table->increments('id');
            $table->char('endorser_id', 36);
            $table->integer('coin_id');
            $table->integer('nilai_koin_transaksi');
            $table->string('status');
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
        Schema::dropIfExists('transaksi_koin');
    }
}
