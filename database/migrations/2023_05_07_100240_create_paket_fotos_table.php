<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_fotos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('gambar');
            $table->string('nama_fotografer')->nullable();
            $table->string('no_fotografer')->nullable();
            $table->string('nama_paket');
            $table->string('harga_paket');
            $table->text('ket_paket');
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
        Schema::dropIfExists('paket_fotos');
    }
};
