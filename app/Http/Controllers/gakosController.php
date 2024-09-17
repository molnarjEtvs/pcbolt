<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gakosController extends Controller
{
    public function index(){

        return view('gakos');
    }
}
