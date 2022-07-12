<?php

namespace App\Http\Controllers;

use App\Models\Wilaya;

class ApiController extends Controller
{
    public function getDairas($wilayaCode)
    {
        return Wilaya::find($wilayaCode)->dairas;
    }
}
