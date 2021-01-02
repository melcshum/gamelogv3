<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class XApiStatement extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'xapistatements';


    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'detail'
    // ];

    protected $guarded = [];

    public function session() {
        return $this->belongsTo('App\Models\GameSession','id' );
    }
}
