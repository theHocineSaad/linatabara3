<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserObserver
{
    public function created(User $user)
    {
        Cache::forget('stats');
    }

    public function deleted(User $user)
    {
        Cache::forget('stats');
    }
}
