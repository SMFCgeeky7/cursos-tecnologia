<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary mb-4">← Volver a la lista</a>
        <div class="card">
            <img src="/images/{{ $curso['imagen'] }}" class="card-img-top" alt="{{ $curso['nombre'] }}">
            <div class="card-body">
                <h1>{{ $curso['nombre'] }}</h1>
                <p><strong>Instructor:</strong> {{ $curso['instructor'] }}</p>
                <p><strong>Nivel:</strong> {{ $curso['nivel'] }}</p>
                <p><strong>Precio:</strong> ${{ $curso['precio'] }}</p>
                <p><strong>Duración:</strong> {{ $curso['duracion'] }}</p>
                <p>{{ $curso['descripcion'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>