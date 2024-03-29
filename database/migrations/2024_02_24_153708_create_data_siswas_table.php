<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->foreignId('user_id')->constrained();
            $table->string('nama');
            $table->bigInteger('umur');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->date('tgl_lahir');
            $table->text('tempat_lahir');
            $table->string('email');
            $table->bigInteger('no_telp');
            $table->bigInteger('nisn');
            $table->string('kelas');
            $table->bigInteger('predikat')->nullable();
            $table->bigInteger('predikat_sikap')->nullable();
            $table->enum('kehadiran', ['hadir','izin','sakit','alpa'])->default('alpa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
