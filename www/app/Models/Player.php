<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modles\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return route('Player.show', $this->id);
    }

    public function game_sessions()
    {
        return $this->hasMany(GameSession::class);
    }

}
