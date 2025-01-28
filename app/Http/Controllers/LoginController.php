<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showForm()
    {
        return view("login.login");
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        
            if(Auth::attempt($request->only('email', 'password'))){
                $request->session()->regenerate();
                return redirect()->route('home')->with('loggedin', 'Logged in successfully.');
            } 
        


            return redirect()->route('login')->with('error', 'Invalid Email & Password.');
    


    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
    
}
