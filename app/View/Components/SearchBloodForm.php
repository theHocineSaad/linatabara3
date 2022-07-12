<?php

namespace App\View\Components;

use App\Models\Wilaya;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
        $wilayas = Wilaya::all();

        return view('components.search-blood-form', ['wilayas' => $wilayas]);
    }
}
