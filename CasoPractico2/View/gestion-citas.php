<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Menu Lateral -->
            <div class="col-md-3 col-lg-2 bg-light p-0">
                <div class="d-flex flex-column h-100">
                    <?php include 'menu.php'; ?>
                </div>
            </div>

            <!-- Contenido Principal -->
            <div class="col-md-9 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
                    <h2>Listado de Citas</h2>
                    <a href="formulario-citas.html" class="btn btn-primary">Agregar Cita</a>
                </div>
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Fecha y Hora</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>2024-12-01 14:00</td>
                            <td>Consulta general</td>
                            <td>Pendiente</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <!-- Más filas aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
