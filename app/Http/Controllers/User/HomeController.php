<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Post $post)
    {
        return view('main')->with(['posts' => $post->get()]);
    }
    
     public function logout()
    {
        return view('welcome');
    }
}
