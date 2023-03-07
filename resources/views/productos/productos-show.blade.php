<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
</head>
<body>
    <h1>DATOS</h1>
    <h1> {{ $producto->nomb_prod }} </h1>
    <h2> {{ $producto->desc_prod }} </h2>
    <h2> {{ $producto->cant_prod }} </h2>
    <h2> {{ $producto->prec_prod }} </h2>

    <a href="{{ route('productos.index') }}">Inicio</a>

    <form action=" {{ route('productos.destroy', $producto) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">BORRAR</button>
    </form>

</body>
</html>