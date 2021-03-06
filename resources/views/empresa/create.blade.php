@extends('layouts.app')

@section('template_title')
Create Empresa
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    
                    <span class="card-title">Create Empresa</span>

                    <div class="float-right">
                        <a href="{{ route('empresas.index') }}" class=" btn btn-warning mb-2 col-md-1">
                            {{ __('Atrás') }}
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('empresas.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('empresa.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection