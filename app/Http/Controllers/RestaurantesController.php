<?php

namespace App\Http\Controllers;

use App\Restaurantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['restaurantes'] = Restaurantes::paginate(5);

        return view('restaurantes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('restaurantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $datosRestaurante=request()->except('_token');

        if($request->hasFile('foto')){

            $datosRestaurante['foto']=$request->file('foto')->store('uploads', 'public');
        }

        Restaurantes::insert($datosRestaurante);

        return redirect ('restaurantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurantes $restaurantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $restaurante = Restaurantes::findOrFail($id);

        return view('restaurantes.edit',compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosRestaurante=request()->except(['_token','_method']);

        if($request->hasFile('foto')){

            $restaurante = Restaurantes::findOrFail($id);

            Storage::delete('public/'.$restaurante->foto);

            $datosRestaurante['foto']=$request->file('foto')->store('uploads', 'public');
        }

        Restaurantes::where('id','=',$id)->update($datosRestaurante);

        $restaurante = Restaurantes::findOrFail($id);
        return view('restaurantes.edit',compact('restaurante'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $restaurante = Restaurantes::findOrFail($id);
        if(Storage::delete('public/'.$restaurante->foto)){
            Restaurantes::destroy($id);
        }
        
        return redirect ('restaurantes');

    }
}
