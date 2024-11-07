<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f0f7ff, #e0f2f1);
            color: #333;
            margin: 0;
            overflow-x: hidden;
        }

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

        .content {
            transition: margin-left 0.3s ease;
        }

        .content.shifted {
            margin-left: 250px;
        }

        .container h3 {
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="menu-icon" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </div>

    <div class="sidebar" id="sidebar">
        <a href="/FinalNico/Controllers/dashboard.php">Inicio</a>
        <a href="/FinalNico/Controllers/Alumnos/indexAlumnos.php">Alumnos</a>
        <a href="/FinalNico/Controllers/Profesores/indexProfesores.php">Profesores</a>
        <a href="/FinalNico/Controllers/Materias/indexMaterias.php">Materias</a>
    </div>

    <div class="content" id="content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h3>Editar Alumno - ID: <?= $alumno->id ?></h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" value="<?= $alumno->nombre ?>" name="nombre" id="nombre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" value="<?= $alumno->apellido ?>" name="apellido" id="apellido" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fec_nac">Fecha de Nacimiento</label>
                                    <input type="date" value="<?= $alumno->fec_nac ?>" name="fec_nac" id="fec_nac" class="form-control">
                                </div>
                                <button type="submit" name="actualizarDatos" class="btn btn-primary mt-3">
                                    <i class="fas fa-save"></i> Actualizar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    </script>
</body>

</html>
