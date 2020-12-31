<?php

namespace App\Http\Controllers;

use App\Models\Scenario;
use App\InteractionDefinition;
use Illuminate\Http\Request;

class ScenariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scenarios = Scenario::with('prefabs')->paginate(20);

        return view('scenarios.index', compact('scenarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scenario = Scenario::findOrFail($id);

       return view("scenarios.show", compact('scenario'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */

    public function showByName($name)
    {

        $scenario = Scenario::where('name', '=', $name)->get()->first();
//         $iDefintions = InteractionDefinition::with(['interaction_object', 'interaction_object.difficulty_settings'])->where('name', 'like', '%' . $scenario->name)->get()->all();
//         //$iDef->interaction_object;
// dd( $iDefintions->interaction_object());
        return view("scenarios.show", compact('scenario'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */
    public function edit(Scenario $scenario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scenario $scenario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scenario $scenario)
    {
        //
    }
}
