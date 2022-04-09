<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatMessage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'chat_id',
        'sender_user_id',
        'recipient_user_id',
        'message',
        'type',
        'seen_at'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_user_id')->withDefault([]);
    }

    public function recipient()
    {
        return $this->belongsTo(User::class,'recipient_user_id')->withDefault([]);
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class,'chat_id')->withDefault([]);
    }
}
