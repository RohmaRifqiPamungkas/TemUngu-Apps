<form role="form" action="{{ route('post-pengaduan') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group mb-3">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
            </div>
            <input class="form-control" placeholder="Nama Mahasiswa" type="text" name="nama_mahasiswa">
        </div>
    </div>
    <div class="form-group mb-3">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-app"></i></span>
            </div>
            <input class="form-control" placeholder="NIM Mahasiswa" type="text" name="nim_mahasiswa">
        </div>
    </div>
    <div class="form-group mb-3">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
            </div>
            <select name="id_jurusan" class="form-control" placeholder="Jurusan Mahasiswa">
                <option value="">Pilih Jurusan</option>
                <option value="1">Divisi Humas</option>
                <option value="2">Divisi Acara</option>
                <option value="3">Divisi Kominfo</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input name="tanggal_penemuaan" class="form-control" value="2024-11-23T10:30:00" type="datetime-local">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input name="no_telepon" class="form-control" placeholder="Nomor Telepon" type="number">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input name="foto_barang" class="form-control" placeholder="Nomor Telepon" type="file">
        </div>
    </div>
    <div class="custom-control custom-control-alternative custom-checkbox">
        <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
        <label class="custom-control-label" for=" customCheckLogin2"><span>Remember
                me</span></label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary my-4">Kirim Laporan</button>
    </div>
</form>
