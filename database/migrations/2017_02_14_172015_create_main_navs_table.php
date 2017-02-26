<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_navs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route')->nullable();
            $table->string('link');
            $table->string('title');
            $table->string('icon');
            $table->boolean('has_child');
            $table->string('parent')->nullable()->default(null);
            $table->integer('urutan');
            $table->string('role');
            $table->boolean('_active')->default(1);
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('backend_navs');
    }
}
