<?php

namespace App\Http\Controllers;

use App\Models\pesanans;
use App\Http\Requests\StorepesanansRequest;
use App\Http\Requests\UpdatepesanansRequest;
use App\Http\Resources\PesanansResource;

class PesanansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = pesanans::all();
        return PesanansResource::collection($pesanan);
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
    public function store(StorepesanansRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pesanans $pesanans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesanans $pesanans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepesanansRequest $request, pesanans $pesanans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pesanans $pesanans)
    {
        //
    }
}
