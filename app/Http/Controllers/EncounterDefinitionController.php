<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEncounterDefinitionRequest;
use App\Http\Requests\UpdateEncounterDefinitionRequest;
use App\Models\EncounterDefinition;

class EncounterDefinitionController extends Controller
{

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
     * @param $id
     * @param \App\Http\Requests\CreateEncounterDefinitionRequest|\Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store($id, CreateEncounterDefinitionRequest $request)
    {
        $encounterDefinition = new EncounterDefinition($request->toArray());

        $encounterDefinition->encounter_type_id = (int) $id;

        $encounterDefinition->save();

        return response()->json($encounterDefinition->toArray(), 201);
    }

    /**
     * Return the specified resource.
     *
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $encounterDefinition = EncounterDefinition::whereId($id)->first();

        return response()->json($encounterDefinition->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $encounterDefinitionId
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($encounterDefinitionId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateEncounterDefinitionRequest|\Illuminate\Http\Request $request
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEncounterDefinitionRequest $request, $id)
    {
        $encounterDefinition = EncounterDefinition::whereId($id)->first();

        $encounterDefinition->update($request->toArray());

        $encounterDefinition->save();

        return response()->json($encounterDefinition->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encounterDefinition = EncounterDefinition::whereId($id)->first();

        $encounterDefinition->delete();

        return response()->json(true);
    }
}
