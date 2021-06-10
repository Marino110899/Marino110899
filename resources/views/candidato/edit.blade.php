@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Editar Funcionario
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
        <form method="POST" action="{{ route('funcionario.update', $funcionario->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                @csrf
                <label for="id">ID:</label>
                <input type="text" class="form-control" readonly="true" value="{{$funcionario->id}}" name="id" />
            </div>
            <div class="form-group">
                @csrf
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" class="form-control" value="{{$funcionario->nombrecompleto}}" name="nombrecompleto" />
            </div>
            <div class="form-group">
                @csrf
                <label>Sexo:</label>
                <div>
                    @php
                    $selectedM="";
                    $selectedH="";
                    if ($candidato->sexo=='M')
                    $selectedM = " checked ";
                    else
                    $selectedH = " checked ";
                    @endphp

                    Hombre: <input type="radio" name="sexo" id="sexoH" value="H" {{$selectedH}} /><br />
                    Mujer: <input type="radio" name="sexo" id="sexoM" value="M" {{$selectedM}} /><br />
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection