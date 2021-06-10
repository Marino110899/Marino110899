@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar eleccion
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
        <form method="post" action="{{ route('eleccion.store') }} " enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                @csrf
                <label for="periodo">periodo:</label>
                <input type="text" class="form-control" name="periodo" />
            </div>
            <div class="form-group">
                @csrf
                <label for="fecha">fecha:</label>
                <input type="date" class="form-control" name="fecha" />
            </div>
            <div class="form-group">
                @csrf
                <label for="fechaapertura">fecha apertura:</label>
                <input type="date" class="form-control" name="fechaapertura" />
            </div>
            <div class="form-group">
                @csrf
                <label for="horaapartura">hora apertura:</label>
                <input type="time" class="form-control" name="horaapertura" />
            </div>
            <div class="form-group">
                @csrf
                <label for="fechacierre">fecha cierre:</label>
                <input type="date" class="form-control" name="fechacierre" />
            </div>
            <div class="form-group">
                @csrf
                <label for="horacierre">hora cierre:</label>
                <input type="time" class="form-control" name="horacierre" />
            </div>
            <div class="form-group">
                @csrf
                <label for="observaciones">observaciones:</label>
                <textarea class="form-control" name="observaciones"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection