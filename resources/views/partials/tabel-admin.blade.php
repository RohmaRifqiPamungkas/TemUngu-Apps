<div class="container shape-container d-flex align-items-center py-lg">
    <div class="col px-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 mb-lg-auto">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Messages</a>
                        </li>
                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NIM</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Tanggal Penemuan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Foto Barang</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        use App\Models\Pengaduan;
                                        
                                        $pengaduan = Pengaduan::all();
                                        ?>
                                        @foreach ($pengaduan as $data)
                                            <tr>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $loop->iteration }}</td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->nim_mahasiswa }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->nama_mahasiswa }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    @if ($data->jurusan)
                                                        {{ $data->jurusan->nama }}
                                                    @else
                                                        Jurusan tidak dipilih
                                                    @endif
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->jenis_kelamin }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->tanggal_penemuan }}</td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->status_pengaduan }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    @if ($data->foto_barang)
                                                        <img src="{{ asset('uploads/' . $data->foto_barang) }}"
                                                            alt="Foto Barang" class="img-thumbnail">
                                                    @else
                                                        Foto tidak tersedia
                                                    @endif
                                                </td>
                                                <td class="align-middle text-end">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <button type="button" class="btn btn-success btn-icon btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#modal-edit-{{ $data->id }}">
                                                            <i class="ni ni-settings-gear-65"></i>
                                                        </button>
                                                        <a onclick="confirmDelete('{{ $data->id }}')" rel="tooltip"
                                                            class="btn btn-danger btn-icon btn-sm">
                                                            <i class="ni ni-settings-gear-65"></i>
                                                        </a>

                                                    </div>
                                                </td>

                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="modal-edit-{{ $data->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="modal-edit-{{ $data->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="modal-edit-{{ $data->id }}">
                                                                    Edit Data</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Form edit data -->
                                                                <form action="/update-pengaduan/{{ $data->id }}"
                                                                    method="POST" role="form">
                                                                    {{ csrf_field() }}

                                                                    <div class="form-group">
                                                                        <label for="status_pengaduan">Status
                                                                            Pengaduan</label>
                                                                        <select class="form-control"
                                                                            id="status_pengaduan"
                                                                            name="status_pengaduan">
                                                                            <option hidden selected
                                                                                value="{{ $data->status_pengaduan }}">
                                                                                @if ($data->status_pengaduan == 'Diproses')
                                                                                    Diproses
                                                                                @elseif($data->status_pengaduan == 'Ditemukan')
                                                                                    Ditemukan
                                                                                @elseif($data->status_pengaduan == 'Ditolak')
                                                                                    Ditolak
                                                                                @else
                                                                                    Divisi Lainnya
                                                                                @endif
                                                                            </option>
                                                                            <option value="Diproses">
                                                                                Diproses</option>
                                                                            <option value="Ditemukan">
                                                                                Ditemukan</option>
                                                                            <option value="Ditolak">
                                                                                Ditolak</option>
                                                                        </select>
                                                                    </div>

                                                                    <!-- Tombol untuk menyimpan perubahan -->
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan
                                                                        Perubahan</button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <form role="form" method="POST" action={{ route('profile.update') }}
                                    enctype="multipart/form-data">
                                    @csrf
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-zoom-split-in"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Username" type="text"
                                                        name="username"
                                                        value="{{ old('username', auth()->user()->username) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-zoom-split-in"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Firstname"
                                                        type="text" name="firstname"
                                                        value="{{ old('firstname', auth()->user()->firstname) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-zoom-split-in"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Email" type="text"
                                                        name="email"
                                                        value="{{ old('email', auth()->user()->email) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-zoom-split-in"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Lastname" type="text"
                                                        name="lastname"
                                                        value="{{ old('lastname', auth()->user()->lastname) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-zoom-split-in"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Postal" type="text"
                                                        name="postal"
                                                        value="{{ old('postal', auth()->user()->postal) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-zoom-split-in"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="About" type="text"
                                                        name="about"
                                                        value="{{ old('about', auth()->user()->about) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <textarea class="form-control" id="address" rows="3" placeholder="Write a large text here ..."
                                                        name="address">{{ old('address', auth()->user()->address) }}</textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan
                                                Perubahan</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
                                <p class="description">Raw denim you probably haven't heard of them
                                    jean shorts
                                    Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                    Mustache
                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                    butcher retro
                                    keffiyeh dreamcatcher synth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
