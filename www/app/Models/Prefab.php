<?php

namespace App\Models;

use App\Scenario;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prefab extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'boss_can_use', 'is_enabled'
    ];


    public function scenarios()
    {
        return $this->belongsToMany(Scenario::class)->withTimeStamps();
    }


}
