<?php

namespace App\Http\Controllers;

use App\Models\keranjangs;
use App\Http\Requests\StorekeranjangsRequest;
use App\Http\Requests\UpdatekeranjangsRequest;
use App\Http\Resources\KeranjangsResource;

class KeranjangsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjang = keranjangs::all();
        return KeranjangsResource::collection($keranjang);
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
    public function store(StorekeranjangsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(keranjangs $keranjangs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(keranjangs $keranjangs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekeranjangsRequest $request, keranjangs $keranjangs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(keranjangs $keranjangs)
    {
        //
    }
}
