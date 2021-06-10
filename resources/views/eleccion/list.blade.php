@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>periodo</td>
                <td>fecha</td>
                <td>fecha apertura</td>
                <td>hora apertura</td>
                <td>fecha cierre</td>
                <td>hora cierre</td>
                <td>observaciones</td>
                <td colspan="2">Que desea hacer</td>
            </tr>
        </thead>
        <tbody>
            @foreach($elecciones as $eleccion)
            <tr>
                <td>{{$eleccion->id}}</td>
                <td>{{$eleccion->periodo}}</td>
                <td>{{$eleccion->fecha}}</td>
                <td>{{$eleccion->fechaapertura}}</td>
                <td>{{$eleccion->horaapertura}}</td>
                <td>{{$eleccion->fechacierre}}</td>
                <td>{{$eleccion->horacierre}}</td>
                <td>{{$eleccion->observaciones}}</td>
                <td><a href="{{ route('eleccion.edit', $eleccion->id)}}" class="btn btn-primary">Editar</a></td>
                <td>
                    <form action="{{ route('eleccion.destroy', $eleccion->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de borrar a este eleccion {{$eleccion->periodo}}')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    @endsection
