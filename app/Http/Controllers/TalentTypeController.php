<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTalentTypeRequest;
use App\Models\TalentType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\TalentType $talentType
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TalentType $talentType)
    {
        //
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
