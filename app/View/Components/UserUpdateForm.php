<?php

namespace App\View\Components;

use App\Models\Wilaya;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class UserUpdateForm extends Component
{
    public function render()
    {
        $wilayas = Cache::rememberForever('wilayas', function () {
            return Wilaya::all();
        });

        return view('components.user-update-form', ['wilayas' => $wilayas]);
    }
}
