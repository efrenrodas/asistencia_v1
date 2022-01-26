<?php

namespace App\Http\Controllers;

use App\Models\Asistencium;
use App\Models\Empresa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class AsistenciumController
 * @package App\Http\Controllers
 */
class AsistenciumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=Auth()->id();

        $asistencia = Asistencium::where('id_user','=',$id)->paginate();

        return view('asistencium.index', compact('asistencia'))
            ->with('i', (request()->input('page', 1) - 1) * $asistencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistencium = new Asistencium();
        return view('asistencium.create', compact('asistencium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return response()->json($request);
       request()->validate(Asistencium::$rules);
        $lat=$request['latitude'];
        $lon=$request['longitude'];
        $emp=$request['empresa'];

        $empresa=Empresa::find($emp);
        if ($empresa) {
            if ($lat==$empresa->latitud && $lon==$empresa->longitud) {
                # code...
             //   return response()->json($request);
                $hora =Carbon::now();
              //  $user=
              //  $id_empresa
              //  $tipo=$request['tipo'];
                $registro['id_user']=Auth()->id();
                 $registro['hora']=$hora;
                 $registro['tipo']=$request['tipo'];
                 $registro['id_empresa']=$request['empresa'];
                $asistencium = Asistencium::create($registro);
                $mensaje="Asistencia creada correctamente.";
            }
            else
            {
                $mensaje="Asistencia no registrada, no se encuentra en la empresa";
            }
        }

       // request()->validate(Asistencium::$rules);


       return  redirect()->back()->withInput()->with('success', $mensaje);

        // return redirect()->route('asistencia.index')
        //     ->with('success', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencium = Asistencium::find($id);

        return view('asistencium.show', compact('asistencium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencium = Asistencium::find($id);

        return view('asistencium.edit', compact('asistencium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asistencium $asistencium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencium $asistencium)
    {
        request()->validate(Asistencium::$rules);

        $asistencium->update($request->all());

        return redirect()->route('asistencia.index')
            ->with('success', 'Asistencium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asistencium = Asistencium::find($id)->delete();

        return redirect()->route('asistencia.index')
            ->with('success', 'Asistencium deleted successfully');
    }
    public function reporte()
    {
        $id=Auth()->id();

        $asistencia = Asistencium::where('id_user','=',$id)->paginate();

        return view('asistencium.index', compact('asistencia'))
            ->with('i', (request()->input('page', 1) - 1) * $asistencia->perPage());
    }
}
