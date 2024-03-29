<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alat', function (Blueprint $table) {
                $table->id();
                $table->string ('nama',100);
                $table->string ('kategori',100);
                $table->string ('merk',100);
                $table->integer ('jumlah');
                $table->string ('gambar',100)->nullable();
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
        Schema::dropIfExists('data_alat');
    }
}
