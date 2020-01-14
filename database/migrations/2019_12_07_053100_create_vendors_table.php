<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kode')->nullable();
            $table->integer('jenisvendor_id')->index()->nullable();
            $table->integer('user_id')->index()->nullable();
            $table->integer('layanan_id')->index()->nullable();
            $table->bigInteger('harga_layanan')->nullable();
            $table->string('catatan_layanan')->nullable();
            $table->string('nama_toko');
            $table->string('logo_toko')->nullable();
            $table->string('hari_kerja')->nullable();
            $table->string('jam_kerja')->nullable();
            $table->string('hp')->nullable();
            $table->string('telp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('line')->nullable();
            $table->string('twitter')->nullable();
            $table->text('alamat')->nullable();
            $table->text('tentang')->nullable();
            $table->string('slogan')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->smallInteger('radius')->nullable()->default(20);
            $table->integer('parent_id')->nullable();
            $table->boolean('produk_status')->default(0);
            $table->string('foto_ktp')->nullable();
            $table->string('foto_pemilik')->nullable();
            $table->integer('nid')->nullable();
            $table->string('izin_usaha')->nullable();
            $table->string('tgl_daftar', 100)->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('vendors');
    }
}
