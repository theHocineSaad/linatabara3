<?php

namespace App\View\Components;

use App\Models\Baladia;
use App\Models\BloodGroup;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class SearchBloodForm extends Component
{
    public $baladiat;

    public $bloodGroups;

    public function __construct()
    {
        $this->baladiat = Cache::rememberForever('baladiat', function () {
            return Baladia::all();
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
