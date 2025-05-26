<!DOCTYPE html>
<html>
<head>
    <title>Cursos de Tecnología</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1 class="mb-4">Lista de Cursos</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($cursos as $curso)
                <div class="col">
                    <div class="card h-100">
                        <img src="/images/{{ $curso['imagen'] }}" class="card-img-top" alt="{{ $curso['nombre'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $curso['nombre'] }}</h5>
                            <p class="card-text">{{ $curso['descripcion'] }}</p>
                            <a href="{{ route('cursos.show', $curso['id']) }}" class="btn btn-primary">Ver detalle</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>