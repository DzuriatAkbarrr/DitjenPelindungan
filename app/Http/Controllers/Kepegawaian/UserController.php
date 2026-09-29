<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);

        return view('kepegawaian.users.index', ['users' => User::query()->orderBy('name')->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'role' => ['required', 'in:kepegawaian,sesditjen'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return back()->with('status', 'Akun berhasil disimpan. Pengguna dapat masuk dengan email dan kata sandinya.');
    }

    public function updatePassword(Request $request, User $user): RedirectResponse
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);

        $data = $request->validate([
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $user->update(['password' => Hash::make($data['password'])]);

        return back()->with('status', 'Kata sandi untuk '.$user->name.' berhasil diperbarui.');
    }
}
