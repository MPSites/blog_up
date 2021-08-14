<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){

        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('pages.auth.index');
    }

    public function store(Request $request)
    {
        //dd($request->remember);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('status', 'Invalid login credentials');
        }

        if(auth()->user()->role_id == 1){
            return redirect()->route('admin');
        }else{
            return redirect()->route('users.posts', auth()->user());
        }
        
    }
}
