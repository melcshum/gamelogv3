<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SessionXapiStatement extends Model
{

    protected $table = 'session_xapistatements';


    protected $fillable = [
        'session_id', 'xapi_id'
    ];


    public function session()
    {
        return $this->belongsTo(GameSession::class, 'session_id');
    }
}
