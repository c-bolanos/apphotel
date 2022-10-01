@extends('layout.plantilla') 
@section('contenido')
<div class="row espacios transparencia"> 
    <div class="col-md-9"> 
        <a href="{{url('habitacion/create')}}" class="pull-right">Crear Nueva Habitación  
            <button class="btn btn-outline-success">
                <i class="fa-solid fa-file"></i>
            </button> 
        </a> 
    </div>
</div> 
<div class="row transparencia"> 
    <div class="col-xl-15"> 
        <div class="table-responsive "> 
            <table class="table table-secondary table-hover "> 
                <thead> 
                    <th>Numero Habitacion</th> 
                    <th>Numero Piso</th> 
                    <th>Descripcion Habitación</th> 
                    <th>Tipo Habitacion</th> 
                    <th>Precio día</th> 
                    <th>Estado</th>
                    <th>Opciones</th>                  
                </thead> 
                <tbody> 
                @foreach($habitacion as $hab) 
                    <tr> 
                        <td>{{ $hab->nombre_habitacion }}</td> 
                        <td>{{ $hab->piso_habitacion }}</td> 
                        <td>{{ $hab->descripcion }}</td> 
                        <td>{{ $hab->tipo_habitacion }}</td> 
                        <td>{{ $hab->precio_dia }}</td> 
                        <td>{{ $hab->estado }}</td>
                        <td> 
                            {{--boton actualizar--}}
                            <a href="{{URL::action('App\Http\Controllers\HabitacionController@edit',$hab->id_habitacion)}}">
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a> 
                            {{--boton eliminar--}}                    
                            <a href="" data-target="#modal-delete-{{$hab->id_habitacion}}" data-toggle="modal"> 
                                <button class="btn btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                            </a>
                        </td> 
                    </tr>
                        @include('habitacion.modal') 
                    @endforeach 
                </tbody> 
            </table>
        </div> 
    </div> 
</div> 
@endsection