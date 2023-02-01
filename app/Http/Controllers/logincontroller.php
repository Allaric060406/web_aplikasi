<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\user;

class logincontroller extends Controller
{
    public function login()
    {
        return view ('login',[
            'tittle'=>'login' 
        ]);
    }
    // ini yang di ubah
    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'pass' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dasboard');
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){
        Auth::logout();
    
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
}
