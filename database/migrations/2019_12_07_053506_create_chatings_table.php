<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_pengirim_id')->index()->nullable();
            $table->integer('users_penerima_id')->index()->nullable();
            $table->integer('vendors_id')->index()->nullable();
            $table->text('isi_chat')->nullable();
            $table->string('gambar')->nullable();
            $table->datetime('tgl_chat')->nullable();
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
        Schema::dropIfExists('chatings');
    }
}
