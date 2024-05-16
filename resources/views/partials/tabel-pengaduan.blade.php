<div class="section section-components">
    <div class="container">
        <h3 class="h4 text-success font-weight-bold mb-4">Tabs</h4>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Tabs with icons -->
                    <div class="mb-3">
                        <small class="text-uppercase font-weight-bold">With icons</small>
                    </div>
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
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab"
                                    href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4"
                                    aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Report</a>
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
                                                    <td class="align-middle text-center text-sm">{{ $loop->iteration }}
                                                    </td>
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
                                                        {{ $data->foto_barang }}
                                                    </td>
                                                    <td class="align-middle text-end">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <button type="button"
                                                                class="btn btn-success btn-icon btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#modal-edit-{{ $data->id }}">
                                                                <i class="ni ni-settings-gear-65"></i>
                                                            </button>
                                                            <a onclick="confirmDelete('{{ $data->id }}')"
                                                                rel="tooltip" class="btn btn-danger btn-icon btn-sm">
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
                                                                        id="modal-edit-{{ $data->id }}">Edit Data
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form edit data -->
                                                                    <form
                                                                        action="/update-pengaduan/{{ $data->id }}"
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
                                                                                <option value="Diproses">Diproses
                                                                                </option>
                                                                                <option value="Ditemukan">Ditemukan
                                                                                </option>
                                                                                <option value="Ditolak">Ditolak
                                                                                </option>
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
                                    <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex
                                        squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                                        american apparel, butcher voluptate nisi qui.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-3-tab">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Message</th>
                                                <th class="text-center">Tanggapan</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            use App\Models\Contact;
                                            
                                            $contacts = Contact::all();
                                            ?>
                                            @foreach ($contacts as $contact)
                                                <tr id="contact-{{ $contact->id }}">
                                                    <td class="align-middle text-center text-sm">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="align-middle text-center text-sm">{{ $contact->name }}
                                                    </td>
                                                    <td class="align-middle text-center text-sm">{{ $contact->email }}
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        {{ $contact->message }}</td>
                                                    <td class="align-middle text-center text-sm">
                                                        @if ($contact->response)
                                                            {{ $contact->response }}
                                                        @else
                                                            <form
                                                                action="{{ route('contact.respond', ['id' => $contact->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <textarea class="form-control" id="response-{{ $contact->id }}" name="response" rows="2" required></textarea>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm">Kirim
                                                                    Tanggapan</button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                    @foreach ($contacts as $contact)
                                                        <!-- Kode lainnya -->
                                                        <td class="align-middle text-center text-sm"
                                                            id="contact-{{ $contact->id }}">
                                                            <!-- Tambahkan form untuk delete -->
                                                            <form
                                                                action="{{ route('contact.delete', ['id' => $contact->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-fab btn-icon btn-round"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data kontak ini?')">
                                                                    <i class="ni ni-fat-remove"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    @endforeach

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-4-tab">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Item</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Location</th>
                                                <th class="text-center">Response</th>
                                                <th class="text-center">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            use App\Models\Report;
                                            
                                            $reports = Report::all();
                                            ?>
                                            @foreach ($reports as $report)
                                                <tr id="report-{{ $report->id }}">
                                                    <td class="align-middle text-center text-sm">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="align-middle text-center text-sm">{{ $report->name }}
                                                    </td>
                                                    <td class="align-middle text-center text-sm">{{ $report->email }}
                                                    </td>
                                                    <td class="align-middle text-center text-sm">{{ $report->item }}
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        {{ $report->description }}</td>
                                                    <td class="align-middle text-center text-sm">
                                                        {{ $report->location }}</td>
                                                    <td class="align-middle text-center text-sm">
                                                        @if ($report->response)
                                                            {{ $report->response }}
                                                        @else
                                                            <form
                                                                action="{{ route('report.respond', ['id' => $report->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <textarea class="form-control" id="response-{{ $report->id }}" name="response" rows="2" required></textarea>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm">Kirim
                                                                    Tanggapan</button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle text-center text-sm">{{ $report->date }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
