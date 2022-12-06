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

    public function scopeDonors($query, $data)
    {
        return $query->where([
            'blood_group_id' => $data['blood_group'],
            'wilaya_id' => $data['wilaya'],
            'daira_id' => $data['daira'],
            'readyToGive' => 1,
        ]);
    }

    public static function getDonors($column, $data)
    {
        return User::select($column)->donors($data)->inRandomOrder()->paginate(10);
    }

    public function scopeDonorsInWilaya($query, $data)
    {
        return $query->where([
            'blood_group_id' => $data['blood_group'],
            'wilaya_id' => $data['wilaya'],
            'readyToGive' => 1,
        ]);
    }

    public static function getDonorsInWilaya($data)
    {
        return User::donorsInWilaya($data)->inRandomOrder()->paginate(10);
    }

    public static function getDonorsHaveBloodGroup($bloodGroupId)
    {
        return User::with('bloodGroup')
            ->where('blood_group_id', $bloodGroupId)
            ->inRandomOrder()
            ->paginate(10, ['*'], 'donors')
            ->appends(request()->except('donors'));
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
