<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('id_user');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('promotor');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('event');
    }
}
