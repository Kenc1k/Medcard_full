<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKlinikaRequest;
use App\Http\Requests\UpdateKlinikaRequest;
use App\Models\Klinika;

class KlinikaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klinikas = Klinika::paginate(10);
        return view('klinika.index', compact('klinikas'));
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
    public function store(StoreKlinikaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Klinika $klinika)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Klinika $klinika)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKlinikaRequest $request, Klinika $klinika)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klinika $klinika)
    {
        //
    }
}
