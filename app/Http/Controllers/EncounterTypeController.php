<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEncounterTypeRequest;
use App\Http\Requests\UpdateEncounterTypeRequest;
use App\Models\EncounterType;
use Illuminate\Http\JsonResponse;

/**
 * Class EncounterTypeController
 *
 * @package App\Http\Controllers
 */
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

        if ( ! $user) {
            // redirect
        }

        $encounterTypes = EncounterType::all();

        return response()->json($encounterTypes->toArray());
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $user = \Auth::user();

        if ( ! $user) {
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

        if ( ! $user) {
            // redirect
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CreateEncounterTypeRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEncounterTypeRequest $request)
    {
        $user = \Auth::user();

        if ( ! $user) {
            // redirect
        }

        $encounterType = new EncounterType($request->toArray());

        $encounterType->save();

        return response()->json($encounterType->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param string $encounterTypeId
     *
     * @return \Illuminate\Http\Response
     */
    public function show(string $encounterTypeId)
    {
        $user = \Auth::user();

        if ( ! $user) {
            // redirect
        }

    }

    /**
     * @param string $encounterTypeId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(string $encounterTypeId)
    {
        $user = \Auth::user();

        if ( ! $user) {
            // redirect
        }

        $encounterType = EncounterType::whereId($encounterTypeId)->first();

        return response()->json($encounterType->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $encounterTypeId
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(string $encounterTypeId)
    {
        $user = \Auth::user();

        if ( ! $user) {
            // redirect
        }

        $encounterType = EncounterType::whereId($encounterTypeId)->first();

        return response()->json($encounterType->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $encounterTypeId
     * @param \App\Http\Requests\UpdateEncounterTypeRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(string $encounterTypeId, UpdateEncounterTypeRequest $request)
    {
        $user = \Auth::user();

        if ( ! $user) {
            // redirect
        }

        $encounterType = EncounterType::whereId($encounterTypeId)->first();

        $encounterType->update($request->toArray());

        return response()->json($encounterType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $encounterTypeId
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $encounterTypeId)
    {
        $user = \Auth::user();

        if ( ! $user) {
            // redirect
        }

        $encounterType = EncounterType::whereId($encounterTypeId)->first();

        $encounterType->delete();

        response()->json();
    }
}
