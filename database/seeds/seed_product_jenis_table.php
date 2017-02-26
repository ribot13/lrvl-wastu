<?php

use Illuminate\Database\Seeder;

class seed_product_jenis_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_jenis')->delete();
        DB::table('products_jenis')->insert(
            [
                ['id'=>1,'merk'=>'Mudagaya','nama'=>'Simply','_active'=>0],
                ['id'=>2,'merk'=>'Mudagaya','nama'=>'Evory','_active'=>1],
                ['id'=>3,'merk'=>'Mudagaya','nama'=>'Medbag','_active'=>1],
                ['id'=>4,'merk'=>'Mudagaya','nama'=>'Clutch','_active'=>1],
                ['id'=>5,'merk'=>'Mudagaya','nama'=>'Totebag','_active'=>1],
                ['id'=>6,'merk'=>'Mudagaya','nama'=>'Javas','_active'=>1],
                ['id'=>7,'merk'=>'Mudagaya','nama'=>'Khanza','_active'=>1],
                ['id'=>8,'merk'=>'Mudagaya','nama'=>'Satchel','_active'=>1],
            ]
        );
    }
}
