<!DOCTYPE html>
<html lang="es"> <!-- Cambiado a 'es' para el idioma español -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Exámenes</title>
    <style>
        body {
            background-color: #F8F9FA; /* Fondo uniforme */
            color: black;
        }

        .container {
            margin-top: 2rem;
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

        .btn-success {
            background-color: #00BFFF;
            border: none;
        }

        .btn-success:hover {
            background-color: #219150;
        }

        .pagination {
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestión de Exámenes</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Actualización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($examenes as $examen)
                        <tr>
                            <td>
                                <a href="{{ route('examen.show', $examen->id) }}" class="text-decoration-none">{{ $examen->nombre }}</a>
                            </td>
                            <td>
                                {{ $examen->descripcion }}
                            </td>
                            <td>
                                {{ $examen->fecha_creacion }}
                            </td>
                            <td>
                                {{ $examen->fecha_actualizacion }}
                            </td>
                            <td>
                                <a href="{{ route('examen.edit', $examen->id) }}" class="btn btn-primary btn-sm me-2">Editar</a>
                                <form action="{{ route('examen.destroy', $examen->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-end mb-3">
                    <a href="{{ route('examen.create') }}" class="btn btn-success">Crear nuevo examen</a>
                </div>

                <!-- Enlaces de paginación -->
                <div class="d-flex justify-content-center">
                    {{ $examenes->links('pagination::bootstrap-4') }} <!-- Asegúrate de usar la plantilla de paginación de Bootstrap 4 -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
