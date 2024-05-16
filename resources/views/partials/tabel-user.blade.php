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
                                            <th class="text-center">Nama</th>
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
                                            <tr id="pengaduan-{{ $data->id }}">
                                                <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                                                <td class="align-middle text-center text-sm">{{ $data->nama_mahasiswa }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->tanggal_penemuan }}</td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $data->status_pengaduan }}</td>
                                                <td class="align-middle text-center text-sm">
                                                    @if ($data->foto_barang)
                                                        <img src="{{ asset('uploads/' . $data->foto_barang) }}"
                                                            alt="Foto Barang" class="img-thumbnail">
                                                    @else
                                                        Foto tidak tersedia
                                                    @endif
                                                </td>
                                                <td class="align-middle text-end">
                                                    <div class="td-actions text-right">
                                                        @if ($data->status_pengaduan !== 'Selesai')
                                                            <form id="form-selesai-{{ $data->id }}"
                                                                action="{{ route('selesaikan.pengaduan', ['id' => $data->id]) }}"
                                                                method="POST"
                                                                onsubmit="return handleSelesai(event, {{ $data->id }})">
                                                                {{ csrf_field() }}
                                                                <button type="submit"
                                                                    class="btn btn-success btn-fab btn-icon btn-round">
                                                                    <i class="ni ni-active-40"></i>
                                                                </button>
                                                            </form>
                                                        @else
                                                            <div class="td-actions text-right">
                                                                <button
                                                                    class="btn btn-primary btn-fab btn-icon btn-round">
                                                                    <i class="ni ni-active-40"></i>
                                                                </button>
                                                            </div>
                                                        @endif
                                                        <hr>
                                                        <div class="td-actions text-right">
                                                            <button onclick="confirmDelete('{{ $data->id }}')"
                                                                class="btn btn-danger btn-fab btn-icon btn-round">
                                                                <i class="ni ni-fat-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <h2 class="modal-title">Update Profile</h2>
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
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Message</th>
                                                <th class="text-center">Tanggapan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            use App\Models\Contact;
                                            
                                            $contacts = Contact::all();
                                            ?>
                                            @foreach ($contacts as $contact)
                                                <tr id="contact-{{ $contact->id }}">
                                                    <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                                                    <td class="align-middle text-center text-sm">{{ $contact->name }}</td>
                                                    <td class="align-middle text-center text-sm">{{ $contact->email }}</td>
                                                    <td class="align-middle text-center text-sm">{{ $contact->message }}</td>
                                                    <td class="align-middle text-center text-sm">{{ $contact->response }}</td>
                                                    <td class="align-middle text-center text-sm">
                                                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-form" data-id="{{ $contact->id }}" data-name="{{ $contact->name }}" data-email="{{ $contact->email }}" data-message="{{ $contact->message }}">Edit</button>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <button class="btn btn-sm btn-danger" onclick="confirmDelete('{{ $contact->id }}')">Delete</button>
                                                    </td>          
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                        <div class="col-md-4">
                                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card bg-secondary shadow border-0 mb-0">
                                                                <div class="card-body px-lg-5 py-lg-5">
                                                                    <div class="text-center text-muted mb-4">
                                                                        <small>Edit Contact</small>
                                                                    </div>
                                                                    <form id="edit-contact-form" method="POST" action="{{ route('contact.update', $contact->id) }}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group mb-3">
                                                                            <div class="input-group input-group-alternative">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                                                </div>
                                                                                <input id="contact-name" name="name" class="form-control" placeholder="Name" type="text" value="{{ $contact->name }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <div class="input-group input-group-alternative">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                                                </div>
                                                                                <input id="contact-email" name="email" class="form-control" placeholder="Email" type="email" value="{{ $contact->email }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="input-group input-group-alternative">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="ni ni-chat-round"></i></span>
                                                                                </div>
                                                                                <textarea id="contact-message" name="message" class="form-control" placeholder="Message" required>{{ $contact->message }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-primary my-4">Update Contact</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel"
                                aria-labelledby="tabs-icons-text-4-tab">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Item</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Location</th>
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
</div>
