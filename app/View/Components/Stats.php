<?php

namespace App\View\Components;

use App\Models\BloodGroup;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Stats extends Component
{
    public $stats;

    public function __construct()
    {
        $this->stats = Cache::rememberForever('stats', function () {
            return BloodGroup::select([])->withCount('users')->get();
        });
    }

    public function render()
    {
        return view('components.stats');
    }
}
