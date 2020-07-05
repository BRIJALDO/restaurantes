@extends('layouts.app')
@section('content')

<div class="container">

    <a href="{{ url('restaurantes/create') }}" class="btn btn-success">Agregar Restaurante</a>
    <br/>
    <br/>

    <table class="table table-light">
        <thead class="table thead-light table-hover">
            <tr>

                <th>Nombre Restaurante</th>
                <th>Descripcion</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Url</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($restaurantes as $restaurante)
            <tr>

                <td>{{ $restaurante->Nombre }}</td>
                <td>{{ $restaurante->Descripcion }}</td>
                <td>{{ $restaurante->Direccion }}</td>
                <td>{{ $restaurante->Ciudad }}</td>
                <td>{{ $restaurante->Url }}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$restaurante->foto }}" class="img-thumbnail img-fluid" alt="" width="100">


                </td>
                <td>

                <a class="btn btn-warning" href="{{ url('/restaurantes/'.$restaurante->id.'/edit')}}">
                Editar
                </a>    

                <form action="{{ url('/restaurantes', ['id' => $restaurante->id]) }}" style="display:inline" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar?');">Borrar</button>

                </form>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>
@endsection