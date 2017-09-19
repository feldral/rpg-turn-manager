<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;

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
        $user = \Auth::user();

        if ( ! $user) {
            //todo redirect
        }

        $characters = Character::whereOwnerId($user->id)->get();

        return response()->json($characters->toArray());
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $user = \Auth::user();

        if ( ! $user) {
            //todo redirect
        }

        $characters = Character::whereOwnerId($user->id)->get();

        return response()->json($characters->toArray());
    }

    public function search()
    {
        $query = Input::get('q');
        $sort  = Input::get('sort');
        $limit = Input::get('limit');
        $page  = Input::get('page');

        $characters = Character::whereName($query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo show form for creating a character
        return response()->json(['error' => 'incomplete endpoint']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCharacterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCharacterRequest $request)
    {
        $user = \Auth::user();

        if ( ! $user) {
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
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $character = Character::whereId($id)->first();

        //todo create view to see character
        return response()->json(['error' => 'incomplete endpoint', 'character' => $character->toArray()]);
    }

    /**
     * Return a Chararacter
     *
     * @param string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function get(string $id)
    {
        $character = Character::whereId($id)->first();

        return response()->json($character->toArray());
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
        $user = \Auth::user();

        if ( ! $user) {
            //todo redirect
        }

        $character = Character::whereId($id)->first();

        if ($user->id != $character->owner_id) {
            return response()->json(['error' => 'not allowed'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        //todo create a view to edit a character
        return response()->json(['error' => 'incomplete endpoint', 'character' => $character->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCharacterRequest $request
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, string $id)
    {
        $user = \Auth::user();

        if ( ! $user) {
            //todo redirect
        }

        $character = Character::whereId($id)->first();

        if ($user->id != $character->owner_id) {
            return response()->json([], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $character->update($request->toArray());

        $character->save();

        return response()->json($character->toArray());
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
        $user = \Auth::user();

        if ( ! $user) {
            //todo redirect
        }

        $character = Character::whereId($id)->first();

        if ($user->id != $character->owner_id) {
            return response()->json([], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $character->delete();

        return response()->json();
    }
}
