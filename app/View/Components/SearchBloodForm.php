<?php

namespace App\View\Components;

use App\Models\Wilaya;
use App\Models\BloodGroup;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class SearchBloodForm extends Component
{
    public $wilayas;
    public $stats;

    public function __construct()
    {
        $this->wilayas = Cache::rememberForever('wilayas', function () {
            return Wilaya::all();
        });

        $this->stats = Cache::rememberForever('all-stats', function () {
            return BloodGroup::all();
        });

    }

    public function render()
    {
        return view('components.search-blood-form');
    }
}
