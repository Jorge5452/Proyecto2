<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tiendita</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/focus/css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<header>
    <div class="header text-right">
        <div class="buttons">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                
                <a href="{{ route('logout') }}" class="bn3637 bn37" @click.prevent="$root.submit();">Cerrar Sesion</a>
            </form>
        </div>

    </div>
</header>

<body id="page-top">

    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1>Listado de <b>productos</b></h1>
                        </div>
                        <div class="col-sm-4">
                            <a title="new" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Agregar Producto</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{$slot}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>