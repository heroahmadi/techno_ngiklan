<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Endorser;

class EndorserSeeder extends Seeder
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
        	'user_id' => 1,
        	'nama_endorser' => 'Karin Novilda',
        	'tempat_lahir' => 'Jakarta',
        	'tgl_lahir' => '1997-11-29',
        	'gender' => 'Perempuan',
        	'jumlah_koin' => '150'
        ],[
			'id' => Uuid::generate(),
        	'user_id' => 2,
        	'nama_endorser' => 'Arief Muhammad',
        	'tempat_lahir' => 'Batam',
        	'tgl_lahir' => '1990-10-26',
        	'gender' => 'Laki-laki',
        	'jumlah_koin' => '100'
        ],[
			'id' => Uuid::generate(),
        	'user_id' => 3,
        	'nama_endorser' => 'Tiara Pangestika',
        	'tempat_lahir' => 'Jakarta',
        	'tgl_lahir' => '1992-06-18',
        	'gender' => 'Perempuan',
        	'jumlah_koin' => '50'
        ],[
			'id' => Uuid::generate(),
        	'user_id' => 4,
        	'nama_endorser' => 'Rachel Vennya',
        	'tempat_lahir' => 'Jakarta',
        	'tgl_lahir' => '1995-09-23',
        	'gender' => 'Perempuan',
        	'jumlah_koin' => '100'
        ],[
			'id' => Uuid::generate(),
        	'user_id' => 5,
        	'nama_endorser' => 'Gita Savitri',
        	'tempat_lahir' => 'Jakarta',
        	'tgl_lahir' => '1992-07-27',
        	'gender' => 'Perempuan',
        	'jumlah_koin' => '50'
        ],[
			'id' => Uuid::generate(),
        	'user_id' => 6,
        	'nama_endorser' => 'Nagita Slavina',
        	'tempat_lahir' => 'Jakarta',
        	'tgl_lahir' => '1988-11-29',
        	'gender' => 'Perempuan',
        	'jumlah_koin' => '100'
		]];
		
		Endorser::insert($data);
    }
}
