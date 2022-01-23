@extends('layouts.app')

@section('template_title')
    Unirme a la empresa
@endsection

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Unirse a una empresa') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('empresa-empleados.store') }}" method="post">
                            @csrf
                            <h3>Ingrese el codigo de la empresa provisto por el empleador</h3>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="empresa" placeholder="empresa" aria-label="empresa">
                                <span class="input-group-text">></span>
                                <input type="text" class="form-control" name="codigo" placeholder="Codigo" aria-label="Codigo">
                              </div>
                            <input type="submit" class="btn btn-success" value="Unirse" style="margin-top: 10px">


                        </form>






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
