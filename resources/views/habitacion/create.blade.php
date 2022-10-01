@extends('layout.plantilla') 
@section('contenido') 
<div class="general">
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Ingresar Habitacion</h3> @if (count($errors)>0) 
            <div class="alert alert-danger"> 
                <ul> @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li> 
                    @endforeach 
                </ul> 
            </div> 
            @endif 
        </div> 
    
    </div> {!!Form::open(array('url'=>'habitacion','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}} 
            <div class="row"> 
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
                    <div class="form-group"> 
                        <label for="nombre_habitacion">Numero de Habitación</label> 
                        <input type="text" name="nombre_habitacion" id="nombre_habitacion" class="form-control" placeholder="Digite el número de la Habitación"> 
                    </div> 
                </div> 
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
                    <div class="form-group"> 
                        <label for="piso_habitacion">Piso de Habitación</label>
                        <input type="text" name="piso_habitacion" id="piso_habitacion" class="form-control" placeholder="Ingrese el numero del Piso donde esta hubicada la Habitación"> 
                    </div> 
                </div> 
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
                    <div class="form-group"> 
                        <label for="descripcion">Descripción</label> 
                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="ingrese la descripcion de la habitación"> 
                    </div> 
                </div> 
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
                    <div class="form-group"> 
                        <label for="tipo_habitacion">Tipo de Habitación</label> 
                        <input type="text" name="tipo_habitacion" id="tipo_habitacion" class="form-control" placeholder="Ingrese el tipo de la Habitación"> 
                    </div> 
                </div> 
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
                        <div class="form-group"> 
                            <label for="precio_dia">Precio</label> 
                            <input type="number" name="precio_dia" id="precio_dia" class="form-control" placeholder="Ingrese el precio por día de la Habitación"> 
                        </div> 
                </div> 
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
                        <div class="form-group"> 
                            <label for="estado">Estado</label> 
                            <input type="text" name="estado" id="estado" class="form-control" placeholder="Ingrese el estado de la Habitación"> 
                        </div>  
                </div>  
                <div> 
                        <div class="form-group"> 
                            <br> 
                            <button class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-ok"></span>Guardar
                            </button> 
                            <button class="btn btn-danger" type="reset">
                                <span class="glyphicon glyphicon-remove"></span> Vaciar Campos
                            </button> 
                            <a class="btn btn-info" type="reset" href="{{url('habitacion')}}"> 
                                <span class="glyphicon glyphicon-home"></span> Regresar 
                            </a> 
                        </div>
                </div>       
            </div>      
    
</div>   
{!!Form::close()!!} 
@endsection