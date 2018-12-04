<?php

use Illuminate\Database\Seeder;
use App\Coin;

class CoinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coin = new Coin;
        $coin->jumlah = 1000;
        $coin->harga = 250000;
        $coin->save();
        
        $coin = new Coin;
        $coin->jumlah = 500;
        $coin->harga = 130000;
        $coin->save();

        $coin = new Coin;
        $coin->jumlah = 250;
        $coin->harga = 65000;
        $coin->save();

        $coin = new Coin;
        $coin->jumlah = 125;
        $coin->harga = 35000;
        $coin->save();

        $coin = new Coin;
        $coin->jumlah = 60;
        $coin->harga = 20000;
        $coin->save();
    }
}
