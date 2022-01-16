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
    </section>
    {{-- contenedor 2 --}}
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
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
