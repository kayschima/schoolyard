<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonenTypRequest;
use App\Http\Resources\PersonenTypResource;
use App\Models\PersonenTyp;

class PersonenTypController extends Controller
{
    public function index()
    {
        return PersonenTypResource::collection(PersonenTyp::all());
    }

    public function store(PersonenTypRequest $request)
    {
        return new PersonenTypResource(PersonenTyp::create($request->validated()));
    }

    public function show(PersonenTyp $personenTyp)
    {
        return new PersonenTypResource($personenTyp);
    }

    public function update(PersonenTypRequest $request, PersonenTyp $personenTyp)
    {
        $personenTyp->update($request->validated());

        return new PersonenTypResource($personenTyp);
    }

    public function destroy(PersonenTyp $personenTyp)
    {
        $personenTyp->delete();

        return response()->json();
    }
}
