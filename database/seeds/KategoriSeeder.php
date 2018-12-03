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
            'nama_kategori' => 'Fashion Pria',
        ],[
            'nama_kategori' => 'Fashion Wanita',
        ],[
            'nama_kategori' => 'Fashion Muslim',
        ],[
            'nama_kategori' => 'Fashion Anak',
        ],[
            'nama_kategori' => 'Kuliner',
        ],[
            'nama_kategori' => 'Peralatan Rumah Tangga',
        ],[
            'nama_kategori' => 'Kecantikan',
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
