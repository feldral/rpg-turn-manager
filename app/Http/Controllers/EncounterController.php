<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEncounterRequest;
use App\Http\Requests\UpdateEncounterRequest;
use App\Models\Encounter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
        return response()->json(['error'=>'incomplete endpoint'], JsonResponse::HTTP_IM_USED);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo create view to create an encounter
        return response()->json(['error'=>'incomplete endpoint'], JsonResponse::HTTP_IM_USED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateEncounterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEncounterRequest $request)
    {
        $encounter = new Encounter($request->toArray());
        return response()->json($encounter->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $encounter = Encounter::whereId($id);
        //todo create view to see an encounter
        return response()->json(['error'=>'incomplete endpoint', 'character'=>$encounter->toArray()], JsonResponse::HTTP_IM_USED);
    }

    /**
     * Return the specified resource
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function get(string $id)
    {
        $encounter = Encounter::whereId($id);

        return response()->json($encounter->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $encounter = Encounter::whereId($id);
        //todo create view to edit an encounter
        return response()->json(['error'=>'incomplete endpoint', 'character'=>$encounter->toArray()], JsonResponse::HTTP_IM_USED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateEncounterRequest  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEncounterRequest $request, string $id)
    {
        $encounter = Encounter::whereId($id);

        $encounter->update($request->toArray());

        $encounter->save();

        return response()->json($encounter->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $encounter = Encounter::whereId($id)->first();

        $encounter->delete();

        return response()->json(true);
    }
}
