@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Candidato
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
        <form method="post" action="{{ route('candidato.store') }} " enctype="multipart/form-data">
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
            <div class="form-group">
                @csrf
                <label for="foto">Foto:</label>
                <img id="preview" width="80" height="80" alt="aqui va la imagen" />
                <input type="file" id="foto" class="form-control" accept="image/png" name="foto" />
            </div>
            <div class="form-group">
                @csrf
                <label for="perfil">Perfil:</label>
                <input type="file" class="form-control" accept="application/pdf" name="perfil" />
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        $("#foto").change(function() {
        // Código a ejecutar cuando se detecta un cambio de archivO
        readImage(this,'preview');
    });
    </script>
@endsection