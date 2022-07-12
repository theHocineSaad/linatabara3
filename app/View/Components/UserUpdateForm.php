<?php

namespace App\View\Components;

use App\Models\Wilaya;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class UserUpdateForm extends Component
{
    public $wilayas;

    public function __construct()
    {
        $this->wilayas = Cache::rememberForever('wilayas', function () {
            return Wilaya::all();
        });
    }
    public function render()
    {
        return view('components.user-update-form');
    }
}
