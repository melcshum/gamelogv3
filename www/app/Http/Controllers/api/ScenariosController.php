<?php

namespace App\Http\Controllers\Api;

use App\Models\Scenario;
use App\Http\Resources\ScenarioResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController as BaseController;
// use App\Http\Resources\XApiStatement as XApiStatementResource;


class ScenariosController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scenarios = Scenario::all();
        return  $this->sendResponse(
            ScenarioResource::collection($scenarios),
            "Retrieved successfully"
        );
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            $this->sendError('Validation Error', $validator->errors());
        }

        $ceo = Scenario::create($data);

        return  $this->sendResponse(new ScenarioResource($ceo),  'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $scenario = Scenario::find($id);
        if (is_null($scenario)) {
            return   $this->sendError('ITEM NOT FOUND');
        }
        return  $this->sendResponse(new ScenarioResource($scenario),  'Retrieved successfully');
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

        $scenario->update($request->all());

        return  $this->sendResponse(new ScenarioResource($scenario),  'Retrieved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scenario  $scenario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scenario = Scenario::find($id);
        if (is_null($scenario)) {
            return   $this->sendError('ITEM  NOT FOUND');
        }

        $scenario->delete();

        return  $this->sendResponse([], 'Deleted successfully');
    }
}
