<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis');
            $table->string('nama');
            $table->string('email');
            $table->string('alamat_1');
            $table->string('alamat_2')->nullable();
            $table->string('propinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->string('phone');
            $table->string('mobile');
            $table->boolean('_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
