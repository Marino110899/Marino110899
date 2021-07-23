@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Registro de Votos
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('voto.store') }} " enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                @csrf
                <label for="casilla_id">Casilla:</label>
                <select id="casilla_id" class="form-control" name="casilla_id">
                    @foreach ($casillas as $casilla)
                        <option value="{{$casilla->id}}">{{$casilla->ubicacion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <table class="table">
                    <thead></thead>
                   <tbody>
                        @foreach ($candidatos as $candidato)
                            <tr>
                                <td><img src="{{ asset('/uploads/'.$candidato->foto) }}" width="80" height="80" alt="aqui va la foto"></td>
                                    <td>{{$candidato->nombrecompleto}}</td>
                                    <td>
                                        <input type="text" class="form-control" name="candidato_{{$candidato->id}}" maxlength="5"/>
                                </td>
                            </tr>
                        @endforeach    
                   </tbody> 
                </table>
            </div>
            <div class="form-group">
                <label for="acta">Acta:</label>
                <input type="file" class="form-control" id="acta" name="acta"/>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection