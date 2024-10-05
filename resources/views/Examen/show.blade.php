<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detalles del Examen</title>
    <style>
        body {
            background-color: #F8F9FA; /* Fondo uniforme */
            color: black;
        }

        .container {
            margin-top: 2px;
        }

        .card {
            margin-top: 15px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #2c3e50;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .btn-primary {
            background-color: green;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff3d3d;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <h2 class="mb-0">Detalles del Examen</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $examen->nombre }}</h5>
                <p class="card-text">Descripción: {{ $examen->descripcion }}</p>
                <p class="card-text"><small class="text-muted">Creado el: {{ $examen->fecha_creacion }}</small></p>
                <p class="card-text"><small class="text-muted">Actualizado el: {{ $examen->fecha_actualizacion }}</small></p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('examen.edit', $examen->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('examen.destroy', $examen->id) }}" method="POST" class="mb-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        <a href="{{ route('examen.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>