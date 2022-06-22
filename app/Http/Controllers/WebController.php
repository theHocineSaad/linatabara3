<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    /**
     * Home page
     *
     */
    public function homePage()
    {
        return view('home');
    }


}
