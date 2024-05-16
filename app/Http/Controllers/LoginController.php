<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil pengguna yang telah login
            $user = Auth::user();

            // Atur data pengguna yang telah login sebagai pemilik data pengaduan yang baru dibuat
            $request->session()->put('user_id', $user->id);

            // Redirect the user based on their role
            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard-admin');
            } else {
                return redirect()->intended('/user/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors('Login with Google failed. Please try again.');
        }

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'username' => $user->getNickname() ?? $user->getName(),
                'password' => bcrypt(Str::random(16)),
                'role' => 'user', // Set default role to 'user'
            ]);

            Auth::login($newUser, true);
        }

        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard-admin');
            } else {
                return redirect()->intended('/user/dashboard');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
