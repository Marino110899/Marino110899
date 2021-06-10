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
                <td>foto</td>
                <td>perfil</td>
                <td colspan="2">Que desea hacer</td>
            </tr>
        </thead>
        <tbody>
            @foreach($candidatos as $candidato)
            <tr>
                <td>{{$candidato->id}}</td>
                <td>{{$candidato->nombrecompleto}}</td>
                <td>{{$candidato->sexo}}</td>
                <td><img src="{{ asset('/uploads/'.$candidato->foto) }}" width="80" height="80" alt="aqui va la foto"></td>
                <td><a href="{{ asset('/uploads/'.$candidato->perfil) }}"><img src="{{ asset('imgs/pdf.png') }}" width="60" height="60"></a></i></td>
                <td><a href="{{ route('candidato.edit', $candidato->id)}}" class="btn btn-primary">Editar</a></td>
                <td>
                    <form action="{{ route('candidato.destroy', $candidato->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de borrar a este candidato {{$candidato->ubicacion}}')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    @endsection
