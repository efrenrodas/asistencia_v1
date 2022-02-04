@extends('layouts.app')

@section('template_title')
Update Empresa
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">

                    <span class="card-title mb-2">Update Empresa</span>

                    <div class="float-right">
                        <a href="{{ route('empresas.index') }}" class=" btn btn-warning mb-2 col-md-1">
                            {{ __('Atrás') }}
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('empresas.update', $empresa->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('empresa.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection