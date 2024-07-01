<?php

namespace App\Http\Controllers;

use App\Http\Requests\StammdatenTypRequest;
use App\Http\Resources\StammdatenTypResource;
use App\Models\StammdatenTyp;

class StammdatenTypController extends Controller
{
    public function index()
    {
        return StammdatenTypResource::collection(StammdatenTyp::all());
    }

    public function store(StammdatenTypRequest $request)
    {
        return new StammdatenTypResource(StammdatenTyp::create($request->validated()));
    }

    public function show(StammdatenTyp $stammdatenTyp)
    {
        return new StammdatenTypResource($stammdatenTyp);
    }

    public function update(StammdatenTypRequest $request, StammdatenTyp $stammdatenTyp)
    {
        $stammdatenTyp->update($request->validated());

        return new StammdatenTypResource($stammdatenTyp);
    }

    public function destroy(StammdatenTyp $stammdatenTyp)
    {
        $stammdatenTyp->delete();

        return response()->json();
    }
}
