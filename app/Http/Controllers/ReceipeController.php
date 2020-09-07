<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Receipe::all();
       return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $validatedData = request()->validate([
            'name'        => 'required',
            'ingredients' => 'required',
            'category'    => 'required',
        ]);

        // $receipe = new Receipe();

        // $receipe->name = request()->name;
        // $receipe->ingredients = request()->ingredients;
        // $receipe->category = request()->category;

        // $receipe->save();

        // Receipe::create([
        //     'name'        => request()->name,
        //     'ingredients' => request()->ingredients,
        //     'category'    => request()->category,
        // ]);

        Receipe::create($validatedData);
        // $receipe->update($validateData);

        return redirect('receipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        return view('show',compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        return view('edit',compact('receipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
        $validatedData = request()->validate([
            'name'        => 'required',
            'ingredients' => 'required',
            'category'    => 'required',
        ]);

        // dd($receipe);
        // $receipe = Receipe::find($receipe->id);
        // $receipe->name = request()->name;
        // $receipe->ingredients =  uest()->category;

        // $receipe->save();
        $receipe->update(request()->all());

        return redirect('receipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
       $receipe->delete();
       return redirect('receipe'); 
    }
}
