<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserChannelSubscriptions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'user_channel_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault([]);
    }

    public function channel()
    {
        return $this->belongsTo(UserChannel::class,'user_channel_id')->withDefault([]);
    }
}
