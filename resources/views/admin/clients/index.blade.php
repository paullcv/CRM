@extends('layouts.admin')


@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Listado de Clientes</h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Nuevo Cliente</a>

                                <table class="table table-bordered" id="user_table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cliente</th>
                                            <th>Telefono</th>
                                            <th>Nombre Empresa</th>
                                            <th>Direccion Empresa</th>
                                            <th>Telefono Empresa</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $user->contact_name }}</td>
                                                <td>{{ $user->contact_email }}</td>
                                                <td>{{ $user->contact_phone_number }}</td>
                                                <td>{{ $user->company_name }}</td>
                                                <td>{{ $user->company_address }}</td>
                                                <td>{{ $user->company_phone_number }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">
                                                        Editar
                                                    </a>
                                                    <form action="{{ route('users.destroy', $user->id) }}"
                                                        id="delete_form" method="POST"
                                                        onsubmit="return confirm('Esta seguro que desea eliminar el registro?')"
                                                        style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        new DataTable('#client_table');
    </script>
@endsection
