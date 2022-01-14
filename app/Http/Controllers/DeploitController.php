<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeploitRequest;
use App\Http\Requests\UpdateDeploitRequest;
use App\Models\Deploit;

class DeploitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deploits = Deploit::all();
        return view('deploit.index', $deploits);
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
     * @param  \App\Http\Requests\StoreDeploitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeploitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function show(Deploit $deploit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function edit(Deploit $deploit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeploitRequest  $request
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeploitRequest $request, Deploit $deploit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deploit $deploit)
    {
        //
    }
}
