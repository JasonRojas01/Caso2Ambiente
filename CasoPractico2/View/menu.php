<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }

        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
            color: #fff;

        }

        .sidebar .nav-link {
            color: #ddd;
            transition: color 0.3s ease, background-color 0.3s ease;
            display: block;
            padding: 10px 15px;
            border-radius: 4px;
            font-weight: normal;
        }

        .sidebar .nav-link:hover {
            color: #fff;
            background-color: #495057;
        }

        .sidebar .nav-link.active {
            background-color: #007bff; /* Color azul para resaltar */
            color: #fff;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Efecto de sombra */
        }

        .content {
            padding: 20px;
        } 

        .main-content {
            flex: 1;
        }

        /* @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                z-index: 1000;
                width: 200px;
                transform: translateX(-200px);
                transition: transform 0.3s ease;
            }
            .sidebar.show {
                transform: translateX(0);
            }
        } */
    </style>
</head>
<body>
    <?php
        // Obtén la página actual del script, se usa para cambiar el active y se mueva dependiendo de la pagina actual
        $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar d-none d-md-block py-3">
            <div class="position-sticky">
                <ul class="nav flex-column px-2">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'inicio.php') ? 'active' : ''; ?>" href="inicio.php">
                            <span class="bi bi-house"></span> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'gestion-clientes.php') ? 'active' : ''; ?>" href="gestion-clientes.php">
                            <span class="bi bi-people"></span> Gestión Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'gestion-citas.php') ? 'active' : ''; ?>" href="gestion-citas.php">
                            <span class="bi bi-calendar"></span> Gestión de Citas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'servicios.php') ? 'active' : ''; ?>" href="servicios.php">
                            <span class="bi bi-bag"></span> Servicios
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
