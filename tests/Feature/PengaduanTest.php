<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\Models\Pengaduan;

class PengaduanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function test_pengaduan_creation()
     {
         // Membuat data pengaduan untuk diuji
         $dataPengaduan = [
             'nim_mahasiswa' => '123456789',
             'nama_mahasiswa' => 'John Doe',
             'id_jurusan' => 1,
             'jenis_kelamin' => 'Laki-laki',
             'no_telepon' => '08123456789',
             'foto_barang' => UploadedFile::fake()->image('test.jpg'), // Simulasi upload file gambar
             // Tambahkan data lainnya sesuai kebutuhan
         ];
     
         // Mengirimkan data pengaduan ke endpoint post-pengaduan
         $response = $this->post('/post-pengaduan', $dataPengaduan);
     
         // Memastikan bahwa pengaduan berhasil dibuat
         $response->assertStatus(302); // Memastikan bahwa request diredirect
     
         // Memastikan pengalihan dilakukan ke URL yang benar (contoh: '/pengaduan')
         $response->assertRedirect('/pengaduan');
     
         // Memeriksa apakah pesan sukses 'Data Berhasil Disimpan!' diset dalam sesi
         $this->assertTrue(session()->has('success'));
         $this->assertEquals('Data Berhasil Disimpan!', session('success'));
     
         // Anda juga dapat menambahkan assertions tambahan sesuai kebutuhan
     }
     
}
