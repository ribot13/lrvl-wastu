<?php

use Illuminate\Database\Seeder;

class seed_customer_jenis_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers_jenis')->delete();
         DB::table('customers_jenis')->insert(array(
             array('nama'=>'Distributor'),
             array('nama'=>'Reseller'),
             array('nama'=>'Retail'),
         ));
    }
}
