<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'chat_channel_id',
        'member1',
        'member2'
    ];

    public function messages()
    {
        return $this->hasMany(ChatMessage::class);
    }

    public function member1()
    {
        return $this->belongsTo(User::class,'member1');
    }
    public function member2()
    {
        return $this->belongsTo(User::class,'member2');
    }
}
