<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('index');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReportController;


Route::middleware('auth')->group(function () {
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
});

Route::get('/search', [PengaduanController::class, 'search'])->name('search');
Route::post('/selesaikan-pengaduan/{id}', [PengaduanController::class, 'selesaikanPengaduan'])->name('selesaikan.pengaduan');
Route::get('/pengaduan/{id}/send-message', [PengaduanController::class, 'showSendMessageForm'])->name('pengaduan.showSendMessageForm');

// Route Contact
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::put('/contact/{id}/respond', [ContactController::class, 'respond'])->name('contact.respond');
Route::delete('/delete-contact/{id}', [ContactController::class, 'delete'])->name('delete-contact');

// Route Report
Route::get('/report', [ReportController::class, 'create'])->name('reports.create');
Route::post('/report', [ReportController::class, 'store'])->name('reports.store');
Route::get('/report{id}', [ReportController::class, 'show'])->name('reports.show');
Route::put('/report/{id}/respond', [ReportController::class, 'respond'])->name('report.respond');
Route::delete('/report/{id}', [ContactController::class, 'delete'])->name('contact.delete');

// Route group untuk rute-rute yang memerlukan middleware 'guest'
Route::middleware('guest')->group(function () {
	Route::get('/register', [RegisterController::class, 'create'])->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->name('login');
	Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

	Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
	Route::get('/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('login.google.callback');

	Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');

	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
	Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
	Route::post('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
});

// Rute untuk halaman utama
Route::get('/', function () {
	if (auth()->check()) {
		return redirect('/dashboard'); // Jika sudah login, arahkan ke dashboard
	} else {
		return view('pages/home'); // Jika belum login, arahkan ke halaman home.blade.php
	}
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard-user', [PageController::class, 'dashboardUser'])->name('dashboard-user');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');

	//PENGADUAN
	Route::get('/form-pengaduan', [PengaduanController::class, 'index'])->name('form-pengaduan');
	Route::post('/post-pengaduan', [PengaduanController::class, 'postpengaduan'])->name('post-pengaduan');

	Route::get('/edit-pengaduan/{id}', [PengaduanController::class, 'editpengaduan'])->name('edit-pengaduan');
	Route::post('/update-pengaduan/{id}', [PengaduanController::class, 'updatepengaduan'])->name('update-pengaduan');
	Route::get('/delete-pengaduan/{id}', [PengaduanController::class, 'deletepengaduan'])->name('delete-pengaduan');

	//EVENTS
	Route::get('events/list', [EventsController::class, 'listEvent'])->name('events.list');
	Route::resource('events', EventsController::class)->names([
		'index' => 'events.index',
		'create' => 'events.create',
		'store' => 'events.store',
		'show' => 'events.show',
		'edit' => 'events.edit',
		'update' => 'events.update',
		'destroy' => 'events.destroy'
	]);
});
