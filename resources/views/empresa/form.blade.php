<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $empresa->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruc') }}
            {{ Form::text('Ruc', $empresa->Ruc, ['class' => 'form-control' . ($errors->has('Ruc') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('Ruc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $empresa->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $empresa->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('latitud') }}
            {{ Form::text('latitud', $empresa->latitud, ['class' => 'form-control' . ($errors->has('latitud') ? ' is-invalid' : ''), 'placeholder' => 'latitud']) }}
            {!! $errors->first('latitud', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('longitud') }}
            {{ Form::text('longitud', $empresa->longitud, ['class' => 'form-control' . ($errors->has('longitud') ? ' is-invalid' : ''), 'placeholder' => 'longitud']) }}
            {!! $errors->first('longitud', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>