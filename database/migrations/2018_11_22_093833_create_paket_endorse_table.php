<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketEndorseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_endorse', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_paket');
            $table->string('deskripsi')->nullable();
            $table->integer('harga');
            $table->char('endorser_id', 36);
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
        Schema::dropIfExists('paket_endorse');
    }
}
