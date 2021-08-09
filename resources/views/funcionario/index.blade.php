@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/adminlte/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('contenido')
    <div class="row mb-2">
        <div class="col-12">
            <div class="row align-items-center">
                <h2>Lista de Funcionarios</h2>
                @can('crear usuario')
                    <a href="{{ route('funcionarios.create') }}" class="btn btn-outline-success btn-sm ml-5">Añadir</a>
                @endcan
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($funcionarios as $funcionario)
                        <tr>
                            @if ($funcionario->roles()->first()->name == 'funcionario')
                                <td><img src="/img/funcionario/{{ $funcionario->foto }}" width="40" height="40"></td>
                                <td>{{ $funcionario->nombre }} {{ $funcionario->apellido_pat }}</td>
                                <td>{{ $funcionario->telefono }}</td>
                                <td>{{ $funcionario->direccion }}</td>
                                <td>{{ $funcionario->email }}</td>
                                <td>{{ $funcionario->roles()->first()->name }}</td>  
                                <td>
                                    @can('mostrar usuario')
                                        <a class="btn btn-info mt-1" href="{{ route('funcionarios.show', $funcionario->id) }}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    @endcan
                                    @can('editar usuario')
                                        <a class="btn btn-warning mt-1" href="{{ route('funcionarios.edit', $funcionario->id) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    @endcan
                                </td>
                            @endif
                        </tr>
                    @empty
                        <span>span no hay registros</span>
                    @endforelse

                    </tfoot>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="/adminlte/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminlte/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminlte/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminlte/jszip/jszip.min.js"></script>
<script src="/adminlte/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte/pdfmake/vfs_fonts.js"></script>
<script src="/adminlte/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminlte/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminlte/datatables-buttons/js/buttons.colVis.min.js"></script>
@role('admin')
        @include('partials.datatableAdmin')
    @else
        @include('partials.datatable')
    @endrole
@endsection
