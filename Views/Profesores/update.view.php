<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <h3>Editar Profesor - ID: <?= $profesor->id ?></h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" value="<?= $profesor->nombre ?>" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" value="<?= $profesor->apellido ?>" name="apellido" id="apellido" class="form-control">
                            </div>
                            <button type="submit" name="actualizarDatos" class="btn btn-primary">
                                <i class="fas fa-save"></i> Actualizar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>