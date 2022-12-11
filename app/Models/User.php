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
        'wilaya_id',
        'daira_id',
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

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    public function daira()
    {
        return $this->belongsTo(Daira::class);
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
            $filters['wilaya'] ?? false,
            fn ($query, $wilaya) => $query->whereHas(
                'wilaya',
                fn ($query) => $query->where('id', $wilaya)
            )
        );
        $query->when(
            $filters['daira'] ?? false,
            fn ($query, $daira) => $query->whereHas(
                'daira',
                fn ($query) => $query->where('id', $daira)
            )
        );
    }



    public static function getOtherDonorsCanDonateTo($bloodGroupId, $wilaya = null, $daira = null)
    {
        if (! empty(otherBloodGroupsDonorsOf($bloodGroupId))) {
            return User::with('bloodGroup')
                ->whereIn('blood_group_id', otherBloodGroupsDonorsOf($bloodGroupId))
                ->where('readyToGive', '=', 1)
                ->when($wilaya, function ($q) use ($wilaya) {
                    return $q->where('wilaya_id', $wilaya);
                })
                ->when($daira, function ($q) use ($daira) {
                    return $q->where('daira_id', $daira);
                })
                ->inRandomOrder()
                ->paginate(10, ['*'], 'other-donors')
                ->appends(request()->except('other-donors'));
        }

        return []; // add abiliy of wilay and daira
    }

    public static function getAllReadyToGiveDonors()
    {
        return User::with('wilaya', 'daira', 'bloodGroup')->where('readyToGive', 1)->inRandomOrder()->paginate(10);
    }
}
