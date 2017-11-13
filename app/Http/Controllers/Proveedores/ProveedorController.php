<?php

namespace App\Http\Controllers\Proveedores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Proveedores\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       # code...
       $this->middleware('auth');
     }
    /*public function manageItemAjax()
    {
      # code...
      return view ('gastronomica/proveedores/proveedores/proveedor');
    }*/

    /*public function index(Request $request)
    {
      # code...
      $proveedores = Proveedor::all();
      return response()->json($proveedores);
    }*/
    public function index()
    {
    //    $proveedores = Proveedor::all();
    //    return response()->json($proveedores);
        //
        //$proveedores = Proveedor::all();//all() paginate(5)
        //return View('gastronomica/proveedores/proveedores/proveedor')->with('proveedor', $proveedores);
        return view ('gastronomica/proveedores/proveedores/proveedor');

        /* De VUEjs
        $proveedores = Proveedor::all();
        return response()->json([
          'proveedores'=>$proveedores
        ]);*/
    }

    public function listall()
    {
      # code...
      $proveedores = Proveedor::all();//all() paginate(5)
      return View('gastronomica/proveedores/proveedores/listall')->with('proveedor', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return View('gastronomica.proveedores.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$proveedores = Proveedor::create($request->all());
        //return response()->json($proveedores);
        //
        /*Proveedor::create($request->all());
        Session::flash('save', "Se ha creado correctamente");
        return redirect()->action('Proveedores\ProveedorController@index');*/

        /* De VUEjs
        $proveedor = Proveedor::create([
          'empresa' => $request->input('empresa'),
          'ruc' => $request->input('ruc'),
          'direccion' => $request->input('direccion'),
          'telefono' => $request->input('telefono'),
          'correo' => $request->input('correo'),
          'fecha_ingreso' => $request->input('fecha_ingreso'),
          'descripcion' => $request->input('descripcion'),
          'estado' => $request->input('estado')
        ]);
        return response()->json([
          'message' => 'proveedor created successfully',
          'proveedor' => $proveedor
        ]);*/

        if ($request->ajax()) {
          # code...
          $result = Proveedor::create($request->all());
          if ($result) {
            # code...
            return response()->json(['success'=>'true']);
          } else{
            return response()->json(['success'=>'false']);
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /*$proveedores = Proveedor::FindOrFail($id);
        return View('gastronomica\proveedores\proveedores\show')->with('proveedor', $proveedores);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        /*$proveedores = Proveedor::FindOrFail($id);
        return View('gastronomica\proveedores\proveedores\edit', array('proveedor'=>$proveedores));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        /*$proveedores = Proveedor::FindOrFail($id);
        $input = $request->all();
        $proveedores->fill($input)->save();
        Session::flash('update', "Se ha actualizado correctamente");

        return redirect()->action('Proveedores\ProveedorController@index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /*$proveedores = Proveedor::FindOrFail($id);
        $proveedores->delete();
        Session::flash('delete', "Se ha eliminado correctamente");
        return redirect()->action('Proveedores\ProveedorController@index');*/
    }
}
