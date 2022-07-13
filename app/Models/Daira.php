<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Daira extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'arName',
        'wilaya_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => LaravelLocalization::getCurrentLocale() === 'ar' ? $this->arName : $value,
        );
    }
}
