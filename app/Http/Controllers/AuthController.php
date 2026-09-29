<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loginForm(): View|RedirectResponse
    {
        return Auth::check() ? redirect()->route('dashboard') : view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors(['email' => 'Email atau kata sandi tidak sesuai.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        $dashboard = $request->user()->role === 'sesditjen'
            ? route('sesditjen.dashboard')
            : route('kepegawaian.dashboard');

        return redirect()->intended($dashboard);
    }

    public function setupForm(): View|RedirectResponse
    {
        if (User::exists()) {
            return redirect()->route('login')->with('status', 'Akun awal sudah dibuat. Silakan masuk.');
        }

        return view('auth.setup');
    }

    public function setup(Request $request): RedirectResponse
    {
        if (User::exists()) {
            abort(404);
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([...$data, 'role' => 'kepegawaian']);
        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('kepegawaian.dashboard')->with('status', 'Akun Kepegawaian berhasil dibuat.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
