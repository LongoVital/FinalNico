<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumno</title>
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

        /* Card de registro */
        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .card-header {
            background-color: #4caf50;
            color: #fff;
            text-align: center;
            border-radius: 12px 12px 0 0;
            padding: 15px;
            font-size: 1.6rem;
            font-weight: bold;
        }

        /* Formulario */
        .form-group label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border: 2px solid #e0f2f1;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        /* Botón */
        .btn-submit {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #388e3c;
        }

        /* Efecto de contenido desplazado */
        .content {
            transition: margin-left 0.3s ease;
        }

        .content.shifted {
            margin-left: 250px;
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
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Registro de Nuevo Alumno
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el nombre del alumno">
                            </div>
                            <div class="form-group mb-3">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingresa el apellido del alumno">
                            </div>
                            <div class="form-group mb-4">
                                <label for="fec_nac">Fecha de Nacimiento</label>
                                <input type="date" name="fec_nac" id="fec_nac" class="form-control">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="crearAlumno" class="btn btn-submit">
                                    <i class="fas fa-paper-plane"></i> Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
