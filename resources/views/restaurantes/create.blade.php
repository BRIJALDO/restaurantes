@extends('layouts.app')
@section('content')

<div class="container">

    <form action="{{url('/restaurantes')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">

        <label for="Nombre" class="control-label">{{'Nombre Restaurante'}}</label>

        <input type="text" class="form-control" name="Nombre" id="Nombre" value="">
    </div>

    
    <div class="form-group">

        <label for="Descripcion" class="control-label">{{'Descripcion'}}</label>

        <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="">

    </div>


    <div class="form-group">

        <label for="Direccion" class="control-label">{{'Direccion'}}</label>

        <input type="text" class="form-control" name="Direccion" id="Direccion" value="">

    </div>

    <div class="form-group">

        <label for="Ciudad" class="control-label">{{'Ciudad'}}</label>

        <input type="text"  class="form-control" name="Ciudad" id="Ciudad" value="">

    </div>

    <div class="form-group">

        <label for="Url" class="control-label" >{{'Url'}}</label>

        <input type="text" class="form-control" name="Url" id="Url" value="">

    </div>

    <div class="form-group">

        <label for="foto" class="control-label">{{'foto'}}</label>

        <input type="file" class="form-control" name="foto" id="foto" value="">
    
    </div>    
    

    <input type="submit" value="Agregar">

    <a href="{{ url('restaurantes') }}">Regresar</a>

    </form>

</div>

@endsection