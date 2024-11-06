<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <!-- CSS de Bootstrap y DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f0f7ff, #e0f2f1);
            color: #333;
            margin: 0;
            overflow-x: hidden;
        }

        /* Sidebar desplegable */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #007bff;
            color: white;
            padding-top: 60px;
            transform: translateX(-250px);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .sidebar a {
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 1.1rem;
            display: block;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #0056b3;
        }

        /* Icono de menú */
        .menu-icon {
            font-size: 1.5rem;
            color: #007bff;
            padding: 20px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1100;
        }

        /* Efecto de contenido desplazado */
        .content {
            transition: margin-left 0.3s ease;
        }

        .content.shifted {
            margin-left: 250px;
        }

        /* Tabla de Alumnos */
        .container h2 {
            text-align: center;
            color: #007bff;
            margin-top: 30px;
        }

        .btn-group .btn {
            margin-right: 5px;
        }

        .btn-primary, .btn-info, .btn-warning, .btn-danger {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <!-- Icono del menú -->
    <div class="menu-icon" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="/FinalNico/Controllers/dashboard.php">Inicio</a>
        <a href="/FinalNico/Controllers/Alumnos/indexAlumnos.php">Alumnos</a>
        <a href="/FinalNico/Controllers/Profesores/indexProfesores.php">Profesores</a>
        <a href="/FinalNico/Controllers/Materias/indexMaterias.php">Materias</a>
    </div>

    <!-- Contenido principal -->
    <div class="content" id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Lista de Alumnos</h2>
                    <div class="text-right mb-4">
                        <a href="createAlumnos.php" class="btn btn-success">Agregar Alumno</a>
                    </div>
                    <table id="listaAlumnos" class="table table-sm table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Materias</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alumnos as $alumno) : ?>
                                <tr>
                                    <td><?= $alumno->id; ?></td>
                                    <td><?= $alumno->nombre; ?></td>
                                    <td><?= $alumno->apellido; ?></td>
                                    <td><?= date('d/m/Y', strtotime($alumno->fec_nac)); ?></td>
                                    <td>
                                        <a href="materiasvista.php?id=<?= $alumno->id; ?>" class="btn btn-info btn-sm">
                                            <i class="fas fa-book-open"></i> Ver Materias
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="updateAlumnos.php?id=<?= $alumno->id; ?>" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="deleteAlumnos.php?id=<?= $alumno->id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                            <a href="editarMateriasAlumno.php?id=<?= $alumno->id; ?>" class="btn btn-info btn-sm">Asignar/Desasignar Materias</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Materias</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de DataTables -->
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content");
            if (sidebar.style.transform === "translateX(0px)") {
                sidebar.style.transform = "translateX(-250px)";
                content.classList.remove("shifted");
            } else {
                sidebar.style.transform = "translateX(0px)";
                content.classList.add("shifted");
            }
        }

        $(document).ready(function() {
            $('#listaAlumnos').DataTable();
        });
    </script>
</body>

</html>
