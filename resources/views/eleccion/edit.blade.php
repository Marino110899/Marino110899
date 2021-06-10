@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Editar Eleccion
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
        <form method="POST" action="{{ route('eleccion.update', $eleccion->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                @csrf
                <label for="id">ID:</label>
                <input type="text" class="form-control" readonly="true" value="{{$eleccion->id}}" name="id" />
            </div>
            <div class="form-group">
                @csrf
                <label for="periodo">periodo:</label>
                <input type="text" id="name" class="form-control" value="{{$eleccion->periodo}}" name="periodo" />
            </div>
            <div class="form-group">
                @csrf
                <label for="fecha">fecha:</label>
                <input type="date" id="fecha" class="form-control" value="{{ $eleccion->fecha->format('Y-m-d') }}" name="fecha" />
            </div>
            <div class="form-group">
                @csrf
                <label for="fechaapertura">fecha apertura:</label>
                <input type="date" id="fechaapertura" class="form-control" value="{{ $eleccion->fechaapertura->format('Y-m-d') }}" name="fechaapertura" />
            </div>
            <div class="form-group">
                @csrf
                <label for="horaapertura">hora apertura:</label>
                <input type="time" id="horaapertura" class="form-control" value="{{ $eleccion->horaapertura->format('H:i') }}" name="horaapertura" />
            </div>
            <div class="form-group">
                @csrf
                <label for="fechacierre">fecha cierre:</label>
                <input type="date" id="fechacierre" class="form-control" value="{{ $eleccion->fechacierre->format('Y-m-d') }}" name="fechacierre" />
            </div>
            <div class="form-group">
                @csrf
                <label for="horacierre">hora cierre:</label>
                <input type="time" id="horacierre" class="form-control" value="{{ $eleccion->horacierre->format('H:i') }}" name="horacierre" />
            </div>
            <div class="form-group">
                @csrf
                <label for="observaciones">observaciones:</label>
                <textarea id="observaciones" class="form-control" name="observaciones">{{$eleccion->observaciones}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection