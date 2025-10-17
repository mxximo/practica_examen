<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ability = Ability::all();
        return view('ability.index', compact('ability'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ability.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'nullable|string|max:255',
        ]);

        Ability::create($request->all());
        return redirect()->route('ability.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ability $ability)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ability $ability)
    {
        return view('ability.edit', compact('ability'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ability $ability)
    {
        $request->validate([
            'descripcion' => 'nullable|string|max:255',
        ]);

        $ability->update($request->all());
        return redirect()->route('ability.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ability $ability)
    {
        $ability->delete();
        return redirect()->route('ability.index');
    }
}
