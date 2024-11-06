<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
    <!-- Include bootstrap last version -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <!-- Include jQuery last version -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/FinalNico/Controllers/dashboard.php">Página principal</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/FinalNico/Controllers/Alumnos/indexAlumnos.php">
                    <i class="fas fa-user-graduate"></i> Alumnos
                </a>
                <a class="nav-item nav-link" href="/FinalNico/Controllers/Profesores/indexProfesores.php">
                    <i class="fas fa-chalkboard-teacher"></i> Profesores
                </a>
                <a class="nav-item nav-link" href="/FinalNico/Controllers/Materias/indexMaterias.php">
                    <i class="fas fa-book"></i> Materias
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Materia - ID: <?= $materia->id ?></h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" value="<?= $materia->nombre_materia ?>" name="nombre" id="nombre" class="form-control">
                            </div>
                            <button type="submit" name="actualizarDatos" class="btn btn-primary mt-3">
                                <i class="fas fa-sync-alt"></i> Actualizar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
