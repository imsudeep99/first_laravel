<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class Logincontroller extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login(Request $request)
    {
        //validate data 
        $users = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // $users['role'] = 'admin';
        if (Auth::attempt($users)) {
            $request->session()->regenerate();
            //echo "HELLO";die;
            return redirect()->route('home');
        }
        return redirect()->route('login');
        
    }
}


