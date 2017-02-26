<?php

use Illuminate\Database\Seeder;

class seed_app_nav_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backend_navs')->delete();
         DB::table('backend_navs')->insert([
             [
                 'link'=>'/',
                 'route'=>'',
                 'title'=>'Home',
                 'icon'=>'fa fa-home',
                 'has_child'=>0,
                 'parent'=>null,
                 'urutan'=>1,
                 'role'=>'all',
             ],
             [
                 'link'=>'customers',
                 'route'=>'customers.index',
                 'title'=>'Customer',
                 'icon'=>'fa fa-users',
                 'has_child'=>0,
                 'parent'=>null,
                 'urutan'=>2,
                 'role'=>'all',
             ],
//             [
//                 'link'=>'javascript:;',
//                 'route'=>null,
//                 'title'=>'Master',
//                 'icon'=>'fa fa-cogs',
//                 'has_child'=>1,
//                 'parent'=>null,
//                 'urutan'=>3,
//                 'role'=>'all',
//             ],
//             [
//                 'link'=>'wilayah',
//                 'route'=>'wilayah.index',
//                 'title'=>'Wilayah',
//                 'icon'=>'fa fa-maps',
//                 'has_child'=>0,
//                 'parent'=>null,
//                 'urutan'=>4,
//                 'role'=>'all',
//             ],
             [
                 'link'=>'product',
                 'route'=>'product.index',
                 'title'=>'Produk',
                 'icon'=>'fa fa-gift',
                 'has_child'=>0,
                 'parent'=>null,
                 'urutan'=>5,
                 'role'=>'all',
             ],
             [
                 'link'=>'merk',
                 'route'=>'merk.index',
                 'title'=>'Merk',
                 'icon'=>'fa fa-tag',
                 'has_child'=>0,
                 'parent'=>null,
                 'urutan'=>6,
                 'role'=>'all',
             ],
             [
                 'link'=>'jenisproduk',
                 'route'=>'jenisproduk.index',
                 'title'=>'Jenis Produk',
                 'icon'=>'fa fa-tags',
                 'has_child'=>0,
                 'parent'=>null,
                 'urutan'=>6,
                 'role'=>'all',
             ],
         ]);
    }
}
