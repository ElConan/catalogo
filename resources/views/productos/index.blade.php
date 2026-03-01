<!DOCTYPE html>
<html>
<head>
    <title>Catálogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">Lista de Productos</h1>

    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">
        + Nuevo Producto
    </a>

    <table class="table table-bordered table-hover bg-white shadow">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th width="200">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>${{ $producto->precio }}</td>
                <td>
                    <a href="{{ route('productos.edit', $producto) }}" 
                       class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('productos.destroy', $producto) }}" 
                          method="POST" 
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>