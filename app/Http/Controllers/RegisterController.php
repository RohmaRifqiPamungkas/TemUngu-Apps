<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required',
        ]);

        // Set default role to 'user' if not provided
        $attributes['role'] = request('role', 'user');

        $attributes['remember_token'] = Str::random(60);

        $user = User::create($attributes);

        // Redirect to login page after registration
        return redirect('/login')->with('success', 'Registration successful. Please login with your credentials.');
    }
}