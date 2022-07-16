<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $request -> flush();

        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function dashboard()
    {
        return view('pages.dashboards.user');
    }
}
