<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function create()
    {
        return view('admin.add');
    }
    
     public function show(Post $post)
    {
        return view('admin.show')->with(['post' => $post]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/admin/posts/' . $post->id);
    }
}