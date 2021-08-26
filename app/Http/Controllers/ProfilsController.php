<?php

namespace App\Http\Controllers;

use App\Models\Profils;
use Illuminate\Http\Request;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profils::all();
        return view('profils.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profils = Profils::all();
        return view('profils.create', compact('profils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Profils;
        $store->name = $request->name;
        $store->age = $request->age;
        $store->phone = $request->phone;
        $store->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profils  $profils
     * @return \Illuminate\Http\Response
     */
    public function show(Profils $profils)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profils  $profils
     * @return \Illuminate\Http\Response
     */
    public function edit(Profils $profils)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profils  $profils
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profils $profils)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profils  $profils
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $store = Profils::find($id);
    $store->delete();
    return redirect('/');
    }
}
