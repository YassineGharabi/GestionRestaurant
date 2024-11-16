<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('Categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $photo = $request->file('photo')->store('categories','public');
        Categorie::create([
            'title' => $title,
            'photo' => $photo,
        ]);
        return redirect()->route('categorie.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('Categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
            //get data

            if($request->hasfile('photo')){
                $photo = $request->file('photo')->store('categories','public');
            }else{
                $photo = $categorie->photo;
            }
            
            $data = [
                'title'=>$request->title,
                'photo'=>$photo,
            ];
            
            //update the data
            
            $categorie->fill($data)->save();
            return redirect()->route('categorie.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index');
    }
}
