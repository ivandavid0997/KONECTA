@extends('layouts.master')
@section('principal')

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de clientes</h6>

                            <a id="add_cliente" href="{{route('formulario.clientes')}}" type="button" class="btn btn-outline-success btm-sm" style="display: inline-block;
                                                    vertical-align: top;">  + Add </a>
                        </div> 

                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Documento</th>
                                            <th>direccion</th>
                                            <th>email</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Documento</th>
                                            <th>direccion</th>
                                            <th>email</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($clientes as $key => $cliente)
                                        <tr>
                                            <td>{{$cliente->idcliente}}</td>
                                            <td> {{$cliente->nombre }}</td>
                                            <td>{{$cliente->documento }}</td>
                                            <td>{{$cliente->direccion }}</td>
                                            <td>{{$cliente->email }}</td>
                                            <td>
                                        
                                                <div>
                                                    <a href="{{route('editar.clientes',$cliente->idcliente)}}" type="button" class="btn btn-outline-warning fas fa-user-edit btm-sm" style="display: inline-block;
                                                    vertical-align: top;"> Edit </a>
                    
                                                    <button onclick=borrar({{$cliente->idcliente}}) class="btn btn-outline-danger fas fa-user-minus btm-sm" style="display: inline-block;
                                                    vertical-align: top; "> Delete  </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            @endsection