<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CharacterInstance;
use App\Models\Encounter;
use Illuminate\Http\JsonResponse;

/**
 * Class CharacterInstanceController
 *
 * @package App\Http\Controllers
 */
class CharacterInstanceController extends Controller
{

    /**
     * Create a new Character Instance from a Character for an Encounter by Id
     *
     * @param int $characterId
     * @param int $encounterId
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $characterId, int $encounterId)
    {
        $character = Character::whereId($characterId)->first();
        $encounter = Encounter::whereId($encounterId)->first();

        $characterInstance = CharacterInstance::createFrom($character, $encounter);

        return response()->json($characterInstance->toArray(), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param int $characterInstanceId
     *
     * @return \Illuminate\Http\Response
     */
    public function get(int $characterInstanceId)
    {
        $characterInstance = CharacterInstance::whereId($characterInstanceId);

        return response()->json($characterInstance->toArray());
    }

    /**
     * Move a Character Instance from one Encounter to a different Encounter
     *
     * @param int $characterInstanceId
     * @param int $encounterId
     *
     * @return \Illuminate\Http\Response
     */
    public function move(int $characterInstanceId, int $encounterId)
    {
        $characterInstance = CharacterInstance::whereId($characterInstanceId);
        $encounter = Encounter::whereId($encounterId);

        $characterInstance->encounter_id = $encounter->id;

        $characterInstance->save();

        return response()->json($characterInstance->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $characterInstanceId
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $characterInstanceId)
    {
        $characterInstance = CharacterInstance::whereId($characterInstanceId);

        $characterInstance->delete();

        return response()->json([], JsonResponse::HTTP_NO_CONTENT);
    }
}
