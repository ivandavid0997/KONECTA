<div id="editClientes" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> EDITAR CLIENTE </h6>
                </div>
                <!-------------- FORMULARIO ------------>
                <div class="container" id="modalEditCliente">
                    
                    <form id='edicion_cliente' action=" {{route('actualizar.clientes', $cliente->idcliente)}}" method="POST">
                     @csrf      
                        <input type='hidden' name='id' id='id_usuario' class='form-control' value="{{$cliente->idcliente}}">
        
                    <div class='row'>    
                            <div class='form-group col-md-6'>
                                <label for='nombres'><b>NOMBRES </b></label>
                                <input type='text' class='form-control' id='NOMBRES' name='NOMBRES' value="{{$cliente->nombre}}"   required />
                            </div>
        
                            <div class=' form-group col-md-6'>
                                <!-- IDENTIFICACION O NIT -->
                                <label for='IDENTIFICACION'><b>IDENTIFICACION</b></label>
                                <input type='text' class='form-control' id='IDENTIFICACION' name='IDENTIFICACION'  value="{{$cliente->documento}}" required />
                            </div>

                            <div class="form-group col-md-6">
                                <!-- NOMBRES O RAZON SOCIAL -->
                                <label for="DIRECCION"><b>DIRECCION </b></label>
                                <input type="text" class="form-control" id="DIRECCION" name="DIRECCION"    value="{{$cliente->direccion}}" required />
                              </div>

                               <!-- SEGUNDA COLUMNA -->
                               <div class=" form-group col-md-6">
                                 <!-- IDENTIFICACION O NIT -->
                                 <label for="EMAIL"><b>EMAIL</b></label>
                                 <input type="text" class="form-control" id="EMAIL" name="EMAIL"   value="{{$cliente->email}}" required />
                               </div>
                    </div>     
                         <button class='btn btn-primary' id='edicion_clientes'>Editar Cliente</button>    
                    </form>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
            </div>
        </div>
    </div>
</div>