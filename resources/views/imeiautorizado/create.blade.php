@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Añadir imeiautorizado
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
        <form method="POST" action="{{ route('imeiautorizado.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                @csrf
                <label for="imei">Imei:</label>
                <input type="text" class="form-control" maxlength="20" name="imei" />
            </div>
            <div class="form-group">
                @csrf
                <label for="funcionario_id">Funcionario:</label>
                <select id="funcionario_id" class="form-control" name="funcionario_id" >
                    @foreach ($funcionarios as $funcionario)
                            <option value="{{$funcionario->id}}">{{$funcionario->nombrecompleto}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="eleccion_id">Eleccion:</label>
                <select id="eleccion_id" class="form-control" name="eleccion_id" >
                    @foreach ($elecciones as $eleccion)
                            <option value="{{$eleccion->id}}">{{$eleccion->periodo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="casilla_id">Casilla:</label>
                <select id="casilla_id" class="form-control" name="casilla_id" >
                    @foreach ($casillas as $casilla)
                            <option value="{{$casilla->id}}">{{$casilla->ubicacion}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection