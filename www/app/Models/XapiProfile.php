<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class XapiProfile extends Model
{
    use HasFactory;
    protected $table = 'xapi_profiles';


    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return route('xapiprofiles.show', $this->id);
    }

    public function game_sessions()
    {
        return $this->hasMany(GameSession::class);
    }

}
