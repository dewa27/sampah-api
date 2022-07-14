<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthUserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['Tidak ada akun yang terhubung dengan email ini'],
            ]);
        } else if (!Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => ['Password anda salah'],
            ]);
        } else if (!$user->email_verified_at) {
            return response()->json([
                'message' => "Email is not verified",
                'errors' => [
                    'verification' => ['Akun anda belum terverfikasi. Silahkan cek verifikasi akun pada email Anda']
                ]
            ], 401);
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('user-' . $request->device_name, ['role:user'])->plainTextToken
        ]);
    }
    public function register(Request $request)
    {
        $fields = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'tgl_lahir' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::create([
            'nama' => $fields['nama'],
            'email' => $fields['email'],
            'tgl_lahir' => $fields['tgl_lahir'],
            'password' => Hash::make($fields['password']),
            'id_saldo' => 0
        ]);

        $user->sendEmailVerificationNotification();
        return [
            'status' => "Email verifikasi sudah dikirim"
        ];
        // return $user;
    }
    public function logout()
    {
        return auth()->user()->tokens()->delete();

        return [
            'message' => 'Logout berhasil'
        ];
    }

    public function verify($verifyHash)
    {
        $user = User::where('email', Crypt::decryptString($verifyHash))->first();
        if ($user->email_verified_at) {
            abort(404);
        }
        if ($user->markEmailAsVerified()) {
            return "Email telah terverifikasi. Silahkan login dengan akun Anda pada aplikasi Nyampah";
        }
    }
}
