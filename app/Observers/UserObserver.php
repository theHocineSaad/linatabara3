<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class UserObserver
{
    public function created()
    {
        Cache::forget('stats-with-user-counts');
    }

    public function deleted()
    {
        Cache::forget('stats-with-user-counts');
    }
}
