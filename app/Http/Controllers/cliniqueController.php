<?php

namespace App\Http\Controllers;
use App\models\data;
use App\Http\Requests\DataRequest;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class cliniqueController extends Controller
{
   
    public function index()
    {        
        return view('clinique');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DataRequest $request)
    {
        //stoquer les donnees dans la base de donnee
        $clinique = new Data;

        $validated = $request->validated();
         
        $clinique -> title = $request->title;
        $clinique -> slug = $request->slug;
        $clinique -> description = $request->description;
        $clinique -> page = $request->page;
        $clinique ->save();
        //dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
