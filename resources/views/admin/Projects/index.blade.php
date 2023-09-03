@extends('layouts.admin')


@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Listado de Projectos</h1>
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

                                <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Nuevo Projecto</a>

                                <table class="table table-bordered" id="project_table">
                                    <thead>
                                        <tr>
                                            <th>Proyecto</th>
                                            <th>Descripcion</th>
                                            <th>Fecha Limite</th>
                                            <th>Status</th>
                                            <th>Usuario</th>
                                            <th>Cliente</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->descripcion }}</td>
                                                <td>{{ $project->deadline }}</td>
                                                <td>{{ $project->status }}</td>
                                                <td>{{ $project->client->contact_name }}</td>
                                                <td>{{ $project->user->name  }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-success">
                                                        Editar
                                                    </a>
                                                    <form action="{{ route('projects.destroy', $project->id) }}"
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
        //new DataTable('#project_table');
        $(document).ready(function() {
            $('#project_table').DataTable();
        });
    </script>
@endsection
