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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('roles');
            $table->boolean('is_verification')->default(0)->nullable();
            $table->string('email');
            $table->string('nama_lengkap')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('logo')->nullable();
            $table->string('surat_izin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
