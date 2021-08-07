<style type="text/css">
    /* Expand button to all of option */
  .select2-results__option.select2-results__message {
    padding: 0px;
  }
  button#no-results-btn {
    width: 100%;
    height: 100%;
    padding: 6px;
  }
  
  /* Make button look like other li elements */
  button#no-results-btn {
    border: 0;
    background-color: white;
    text-align: left;
  }
  
  /* Give button same hover effect */
    .select2-results__option.select2-results__message:hover {
    color: white;
  }
  button#no-results-btn:hover {
    background-color: #5897fb;
  }
  </style>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
  </div>
    <!-- Content Row -->
  <div class="row">
    @if ($errors->any())
 @foreach ($errors->all() as $err)
      <div class="alert alert-danger alert-block">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong>{{$err}}</strong>.
      </div>
  @endforeach
@endif
    <div class="col-lg-12 mb-4">
    <!-- Project Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Formulario</h6>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('guardar')}}" id="form_usuario" enctype="multipart/form-data">
            @csrf
            
            <input type='hidden' name='id' id='id_usuario' class='form-control' >
        
            <div class='row'>    
                    <div class='form-group col-md-6'>
                        <label for='nombres'><b>NOMBRES </b></label>
                        <input type='text' class='form-control' id='NOMBRES' name='NOMBRES'   required />
                    </div>

                    <div class=' form-group col-md-6'>
                        <!-- Email O NIT -->
                        <label for='EMAIL'><b>EMAIL</b></label>
                        <input type='text' class='form-control' id='EMAIL' name='EMAIL'   required />
                    </div>

                    <div class=' form-group col-md-6'>
                      <!-- Email O NIT -->
                      <label for='PASSWORD'><b>PASSWORD</b></label>
                      <input type='text' class='form-control' id='PASSWORD' name='PASSWORD'   required />
                  </div>
            </div>         

            <div class='row'>
            
                    <div class='form-group col-md-6'>
                        <label for='ROL'><b>ROL</b></label>
                        <select class='form-control' id='ROL' name='ROL' required>
                            <option value='' selected>Seleccione ...</option>      
                                <option value='1' selected >administrador</option>
                                <option value='2'>vendedor</option>  
                            </select>
                    </div>
            </div> 
                 <button type='submit' class='btn btn-primary' id='crear_usuarios'>Crear Usuario</button>  

            
          </form>
        </div>
      </div>
      <!-- Color System -->
    </div>
  </div>

</div>
  
  <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

  
  