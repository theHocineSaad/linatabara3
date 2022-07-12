<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'bloodGroup',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
