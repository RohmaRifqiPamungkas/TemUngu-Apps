@extends('layouts.app')

<body class="landing-page">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="../index.html">
                <img src="{{ asset('TemUngu-template/assets/img/brand/white.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../../../index.html">
                                <img src="{{ asset('TemUngu-template/assets/img/brand/blue.png') }}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text">Components</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl">
                            <div class="dropdown-menu-inner">
                                <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html"
                                    class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                        <i class="ni ni-spaceship"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1">Getting started</h6>
                                        <p class="description d-none d-md-inline-block mb-0">Learn how to use compiling
                                            Scss, change brand colors and more.</p>
                                    </div>
                                </a>
                                <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html"
                                    class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                        <i class="ni ni-palette"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1">Foundation</h6>
                                        <p class="description d-none d-md-inline-block mb-0">Learn more about colors,
                                            typography, icons and the grid system we used for .</p>
                                    </div>
                                </a>
                                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html"
                                    class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                        <i class="ni ni-ui-04"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="heading text-warning mb-md-1">Components</h5>
                                        <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful
                                            handcrafted components offered in the Free version.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-collection d-lg-none"></i>
                            <span class="nav-link-inner--text">Examples</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="../examples/landing.html" class="dropdown-item">Landing</a>
                            <a href="../examples/profile.html" class="dropdown-item">Profile</a>
                            <a href="../examples/login.html" class="dropdown-item">Login</a>
                            <a href="../examples/register.html" class="dropdown-item">Register</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank"
                            data-toggle="tooltip" title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial"
                            target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank"
                            data-toggle="tooltip" title="Follow us on Twitter">
                            <i class="fa fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon"
                            href="https://github.com/creativetimofficial/argon-design-system" target="_blank"
                            data-toggle="tooltip" title="Star us on Github">
                            <i class="fa fa-github"></i>
                            <span class="nav-link-inner--text d-lg-none">Github</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-neutral" href="{{ route('login') }}" target="_blank">
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-neutral" href="{{ route('register') }}" target="_blank">
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="shape shape-style-3 shape-default">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
            </div>

            <div class="page-header">
                <div class="container shape-container d-flex align-items-center py-lg">
                    <div class="col px-0">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-12 text-center">
                                <h1 class="text-white display-1">TemUngu.apps</h1>
                                <h2 class="display-4 font-weight-normal text-white">Pencarian Barang Hilang!</h2>

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-block btn-default mb-3" data-toggle="modal"
                                        data-target="#modal-form-2">Form Pengaduan</button>
                                    <div class="modal fade" id="modal-form-2" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-form-2" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card bg-secondary shadow border-0 mb-0">
                                                        <div class="card-body px-lg-5 py-lg-5">
                                                            <div class="text-center text-muted mb-4">
                                                                <small>Pengaduan</small>
                                                            </div>
                                                            <form role="form" action="{{ route('reports.store') }}" method="POST">
                                                                @csrf
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group input-group-alternative">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="ni ni-user"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="Nama" type="text" id="name" name="name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group input-group-alternative">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="Email" type="email" id="email" name="email" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group input-group-alternative">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="Barang yang Hilang" type="text" id="item" name="item"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group input-group-alternative">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                                                        </div>
                                                                        <textarea class="form-control" id="description" name="description" rows="3"
                                                                            placeholder="Deskripsi" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group input-group-alternative">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="Lokasi Kehilangan" type="text" id="location"
                                                                            name="location" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <div class="input-group input-group-alternative">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="Tanggal Kehilangan" type="date" id="date" name="date"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="submit" class="btn btn-primary my-4">Kirim Laporan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('search') }}" method="GET">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        </div>
                                        <input class="form-control" name="search" placeholder="Search"
                                            type="text" value="">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="card shadow">
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama Mahasiswa</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Tanggal Penemuan</th>
                                                    <th scope="col">Foto Barang</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($pengaduan) && count($pengaduan) > 0)
                                                    @foreach ($pengaduan as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->nama_mahasiswa }}</td>
                                                            <td>{{ $item->status_pengaduan }}</td>
                                                            <td>{{ $item->tanggal_penemuan }}</td>
                                                            <td><img src="{{ asset('uploads/' . $item->foto_barang) }}"
                                                                    alt="Foto Barang" width="100"></td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="9" class="text-center">Tidak ada data
                                                            pengaduan
                                                            yang ditemukan.</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="section features-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="info info-horizontal info-hover-primary">
                            <div class="description pl-4">
                                <h5 class="title">For Developers</h5>
                                <p>The time is now for it to be okay to be great. People in this world shun people for
                                    being great. For being a bright color. For standing out. But the time is now.</p>
                                <a href="#" class="text-info">Learn more</a>
                            </div>
                        </div>
                        <div class="info info-horizontal info-hover-primary mt-5">
                            <div class="description pl-4">
                                <h5 class="title">For Designers</h5>
                                <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                    That’s my skill. I’m not really specifically talented at anything except for the
                                    ability to learn.</p>
                                <a href="#" class="text-info">Learn more</a>
                            </div>
                        </div>
                        <div class="info info-horizontal info-hover-primary mt-5">
                            <div class="description pl-4">
                                <h5 class="title">For Beginners</h5>
                                <p>That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you
                                    can’t learn anything from a compliment. If everything I did failed - which it
                                    doesn't.</p>
                                <a href="#" class="text-info">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-10 mx-md-auto">
                        <img class="ml-lg-5" src="{{ asset('TemUngu-template/assets/img/ill/ill.png') }}"
                            width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="section features-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">Insight</span>
                        <h3 class="display-3">Full-Funnel Social Analytics</h3>
                        <p class="lead">The time is now for it to be okay to be great. For being a bright color. For
                            standing out.</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                                <i class="ni ni-settings-gear-65"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-primary">Social Conversations</h6>
                            <p class="description opacity-8">We get insulted by others, lose trust for those others. We
                                get back stabbed by friends. It becomes harder for us to give others a hand.</p>
                            <a href="javascript:;" class="text-primary">More about us
                                <i class="ni ni-bold-right text-primary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                                <i class="ni ni-atom"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-success">Analyze Performance</h6>
                            <p class="description opacity-8">Don't get your heart broken by people we love, even that
                                we give them all we have. Then we lose family over time. As we live, our hearts turn
                                colder.</p>
                            <a href="javascript:;" class="text-primary">Learn about our products
                                <i class="ni ni-bold-right text-primary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                                <i class="ni ni-world"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-warning">Measure Conversions</h6>
                            <p class="description opacity-8">What else could rust the heart more over time? Blackgold.
                                The time is now for it to be okay to be great. or being a bright color. For standing
                                out.</p>
                            <a href="javascript:;" class="text-primary">Check our documentation
                                <i class="ni ni-bold-right text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section features-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">Insight</span>
                        <h3 class="display-3">Full-Funnel Social Analytics</h3>
                        <p class="lead">The time is now for it to be okay to be great. For being a bright color. For
                            standing out.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal"
                            data-target="#modal-notification">Contact Us</button>
                        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog"
                            aria-labelledby="modal-notification" aria-hidden="true">
                            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                <div class="modal-content bg-gradient-danger">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white">Ok, Got it</button>
                                        <button type="button" class="btn btn-link text-white ml-auto"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                    <div class="card-body px-lg-5 py-lg-5">
                                        <div class="text-center text-muted mb-4">
                                            <small>Or sign in with credentials</small>
                                        </div>
                                        <form role="form" action="{{ route('contact.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Name" type="text"
                                                        id="name" name="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-lock-circle-open"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Email" type="email"
                                                        id="email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-lock-circle-open"></i></span>
                                                    </div>
                                                    <textarea class="form-control" id="message" name="message" rows="3"
                                                        placeholder="Write a large text here ..." required></textarea>
                                                </div>
                                            </div>
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id="customCheckLogin"
                                                    type="checkbox">
                                                <label class="custom-control-label" for="customCheckLogin">
                                                    <span>Remember me</span>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary my-4">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br /><br />

        @include('layouts.footers.guest.footer')
