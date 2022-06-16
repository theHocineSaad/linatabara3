<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'arName',
        'wilaya_id'
    ];

    /**
     * Get the Users of a Daira.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
