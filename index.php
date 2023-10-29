<?php
include("config/config.php");

// $sql = "SELECT * FROM role ;";
// $sql .= "SELECT * FROM userstatus;";

// $resultArray = array();

// if (!$connect->multi_query($sql)) {
//   echo "Falló la multiconsulta: (" . $connect->errno . ") " . $connect->error;
// } else {
//   do {
//     if ($result = $connect->store_result()) {
//       $resultQuery = $result->fetch_all(MYSQLI_NUM);
//       array_push($resultArray, $resultQuery);
//       $result->free();
//     }
//   } while ($connect->more_results() && $connect->next_result());
//   $userRole = $resultArray[0];
//   $userStatus = $resultArray[1];

//   $connect->close();


// }
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

  <title>Bienvenido</title>
</head>

<body>
  <!--Container start-->
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="d-grid gap-2 col-6">
      <a href="view/login/index.php"><button class="btn btn-primary" type="button">Iniciar sesion</button></a>
      
      <a href="view/user/create.php"><button class="btn btn-primary" type="button">Crear cuenta</button></a>
      
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>