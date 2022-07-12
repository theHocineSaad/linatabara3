<?php

namespace App\Observers;

use App\Models\Wilaya;
use Illuminate\Support\Facades\Cache;

class WilayaObserver
{

    public function created(Wilaya $wilaya)
    {
        Cache::forget('wilayas');
    }

    public function deleted(Wilaya $wilaya)
    {
        Cache::forget('wilayas');
    }

    public function restored(Wilaya $wilaya)
    {
        Cache::forget('wilayas');
    }

    public function forceDeleted(Wilaya $wilaya)
    {
        Cache::forget('wilayas');
    }
}
