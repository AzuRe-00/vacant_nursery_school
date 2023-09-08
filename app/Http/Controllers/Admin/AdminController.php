<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.auth.register');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' .Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        event(new Registered($admin));
        
        Auth::guard('admins')->login($admin);
        
        return redirect(RouteServiceProvider::Home);
    }
    
    public function index()
    {
        if (Auth::guard('admins')->user()){
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.auth.login');
        
    }
    
    public function login(Request $request)
    {
        $credentials = $request-> only(['email', 'password']);
        
        if (Auth::guard('admins')->attempt($credentials)){
            return redirect()->route('admin.dashboard')->with([
                'login_msg' => 'ログインしました！',
            ]);
        }
        
        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('admins')->logout();
        $request->session()->regenerateToken();
        
        return redirect()->route('admin.login.index')->with([
            'logout_msg' => 'ログアウトしました！',
        ]);
    }
}