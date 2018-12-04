<?php

use Illuminate\Database\Seeder;
use App\KategoriEndorser;
use App\Endorser;

class KategoriEndorserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endorser = Endorser::all();

        foreach ($endorser as $end) 
        {
            $kat = new KategoriEndorser;
            $kat->endorser_id = $end->id;
            $kat->kategori_id = rand(1,7);
            $kat->save();
        }
    }
}
