<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_promo');
            $table->string('nama_promo');
            $table->datetime('tgl_mulai')->nullable();
            $table->datetime('tgl_selesai')->nullable();
            $table->string('title')->nullable();
            $table->integer('product_id')->index()->nullable();
            $table->integer('promos_parent_id')->index()->nullable();
            $table->float('diskon')->nullable();
            $table->integer('jml_minimum')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
}
