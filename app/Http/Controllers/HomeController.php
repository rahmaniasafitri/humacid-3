<?php

namespace App\Http\Controllers;

use App\Models\Kandungan;
use App\Models\Manfaat;
use App\Models\Petunjuk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index',[
            "kandungan" => Kandungan::all(),
            "manfaat" => Manfaat::all(),
            "petunjuk" => Petunjuk::all(),
        ]);
    }
}
