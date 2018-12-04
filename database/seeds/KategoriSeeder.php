<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'nama_kategori' => 'Semua Kategori',
        ],[
            'nama_kategori' => 'Kuliner',
        ],[
            'nama_kategori' => 'Peralatan Rumah Tangga',
        ],[
            'nama_kategori' => 'Fashion',
        ],[
            'nama_kategori' => 'Perawatan Tubuh',
        ],[
            'nama_kategori' => 'Produk Digital',
        ],[
            'nama_kategori' => 'Kamera'
        ]];

        Kategori::insert($data);
    }
}
