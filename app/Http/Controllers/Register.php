<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Register extends Controller
{
    public function index()
    {
        return view("login.register");
    }

    public function store(Request $request){

        Log::info($request->all());

        $validateData = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);


        $count = Login::where("email", $request->email)->count(); 

        if($count > 0){
            return redirect()->route('register.form')->with('error', 'Email already taken!');

        } else{
            $Login = Login::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
            ]);

            return redirect()->route('register.form')->with('success', 'User registered successfully');
        }

    }
}
