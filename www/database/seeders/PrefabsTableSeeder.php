<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scenario;
use App\Models\Prefab;

class PrefabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefabs = [
            ['name' => 'BasicCardTrim', 'boss_can_use' => 1],
            ['name' => 'BasicCardLength', 'boss_can_use' => 1],
            ['name' => 'BasicCardUpperCase', 'boss_can_use' => 1],
            ['name' => 'BasicCardLowerCase', 'boss_can_use' => 1],
            ['name' => 'BasicCardIndexOf', 'boss_can_use' => 1],
            ['name' => 'AthenaLight', 'boss_can_use' => 1],
            ['name' => 'HeavenlyDevil', 'boss_can_use' => 1],
            ['name' => 'Magicthief', 'boss_can_use' => 1],
            ['name' => 'ThousandDisappear', 'boss_can_use' => 0],
            ['name' => 'SevenInjuriesBoxing', 'boss_can_use' => 1],
            ['name' => 'GulityBreaker', 'boss_can_use' => 0],
            ['name' => 'BloodyArmour', 'boss_can_use' => 0],
            ['name' => 'LilyGift', 'boss_can_use' => 0],
            ['name' => 'ForCard_Root', 'boss_can_use' => 1],
            ['name' => 'StringAssignmentCard', 'boss_can_use' => 1],
            ['name' => 'IntegerAssignmentCard', 'boss_can_use' => 1],
            ['name' => 'IntegerAddAssignmentCard', 'boss_can_use' => 1],
            ['name' => 'IntegerSubstractAssignmentCard', 'boss_can_use' => 1],
            ['name' => 'IntegerMutliplyAssignmentCard', 'boss_can_use' => 1],
            ['name' => 'IntegerDivisionAssignmentCard', 'boss_can_use' => 1],
            ['name' => 'ForLoopCard', 'boss_can_use' => 1],
            ['name' => 'BasicStatmentsNForBodyCard', 'boss_can_use' => 1],
            ['name' => 'BasicStatmentsNIfBodyCard', 'boss_can_use' => 1],
            ['name' => 'ForLoopWithEqualCard', 'boss_can_use' => 1],
            ['name' => 'BasicStatmentsNForBodyWithEqualCard', 'boss_can_use' => 1],
            ['name' => 'BasicStatmentsNIfBodyUpdateCard', 'boss_can_use' => 1],
            ['name' => 'ForLoopDecrementCard', 'boss_can_use' => 1],
            ['name' => 'ForLoopDecrementWithEqualCard', 'boss_can_use' => 1],
        ];
        foreach ($prefabs as $key => $value) {
            $f = Prefab::create($value);

            $scenarios = Scenario::whereRaw("name like $value[name]%");
            foreach ($scenarios as $s){
                $f->scenarios->attach($s);
            }
        }
    }
}
