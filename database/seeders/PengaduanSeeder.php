<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaduan;
use Illuminate\Support\Str;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed pengaduan data
        for ($i = 1; $i <= 10; $i++) {
            Pengaduan::create([
                'nim_mahasiswa' => '2022000' . $i, // Ganti dengan NIM mahasiswa yang sesuai
                'nama_mahasiswa' => 'Mahasiswa ' . $i,
                'id_jurusan' => rand(1, 5), // Ganti dengan ID jurusan yang sesuai
                'jenis_kelamin' => $i % 2 == 0 ? 'P' : 'L', // Jenis kelamin bergantian antara L dan P
                'tanggal_penemuan' => now()->subDays($i),
                'no_telepon' => '08123456789', // Ganti dengan nomor telepon yang sesuai
                'foto_barang' => null, // Foto barang dapat diisi sesuai kebutuhan
                'unique_code' => strtoupper(Str::random(6)),
                'status_pengaduan' => $i % 2 == 0 ? 'Diproses' : 'Selesai', // Status pengaduan bergantian antara Diproses dan Selesai
            ]);
        }
    }
}
