<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data  = [[
            // 'id' => Uuid::generate(),
        	'name' => 'Karin Novilda',
			'email' => 'awkarin@gmail.com',
        	'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Karin123'),
        	'type' => 'endorser'
        ],[
            // 'id' => Uuid::generate(),
        	'name' => 'Arief Muhammad',
			'email' => 'armuh_yakub@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Armuh123'),
        	'type' => 'endorser'
        ],[
        	// 'id' => Uuid::generate(),
            'name' => 'Tiara Pangestika',
			'email' => 'teamtipang@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Tipang123'),
        	'type' => 'endorser'
        ],[
            // 'id' => Uuid::generate(),
        	'name' => 'Rachel Vennya',
			'email' => 'endorse.rachel@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Rachel123'),
        	'type' => 'endorser'
        ],[
            // 'id' => Uuid::generate(),
        	'name' => 'Gita Savitri',
			'email' => 'email.gitasav@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Gitasav123'),
        	'type' => 'endorser'
        ],[
            // 'id' => Uuid::generate(),
        	'name' => 'Nagita Slavina',
			'email' => 'gigi.entertainment@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Gigi123'),
        	'type' => 'endorser'
        ],[
            // 'id' => Uuid::generate(),
        	'name' => 'Ahmad',
			'email' => 'ahamd@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Ahmad123'),
        	'type' => 'product owner'
        ],[
            // 'id' => Uuid::generate(),
        	'name' => 'Maria',
			'email' => 'email.maria@gmail.com',
			'email_verified_at' => Carbon::now(),
        	'password' => bcrypt('Maria123'),
			'type' => 'product owner'
		],[
            // 'id' => Uuid::generate(),
        	'name' => 'Admin',
			'email' => 'admin@gmail.com',
			'email_verified_at' => null,
        	'password' => bcrypt('admin'),
			'type' => 'admin'
		]];
		
		User::insert($data);
    }
}
