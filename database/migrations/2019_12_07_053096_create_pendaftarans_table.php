<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->index()->nullable();
            $table->integer('jenisvendors_id')->index()->nullable();
            $table->boolean('product')->default(0);
            $table->string('foto_ktp')->nullable();
            $table->string('foto_pemilik')->nullable();
            $table->string('nid')->nullable();
            $table->string('izin_usaha')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
}
