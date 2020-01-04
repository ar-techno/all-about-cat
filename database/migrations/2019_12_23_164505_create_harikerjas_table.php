<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarikerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harikerjas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->index()->nullable();
            $table->time('dari')->nullable();
            $table->time('sampai')->nullable();
            $table->string('keterangan')->nullable();
            $table->tinyInteger('hari')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('harikerjas');
    }
}
