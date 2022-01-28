@extends('layouts.app')

@section('template_title')
    {{ $asistencium->name ?? 'Show Asistencium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asistencium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asistencia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $asistencium->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $asistencium->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $asistencium->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empresa:</strong>
                            {{ $asistencium->id_empresa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
