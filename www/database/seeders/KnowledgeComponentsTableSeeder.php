<?php

use Illuminate\Database\Seeder;
use App\KnowledgeComponent;

class KnowledgeComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kcs = [
            ['name' => 'Assignment',   'purpose' => 'variable Assignment',  'level' => 0,],
            ['name' => 'ifBody',   'purpose' => 'single condition', 'level' => 1,],
            ['name' => 'ifBodyElseBody',   'purpose' =>  'two conditions', 'level' => 1,],
            ['name' => 'ifBodyElseThenBody',   'purpose' => 'multiple condition statement', 'level' => 1,],
            ['name' => 'operation comparison',   'purpose' => 'operator <, ', 'level' => 0,],
            ['name' => 'String Comparison',   'purpose' => ' String comparison ', 'level' => 0,],
            ['name' => 'String Trim Operation',   'purpose' => ' Trim comparison ', 'level' => 0,],
            ['name' => 'String substring Operation',   'purpose' => ' substring operation ', 'level' => 0,],
        ];

        foreach ($kcs as $key => $value) {
            KnowledgeComponent::create($value);
        }
    }
}
