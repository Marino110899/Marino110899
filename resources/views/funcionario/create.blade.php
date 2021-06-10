@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Funcionario
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
        <form method="post" action="{{ route('funcionario.store') }} " enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                @csrf
                <label for="nombrecompleto">Nombre Completo:</label>
                <input type="text" class="form-control" name="nombrecompleto" />
            </div>
            <div class="form-group">
                @csrf
                <label for="nombrecompleto">Sexo:</label>
                <div>
                    Hombre: <input type="radio" name="sexo" id="sexo" value="H" /><br />
                    Mujer: <input type="radio" name="sexo" id="sexo" value="M"/><br />
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection