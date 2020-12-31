<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\XApiStatement;
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


        $json = json_decode($request->getContent(), true);

        $xapiStatement = XApiStatement::create($json);

        return $this->sendResponse( $xapiStatement, 'XapiStatement created successfully.');
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
