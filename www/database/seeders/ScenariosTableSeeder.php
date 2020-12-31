<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scenario;

class ScenariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $scenarios = [
            ['name' => 'BasicCardTrim_Iron', 'difficulty_rate' => 1, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicCardLength_Iron', 'difficulty_rate' => 1, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicCardUpperCase_Iron', 'difficulty_rate' => 1, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicCardLowerCase_Iron', 'difficulty_rate' => 1, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicCardIndexOf_Iron', 'difficulty_rate' => 1, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'AthenaLight_Iron', 'difficulty_rate' => 1, 'time_limit' => 40000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'AthenaLight_Copper', 'difficulty_rate' => 2, 'time_limit' => 40000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'AthenaLight_Silver', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'AthenaLight_Gold', 'difficulty_rate' => 3, 'time_limit' => 40000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'AthenaLight_Diamond', 'difficulty_rate' => 4, 'time_limit' => 160000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'HeavenlyDevil_Iron', 'difficulty_rate' => 1, 'time_limit' => 30000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'HeavenlyDevil_Copper', 'difficulty_rate' => 2, 'time_limit' => 30000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'HeavenlyDevil_Silver', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'HeavenlyDevil_Gold', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'HeavenlyDevil_Diamond', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'Magicthief_Iron', 'difficulty_rate' => 1, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'Magicthief_Copper', 'difficulty_rate' => 2, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'Magicthief_Silver', 'difficulty_rate' => 3, 'time_limit' => 170000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'Magicthief_Gold', 'difficulty_rate' => 4, 'time_limit' => 170000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'Magicthief_Diamond', 'difficulty_rate' => 4, 'time_limit' => 170000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ThousandDisappear_Iron', 'difficulty_rate' => 1, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ThousandDisappear_Copper', 'difficulty_rate' => 2, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ThousandDisappear_Silver', 'difficulty_rate' => 3, 'time_limit' => 40000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ThousandDisappear_Gold', 'difficulty_rate' => 4, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'SevenInjuriesBoxing_Iron', 'difficulty_rate' => 1, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'SevenInjuriesBoxing_Copper', 'difficulty_rate' => 2, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'SevenInjuriesBoxing_Silver', 'difficulty_rate' => 3, 'time_limit' => 40000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'SevenInjuriesBoxing_Gold', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'SevenInjuriesBoxing_Diamond', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'GulityBreaker_Iron', 'difficulty_rate' => 1, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'GulityBreaker_Copper', 'difficulty_rate' => 2, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'GulityBreaker_Silver', 'difficulty_rate' => 3, 'time_limit' => 40000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'GulityBreaker_Gold', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'GulityBreaker_Diamond', 'difficulty_rate' => 5, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BloodyArmour_Iron', 'difficulty_rate' => 1, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BloodyArmour_Copper', 'difficulty_rate' => 2, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BloodyArmour_Silver', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BloodyArmour_Gold', 'difficulty_rate' => 4, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BloodyArmour_Diamond', 'difficulty_rate' => 4, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'LilyGift_Iron', 'difficulty_rate' => 1, 'time_limit' => 90000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'LilyGift_Copper', 'difficulty_rate' => 2, 'time_limit' => 90000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'LilyGift_Silver', 'difficulty_rate' => 3, 'time_limit' => 90000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'LilyGift_Gold', 'difficulty_rate' => 4, 'time_limit' => 90000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'LilyGift_Diamond', 'difficulty_rate' => 4, 'time_limit' => 90000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForCard_Root_Iron', 'difficulty_rate' => 2, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'StringAssignment_entry', 'difficulty_rate' => 1, 'time_limit' => 10000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'StringAssignment_easy', 'difficulty_rate' => 2, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'StringAssignment_med', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'StringAssignment_hard', 'difficulty_rate' => 4, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAssignmentCard_entry', 'difficulty_rate' => 1, 'time_limit' => 10000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAssignmentCard_easy', 'difficulty_rate' => 1, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAssignmentCard_med', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAssignmentCard_hard', 'difficulty_rate' => 4, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAddAssignmentCard_entry', 'difficulty_rate' => 1, 'time_limit' => 10000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAddAssignmentCard_easy', 'difficulty_rate' => 2, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAddAssignmentCard_med', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerAddAssignmentCard_hard', 'difficulty_rate' => 4, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerSubstractAssignmentCard_entry', 'difficulty_rate' => 1, 'time_limit' => 10000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerSubstractAssignmentCard_easy', 'difficulty_rate' => 2, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerSubstractAssignmentCard_med', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerSubstractAssignmentCard_hard', 'difficulty_rate' => 4, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerMutliplyAssignmentCard_entry', 'difficulty_rate' => 1, 'time_limit' => 10000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerMutliplyAssignmentCard_easy', 'difficulty_rate' => 2, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerMutliplyAssignmentCard_med', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerMutliplyAssignmentCard_hard', 'difficulty_rate' => 4, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerDivisionAssignmentCard_entry', 'difficulty_rate' => 1, 'time_limit' => 10000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerDivisionAssignmentCard_easy', 'difficulty_rate' => 2, 'time_limit' => 15000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerDivisionAssignmentCard_med', 'difficulty_rate' => 3, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'IntegerDivisionAssignmentCard_hard', 'difficulty_rate' => 4, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopCard_entry', 'difficulty_rate' => 1, 'time_limit' => 20000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopCard_easy', 'difficulty_rate' => 2, 'time_limit' => 30000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopCard_med', 'difficulty_rate' => 3, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopCard_hard', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyCard_hard', 'difficulty_rate' => 4, 'time_limit' => 60000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyCard_hard', 'difficulty_rate' => 4, 'time_limit' => 70000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopWithEqualCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopWithEqualCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopWithEqualCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopWithEqualCard_hard', 'difficulty_rate' => 4, 'time_limit' => 70000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyWithEqualCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyWithEqualCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyWithEqualCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNForBodyWithEqualCard_hard', 'difficulty_rate' => 4, 'time_limit' => 70000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyUpdateCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyUpdateCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyUpdateCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'BasicStatmentsNIfBodyUpdateCard_hard', 'difficulty_rate' => 4, 'time_limit' => 70000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementCard_hard', 'difficulty_rate' => 4, 'time_limit' => 70000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementWithEqualCard_entry', 'difficulty_rate' => 1, 'time_limit' => 25000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementWithEqualCard_easy', 'difficulty_rate' => 2, 'time_limit' => 35000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementWithEqualCard_med', 'difficulty_rate' => 3, 'time_limit' => 50000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
            ['name' => 'ForLoopDecrementWithEqualCard_hard', 'difficulty_rate' => 4, 'time_limit' => 70000, 'k_factor' => 0.0075, 'uncertainty' => 0.01,],
        ];

        $game =  \App\Models\Game::where('name', '=', 'GhostCoder Java')->get()->first();


        foreach ($scenarios as $key => $value) {
            $s = Scenario::create($value);
            $game->scenarios()->save($s);

        }

        // $sp =[ ['BasicCardTrim_Iron', 'BasicCardTrim']];

        // foreach ($sp as $key => $value) {
        //     $s = Scenario::where('name', '=', $value[0])->get();

        //     $p = App\Prefab::where('name', '=', $value[1])->get();
        //     $p->secanrios()->attach($p);
        // }
    }
}
