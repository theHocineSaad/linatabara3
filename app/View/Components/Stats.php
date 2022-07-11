<?php

namespace App\View\Components;

use App\Models\BloodGroup;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Stats extends Component
{
    public $stats;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->stats = Cache::rememberForever('stats', function () {
            return BloodGroup::select([])->withCount('users')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stats');
    }
}
