<?php

use Illuminate\Database\Seeder;

class seed_customer_table extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('customers')->delete();
        $jns = ['Distributor', 'Reseller', 'Retail'];
        for ($i = 1; $i < 11; $i++) {
            DB::table('customers')->insert(
                    [
                        'jenis' => $jns[rand(0, 2)],
                        'nama' => 'Customer ' . $i,
                        'email' => 'email_cust' . $i . '@email.com',
                        'alamat_1' => 'Jalan Panembakan No.' . $i,
                        'alamat_2' => 'RT001/002',
                        'propinsi' => 'Propinsi ' . $i,
                        'kota' => 'Kota ' . $i,
                        'kecamatan' => 'Kecamatan ' . $i,
                        'kodepos' => '4025' . $i,
                        'phone' => '02266144' . $i,
                        'mobile' => '0812345678' . $i,
                    ]
            );
        }
    }

}
