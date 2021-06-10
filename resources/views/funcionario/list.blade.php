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
                <td>nombrecompleto</td>
                <td>sexo</td>
                <td colspan="2">Que desea hacer</td>
            </tr>
        </thead>
        <tbody>
            @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{$funcionario->id}}</td>
                <td>{{$funcionario->nombrecompleto}}</td>
                <td>{{$funcionario->sexo}}</td>
                <td><a href="{{ route('funcionario.edit', $funcionario->id)}}" class="btn btn-primary">Editar</a></td>
                <td>
                    <form action="{{ route('funcionario.destroy', $funcionario->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de borrar a este funcionario {{$funcionario->ubicacion}}')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    @endsection
