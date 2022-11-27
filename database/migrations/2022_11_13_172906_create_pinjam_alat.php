<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamAlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_alat', function (Blueprint $table) {
            $table->id();
            $table->string('ktp', 100);
            $table->string('nama', 70);
            $table->string('alamat', 100);
            $table->string('no_hp', 13);
            $table->string('nama_alat', 30);
            $table->integer('jumlah');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('surat', 100);
            $table->unsignedBigInteger('fk_id_alat');
            $table->foreign("fk_id_alat")->references("id")->on("data_alat")->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pinjam_alat');
    }
}
