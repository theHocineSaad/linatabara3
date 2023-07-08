<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'password',
        'readyToGive',
        'phone',
        'baladia_id',
        'blood_group_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function baladia()
    {
        return $this->belongsTo(Baladia::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['blood_group'] ?? false,
            fn ($query, $blood_group) => $query->whereHas(
                'bloodGroup',
                fn ($query) => $query->where('id', $blood_group)
            )
        );
        $query->when(
            $filters['baladia'] ?? false,
            fn ($query, $baladia) => $query->whereHas(
                'baladia',
                fn ($query) => $query->where('id', $baladia)
            )
        );
    }

    public static function getOtherDonorsCanDonateTo($bloodGroupId, $baladia = null)
    {
        if (! empty(otherBloodGroupsDonorsOf($bloodGroupId))) {
            return User::with('bloodGroup')
                ->whereIn('blood_group_id', otherBloodGroupsDonorsOf($bloodGroupId))
                ->where('readyToGive', '=', 1)
                ->when($baladia, function ($q) use ($baladia) {
                    return $q->where('baladia_id', $baladia);
                })
                ->inRandomOrder()
                ->paginate(10, ['*'], 'other-donors')
                ->appends(request()->except('other-donors'));
        }

        return []; // add abiliy of wilay and daira
    }

    public static function getAllReadyToGiveDonors()
    {
        return User::with('baladia', 'bloodGroup')->where('readyToGive', 1)->inRandomOrder()->paginate(10);
    }
}
