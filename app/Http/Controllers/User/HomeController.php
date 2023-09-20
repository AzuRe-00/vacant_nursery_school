<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Post $post, User $user)
    {
        return view('main')->with(['posts' => $post->get(), 'user' => $user]);
    }
    
    public function form()
    {
        return view('form');
    }
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function logout()
    {
        return view('welcome');
    }
}
