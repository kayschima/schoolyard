<?php

namespace App\Http\Controllers;

use App\Http\Requests\StammdatumRequest;
use App\Http\Resources\StammdatumResource;
use App\Models\Stammdatum;

class StammdatumController extends Controller
{
    public function index()
    {
        return StammdatumResource::collection(Stammdatum::all());
    }

    public function store(StammdatumRequest $request)
    {
        return new StammdatumResource(Stammdatum::create($request->validated()));
    }

    public function show(Stammdatum $stammdatum)
    {
        return new StammdatumResource($stammdatum);
    }

    public function update(StammdatumRequest $request, Stammdatum $stammdatum)
    {
        $stammdatum->update($request->validated());

        return new StammdatumResource($stammdatum);
    }

    public function destroy(Stammdatum $stammdatum)
    {
        $stammdatum->delete();

        return response()->json();
    }
}
