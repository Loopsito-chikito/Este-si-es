<?php
include('../../config/config.php');

$db = new Database;
  $connect = $db->getConnect();
  
$sql = "CALL v_usr()";

if (!$result = $connect->query($sql)) {
  echo "Falló la multiconsulta: (" . $connect->errno . ") " . $connect->error;
} else {
  $resultQuery = $result->fetch_all(MYSQLI_NUM);
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../../assets/img/icons/logo.png">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Food And Drink </title>

  <?php
  include('../assets/css/css.php');
  ?>
</head>

<body id="hola">
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="Navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../../assets/img/icons/logo.png" width="80" class="img-fluid" />
    </a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    </div>
  </div>
</nav>
  <div class="container">
    <form action="../../controller/login/login.php" method="POST">
      <div class="form-group">
        <label for="Correo">Email Users</label>
        <input type="email" class="form-control" id="Correo" name="Correo" aria-describedby="emailHelp"
          placeholder="Enter user" required>
        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
      </div>
      <div class="form-group">
        <label for="Contrasena">Password</label>
        <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Password" required >
      </div>
      <div class="form-group m-2">
        
      <button type="submit" class="btn btn-primary w-100">INICIAR SESIÓN</button>
      </div>
 
    </form>
  </div>
  <div class="bottom-0 end-0 w-100" style="background: #e2e6e9; text-align: center;">
    <a href="change_password.php">www.miempresa.com</a>
  </div>
  <?php
  include('../assets/js/js.php');
  
  ?>
</body>

</html>