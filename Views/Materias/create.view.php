<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Materia</title>
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

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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
            <h3>Crear Materia</h3>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre de la Materia</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <button type="submit" name="crearMateria" class="btn btn-primary">
                            <i class="fas fa-send"></i> Enviar
                        </button>
                    </form>
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
