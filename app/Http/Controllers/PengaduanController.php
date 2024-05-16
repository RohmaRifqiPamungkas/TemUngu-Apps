<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengaduanController extends Controller
{
    // Existing methods...

    public function index()
    {
        //get posts
        $pengaduan = Pengaduan::latest()->paginate(5);

        // Memanggil method carousel untuk mendapatkan data diproses
        $diproses = $this->carousel();

        //render view with posts and carousel data
        return view('pages.pengaduan', compact('pengaduan', 'diproses'));
    }

    public function search(Request $request)
    {
        // Validasi kode unik yang dikirimkan melalui form pencarian
        $request->validate([
            'search' => 'required|string|min:6|max:6',
        ]);

        // Cari pengaduan berdasarkan kode unik
        $pengaduan = Pengaduan::where('unique_code', $request->search)->paginate(5);

        // Render view dengan hasil pencarian
        return view('pages.home', compact('pengaduan'));
    }

    public function postpengaduan(Request $request)
    {
        // Validasi data
        $request->validate([
            'nim_mahasiswa' => 'required|string|max:10',
            'nama_mahasiswa' => 'required|string|max:100',
            'id_jurusan' => 'required|integer',
            'jenis_kelamin' => 'required|string|in:L,P',
            'tanggal_penemuan' => 'required|date_format:Y-m-d\TH:i',
            'no_telepon' => 'required|string|max:15',
            'foto_barang' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cek apakah file foto_barang telah di-upload
        if ($request->hasFile('foto_barang')) {
            // Ambil file yang di-upload
            $fotoBarang = $request->file('foto_barang');
            // Generate nama unik untuk file
            $namaFotoBarang = time() . '.' . $fotoBarang->getClientOriginalExtension();
            // Simpan file ke direktori yang diinginkan
            $fotoBarang->move(public_path('uploads'), $namaFotoBarang);
        } else {
            // Jika file foto_barang tidak di-upload, beri nilai default
            $namaFotoBarang = null;
        }

        // Konversi format tanggal dan waktu
        $tanggalPenemuan = date_create_from_format('Y-m-d\TH:i', $request->tanggal_penemuan);

        // Buat data pengaduan baru
        Pengaduan::create([
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'id_jurusan' => $request->id_jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_penemuan' => $tanggalPenemuan,
            'no_telepon' => $request->no_telepon,
            'foto_barang' => $namaFotoBarang,
            'unique_code' => strtoupper(Str::random(6)),
            'status_pengaduan' => 'Diproses'
        ]);

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect('/dashboard')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function updatepengaduan(Request $request, $id)
    {
        // Validasi form sesuai kebutuhan
        $request->validate([
            'status_pengaduan' => 'required|string|in:Diproses,Selesai',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Temukan data pengaduan berdasarkan id_pengaduan
        $pengaduan = Pengaduan::findOrFail($id);

        // Update data pengaduan berdasarkan input form
        $pengaduan->status_pengaduan = $request->input('status_pengaduan');
        $pengaduan->save();

        // Redirect ke halaman pengaduan dengan pesan sukses
        return redirect('dashboard')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function deletepengaduan($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function selesaikanPengaduan($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status_pengaduan = 'Selesai';
        $pengaduan->save();
        return response()->json(['success' => 'Pengaduan berhasil diselesaikan.']);
    }

    public function sendMessage(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'message' => 'required|string',
        ]);

        // Temukan pengaduan berdasarkan ID
        $pengaduan = Pengaduan::findOrFail($id);

        // Simpan pesan ke database
        Message::create([
            'pengaduan_id' => $pengaduan->id,
            'message' => $request->message,
        ]);

        // Redirect kembali ke halaman pengaduan dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }

    // Method untuk menampilkan form pengiriman pesan
    public function showSendMessageForm($id)
    {
        // Temukan pengaduan berdasarkan ID
        $pengaduan = Pengaduan::findOrFail($id);
        $judul = $pengaduan->judul; 

        // Tampilkan view form pengiriman pesan
        return view('pesan.form', compact('pengaduan'));
    }
}
