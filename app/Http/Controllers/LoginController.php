<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'Sekolahku.id | Login'
        ]);
    }

    public function handle(Request $request){
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt(['nama' => $request->username, 'password' => $request->password])){
            return redirect()->route('sekolah.index');
        }
        return back();
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login.form');
    }
}
