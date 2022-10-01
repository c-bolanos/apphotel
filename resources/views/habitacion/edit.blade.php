@extends('layout.plantilla') 
@section ('contenido') 
<head>
    <link rel="stylesheet" href="{{ asset('dist/css/estilos.css') }}">
</head>
<div class="general">
    <div class="row edit"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Editar Habitacion</h3> 
            @if (count($errors)>0) 
            <div class="alert alert-danger"> 
                <ul> 
                    @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li> 
                    @endforeach 
                </ul> 
            </div> 
            @endif 
        </div> 
    </div> 
    {{Form::open(array('action'=>array('App\Http\Controllers\HabitacionController@update', $habitacion->id_habitacion),'method'=>'patch'))}} 
    <div class="row"> 
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
                <label for="nhabitacion">Numero Habitacion</label>
                <input type="text" name="nombre_habitacion" id="nombre_habitacion" class="form-control" value="{{$habitacion->nombre_habitacion}}"> 
            </div> 
        </div> 
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
                <label for="pisoh">Numero Piso</label> 
                <input type="text" name="piso_habitacion" id="piso_habitacion" class="form-control" value="{{$habitacion->piso_habitacion}}"> 
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
                <label for="hdescripcion">Descripción</label> 
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$habitacion->descripcion}}"> 
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
                <label for="thabitacion">Tipo Habitación</label> 
                <input type="text" name="tipo_habitacion" id="tipo_habitacion" class="form-control" value="{{$habitacion->tipo_habitacion}}"> 
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
                <label for="pdia">Precio Día</label> 
                <input type="number" name="precio_dia" id="precio_dia" class="form-control" value="{{$habitacion->precio_dia}}"> 
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
                <label for="estadoh">Estado</label> 
                <input type="text" name="estado" id="estado" class="form-control" value="{{$habitacion->estado}}"> 
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <div class="form-group"> 
                <button class="btn btn-outline-success" type="submit">
                    <span class="glyphicon glyphicon-refresh"></span><i class="fa-solid fa-floppy-disk"></i> Actualizar 
                </button> 
                <a class="btn btn-outline-info" type="reset" href="{{url('habitacion')}}">
                    <span class="glyphicon glyphicon-home"></span><i class="fa-solid fa-rotate-left"></i> Regresar 
                </a> 
            </div> 
        </div> 
    </div>
</div> 
{!!Form::close()!!} 
@endsection
    