<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksessubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksessubmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submenu_id')->unsigned()->nullable();
            $table->integer('akses_group_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('submenu_id')->references('id')->on('submenus')->onDelete('CASCADE');
            $table->foreign('akses_group_id')->references('id')->on('akses_group')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aksessubmenus');
    }
}
