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
        $coin->harga = 5000000;
        $coin->save();
        
        $coin = new Coin;
        $coin->jumlah = 500;
        $coin->harga = 2600000;
        $coin->save();

        $coin = new Coin;
        $coin->jumlah = 250;
        $coin->harga = 1450000;
        $coin->save();

        $coin = new Coin;
        $coin->jumlah = 125;
        $coin->harga = 700000;
        $coin->save();

        $coin = new Coin;
        $coin->jumlah = 60;
        $coin->harga = 350000;
        $coin->save();
    }
}
