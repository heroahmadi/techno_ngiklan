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
        DB::table('product_owner')->delete();

        $datas = [[
        	'user_id' = '300001',
        	'nama_owner' = 'Ahmad',
        	'alamat' = 'Semarang'
        	],[
        	'user_id' = '300002',
        	'nama_owner' = 'Maria',
        	'alamat' = 'Jakarta'
        	]];

        	foreach($datas as $data) {
        	ProductOwner::create($data);
        }
    }
}
