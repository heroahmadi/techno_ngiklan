<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $data  = [[
        	'name' => 'Karin Novilda',
        	'email' => 'awkarin@gmail.com',
        	'password' => bcrypt('Karin123'),
        	'type' => 'endorser'
        ],[
        	'name' => 'Arief Muhammad',
        	'email' => 'armuh_yakub@gmail.com',
        	'password' => bcrypt('Armuh123'),
        	'type' => 'endorser'
        ],[
        	'name' => 'Tiara Pangestika',
        	'email' => 'teamtipang@gmail.com',
        	'password' => bcrypt('Tipang123'),
        	'type' => 'endorser'
        ],[
        	'name' => 'Rachel Vennya',
        	'email' => 'endorse.rachel@gmail.com',
        	'password' => bcrypt('Rachel123'),
        	'type' => 'endorser'
        ],[
        	'name' => 'Gita Savitri',
        	'email' => 'email.gitasav@gmail.com',
        	'password' => bcrypt('Gitasav123'),
        	'type' => 'endorser'
        ],[
        	'name' => 'Nagita Slavina',
        	'email' => 'gigi.entertainment@gmail.com',
        	'password' => bcrypt('Gigi123'),
        	'type' => 'endorser'
        ],[
        	'name' => 'Ahmad',
        	'email' => 'ahamd@gmail.com',
        	'password' => bcrypt('Ahmad123'),
        	'type' => 'product owner'
        ],[
        	'name' => 'Maria',
        	'email' => 'email.maria@gmail.com',
        	'password' => bcrypt('Maria123'),
        	'type' => 'product owner'
        ]];
    }
}
