<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use App\Http\Requests\StoreVinylRequest;
use App\Http\Requests\UpdateVinylRequest;

class VinylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVinylRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVinylRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function show(Vinyl $vinyl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinyl $vinyl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVinylRequest  $request
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVinylRequest $request, Vinyl $vinyl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinyl $vinyl)
    {
        //
    }
}
