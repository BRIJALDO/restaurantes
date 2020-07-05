@extends('layouts.app')
@section('content')

<div class="container">

    <form action="{{ url('/restaurantes', ['id' => $restaurante->id]) }}" method="post"  class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group">

        <label for="Nombre" class="control-label">{{'Nombre Restaurante'}}</label>

        <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ $restaurante->Nombre }}">

    </div>

    <div class="form-group">

        <label for="Descripcion" class="control-label">{{'Descripcion'}}</label>

        <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="{{ $restaurante->Descripcion }}">

    </div>

    <div class="form-group">

        <label for="Direccion" class="control-label">{{'Direccion'}}</label>

        <input type="text" class="form-control" name="Direccion" id="Direccion" value="{{ $restaurante->Direccion }}">

    </div>

    <div class="form-group">

        <label for="Ciudad" class="control-label">{{'Ciudad'}}</label>

        <input type="text" class="form-control" name="Ciudad" id="Ciudad" value="{{ $restaurante->Ciudad }}">

    </div>


    <div class="form-group">

        <label for="Url" class="control-label">{{'Url'}}</label>

        <input type="text" class="form-control" name="Url" id="Url" value="{{ $restaurante->Url }}">

    </div>


    <div class="form-group">

        <label for="foto" class="control-label"></label>

        <img src="{{ asset('storage').'/'.$restaurante->foto }}" alt="" width="200">

    </div>

    <input type="file" name="foto" id="foto" value="">
    <br/>

    <input type="submit" value="Modificar">
    <a href="{{ url('restaurantes') }}">Regresar</a>

    </form>
</div>

@endsection
