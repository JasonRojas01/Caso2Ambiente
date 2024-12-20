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
        }
        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
            color: #fff;
        }
        .sidebar a {
            color: #ddd;
            transition: color 0.3s ease;
        }
        .sidebar a:hover {
            color: #fff;
        }
        .sidebar .active {
            background-color: #495057;
            border-radius: 0.25rem;
        }
        .content {
            padding: 20px;
        }
        @media (max-width: 768px) {
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
        }
    </style>
</head>
<body>
    <div class="d-flex">
        
        <!-- Menu Lateral-->
    <?php include 'menu.php'; ?>

        <!-- Main Content -->
        <div class="col">
            <header class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h1 class="h5">Dashboard</h1>
                <button class="btn btn-outline-secondary d-md-none" id="toggle-sidebar">
                    <span class="bi bi-list"></span>
                </button>
            </header>
            <main class="content">
                <p>Selecciona una opción del menú para gestionar los recursos del sistema.</p>
            </main>
            
        </div>
    </div>
</body>
</html>
