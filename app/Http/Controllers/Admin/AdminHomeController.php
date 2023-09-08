<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function dashboard(Post $post, Admin $admin)
    {
        return view('admin.main')->with(['posts' => $post->get(), 'admin' => $admin]);
    }
    
    public function logout()
    {
        return view('welcome');
    }
}
