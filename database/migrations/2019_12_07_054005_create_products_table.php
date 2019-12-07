<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategoris_id')->index()->nullable();
            $table->integer('produsens_id')->index()->nullable();
            $table->integer('distributors_id')->index()->nullable();
            $table->string('nama_product');
            $table->string('title')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('stock')->nullable();
            $table->datetime('tgl_kadaluarsa')->nullable();
            $table->integer('product_parent_id')->index()->nullable();
            $table->text('gambar')->nullable();
            $table->text('title_gambar')->nullable();
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
        Schema::dropIfExists('products');
    }
}
