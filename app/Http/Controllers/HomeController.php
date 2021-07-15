<?php

namespace App\Http\Controllers; //lugar en donde se encuentra el archivo

use Illuminate\Http\Request;

//se creo una clase donde se podra hacer una serie de metodos
class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __invoke()
    {
        return view('welcome');
        //return view('home');
    }
}
