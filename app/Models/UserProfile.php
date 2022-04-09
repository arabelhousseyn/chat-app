<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id',
        'fullName',
        'avatar',
        'dob',
        'is_online'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault([]);
    }
}
