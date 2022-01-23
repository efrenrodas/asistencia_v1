@extends('layouts.app')

@section('template_title')
    Create Empresa Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Empresa Empleado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empresa-empleados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empresa-empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
