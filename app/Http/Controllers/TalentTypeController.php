<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTalentTypeRequest;
use App\Http\Requests\UpdateTalentTypeRequest;
use App\Models\TalentType;
use Illuminate\Http\JsonResponse;

/**
 * Class TalentTypeController
 *
 * @package App\Http\Controllers
 */
class TalentTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  CreateTalentTypeRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTalentTypeRequest $request)
    {
        $talentType = new TalentType($request->toArray());

        $talentType->save();

        return response()->json($talentType->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TalentType $talentType
     *
     * @return \Illuminate\Http\Response
     */
    public function show(TalentType $talentType)
    {
        //
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
        $talentType = TalentType::whereId($id)->first();

        return response()->json($talentType->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TalentType $talentType
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(TalentType $talentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateTalentTypeRequest $request
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTalentTypeRequest $request, string $id)
    {
        $talentType = TalentType::whereId($id)->first();

        $talentType->update($request->toArray());

        $talentType->save();

        return response()->json($talentType->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TalentType $talentType
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(TalentType $talentType)
    {
        //
    }
}
