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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pendaftaran')->unique();
            $table->unsignedBigInteger('id_jurusan');
            $table
                ->foreign('id_jurusan')
                ->references('id')
                ->on('jurusans')
                ->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_hp_siswa');
            $table->string('email');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->text('alamat');
            $table->string('kode_pos');
            $table->string('nama_asal_sekolah');
            $table->string('alamat_sekolah')->nullable();
            $table->string('nama_lengkap_ortu');
            $table->string('pekerjaan');
            $table->string('no_hp_yang_bisa_di_hubungi');
            $table->string('alamat_ortu')->nullable();

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
        Schema::dropIfExists('pendaftarans');
    }
};
