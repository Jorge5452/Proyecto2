<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function index()
    {
        $producto = Producto::all();
        return view('productos.productos-index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.productos-create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'nomb_prod' => ['required', 'max:255'],
            'desc_prod' => ['required', 'max:255'],
            'cant_prod' => ['required', 'integer'],
            'prec_prod' => ['required', 'numeric']
        ]);

        // $producto = new Producto(); 
        //$producto->nomb_prod    = $request->nomb_prod;
        //$producto->desc_prod    = $request->desc_prod;
        //$producto->cant_prod    = $request->cant_prod;
        //$producto->prec_prod    = $request->prec_prod;
        //$producto->save();

   
        
        Producto::create($request->all());



        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.productos-show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('Productos.productos-edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nomb_prod' => ['required', 'max:255'],
            'desc_prod' => ['required', 'max:255'],
            'cant_prod' => ['required', 'integer'],
            'prec_prod' => ['required', 'numeric']
        ]);

        // $producto->nomb_prod    = $request->nomb_prod;
        // $producto->desc_prod    = $request->desc_prod;
        // $producto->cant_prod    = $request->cant_prod;
        // $producto->prec_prod    = $request->prec_prod;
        // $producto->save();

        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        //        Producto::create([
        //
        //            'nomb_prod'  => $request->nomb_prod,
        //            'desc_prod'  => $request->desc_prod,
        //            'cant_prod'  => $request->cant_prod,
        //            'prec_prod'  => $request->prec_prod,

        //       ]);



        return ProductoController::index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
