<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $query = Account::query();

        if ($request->has('search')) {
            $query->where('TaiKhoan', 'like', '%' . $request->get('search') . '%');
        }

        $accounts = $query->paginate(5);

        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'TaiKhoan' => 'required',
            'MatKhau' => 'required',
            'Quyen' => 'required',
        ]);

        $account = new Account([
            'TaiKhoan' => $request->get('TaiKhoan'),
            'MatKhau' => Hash::make($request->get('MatKhau')),
            'Quyen' => $request->get('Quyen'),
        ]);

        $account->save();

        return redirect('/accounts')->with('success', 'Account created successfully!');
    }

    public function destroy($id)
    {
        $account = Account::find($id);
        $account->delete();

        return redirect('/accounts')->with('success', 'Account deleted successfully!');
    }
    
}
