<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GameSession extends Model
{
    use HasFactory;


    protected $fillable = [
        'session', 'profile_id', 'game_id'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function interactions()
    {
        return $this->hasMany(App\Interaction::class);
    }

}
