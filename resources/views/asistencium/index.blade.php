@extends('layouts.app')

@section('template_title')
    Asistencium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asistencia del empleado') }}
                            </span>

                             <div class="float-right">
                                {{-- <a href="{{ route('asistencia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a> --}}
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Id User</th>
										<th>Hora</th>
										<th>Tipo</th>
										<th>Empresa</th>

                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asistencia as $asistencium)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $asistencium->id_user }}</td>
											<td>{{ $asistencium->hora }}</td>
											<td>{{ $asistencium->tipo }}</td>
											<td>{{ $asistencium->empresa->Nombre }}</td>

                                            {{-- <td>
                                                <form action="{{ route('asistencia.destroy',$asistencium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asistencia.show',$asistencium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asistencia.edit',$asistencium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asistencia->links() !!}
            </div>
        </div>
    </div>
@endsection
