<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * TAMPILKAN HALAMAN PROFIL
     */
    public function index()
    {
        return view('beranda.jaringan.profil_jaringan', [
            'user' => Auth::user()
        ]);
    }

    /**
     * UPDATE PROFIL
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // VALIDASI
        $request->validate([
            'username'          => 'required|string|max:100',
            'email'             => 'required|email',
            'phone'             => 'required|string|max:20',
            'payment_method'    => 'required|string',
            'layanan'           => 'nullable|array|max:3',
            'layanan.*'         => 'string',
            'password'          => 'nullable|min:6|confirmed',
            'photo'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // === UPDATE FOTO PROFIL ===
        if ($request->hasFile('photo')) {

            // hapus foto lama (kalau ada & bukan default)
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            $photoPath = $request->file('photo')->store('profile', 'public');
            $user->photo = $photoPath;
        }

        // === UPDATE DATA ===
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->payment_method = $request->payment_method;
        $user->layanan = $request->layanan ? json_encode($request->layanan) : null;

        // password opsional
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui');
    }
}
