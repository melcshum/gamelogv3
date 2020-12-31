<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Scenario;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'desc', 'purpose'
      ];


      public function setNameAttribute($value)
      {
          $this->attributes['name'] =   $value;
          $this->attributes['slug'] = Str::slug($value);
      }

      public function getUrlAttribute()
      {
          //   return route("questions.show", $this->id);
          return route("games.show", $this->slug);
      }


      public function scenarios()
      {
          return $this->hasMany(Scenario::class);
      }

      public function game_sessions()
      {
          return $this->hasMany(GameSession::class);
      }
}
