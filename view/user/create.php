<?php
include("../../config/config.php");

// $sql = "SELECT * FROM `document_type` WHERE 1;";
// $sql .= "SELECT * FROM `gendertype` WHERE 1;";
// $sql .= "SELECT * FROM `status` WHERE 1;";
// $resultArray = array();
// if (!$connect->multi_query($sql)) {
//   echo "Falló la multiconsulta: (" . $connect->errno . ") " . $connect->error;
// }

// do {
//   if ($result = $connect->store_result()) {


//     $resultQuery = $result->fetch_all(MYSQLI_NUM);
//     array_push($resultArray, $resultQuery);

//     $result->free();
//   }
// } while ($connect->more_results() && $connect->next_result());
// $resultDocumentType = $resultArray[0];
// $resultGenderType = $resultArray[1];
// $resultStatus = $resultArray[2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRAR USUARIO</title>
  <!--Etiqueta de enlace con los estilos <link>-->
  <!--Include css php-->
  <?php
  include('../assets/css/css.php');
  ?>
</head>
<!--El cuerpo representa la parte visible de todo documento y es especificado entre etiquetas <body>-->

<body>
  <!--nav-->
  <!--Include nav php-->
  <?php
 
  ?>
  <!--End nav-->
  <!--Container-->
  <div class="container">

    <div id="sectionOne" class="sectionOne" name="sectionOne">
      <!--Etiqueta h2 de titulo <h2>-->
      <h2>REGISTRAR USUARIO</h2>

      <form name="formUser" method="POST" action="../../controller/user/insert.php" id="formUser" class="row">
       
        <!-- <input type="hidden" value="" id="IdUsuario" name="IdUsuario" /> -->

        <div class="col-4">
          <div class="form-floating">
            <select class="form-select" id="TipoDocumento" name="TipoDocumento" aria-label="Floating label select example">
              <option selected>CC</option>
              <option selected>TI</option>
            </select>
            <label for="TipoDocumento">Tipo de Documento</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="number" class="form-control form-control-sm" id="NoDocumento" name="NoDocumento"
              placeholder="Digitar Documento" required>
            <label for="NoDocumento">Digitar Documento</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre"
              placeholder="Digitar Nombre" required>
            <label for="Nombre">Digitar Nombre</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="text" class="form-control form-control-sm" id="Apellido" name="Apellido"
              placeholder="Digitar Apellido" required>
            <label for="Apellido">Digitar Apellido</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="text" class="form-control form-control-sm" id="Direccion" name="Direccion"
              placeholder="Direccion" required>
            <label for="Direccion">Direccion</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="number" class="form-control form-control-sm" id="Telefono" name="Telefono"
              placeholder="Digitar Número de Celular" required>
            <label for="Telefono">Digitar Número de Celular</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="email" class="form-control form-control-sm" id="Correo" name="Correo"
              placeholder="Digitar Correo Electrónico" required>
            <label for="Correo">Digitar Correo Electrónico</label>
          </div>
        </div>
        
        <div class="col-4">
          <div class="form-floating mb-1">
            <input type="password" class="form-control form-control-sm" id="Contrasena" name="Contrasena"
              placeholder="Fecha de Nacimiento" required>
            <label for="Contrasena">Contraseña</label>
          </div>
        </div>

        <!-- <div class="col-4">
          <div class="form-floating mb-1">
            <input type="text" class="form-control form-control-sm" id="Estado" name="Estado"
              placeholder="Estado" required>
            <label for="Estado">Estado</label>
          </div>
        </div> -->
        
        <div class="col-4">
          <div class="form-floating">
            <select class="form-select" id="Estado" name="Estado" aria-label="Floating label select example">
              <option selected>Activo</option>
              <option selected>Inactivo</option>
            </select>
            <label for="Estado">Estado</label>
          </div>
        </div>

        <div class="col-4 text-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

        

      </form>
  
    </div>

  </div>

  <div class="bottom-0 end-0 w-100" style="background: #e2e6e9; text-align: center;">
    <a href="#">www.miempresa.com</a>
  </div>
  <?php
  include('../assets/js/js.php');
  ?>
  
</body>

</html>
<!--  -->