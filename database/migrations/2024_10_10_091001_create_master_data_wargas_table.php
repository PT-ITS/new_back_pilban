<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDataWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_data_wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->enum('status_bansos', [
                '0', //belum 
                '1' //sudah
            ])->default('0');
            $table->string('alamat')->nullable();
            $table->string('kategori_warga')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('id_kabupaten');
            $table->string('id_kecamatan');
            $table->string('id_kelurahan')->nullable();
            $table->foreignId('pj_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('master_data_wargas');
    }
}
