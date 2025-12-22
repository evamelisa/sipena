<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }

    public function registerPage()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:admin,email',
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        DB::table('admin')->insert([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Session::flash('notification', ['type' => 'success', 'message' => 'Akun berhasil dibuat! Silakan login.']);
        return redirect('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $admin = DB::table('admin')->where('name', $request->name)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            Session::flash('notification', ['type' => 'danger', 'message' => 'Nama atau Password salah']);
            return redirect('admin.login');
        }

        session([
            'id' => $admin->id,
            'name' => $admin->name,
            'role' => $admin->role,
        ]);

        return redirect('admin.dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect('admin.login');
    }
}