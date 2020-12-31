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
                'desc' => 'Players fight against the Ghost Coder and build thier HP in programming  ',
                'purpose' => 'Learning Programming Syntax',
            ],
            [
                'name' => 'GhostCoder VB',
                'desc' => 'Players fight against the Ghost Coder and build thier HP in programming  ',
                'purpose' => 'Learning Programming Syntax',
            ],

        ];

        foreach ($games as $key => $value) {
            Game::create($value);
        }

    }
}
