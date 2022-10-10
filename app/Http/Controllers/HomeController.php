<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


        $request->user()->authorizeRoles('user');
        $habitacion=Habitacion::orderBy('id_habitacion','DESC')->paginate(3);
        return view('habitacion.index',compact('habitacion'));
       
       
        // return view('habitacion.index');
    }
}
