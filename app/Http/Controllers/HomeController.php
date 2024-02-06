<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            'title' => 'Sekolahku.id | Home',
            'data_sekolah' => Sekolah::with('kecamatan')->get()
        ]);
    }
}
