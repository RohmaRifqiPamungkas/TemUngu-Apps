<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        TemUngu.apps
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{!! asset('TemUngu-template/assets/css/nucleo-icons.css') !!}" rel="stylesheet" />
    <link href="{!! asset('TemUngu-template/css/nucleo-svg.css') !!}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{!! asset('TemUngu-template/assets/css/font-awesome.css') !!}" rel="stylesheet" />
    <link href="{!! asset('TemUngu-template/assets/css/nucleo-svg.css') !!}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{!! asset('TemUngu-template/assets/css/argon-design-system.css?v=1.2.2') !!}" rel="stylesheet" />
</head>


<!--   Core JS Files   -->
<script src="{!! asset('TemUngu-template/assets/js/core/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('TemUngu-template/assets/js/core/popper.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('TemUngu-template/assets/js/core/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('TemUngu-template/assets/js/plugins/perfect-scrollbar.jquery.min.js') !!}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{!! asset('TemUngu-template/assets/js/plugins/bootstrap-switch.js') !!}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{!! asset('TemUngu-template/assets/js/plugins/nouislider.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('TemUngu-template/assets/js/plugins/moment.min.js') !!}"></script>
<script src="{!! asset('TemUngu-template/assets/js/plugins/datetimepicker.js') !!}" type="text/javascript"></script>
<script src="{!! asset('TemUngu-template/assets/js/plugins/bootstrap-datepicker.min.js') !!}"></script>
<!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{!! asset('TemUngu-template/assets/js/argon-design-system.min.js?v=1.2.2') !!}" type="text/javascript"></script>
<script>
    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });
</script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(itemId) {
        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah anda yakin ingin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, arahkan ke URL delete dengan ID
                window.location.href = '/delete-pengaduan/' + itemId;
            }
        });
    }
</script>
<script>
    function confirmDelete(itemId) {
        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah anda yakin ingin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, submit form penghapusan
                document.getElementById('deleteForm' + itemId).submit();
            }
        });
    }
</script>
<script>
    document.getElementById("logout-link").addEventListener("click", function(event) {
        event.preventDefault(); // Mencegah perilaku default dari tautan

        // Konfirmasi logout menggunakan SweetAlert
        Swal.fire({
            title: 'Logout',
            text: "Apakah Anda yakin ingin logout?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lakukan proses logout di sini, seperti mengirim permintaan ke URL logout
                // Misalnya, jika menggunakan Ajax:
                fetch('/logout', {
                        method: 'POST'
                    })
                    .then(response => {
                        if (response.ok) {
                            // Redirect ke halaman login atau lakukan sesuatu setelah logout
                            window.location.href =
                                '/login'; // Ganti '/login' dengan URL halaman login Anda
                        } else {
                            // Handle error jika terjadi
                            console.error('Logout failed');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    });
</script>
<script>
    function handleSelesai(event, id) {
        event.preventDefault();

        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Pengaduan ini akan ditandai sebagai selesai!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, selesai!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById(`form-selesai-${id}`);
                const formData = new FormData(form);

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const row = document.getElementById(`pengaduan-${id}`);
                            row.remove();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Terjadi kesalahan saat menyelesaikan pengaduan.',
                            });
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    }
</script>

</body>

</html>
