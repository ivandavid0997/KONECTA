<div id="addCliente" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> CREAR CLIENTE </h6>
                </div>
                <!-------------- FORMULARIO ------------>
                <div class="container" id="modalAddCliente">

                    <form id="crearCliente">
                        
                        <input type='hidden' name='id' id='id_cliente' class='form-control' value=''>


                        <!-- PRIMERA FILAAAAA -->
                       <div class="row">    
                               <!-- PRIMERA COLUMNA -->
                              <div class="form-group col-md-6">
                                <!-- NOMBRES O RAZON SOCIAL -->
                                <label for="nombres"><b>NOMBRES </b></label>
                                <input type="text" class="form-control" id="NOMBRES" name="NOMBRES"   required />
                              </div>

                               <!-- SEGUNDA COLUMNA -->
                               <div class=" form-group col-md-6">
                                 <!-- IDENTIFICACION O NIT -->
                                 <label for="IDENTIFICACION"><b>IDENTIFICACION</b></label>
                                 <input type="text" class="form-control" id="IDENTIFICACION" name="IDENTIFICACION"  value="" required />
                               </div>

                               <div class="form-group col-md-6">
                                <!-- NOMBRES O RAZON SOCIAL -->
                                <label for="DIRECCION"><b>DIRECCION </b></label>
                                <input type="text" class="form-control" id="DIRECCION" name="DIRECCION"   required />
                              </div>

                               <!-- SEGUNDA COLUMNA -->
                               <div class=" form-group col-md-6">
                                 <!-- IDENTIFICACION O NIT -->
                                 <label for="EMAIL"><b>EMAIL</b></label>
                                 <input type="text" class="form-control" id="EMAIL" name="EMAIL"  value="" required />
                               </div>
                       </div>             

                           <button id="agregar_cliente"  class="btn btn-primary">Crear cliente</button>
                  </form>
                </div>    

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
            </div>
        </div>
    </div>
</div>