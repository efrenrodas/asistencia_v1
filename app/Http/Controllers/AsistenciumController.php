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
        $dist=$this->distancia($lat,$lon,$emp);
        if ($dist<50) {
            $hora =Carbon::now();

            $registro['id_user']=Auth()->id();
             $registro['hora']=$hora;
             $registro['tipo']=$request['tipo'];
             $registro['id_empresa']=$request['empresa'];
            $asistencium = Asistencium::create($registro);
            $mensaje="Asistencia creada correctamente.";
        }
        else{
            $mensje="No se ha registrado";
        }



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
    public function reporte(Request $request)
    {
        $id=$request['id_emp'];

     //   $id=Auth()->id();

        $asistencia = Asistencium::where('id_empresa','=',$id)->paginate();

        return view('asistencium.index', compact('asistencia'))
            ->with('i', (request()->input('page', 1) - 1) * $asistencia->perPage());
    }
    public function distancia($latitud,$longitud,$idEmpresa)
    {

        $empresa=Empresa::find($idEmpresa);
        $r=6371;
        $cte=pi()/180;
        $latUser=$latitud;
        $logUser=$longitud;
        #obtener distancia a la empresa
        $latRest=floatval($empresa->latitud);
        $longRest=floatval($empresa->longitud);
        $difLat=$latUser-$latRest;
        $difLon=$logUser-$longRest;
        $dis=(sin($difLat*$cte/2))**2+cos($latUser*$cte)*cos( $latRest*$cte )*(sin($difLon*$cte/2))**2;
        $d1=sqrt($dis);
        $d2=asin($d1);
            #d = 2*r*a*1000;
        $df=2*$r*$d2*1000;

         #por defecto 1.5km
             //if ($df<1500) {
              //  echo $df."<br>";
               // echo $restaurant;

               // $restaurant['distancia']=round($df);
              //  $devueltos[]=$restaurant;
              #  $devueltos[$key]['distancia']=round($df);

           //
           return $df;
    }
}
