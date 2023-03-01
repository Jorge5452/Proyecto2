<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de productos</h1>
    <a href="/productos/create">Agregar Producto</a>
    <ul>
        @foreach ($producto as $productos)
            <li> 
                {{ $productos->nomb_prod }} 
                
                <a href="{{ route('productos.show', $productos->id) }}">Ver detalle </a> 
                <a href="{{ route('productos.edit', $productos->id) }}">Editar </a> 
            </li>
        @endforeach
    </ul>

</body>
</html>