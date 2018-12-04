<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EndorserSeeder::class);
        $this->call(ProductOwnerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PaketEndorseSeeder::class);
        $this->call(CoinsSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(KategoriEndorserSeeder::class);
    }
}
