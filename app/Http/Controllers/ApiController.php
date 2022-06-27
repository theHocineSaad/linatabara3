<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wilaya;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ApiController extends Controller
{
    /**
     * Get Dairas of a given Wilaya.
     *
     */
    public function getDairas($wilayaCode)
    {
        $dairas = Wilaya::findOrFail($wilayaCode)->dairas;
        return response() -> json($dairas);
    }

}
