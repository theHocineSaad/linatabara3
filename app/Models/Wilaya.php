<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Wilaya extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'arName',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function dairas()
    {
        return $this->hasMany(Daira::class);
    }

    public function name()
    {
        return Attribute::make(
            get : function () {
                return LaravelLocalization::getCurrentLocale() === 'ar' ? $this->arName : $this->name;
            }
        );
    }
}
