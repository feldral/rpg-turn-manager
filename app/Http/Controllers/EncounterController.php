<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEncounterRequest;
use App\Http\Requests\UpdateEncounterRequest;
use App\Models\Encounter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class EncounterController
 *
 * @package App\Http\Controllers
 */
class EncounterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo create view to search for encounters
        return response()->json(['error' => 'incomplete endpoint']);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function list() {
        $encounters = Encounter::all();
        return response()->json($encounters->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo create view to create an encounter
        return response()->json(['error' => 'incomplete endpoint']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateEncounterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEncounterRequest $request)
    {
        $encounter = new Encounter($request->toArray());

        $encounter->save();

        return response()->json($encounter->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $encounter = Encounter::whereId($id)->first();

        //todo create view to see an encounter
        return response()->json(['error' => 'incomplete endpoint', 'character' => $encounter->toArray()]);
    }

    /**
     * Return the specified resource
     *
     * @param string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function get(string $id)
    {
        $encounter = Encounter::whereId($id)->first();

        return response()->json($encounter->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $encounter = Encounter::whereId($id)->first();

        //todo create view to edit an encounter
        return response()->json(['error' => 'incomplete endpoint', 'character' => $encounter->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateEncounterRequest $request
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEncounterRequest $request, string $id)
    {
        $encounter = Encounter::whereId($id)->first();

        $encounter->update($request->toArray());

        $encounter->save();

        return response()->json($encounter->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $encounter = Encounter::whereId($id)->first();

        $encounter->delete();

        return response()->json(true);
    }
}
