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
<a class="btn btn-primary" href="" role="button">Marcar Asistencia</a>
<a class="btn btn-warning" href="{{ route('emp.unirme') }}" role="button">Unirme a empresa </a>
@endcan
                 
                

                 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
