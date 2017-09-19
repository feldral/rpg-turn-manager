<?php

namespace App\Http\Controllers;

use App\Models\EncounterType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EncounterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }

        return response();
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $user = \Auth::user();

        if(!$user){
            //redirect
        }

        $encounterTypes = EncounterType::all();

        return response()->json($encounterTypes->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }

        $encounterType = EncounterType::whereId(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EncounterType  $encounterType
     * @return \Illuminate\Http\Response
     */
    public function show(EncounterType $encounterType)
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }

        $encounterType = EncounterType::whereId(1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EncounterType  $encounterType
     * @return \Illuminate\Http\Response
     */
    public function edit(EncounterType $encounterType)
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }

        $encounterType = EncounterType::whereId(1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EncounterType  $encounterType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EncounterType $encounterType)
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }

        $encounterType = EncounterType::whereId(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EncounterType  $encounterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EncounterType $encounterType)
    {
        $user = \Auth::user();

        if(!$user){
            // redirect
        }

        $encounterType = EncounterType::whereId(1);
    }
}
