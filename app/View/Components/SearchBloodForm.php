<?php

namespace App\View\Components;

use App\Models\Wilaya;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class SearchBloodForm extends Component
{
    public function render()
    {
        $wilayas = Cache::rememberForever('wilayas', function () {
            return Wilaya::all();
        });

        return view('components.search-blood-form', ['wilayas' => $wilayas]);
    }
}
