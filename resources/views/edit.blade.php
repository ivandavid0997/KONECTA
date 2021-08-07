<div id="edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> EDITAR USUARIO </h6>
                </div>
                <!-------------- FORMULARIO ------------>
                <div class="container" id="modalEditUsuario">
                    
                    <form id='edicion_usuario' action=" {{route('actualizar', $usuario->id)}}" method="POST">
                     @csrf      
                        <input type='hidden' name='id' id='id_usuario' class='form-control' value="{{$usuario->id}}">
        
                    <div class='row'>    
                            <div class='form-group col-md-6'>
                                <label for='nombres'><b>NOMBRES </b></label>
                                <input type='text' class='form-control' id='NOMBRES' name='NOMBRES' value="{{$usuario->name}}"   required />
                            </div>
        
                            <div class=' form-group col-md-6'>
                                <!-- Email O NIT -->
                                <label for='EMAIL'><b>EMAIL</b></label>
                                <input type='text' class='form-control' id='EMAIL' name='EMAIL' value="{{$usuario->email}}"  required />
                            </div>
        
                            <div class=' form-group col-md-6'>
                              <!-- Email O NIT -->
                              <label for='PASSWORD'><b>PASSWORD</b></label>
                              <input type='text' class='form-control' id='PASSWORD' name='PASSWORD' value="{{$usuario->password}}"  required/>
                          </div>
                    </div>         
        
                    <div class='row'>
                    
                            <div class='form-group col-md-6'>
                                <label for='ROL'><b>ROL</b></label>
                                <select class='form-control' id='ROL' name='ROL' required>
                                    <option value='' selected>Seleccione ...</option>
                                 
                               <?php if($usuario->rol == 1){ ?>              
                                        <option value='1' selected >administrador</option>
                                        <option value='2'>vendedor</option>
                                <?php 
                                    }else{ ?>
                                        <option value='1'  >administrador</option>
                                        <option value='2' selected>vendedor</option>
                        
                                 <?php   }  ?>        
                                    </select>
                            </div>
                    </div> 
                         <button class='btn btn-primary' id='edicion_usuarios'>Editar Usuario</button>    
                    </form>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
            </div>
        </div>
    </div>
</div>
