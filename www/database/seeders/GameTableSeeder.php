<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('games')->delete();
        $games = [
            [
                'name' => 'GhostCoder Java',
                'desc' => 'Player fights JAVA programming syntax against the Ghost Coder   ',
                'purpose' => 'Learning Programming Syntax',
            ],
            [
                'name' => 'GhostCoder VB',
                'desc' => 'Player fights VB programming syntax against the Ghost Coder   ',
                'purpose' => 'Learning Programming Syntax',
            ],

        ];

        foreach ($games as $key => $value) {
            Game::create($value);
        }

    }
}
