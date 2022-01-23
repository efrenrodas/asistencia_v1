<?php

namespace App\Http\Controllers;

use App\Models\EmpresaEmpleado;
use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

/**
 * Class EmpresaEmpleadoController
 * @package App\Http\Controllers
 */
class EmpresaEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresaEmpleados = EmpresaEmpleado::paginate();

        return view('empresa-empleado.index', compact('empresaEmpleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empresaEmpleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresaEmpleado = new EmpresaEmpleado();
        return view('empresa-empleado.create', compact('empresaEmpleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return response()->json($request);
        $empresa=Empresa::find($request['empresa']);
        if ($empresa && $empresa->codigo==$request['codigo']) {

           // request()->validate(EmpresaEmpleado::$rules);
           $registro['id_user']=Auth()->id();
            $registro['id_empresa']=$empresa->id;

        //    return response()->json($registro);
            $empresaEmpleado = EmpresaEmpleado::create($registro);

            return redirect()->back()->withInput()
                ->with('success', 'Registro creado correctamente.');
        }
        else{
            return  redirect()->back()->withInput()->with('success', 'Datos incorrectos.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresaEmpleado = EmpresaEmpleado::find($id);

        return view('empresa-empleado.show', compact('empresaEmpleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresaEmpleado = EmpresaEmpleado::find($id);

        return view('empresa-empleado.edit', compact('empresaEmpleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EmpresaEmpleado $empresaEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpresaEmpleado $empresaEmpleado)
    {
        request()->validate(EmpresaEmpleado::$rules);

        $empresaEmpleado->update($request->all());

        return redirect()->route('empresa-empleados.index')
            ->with('success', 'EmpresaEmpleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresaEmpleado = EmpresaEmpleado::find($id)->delete();

        return redirect()->route('empresa-empleados.index')
            ->with('success', 'EmpresaEmpleado deleted successfully');
    }
    public function codigo(Request $request)
    {
       // return response()->json($request);
        $id=$request['id'];
        $empresa=Empresa::find($id);
        $empresa['codigo']=$request['codigo'];
        $empresa->save();

        return  redirect()->back()->withInput();
        # code...

    }
    public function unirme( )
    {
        # code...
    }
}
