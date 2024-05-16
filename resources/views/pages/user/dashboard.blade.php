@extends('layouts.app')

<body class="index-page">
    <!-- Navbar -->
    <nav id="navbar-main"
        class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="./index.html">
                <img src="{{ asset('TemUngu-template/assets/img/brand/blue.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html">
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
                            <a href="./examples/landing.html" class="dropdown-item">Landing</a>
                            <a href="./examples/profile.html" class="dropdown-item">Profile</a>
                            <a href="./examples/login.html" class="dropdown-item">Login</a>
                            <a href="./examples/register.html" class="dropdown-item">Register</a>
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

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon dropdown-toggle" href="javascript:;"
                            id="navbar-default_dropdown_1" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-settings-gear-65"></i>
                            <span class="nav-link-inner--text d-lg-none">Settings</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                            <a class="dropdown-item" href="javascript:;">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">Logout</button>
                                </form>
                            </a>
                            <a class="dropdown-item" href="javascript:;">{{ auth()->user()->username }}</a>
                        </div>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="shape shape-style-1 shape-primary">
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
                @include('partials.tabel-user')
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
    </div>

    <div class="section section-lg section-nucleo-icons pb-250">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section" style="background-image: url('./assets/img/ill/1.svg');">
                    <div class="container py-md">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 mb-lg-auto">
                                <div class="rounded overflow-hidden transform-perspective-left">
                                    {{-- <div id="carousel_example" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            @foreach ($pengaduan as $pengaduanItem)
                                                @if (is_array($pengaduanItem->foto_barang) || is_object($pengaduanItem->foto_barang))
                                                    @foreach ($pengaduanItem->foto_barang as $index => $namaFotoBarang)
                                                        <li data-target="#carousel_example" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($pengaduan as $pengaduanItem)
                                                @if (is_array($pengaduanItem->foto_barang) || is_object($pengaduanItem->foto_barang))
                                                    @foreach ($pengaduanItem->foto_barang as $index => $namaFotoBarang)
                                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                            <img class="img-fluid" src="{{ asset('uploads/' . $namaFotoBarang->url) }}" alt="Slide {{ $index + 1 }}">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> --}}
                                </div>

                            </div>
                            <div class="col-lg-5 mb-5 mb-lg-0">
                                <h1 class="font-weight-light">Bootstrap carousel</h1>
                                <p class="lead mt-4">Argon Design System comes with four pre-built pages to help you
                                    get started faster. You can change the text and images and you're good to go.</p>
                                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/carousel.html"
                                    class="btn btn-white mt-4">See all components</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-lg section-shaped">
        <div class="shape shape-style-1 shape-default">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container py-md">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h3 class="display-3 text-white">A beautiful Design System<span class="text-white">completed
                            with examples</span></h3>
                    <p class="lead text-white">The Design System comes with four pre-built pages to help you get
                        started faster. You can change the text and images and you're good to go. More importantly,
                        looking at them will give you a picture of what you can built with this powerful Bootstrap 4
                        Design System.</p>
                    <div class="btn-wrapper">
                        <a href="{{ route('form-pengaduan') }}" class="btn btn-success">Login Page</a>
                        <a href="./examples/register.html" class="btn btn-white">Register Page</a>
                    </div>
                </div>
                <div class="col-lg-5 mb-lg-auto">
                    <div class="transform-perspective-right">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-white pb-5">
                                <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
                                <div class="btn-wrapper text-center">
                                    <a href="#" class="btn btn-neutral btn-icon">
                                        <span class="btn-inner--icon"><img
                                                src="{{ asset('TemUngu-template/assets/img/icons/common/github.svg') }}"></span>
                                        <span class="btn-inner--text">Github</span>
                                    </a>
                                    <a href="#" class="btn btn-neutral btn-icon">
                                        <span class="btn-inner--icon"><img
                                                src="{{ asset('TemUngu-template/assets/img/icons/common/google.svg') }}"></span>
                                        <span class="btn-inner--text">Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body px-lg-12 py-lg-12">
                                <div class="text-center text-muted mb-4">
                                    <small>Or sign in with credentials</small>
                                </div>

                                <form role="form" action="{{ route('post-pengaduan') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Mahasiswa" type="text"
                                                name="nama_mahasiswa">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-app"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="NIM Mahasiswa" type="text"
                                                name="nim_mahasiswa">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <select name="id_jurusan" class="form-control"
                                                placeholder="Jurusan Mahasiswa">
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
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input name="tanggal_penemuaan" class="form-control"
                                                value="2024-11-23T10:30:00" type="datetime-local">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input name="no_telepon" class="form-control" placeholder="Nomor Telepon"
                                                type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input name="foto_barang" class="form-control"
                                                placeholder="Nomor Telepon" type="file">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="section section-lg">
        <div class="container">
            <div class="row row-grid justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-3">Do you love this awesome <span class="text-success">Design System for
                            Bootstrap 4?</span></h2>
                    <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to
                        Creative Tim where you can find the Design System in HTML. Start a new project or give an old
                        Bootstrap project a new look!</p>
                    <div class="btn-wrapper">
                        <a href="https://www.creative-tim.com/product/argon-design-system"
                            class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
                        <a href="https://www.creative-tim.com/product/argon-design-system"
                            class="btn btn-default">Download PSD/Sketch</a>
                    </div>
                    <div class="text-center">
                        <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-4">
                                <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank"
                                    data-toggle="tooltip"
                                    data-original-title="Bootstrap 4 - Most popular front-end component library">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href=" https://www.creative-tim.com/product/vue-argon-design-system"
                                    target="_blank" data-toggle="tooltip"
                                    data-original-title="Vue.js - The progressive javascript framework">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href=" https://www.creative-tim.com/product/argon-design-system-angular"
                                    target="_blank" data-toggle="tooltip"
                                    data-original-title="Angular - One framework. Mobile &amp; desktop">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href=" https://www.creative-tim.com/product/argon-design-system-react"
                                    target="_blank" data-toggle="tooltip"
                                    data-original-title="React - A JavaScript library for building user interfaces">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href=" https://www.creative-tim.com/product/argon-design-system" target="_blank"
                                    data-toggle="tooltip" data-original-title="Sketch - Digital design toolkit">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href=" https://www.creative-tim.com/product/argon-design-system" target="_blank"
                                    data-toggle="tooltip"
                                    data-original-title="Adobe Photoshop - Software for digital images manipulation">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer has-cards">
        <div class="container container-lg">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="card card-lift--hover shadow border-0">
                        <a href="./examples/landing.html" title="Landing Page">
                            <img src="{{ asset('TemUngu-template/assets/img/theme/profile.jpg') }}" class="card-img">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-0">
                    <div class="card card-lift--hover shadow border-0">
                        <a href="./examples/profile.html" title="Profile Page">
                            <img src="{{ asset('TemUngu-template/assets/img/theme/landing.jpg') }}" class="card-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-grid align-items-center my-md">
                <div class="col-lg-6">
                    <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                    <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow"
                        class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip"
                        data-original-title="Follow us">
                        <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                    </button>
                    <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow"
                        class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip"
                        data-original-title="Like us">
                        <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                    </button>
                    <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow"
                        class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip"
                        data-original-title="Follow us">
                        <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
                    </button>
                    <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow"
                        class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip"
                        data-original-title="Star on Github">
                        <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                    </button>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2020 <a href="" target="_blank">Creative Tim</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
