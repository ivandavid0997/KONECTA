@extends('layouts.master')
@section('principal')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de usuarios</h6>

                            <a id="add_usuario" type="button" href="{{route('formulario')}}" class="btn btn-outline-success btm-sm" style="display: inline-block;
                                                    vertical-align: top;">  + Add </a>
                        </div> 

                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>email</th>
                                            <th>Rol</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>email</th>
                                            <th>Rol</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($usuarios as $key => $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td> {{$user->name }}</td>
                                            <td>{{$user->email }}</td>
                                            <td>{{$user->rol }}</td>
                                            <td>
                                        
                                                <div>
                                                    <a href="{{route('editar',$user->id)}}" type="button" class="btn btn-outline-warning fas fa-user-edit btm-sm" style="display: inline-block;
                                                    vertical-align: top;"> Edit </a>
                    
                                                    <button onclick=borrar({{$user->id}}) class="btn btn-outline-danger fas fa-user-minus btm-sm" style="display: inline-block;
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

          @endsection