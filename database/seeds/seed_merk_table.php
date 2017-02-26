<?php

use Illuminate\Database\Seeder;

class seed_merk_table extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('merk')->delete();
        DB::table('merk')->insert([
            [
                'kode' => 'MDGY',
                'nama' => 'Mudagaya',
                'deskripsi' => 'Its me',
            ],
            [
                'kode' => 'MAIK',
                'nama' => 'Maika',
                'deskripsi' => '',
            ],
            [
                'kode' => 'MKML',
                'nama' => 'Mokamula',
                'deskripsi' => '',
            ],
        ]);
    }

}
