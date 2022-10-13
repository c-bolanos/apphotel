<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\HabitacionFormRequest;

class HabitacionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        

        $habitacion=Habitacion::orderBy('id_habitacion','DESC')->paginate(3);
        return view('habitacion.index',compact('habitacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('habitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabitacionFormRequest $request)
    {
        $habitaciones=new Habitacion;
        $habitaciones->nombre_habitacion=$request->get('nombre_habitacion'); 
        $habitaciones->piso_habitacion=$request->get('piso_habitacion'); 
        $habitaciones->descripcion=$request->get('descripcion'); 
        $habitaciones->tipo_habitacion=$request->get('tipo_habitacion'); 
        $habitaciones->precio_dia=$request->get('precio_dia');
        $habitaciones->estado=$request->get('estado');

        $habitaciones->save(); return Redirect::to('habitacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_habitacion) { 
        $habitacion=Habitacion::findOrFail($id_habitacion);
        return view("habitacion.edit",["habitacion"=>$habitacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_habitacion)
    {
        $habitaciones= Habitacion::findOrFail($id_habitacion);
        $habitaciones->nombre_habitacion=$request->get('nombre_habitacion'); 
        $habitaciones->piso_habitacion=$request->get('piso_habitacion'); 
        $habitaciones->descripcion=$request->get('descripcion'); 
        $habitaciones->tipo_habitacion=$request->get('tipo_habitacion'); 
        $habitaciones->precio_dia=$request->get('precio_dia');
        $habitaciones->estado=$request->get('estado');

        $habitaciones->update(); 
        return Redirect::to('habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_habitacion)
    {
        $habitaciones=Habitacion::findOrFail($id_habitacion);
        $habitaciones->delete(); 
        return Redirect::to('habitacion');
    }
}
