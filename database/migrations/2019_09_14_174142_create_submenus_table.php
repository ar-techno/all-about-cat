<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned()->nullable();
            $table->string('kode', 50)->unique();
            $table->string('nama');
            $table->string('link');
            $table->string('icon');
            $table->boolean('status')->default(1);
            $table->boolean('tampil')->default(1);
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submenus');
    }
}
