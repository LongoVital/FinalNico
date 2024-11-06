<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materias del Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Verdana', sans-serif;
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
            background-color: #4caf50;
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
            background-color: #388e3c;
        }

        /* Icono de menú */
        .menu-icon {
            font-size: 1.5rem;
            color: #4caf50;
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

        /* Estilos del formulario */
        .container h1 {
            text-align: center;
            color: #4caf50;
            margin-top: 30px;
            font-size: 2rem;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
        }

        .custom-control-input:checked~.custom-control-label::before {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        .btn-primary {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        .btn-primary:hover {
            background-color: #388e3c;
            border-color: #388e3c;
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
            <h1 class="mb-4">Editar Materias de <?= $alumno->nombre . ' ' . $alumno->apellido ?></h1>
            <form action="" method="post">
                <div class="form-group">
                    <?php foreach ($todasLasMaterias as $materia): ?>
                        <div class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" id="materia_<?= $materia->id ?>"
                                name="materias[]" value="<?= $materia->id ?>"
                                <?= in_array($materia, $alumno->materias()) ? 'checked' : '' ?>>
                            <label class="custom-control-label" for="materia_<?= $materia->id ?>"><?= $materia->nombre_materia ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center">
                    <button type="submit" name="guardarMaterias" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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