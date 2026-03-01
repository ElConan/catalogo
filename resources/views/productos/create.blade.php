<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Crear Producto
        </div>
        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Descripción</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Precio</label>
                    <input type="number" step="0.01" name="precio" class="form-control">
                </div>

                <button class="btn btn-success">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                    Volver
                </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>