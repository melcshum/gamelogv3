<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prefab;
use App\Models\Game;

class Scenario extends Model
{
    use HasFactory;

    //
    protected $fillable = [
        'name',
        'difficulty_rate',
        'uncertainty',
        'k_factor',
        'time_limit',
        'time_taken',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }


    public function prefabs()
    {
        return $this->belongsToMany(Prefab::class)->withTimeStamps();
    }
}
