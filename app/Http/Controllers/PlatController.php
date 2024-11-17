<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plats = Plat::all();
        return view('Plat.index',compact('plats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Plat.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $categorieid = $request->categorie_id;
        $intitule = $request->intitule;
        $description = $request->description;
        $prix = $request->prix;
        $photo = $request->file('photo')->store('plats','public');

        Plat::create([
            'categorie_id' => $categorieid,
            'intitule' => $intitule,
            'description' => $description,
            'prix' => $prix,
            'photo' => $photo,
        ]);

        return redirect()->route('plat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plat $plat)
    {
        return view('Plat.edit',compact('plat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plat $plat)
    {   

        if($request->hasFile('photo')){
            $photo = $request->file('photo')->store('plats','public');
        }else{
            $photo = $plat->photo;
        }
        
        $data = [
            'categorie_id' => $request->categorie_id,
            'intitule' => $request->intitule,
            'description' => $request->description,
            'prix' => $request->prix,
            'photo' => $photo,
        ];

        $plat->fill($data)->save();

        return redirect()->route('plat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plat $plat)
    {
        $plat->delete();
        return redirect()->route('plat.index');
    }
}
