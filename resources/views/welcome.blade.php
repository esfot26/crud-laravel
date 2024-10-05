<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMw5Zy2m69L1Cg5/9b1F78A7f0p9+PHc8+f1N" crossorigin="anonymous">
    <title>Página de Bienvenida</title>
    <style>
        body {
            background-color: #F8F9FA; /* Fondo uniforme */
            color: black;
        }

        .navbar {
            background-color: #2c3e50;
        }

        .welcome-card {
            background-color: rgba(44, 62, 80, 0.8);
            border-radius: 15px;
            padding: 2rem;
            margin-top: 5rem;
        }

        .btn-custom {
            background-color: #ff6b6b;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #ff3d3d;
        }

        @media (max-width: 768px) {
            .welcome-card {
                margin: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Gestión de Exámenes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('examen.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('examen.create') }}">Crear Examen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="welcome-card card text-center">
            <div class="card-body">
                <h1 class="card-title mb-4"><i class="fas fa-check-circle"></i> Bienvenido a la Gestión de Exámenes</h1>
                <p class="card-text mb-4">Aquí puedes gestionar todos tus exámenes de manera sencilla y efectiva.</p>
                <a href="{{ route('examen.index') }}" class="btn btn-custom btn-lg">Ir a la Gestión de Exámenes</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
