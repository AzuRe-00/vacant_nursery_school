<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }
    
    public function confirm(Request $request)
    {
        return view('confirm')->with(['inputs' => $request->all()]);
    }
    
    public function complete(Request $request, User $user)
    {
        if ($request->has('back')){
            return redirect()->route('form')->withInput($request->all());
        }
        
        $input = $request['user'];
        
        $post->fill($input)->save();
        return redirect('/form/complete');
    }
}
