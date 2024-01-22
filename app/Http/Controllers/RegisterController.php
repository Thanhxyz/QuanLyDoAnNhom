<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'TaiKhoan' => 'required|unique:taikhoan',
            'MatKhau' => 'required',
        ]);

        $user = new User;
        $user->TaiKhoan = $request->TaiKhoan;
        $user->MatKhau = Hash::make($request->MatKhau);
        $user->save();

        return back()->with('success', 'Registered successfully.');
    }
}
