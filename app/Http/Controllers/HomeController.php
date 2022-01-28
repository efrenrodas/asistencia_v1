<?php

namespace App\Http\Controllers;

use App\Models\EmpresaEmpleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=Auth()->id();
        // $empresa=EmpresaEmpleado::where('is_user','=',$id)->get();
         $empresaEmpleados = EmpresaEmpleado::where('id_user','=',$id)->paginate();

        return view('home', compact('empresaEmpleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empresaEmpleados->perPage());

    //    return view('home');
    }
}
