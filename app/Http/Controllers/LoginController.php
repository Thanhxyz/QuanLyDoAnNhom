<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Thêm dòng này

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'TaiKhoan' => 'required',
            'MatKhau' => 'required',
        ]);
    
        $user = User::where('TaiKhoan', $request->TaiKhoan)->first();
    
        if ($user && Hash::check($request->MatKhau, $user->MatKhau)) {
            // Authentication passed...
            Auth::login($user); // Thêm dòng này
            return redirect()->route('student-management');
        } else {
            // Authentication failed...
            return back()->withErrors([
                'TaiKhoan' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}