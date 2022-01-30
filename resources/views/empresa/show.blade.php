@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $empresa->Nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Ruc:</strong>
                                {{ $empresa->Ruc }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                {{ $empresa->Correo }}
                            </div>
                            <div class="form-group">
                                <strong>Id User:</strong>
                                {{ $empresa->id_user }}
                            </div>
                            <div class="form-group">
                                <strong>Latitud:</strong>
                                {{ $empresa->latitud }}
                            </div>
                            <div class="form-group">
                                <strong>Longitud:</strong>
                                {{ $empresa->longitud }}
                            </div>
                        </div>





                    </div>
                </div>
            </div>




        </div>

    </section>

    {{-- gestionar codigo de empleados --}}
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Codigo para unirse a la empresa</span>
                        </div>

                    </div>

                    <div class="card-body">



                                <form action="{{ route('codigo.actualiza',['id'=>$empresa->id]) }}" method="post">
                                    @csrf

                                     {{-- <input type="text" class="form-control" name="codigo" id="codigo" value="{{ $empresa->codigo }}"> --}}
                                     <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">{{$empresa->id}}-</span>
                                        <input type="text" name="codigo" value="{{ $empresa->codigo }}" class="form-control" placeholder="Codigo" aria-label="Codigo" aria-describedby="basic-addon1">
                                      </div>
                                     <input type="submit" class="btn btn-success" value="Guardar" style="margin-top: 10px">


                                </form>



                    </div>
                </div>
            </div>
        </div>
    </section>

       {{-- contenedor agregar empleados--}}
       <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Agregar Empleados</span>
                        </div>

                    </div>

                    <div class="card-body">
                       {{-- cargar tabla de empleados --}}

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
