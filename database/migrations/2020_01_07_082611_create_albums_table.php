<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_album');
            $table->integer('kategori_id')->index()->nullable();
            $table->integer('vendor_id')->index()->nullable();
            $table->text('url_thumbnail')->nullable();
            $table->integer('parent_id')->index()->nullable();
            $table->string('nama_gambar')->nullable();
            $table->text('url_gambar')->nullable();
            $table->string('title')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('albums');
    }
}
