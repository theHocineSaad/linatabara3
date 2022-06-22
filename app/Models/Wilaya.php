<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'arName',
    ];

    /**
     * Get the Users of a Wilaya.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the Dairas of a Wilaya.
     */
    public function dairas()
    {
        return $this->hasMany(Daira::class);
    }

}
