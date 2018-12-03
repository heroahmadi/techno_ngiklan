<?php

use Illuminate\Database\Seeder;
use App\PaketEndorse;
use App\Endorser;

class PaketEndorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endorsers = Endorser::all();

        foreach($endorsers as $endorser)
        {
            $data = [[
                'nama_paket' => 'Gold',
                'deskripsi' => '1 Post IG 1 Story',
                'harga' => 100000,
                'endorser_id' => $endorser->id
            ],[
                'nama_paket' => 'Silver',
                'deskripsi' => '1 Post IG',
                'harga' => 75000,
                'endorser_id' => $endorser->id
            ],[
                'nama_paket' => 'Bronze',
                'deskripsi' => '1 Story',
                'harga' => 50000,
                'endorser_id' => $endorser->id
            ]];

            PaketEndorse::insert($data);
        }
        
    }
}
