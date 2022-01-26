@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        @can('administrar')
                        <a class="btn btn-primary" href="{{ url('/empresas') }}" role="button">Empresas</a>
                        @endcan

                        @can('marcar')
                        {{-- <a class="btn btn-primary" href="" role="button">Marcar Asistencia</a> --}}
                        <a class="btn btn-warning" href="{{ route('emp.unirme') }}" role="button">Unirme a empresa </a>
                        <a class="btn btn-success" href="{{ route('asistencia.index') }}" role="button">Mis marcaciones </a>

                        @endcan





                </div>
            </div>
            @can('marcar')
            {{-- errores --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            {{-- tarjeta de empresas a las que se encuentra asociado --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empresas en las que trabaja') }}
                            </span>

                             <div class="float-right">
                                <button class="btn btn-info" onclick="leerPos()"> Obtener mi posicion</button>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                      latitud  <input type="text"   readonly id="latitude">
                      Longitud  <input type="text"  readonly id="longitude">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Empresa</th>
										<th>Tipo</th>

                                        <th>Acción</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresaEmpleados as $empresaEmpleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											{{-- <td>{{ $empresaEmpleado->user->name }}</td> --}}
											<td>{{ $empresaEmpleado->empresa->Nombre }}</td>
                                            <form action="{{ route('asistencia.store') }}" method="POST">
                                                @csrf
                                            <td>
                                                <select  name="tipo" class="form-select" aria-label="Default select example">
                                                    {{-- <option selected>Selecciona el tipo de marca</option> --}}
                                                    <option value="entrada">Entrada</option>
                                                    <option value="lonch">Lonch</option>
                                                    <option value="salida">Salida</option>
                                                  </select>
                                            </td>
                                            <td>
                                                {{-- <a class="btn btn-sm btn-primary " href="{{route('asistencia.store',['id'=>$empresaEmpleado->empresa->id])}}"><i class="fa fa-fw fa-eye"></i> Marcar asistencia</a> --}}

                                                    <input type="hidden" name="empresa" value="{{$empresaEmpleado->empresa->id}}">
                                                 <input type="hidden"  name="latitude" readonly id="latitude1">
                                               <input type="hidden" name="longitude" readonly id="longitude1">
                                                       <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Marcar</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empresaEmpleados->links() !!}
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection
