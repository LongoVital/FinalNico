<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Profesores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/FinalNico/Controllers/dashboard.php">Pagina principal</a>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="createProfesores.php" class="btn btn-success float-right">Agregar Profesor</a>
                        <h2 class="mb-0">Lista de Profesores</h2>
                    </div>
                    <div class="card-body">
                        <table id="listaProfesores" class="table table-sm table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Materias</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($profesores as $profesor) { ?>
                                    <tr>
                                        <td><?= $profesor->id; ?></td>
                                        <td><?= $profesor->nombre; ?></td>
                                        <td><?= $profesor->apellido; ?></td>
                                        <td>
                                            <a href="materiavistaProfesores.php?id=<?= $profesor->id; ?>" class="btn btn-info btn-sm">
                                                <i class="fas fa-book-open"></i> Ver Materias
                                            </a>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="updateProfesores.php?id=<?= $profesor->id; ?>" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                                <a href="deleteProfesores.php?id=<?= $profesor->id; ?>" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i> Eliminar
                                                </a>
                                                <a href="editarMateriarProfesores.php?id=<?= $profesor->id; ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-bookmark"></i> Asignar/Desasignar Materias
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Materias</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#listaProfesores').DataTable({});
        });
    </script>
</body>

</html>
