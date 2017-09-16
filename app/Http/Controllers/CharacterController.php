<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use Illuminate\Http\JsonResponse;

/**
 * Class CharacterController
 *
 * @package App\Http\Controllers
 */
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
        return response()->json(['error'=>'incomplete endpoint'], JsonResponse::HTTP_IM_USED);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo show form for creating a character
        return response()->json(['error'=>'incomplete endpoint']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCharacterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCharacterRequest $request)
    {
        $user = \Auth::user();

        if (!$user){
            //todo redirect
        }

        $character = new Character($request->toArray());

        $character->owner_id = $user->id;

        $character->save();

        return response()->json($character->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $character = Character::whereId($id);
        //todo create view to see character
        return response()->json(['error'=>'incomplete endpoint', 'character'=>$character->toArray()], JsonResponse::HTTP_IM_USED);
    }

    /**
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function get(string $id)
    {
        $character = Character::whereId($id);

        return response()->json($character->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $character = Character::whereId($id);
        //todo create a view to edit a character
        return response()->json(['error'=>'incomplete endpoint', 'character'=>$character->toArray()], JsonResponse::HTTP_IM_USED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCharacterRequest  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, string $id)
    {
        $character = Character::whereId($id);

        $character->update($request->toArray());

        $character->save();

        return response()->json($character->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $character = Character::whereId($id);

        $character->delete();

        return response()->json();
    }
}
