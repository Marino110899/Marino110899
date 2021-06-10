@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Editar funcionario
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
        <form method="POST" action="{{ route('imeiautorizado.update', $imeiautorizado->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                @csrf
                <label for="id">ID:</label>
                <input type="text" class="form-control" readonly="true" value="{{$imeiautorizado->id}}" name="id" />
            </div>
            <div class="form-group">
                @csrf
                <label for="imei">Imei:</label>
                <input type="text" class="form-control" value="{{$imeiautorizado->imei}}" name="imei" />
            </div>
            <div class="form-group">
                @csrf
                <label for="funcionario_id">Funcionario:</label>
                <select id="funcionario_id" class="form-control" value="{{$imeiautorizado->funcionario_id}}" name="funcionario_id" >
                    @foreach ($funcionarios as $funcionario)
                        @if ($imeiautorizado->funcionario_id==$funcionario->id)
                            <option value="{{$funcionario->id}}" selected>{{$funcionario->nombrecompleto}}</option>
                        @else
                            <option value="{{$funcionario->id}}">{{$funcionario->nombrecompleto}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="eleccion_id">Eleccion:</label>
                <select id="eleccion_id" class="form-control" value="{{$imeiautorizado->eleccion_id}}" name="eleccion_id" >
                    @foreach ($elecciones as $eleccion)
                        @if ($imeiautorizado->eleccion_id==$eleccion->id)
                            <option value="{{$eleccion->id}}" selected>{{$eleccion->periodo}}</option>
                        @else
                            <option value="{{$eleccion->id}}">{{$eleccion->periodo}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="casilla_id">Casilla:</label>
                <select id="casilla_id" class="form-control" value="{{$imeiautorizado->casilla_id}}" name="casilla_id" >
                    @foreach ($casillas as $casilla)
                        @if ($imeiautorizado->casilla_id==$casilla->id)
                            <option value="{{$casilla->id}}" selected>{{$casilla->ubicacion}}</option>
                        @else
                            <option value="{{$casilla->id}}">{{$casilla->ubicacion}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection