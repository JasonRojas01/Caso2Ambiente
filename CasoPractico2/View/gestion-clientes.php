<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/View/assets/css/clientes.css">
    <style>
        .menu-scrollable {
            max-height: 100vh; /* Altura máxima igual a la ventana */
            overflow-y: auto; /* Activar desplazamiento vertical */
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

        <!-- Contenido Principal -->
        <div class="flex-grow-1 p-4 main-content">
            <div class="container">
                <!-- Sección Agregar Cliente -->
                <h1 class="h3 text-left mb-4">Agregar Cliente</h1>
                <hr class="divider">
                <form action="procesar-cliente.php" method="POST" class="form-style">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                </form>

                <!-- Listado de Clientes -->
                <h1 class="h3 text-left mt-5 mb-4">Listado de Clientes</h1>
                <hr class="divider">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Datos Quemados -->
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>123456789</td>
                            <td>juan@example.com</td>
                            <td>555-1234</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>María Gómez</td>
                            <td>987654321</td>
                            <td>maria@example.com</td>
                            <td>555-5678</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Carlos Ruiz</td>
                            <td>564738291</td>
                            <td>carlos@example.com</td>
                            <td>555-8765</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>
