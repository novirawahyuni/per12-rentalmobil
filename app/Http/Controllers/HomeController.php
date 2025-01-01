<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();

        return view('home', compact('mobils'));
    }
}