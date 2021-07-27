<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('niy')->nullable();
            $table->string('nomor_handphone')->nullable('false');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('status');
            $table->integer('jumlah_anak')->nullable();
            $table->string('nama_suami')->nullable();
            $table->string('nama_istri')->nullable();
            $table->date('tanggal_masuk')->nullable('false');
            $table->date('tanggal_keluar')->nullable();
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
        Schema::dropIfExists('profile_guru');
    }
}
