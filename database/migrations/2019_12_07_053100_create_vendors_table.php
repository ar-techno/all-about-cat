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
            $table->integer('jenisvendors_id')->index()->nullable();
            $table->integer('users_id')->index()->nullable();
            $table->integer('layanans_id')->index()->nullable();
            $table->string('nama_toko');
            $table->string('logo_toko')->nullable();
            $table->string('hari_kerja')->nullable();
            $table->string('jam_kerja')->nullable();
            $table->string('hp')->nullable();
            $table->string('telp')->nullable();
            $table->string('instagram')->nullable();
            $table->text('alamat')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->smallInteger('radius')->nullable()->default(20);
            $table->json('detail')->nullable();
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
