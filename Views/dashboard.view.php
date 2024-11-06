<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #5d6d7e;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-size: 16px;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c12;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f39c12;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 25px;
        }

        .card-body h3 {
            font-size: 32px;
            font-weight: 600;
        }

        .stats-icon {
            font-size: 50px;
            color: #5d6d7e;
        }

        .chart-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .btn-primary {
            background-color: #17a2b8;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 25px;
        }

        .btn-primary:hover {
            background-color: #138496;
        }

        .row {
            margin-bottom: 40px;
        }

        .text-center {
            font-size: 28px;
            color: #333;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Nuevo Dashboard</a>
            <div class="navbar-nav ml-auto">
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
        <h2 class="text-center">Panel de Datos Visuales</h2>

        <!-- Cards -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Total Alumnos</div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h3><?php echo $cantidadAlumnos; ?></h3>
                        <i class="fas fa-user-graduate stats-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Total Profesores</div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h3><?php echo $cantidadProfesores; ?></h3>
                        <i class="fas fa-chalkboard-teacher stats-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Total Materias</div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h3><?php echo $cantidadMaterias; ?></h3>
                        <i class="fas fa-book stats-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row">
            <div class="col-md-6">
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-lg btn-primary">Generar Reporte</button>
                <button class="btn btn-lg btn-secondary">Ver Detalles</button>
            </div>
        </div>

    </div>

    <script>
        // Gráfico de Pastel
        new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels: ['Usuarios Activos', 'Usuarios Inactivos', 'Bajas'],
                datasets: [{
                    data: [60, 30, 10],
                    backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Distribución de Usuarios'
                    }
                }
            }
        });

        // Gráfico de Barras
        new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Ventas Mensuales',
                    data: [500, 600, 750, 800, 650],
                    backgroundColor: '#17a2b8',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Ventas por Mes'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>
