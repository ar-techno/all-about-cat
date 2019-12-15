<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksesmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksesmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned()->nullable();
            $table->integer('akses_group_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('CASCADE');
            $table->foreign('akses_group_id')->references('id')->on('akses_groups')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aksesmenus');
    }
}
