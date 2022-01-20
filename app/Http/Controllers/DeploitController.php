<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeploitRequest;
use App\Http\Requests\UpdateDeploitRequest;
use App\Models\Deploit;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
        return view('deploit.index', compact('deploits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        return view('deploit.create',['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeploitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeploitRequest $request)
    {
        Deploit::create($request->all());
        return redirect()->route('deploit.index')->with('success','Deploit created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deploit = Deploit::findOrFail($id);
        return view('deploit.show',compact('deploit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deploit = Deploit::findOrFail($id);
        return view('deploit.edit',compact('deploit'));
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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deploit  $deploit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deploit::destroy($id);
        return redirect()->route('deploit.index')->with('success','Deploit '.$id.' deleted successfully');
    }
}
