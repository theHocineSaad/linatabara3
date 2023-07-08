<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Baladia extends Model
{
    use HasFactory;

    protected $table = 'baladiat';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
