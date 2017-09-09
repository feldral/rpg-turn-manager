<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use Illuminate\Http\JsonResponse;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo character search endpoint
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo show form for creating a character
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCharacterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCharacterRequest $request)
    {
        $character = new Character($request->toArray());

        $character->save();

        return response()->json($character->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        //todo create view to see character
    }

    /**
     * @param Character $character
     * @return \Illuminate\Http\Response
     */
    public function get(Character $character)
    {
        return response()->json($character->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //todo create a view to edit a character
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCharacterRequest  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $character->update($request->toArray());

        $character->save();

        return response()->json($character->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return response()->json(true);
    }
}
