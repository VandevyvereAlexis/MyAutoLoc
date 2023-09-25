<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    /**
     *  AFFICHE LA PAGE DE LA POLITIQUE.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function politique()
    {
        // METHODE QUI RENVOIE LA VUE NOMMEE "POLITIQUE"
        return view('politique');
    }

}


