<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\XApiStatement;
use App\Models\SessionXapiStatement;
use App\Models\GameSession;
use DB;

use Validator;
use App\Http\Resources\XApiStatement as XApiStatementResource;

class XAPIStatmentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xapiStatements = XApiStatement::all();

        return $this->sendResponse($xapiStatements, 'XApiStatement retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'detail' => 'required'
        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());
        // }



        $request->input('session_id');

        $json = json_decode($request->getContent(), true);

        $xapiStatement = XApiStatement::create($json);

        $gamesession = GameSession::where('session', '=', $request->input('session_key'))->first();

        SessionXapiStatement::create([
            'session_id' =>  $gamesession->id,
            'xapi_id' => $xapiStatement->id
        ]);

        //        return $xapiStatement->id;
        //      return response()->json([$json], 200);

        return $this->sendResponse($xapiStatement, 'XapiStatement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $xapiStatement = XapiStatement::find($id);

        if (is_null($xapiStatement)) {
            return $this->sendError('XapiStatement not found.');
        }

        return $this->sendResponse(new XApiStatementResource($xapiStatement), 'XapiStatement retrieved successfully.');
    }

    public function showBySession($session_key)
    {


        $gamesession =    GameSession::with("session_xapi_statement")->where('session', '=', $session_key)->first();

        $xapis = $gamesession->session_xapi_statement;

        $XApiStatements= XApiStatement::whereIn('_id', $xapis->pluck('xapi_id'))->get();



          return $this->sendResponse($XApiStatements, 'XapiStatement retrieved successfully.');
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, XapiStatement $xapiStatement)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $xapiStatement->name = $input['name'];
        $xapiStatement->detail = $input['detail'];
        $xapiStatement->save();

        return $this->sendResponse(new XApiStatementResource($xapiStatement), 'XapiStatement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(XapiStatement $xapiStatement)
    {
        $xapiStatement->delete();

        return $this->sendResponse([], 'XapiStatement deleted successfully.');
    }
}
