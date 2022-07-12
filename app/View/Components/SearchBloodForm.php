<?php

namespace App\View\Components;

use App\Models\Wilaya;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class SearchBloodForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $wilayas = Cache::rememberForever('wilayas', function () {
            return Wilaya::all();
        });

        return view('components.search-blood-form', ['wilayas' => $wilayas]);
    }
}
