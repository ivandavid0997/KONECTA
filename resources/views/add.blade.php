<div id="add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> CREAR USUARIO </h6>
                </div>
                <!-------------- FORMULARIO ------------>
                <div class="container" id="modalAddUsuario">

                    <form id="crearUsuario">
                        
                        <input type='hidden' name='id' id='id_usuario' class='form-control' value=''>


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
                       </div>         

                       <!-- TERCERA FILAAAAA -->
                       <div class="row ">
                    
                               <!-- PRIMERA COLUMNA --> 
                               <div class="form-group col-md-6">
                                 <!-- SEXO -->
                                 <label for="ROL"><b>ROL</b></label>
                                   <select class="form-control" id="ROL" name="ROL" required>
                                       <option value="" selected>Seleccione ...</option>
                                       <option value="1" >administrador</option>
                                       <option value="2">vendedor</option>
                                    </select>
                               </div>
                       </div>        

                           <button id="agregar_usuario"  class="btn btn-primary">Crear Usuario</button>
                  </form>
                </div>    

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
            </div>
        </div>
    </div>
</div>