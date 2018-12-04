<?php

use Illuminate\Database\Seeder;
use App\Produk;
use App\ProductOwner;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 50; $i++)
        {
            $data = [
                'nama_produk' => 'IPhone '.(string)$i,
                'kategori_id' => 6,
                'foto' => 'storage/produk/iphone.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit ea esse! Facere expedita adipisci perspiciatis maxime animi voluptates corrupti rem, incidunt architecto, voluptate omnis. In fuga officiis possimus inventore?',
                'status' => 1,
                'product_owner_id' => ProductOwner::first()->id
            ];

            Produk::create($data);
        }
    }
}
