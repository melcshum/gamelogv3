<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scenario;
use App\Models\Prefab;


class PrefabScanrioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // tempoary hard code...
        $sp = [
            ['BasicCardTrim_Iron', 'BasicCardTrim'],
            ['BasicCardLength_Iron', 'BasicCardLength'],
            ['BasicCardUpperCase_Iron', 'BasicCardUpperCase'],
            ['BasicCardLowerCase_Iron', 'BasicCardLowerCase'],
            ['BasicCardIndexOf_Iron', 'BasicCardIndexOf'],
            ['AthenaLight_Iron', 'AthenaLight'],
            ['AthenaLight_Copper', 'AthenaLight'],
            ['AthenaLight_Silver', 'AthenaLight'],
            ['AthenaLight_Gold', 'AthenaLight'],
            ['AthenaLight_Diamond', 'AthenaLight'],
            ['HeavenlyDevil_Iron', 'HeavenlyDevil'],
            ['HeavenlyDevil_Copper', 'HeavenlyDevil'],
            ['HeavenlyDevil_Silver', 'HeavenlyDevil'],
            ['HeavenlyDevil_Gold', 'HeavenlyDevil'],
            ['HeavenlyDevil_Diamond', 'HeavenlyDevil'],
            ['Magicthief_Iron', 'Magicthief'],
            ['Magicthief_Copper', 'Magicthief'],
            ['Magicthief_Silver', 'Magicthief'],
            ['Magicthief_Gold', 'Magicthief'],
            ['Magicthief_Diamond', 'Magicthief'],
            ['ThousandDisappear_Iron', 'ThousandDisappear'],
            ['ThousandDisappear_Copper', 'ThousandDisappear'],
            ['ThousandDisappear_Silver', 'ThousandDisappear'],
            ['ThousandDisappear_Gold', 'ThousandDisappear'],
            ['SevenInjuriesBoxing_Iron', 'SevenInjuriesBoxing'],
            ['SevenInjuriesBoxing_Copper', 'SevenInjuriesBoxing'],
            ['SevenInjuriesBoxing_Silver', 'SevenInjuriesBoxing'],
            ['SevenInjuriesBoxing_Gold', 'SevenInjuriesBoxing'],
            ['SevenInjuriesBoxing_Diamond', 'SevenInjuriesBoxing'],
            ['GulityBreaker_Iron', 'GulityBreaker'],
            ['GulityBreaker_Copper', 'GulityBreaker'],
            ['GulityBreaker_Silver', 'GulityBreaker'],
            ['GulityBreaker_Gold', 'GulityBreaker'],
            ['GulityBreaker_Diamond', 'GulityBreaker'],
            ['BloodyArmour_Iron', 'BloodyArmour'],
            ['BloodyArmour_Copper', 'BloodyArmour'],
            ['BloodyArmour_Silver', 'BloodyArmour'],
            ['BloodyArmour_Gold', 'BloodyArmour'],
            ['BloodyArmour_Diamond', 'BloodyArmour'],
            ['LilyGift_Iron', 'LilyGift'],
            ['LilyGift_Copper', 'LilyGift'],
            ['LilyGift_Silver', 'LilyGift'],
            ['LilyGift_Gold', 'LilyGift'],
            ['LilyGift_Diamond', 'LilyGift'],
            ['ForCard_Root_Iron', 'ForCard_Root'],
            ['StringAssignment_entry', 'StringAssignmentCard'],
            ['StringAssignment_easy', 'StringAssignmentCard'],
            ['StringAssignment_med', 'StringAssignmentCard'],
            ['StringAssignment_hard', 'StringAssignmentCard'],
            ['IntegerAssignmentCard_entry', 'IntegerAssignmentCard'],
            ['IntegerAssignmentCard_easy', 'IntegerAssignmentCard'],
            ['IntegerAssignmentCard_med', 'IntegerAssignmentCard'],
            ['IntegerAssignmentCard_hard', 'IntegerAssignmentCard'],
            ['IntegerAddAssignmentCard_entry', 'IntegerAddAssignmentCard'],
            ['IntegerAddAssignmentCard_easy', 'IntegerAddAssignmentCard'],
            ['IntegerAddAssignmentCard_med', 'IntegerAddAssignmentCard'],
            ['IntegerAddAssignmentCard_hard', 'IntegerAddAssignmentCard'],
            ['IntegerSubstractAssignmentCard_entry', 'IntegerSubstractAssignmentCard'],
            ['IntegerSubstractAssignmentCard_easy', 'IntegerSubstractAssignmentCard'],
            ['IntegerSubstractAssignmentCard_med', 'IntegerSubstractAssignmentCard'],
            ['IntegerSubstractAssignmentCard_hard', 'IntegerSubstractAssignmentCard'],
            ['IntegerMutliplyAssignmentCard_entry', 'IntegerMutliplyAssignmentCard'],
            ['IntegerMutliplyAssignmentCard_easy', 'IntegerMutliplyAssignmentCard'],
            ['IntegerMutliplyAssignmentCard_med', 'IntegerMutliplyAssignmentCard'],
            ['IntegerMutliplyAssignmentCard_hard', 'IntegerMutliplyAssignmentCard'],
            ['IntegerDivisionAssignmentCard_entry', 'IntegerDivisionAssignmentCard'],
            ['IntegerDivisionAssignmentCard_easy', 'IntegerDivisionAssignmentCard'],
            ['IntegerDivisionAssignmentCard_med', 'IntegerDivisionAssignmentCard'],
            ['IntegerDivisionAssignmentCard_hard', 'IntegerDivisionAssignmentCard'],
            ['ForLoopCard_entry', 'ForLoopCard'],
            ['ForLoopCard_easy', 'ForLoopCard'],
            ['ForLoopCard_med', 'ForLoopCard'],
            ['ForLoopCard_hard', 'ForLoopCard'],
            ['BasicStatmentsNForBodyCard_entry', 'BasicStatmentsNForBodyCard'],
            ['BasicStatmentsNForBodyCard_easy', 'BasicStatmentsNForBodyCard'],
            ['BasicStatmentsNForBodyCard_med', 'BasicStatmentsNForBodyCard'],
            ['BasicStatmentsNForBodyCard_hard', 'BasicStatmentsNForBodyCard'],
            ['BasicStatmentsNIfBodyCard_entry', 'BasicStatmentsNIfBodyCard'],
            ['BasicStatmentsNIfBodyCard_easy', 'BasicStatmentsNIfBodyCard'],
            ['BasicStatmentsNIfBodyCard_med', 'BasicStatmentsNIfBodyCard'],
            ['BasicStatmentsNIfBodyCard_hard', 'BasicStatmentsNIfBodyCard'],
            ['ForLoopWithEqualCard_entry', 'ForLoopWithEqualCard'],
            ['ForLoopWithEqualCard_easy', 'ForLoopWithEqualCard'],
            ['ForLoopWithEqualCard_med', 'ForLoopWithEqualCard'],
            ['ForLoopWithEqualCard_hard', 'ForLoopWithEqualCard'],
            ['BasicStatmentsNForBodyWithEqualCard_entry', 'BasicStatmentsNForBodyWithEqualCard'],
            ['BasicStatmentsNForBodyWithEqualCard_easy', 'BasicStatmentsNForBodyWithEqualCard'],
            ['BasicStatmentsNForBodyWithEqualCard_med', 'BasicStatmentsNForBodyWithEqualCard'],
            ['BasicStatmentsNForBodyWithEqualCard_hard', 'BasicStatmentsNForBodyWithEqualCard'],
            ['BasicStatmentsNIfBodyUpdateCard_entry', 'BasicStatmentsNIfBodyUpdateCard'],
            ['BasicStatmentsNIfBodyUpdateCard_easy', 'BasicStatmentsNIfBodyUpdateCard'],
            ['BasicStatmentsNIfBodyUpdateCard_med', 'BasicStatmentsNIfBodyUpdateCard'],
            ['BasicStatmentsNIfBodyUpdateCard_hard', 'BasicStatmentsNIfBodyUpdateCard'],
            ['ForLoopDecrementCard_entry', 'ForLoopDecrementCard'],
            ['ForLoopDecrementCard_easy', 'ForLoopDecrementCard'],
            ['ForLoopDecrementCard_med', 'ForLoopDecrementCard'],
            ['ForLoopDecrementCard_hard', 'ForLoopDecrementCard'],
            ['ForLoopDecrementWithEqualCard_entry', 'ForLoopDecrementWithEqualCard'],
            ['ForLoopDecrementWithEqualCard_easy', 'ForLoopDecrementWithEqualCard'],
            ['ForLoopDecrementWithEqualCard_med', 'ForLoopDecrementWithEqualCard'],
            ['ForLoopDecrementWithEqualCard_hard', 'ForLoopDecrementWithEqualCard'],
        ];


        foreach ($sp as $key => $value) {
            $s = Scenario::where('name', '=', $value[0])->get()->first();

            $p = Prefab::where('name', '=', $value[1])->get()->first();

            $s->prefabs()->attach($p);
        }
    }
}
