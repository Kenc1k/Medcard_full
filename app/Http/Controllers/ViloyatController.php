<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreViloyatRequest;
use App\Http\Requests\UpdateViloyatRequest;
use App\Models\Viloyat;

class ViloyatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viloyatlar = Viloyat::paginate(10);
        return view('viloyatlar.index' , compact('viloyatlar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreViloyatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Viloyat $viloyat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viloyat $viloyat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateViloyatRequest $request, Viloyat $viloyat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viloyat $viloyat)
    {
        //
    }
}
