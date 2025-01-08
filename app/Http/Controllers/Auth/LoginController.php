<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Sesuaikan dengan file blade login Anda
    }

    /**
     * Menangani login user.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Coba login
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Redirect ke dashboard atau halaman lain setelah login berhasil
            return redirect()->intended('/home')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembalikan ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email', 'remember'));
    }

    /**
     * Menangani logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}