<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\ProductOwner;

class ProductOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id' => Uuid::generate(),
        	'user_id' => 7,
        	'nama_owner' => 'Ahmad',
        	'alamat' => 'Semarang'
        ],[
            'id' => Uuid::generate(),
        	'user_id' => 8,
        	'nama_owner' => 'Maria',
        	'alamat' => 'Jakarta'
        ]];
    }
}
