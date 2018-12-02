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
        DB::table('endorser')->delete();

        $data = [[
        	'user_id' = '200001',
        	'nama_endorser' = 'Karin Novilda',
        	'tempat_lahir' = 'Jakarta',
        	'tgl_lahir' = '1997-11-29',
        	'gender' = 'Perempuan',
        	'jumlah_koin' = '150'
        ],[
        	'user_id' = '200002',
        	'nama_endorser' = 'Arief Muhammad',
        	'tempat_lahir' = 'Batam',
        	'tgl_lahir' = '1990-10-26',
        	'gender' = 'Laki-laki',
        	'jumlah_koin' = '100'
        ],[
        	'user_id' = '200003',
        	'nama_endorser' = 'Tiara Pangestika',
        	'tempat_lahir' = 'Jakarta',
        	'tgl_lahir' = '1992-06-18',
        	'gender' = 'Perempuan',
        	'jumlah_koin' = '50'
        ],[
        	'user_id' = '200004',
        	'nama_endorser' = 'Rachel Vennya',
        	'tempat_lahir' = 'Jakarta',
        	'tgl_lahir' = '1995-09-23',
        	'gender' = 'Perempuan',
        	'jumlah_koin' = '100'
        ],[
        	'user_id' = '200005',
        	'nama_endorser' = 'Gita Savitri',
        	'tempat_lahir' = 'Jakarta',
        	'tgl_lahir' = '1992-07-27',
        	'gender' = 'Perempuan',
        	'jumlah_koin' = '50'
        ],[
        	'user_id' = '200006',
        	'nama_endorser' = 'Nagita Slavina',
        	'tempat_lahir' = 'Jakarta',
        	'tgl_lahir' = '1988-11-29',
        	'gender' = 'Perempuan',
        	'jumlah_koin' = '100'
        ]];
    }
}
