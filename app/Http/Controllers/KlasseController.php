<?php

namespace App\Http\Controllers;

use App\Http\Requests\KlasseRequest;
use App\Http\Resources\KlasseResource;
use App\Models\Klasse;

class KlasseController extends Controller
{
    public function index()
    {
        return KlasseResource::collection(Klasse::all());
    }

    public function store(KlasseRequest $request)
    {
        return new KlasseResource(Klasse::create($request->validated()));
    }

    public function show(Klasse $klasse)
    {
        return new KlasseResource($klasse);
    }

    public function update(KlasseRequest $request, Klasse $klasse)
    {
        $klasse->update($request->validated());

        return new KlasseResource($klasse);
    }

    public function destroy(Klasse $klasse)
    {
        $klasse->delete();

        return response()->json();
    }
}
