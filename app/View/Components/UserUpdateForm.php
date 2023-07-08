<?php

namespace App\View\Components;

use App\Models\Baladia;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class UserUpdateForm extends Component
{
    public $baladiat;

    public function __construct()
    {
        $this->baladiat = Cache::rememberForever('baladiat', function () {
            return Baladia::all();
        });
    }

    public function render()
    {
        return view('components.user-update-form');
    }
}
