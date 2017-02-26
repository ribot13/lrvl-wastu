<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(seed_customer_jenis_table::class);
         $this->call(seed_customer_table::class);
         $this->call(seed_product_table::class);
         $this->call(seed_product_jenis_table::class);
         $this->call(seed_product_price_table::class);
         $this->call(seed_app_nav_table::class);
         $this->call(seed_merk_table::class);
    }
}
