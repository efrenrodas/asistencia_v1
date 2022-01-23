@extends('layouts.app')

@section('template_title')
    Unirme a la empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('empresa-empleados.store') }}" method="post">
                    @csrf
                    <h2>Ingrese el codigo de la empresa provisto por el empleador</h2>
                     <input type="text" class="form-control" name="codigo" id="codigo" value="">
                    <input type="submit" class="btn btn-success" value="Guardar" style="margin-top: 10px">
                    
                     
                </form>
            </div>
        </div>
    </div>
@endsection
