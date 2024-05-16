<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Periksa apakah pengguna masuk
        if (Auth::check()) {
            // Jika pengguna masuk, tentukan dashboard berdasarkan peran
            if (Auth::user()->role === 'admin') {
                return view('pages.admin.dashboard-admin');
            } else {
                return view('pages.user.dashboard');
            }
        } else {
            // Jika pengguna belum masuk, arahkan mereka ke halaman login
            return redirect('/login');
        }
    }
}
