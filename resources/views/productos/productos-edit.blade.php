<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Editar producto</h1>
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('patch')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="nomb_prod">Nombre</label>
        <input type="text" name="nomb_prod" id="nomb_prod" value="{{ $producto->nomb_prod }}"><br>

        <br>
        <label for="desc_prod">Descripcion  </label>
        <input type="text" name="desc_prod" id="desc_prod" value="{{ $producto->desc_prod }}"><br>

        <br>
        <label for="cant_prod">Cantidad  </label>
        <input type="number" name="cant_prod" id="cant_prod" value="{{ $producto->cant_prod }}"><br>

        <br>
        <label for="prec_prod">Precio  </label>
        <input type="number" name="prec_prod" id="prec_prod" value="{{ $producto->prec_prod }}"><br>

        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
