<?php
include("../../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $IdUsuario = $_POST["IdUsuario"];
    $TipoDocumento = $_POST["TipoDocumento"];
    $NoDocumento = $_POST["NoDocumento"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Direccion = $_POST["Direccion"];
    $Telefono = $_POST["Telefono"];
    $Correo = $_POST["Correo"];
    $Contrasena = $_POST["Contrasena"];
    $Estado = $_POST["Estado"];

    // Llama al procedimiento almacenado
    $sql = "CALL sp_insert_user('$IdUsuario', '$TipoDocumento', '$NoDocumento', '$Nombre', '$Apellido', '$Direccion', '$Telefono', '$Correo', '$Contrasena', '$Estado')";

    if ($connect->multi_query($sql)) {
        do {
            if ($result = $connect->store_result()) {
                while ($row = $result->fetch_assoc()) {
                    if (isset($row['errorMessage'])) {
                        echo "Usuario registrado exitosamente.";
                    } elseif (isset($row['errorMesasage'])) {
                        echo "Error: Ya existe un usuario con el mismo correo.";
                    }
                }
                $result->free();
            }
        } while ($connect->more_results() && $connect->next_result());
    } else {
        echo "Error en la consulta: " . $connect->error;
    }

    $connect->close();
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <!--Container start-->
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <form action="../../controller/user/create.php" method="POST">
          <!--Form start-->
          <input type="hidden" class="form-control" id="IdUsuario" name="IdUsuario" value="null" placeholder="" Required>
          <div class="card mx-auto" style="width: 90%;">

          <div class="card-body">
              <h5 class="card-title">Crear Usuario</h5>
              <div class="mb-3 ">
                <label for="User_user" class="form-label">Tipo de documento</label>
                <input type="text" class="form-control" id="TipoDocumento" name="TipoDocumento" placeholder="CC, TI.."
                  Required>
              </div>
              <div class="mb-3">
                <label for="User_password" class="form-label">Numero de documento </label>
                <input type="number" class="form-control" id="NoDocumento" name="NoDocumento" placeholder="123456789"
                  Required>
              </div>
              <div class="mb-3">
                <label for="User_password_repeat" class="form-label">Nombre </label>
                <input type="text" class="form-control" id="Nombre" name="Nombre"
                  placeholder="Mauro" Required>
              </div>
              <div class="mb-3">
                <label for="User_password_repeat" class="form-label">Apellido </label>
                <input type="text" class="form-control" id="Apellido" name="Apellido"
                  placeholder="Rojas" Required>
              </div>
              <div class="mb-3">
                <label for="User_password_repeat" class="form-label">Direccion </label>
                <input type="text" class="form-control" id="Direccion" name="Direccion"
                  placeholder="calle falsa #123" Required>
              </div>
              <div class="mb-3">
                <label for="User_password_repeat" class="form-label">telefono </label>
                <input type="number" class="form-control" id="Telefono" name="Telefono"
                  placeholder="313 123123132" Required>
              </div>
              <div class="mb-3">
                <label for="User_password_repeat" class="form-label">Correo </label>
                <input type="email" class="form-control" id="Correo" name="Correo"
                  placeholder="example@gmail.com" Required>
              </div>
              <div class="mb-3">
                <label for="User_password_repeat" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="Contrasena" name="Contrasena"
                  placeholder="ultrasecreto" Required>
              </div>


              <div class="mb-3">

                <button type="submit" class="btn btn-success">Success</button>
              </div>
            </div>
          </div>
        </form> 
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>