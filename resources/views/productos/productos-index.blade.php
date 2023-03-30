<x-plantilla2 :producto="$producto">

    <ul>
        @foreach ($producto as $productos)
        <tr>
            <td>{{ $productos->nomb_prod }}</td>
            <td>{{ $productos->desc_prod }}</td>
            <td>{{ $productos->cant_prod }}</td>
            <td>{{ $productos->prec_prod }}</td>
            <td>
                <form action="{{ route('productos.destroy', $productos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="material-icons">&#xE872;</i></button>
                </form>
                <a class="edit" title="Edit" data-toggle="modal" data-target="#exampleModal1-{{ $productos->id }}" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                <!-- Edit Modal -->
                <div class="modal fade" id="exampleModal1-{{ $productos->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('productos.update', $productos->id) }}" method="POST">
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
                                    <label for="nomb_prod">Nombre</label><br>
                                    <input type="text" name="nomb_prod" id="nomb_prod" value="{{ old('nomb_prod') ?? $productos->nomb_prod }}"><br>
                                    <br>
                                    <label for="desc_prod">Descripcion </label><br>
                                    <input type="text" name="desc_prod" id="desc_prod" value="{{ $productos->desc_prod }}"><br>
                                    <br>
                                    <label for="cant_prod">Cantidad </label><br>
                                    <input type="number" name="cant_prod" id="cant_prod" value="{{ $productos->cant_prod }}"><br>
                                    <br>
                                    <label for="prec_prod">Precio </label><br>
                                    <input type="number" name="prec_prod" id="prec_prod" value="{{ $productos->prec_prod }}"><br>
                                    <br>
                                    <input type="submit" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        
    <!-- New Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
    

                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <label for="nomb_prod">Nombre</label><br>
                        <input type="text" name="nomb_prod" id="nomb_prod" value="{{ old('nomb_prod') }}"><br>

                        <br>
                        <label for="desc_prod">Descripcion </label><br>
                        <input type="text" name="desc_prod" id="desc_prod"><br>

                        <br>
                        <label for="cant_prod">Cantidad </label><br>
                        <input type="number" name="cant_prod" id="cant_prod"><br>

                        <br>
                        <label for="prec_prod">Precio </label><br>
                        <input type="number" name="prec_prod" id="prec_prod"><br>

                        <br>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </ul>
    
</x-plantilla2>