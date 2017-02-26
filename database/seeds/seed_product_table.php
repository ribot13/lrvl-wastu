<?php

use Illuminate\Database\Seeder;

class seed_product_table extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('products')->delete();
        $jenis = ['Evory', 'Nearby', 'Javas'];
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert(
                    [
                        'kode' => 'PRD-00' . $i,
                        'merk' => 'Mudagaya',
                        'jenis' => $jenis[rand(0, 2)],
                        'nama' => 'Produk ' . $i,
                        'img' => 'img_' . $i . '.jpg',
                    ]
            );
        }
    }

}
