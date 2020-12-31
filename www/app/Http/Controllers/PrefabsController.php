<?php

namespace App\Http\Controllers;

use App\Prefab;
use Illuminate\Http\Request;

class PrefabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prefabs = Prefab::with('scenarios')->paginate(5);

        return view('prefabs.index', compact('prefabs'));
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
     * @param  \App\Prefab  $prefab
     * @return \Illuminate\Http\Response
     */
    public function show(Prefab $prefab)
    {

        //  $prefab = Prefab::findOrFail($id);
        return view("prefabs.show", compact('prefab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prefab  $prefab
     * @return \Illuminate\Http\Response
     */
    public function edit(Prefab $prefab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prefab  $prefab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prefab $prefab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prefab  $prefab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prefab $prefab)
    {
        //
    }
}
