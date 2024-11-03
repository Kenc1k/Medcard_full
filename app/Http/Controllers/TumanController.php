<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTumanRequest;
use App\Http\Requests\UpdateTumanRequest;
use App\Models\Tuman;

class TumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tumanlar = Tuman::paginate(10);
        return view('tumanlar.index', compact('tumanlar'));
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
    public function store(StoreTumanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuman $tuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuman $tuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTumanRequest $request, Tuman $tuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuman $tuman)
    {
        //
    }
}
