<?php

namespace App\View\Components;

use App\Models\BloodGroup;
use App\Models\Wilaya;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class SearchBloodForm extends Component
{
    public $wilayas;

    public $bloodGroups;

    public function __construct()
    {
        $this->wilayas = Cache::rememberForever('wilayas', function () {
            return Wilaya::all();
        });

        $this->bloodGroups = Cache::rememberForever('bloodGroups', function () {
            return BloodGroup::all();
        });
    }

    public function render()
    {
        return view('components.search-blood-form');
    }
}
