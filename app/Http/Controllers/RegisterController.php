<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'Sekolahku.id | Register'
        ]);
    }

    public function handle(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);

        User::create([
            'nama' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        return redirect()->route('login.form');

    }
}
