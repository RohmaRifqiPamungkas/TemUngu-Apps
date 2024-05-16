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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mahasiswa', 50);
            $table->string('nama_mahasiswa', 100);
            $table->unsignedBigInteger('id_jurusan'); 
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->timestamp('tanggal_penemuan');
            $table->string('no_telepon', 20); 
            $table->string('foto_barang');
            $table->string('unique_code', 64);
            $table->enum('status_pengaduan', ['Diproses', 'Ditemukan', 'Ditolak', 'Selesai']);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
