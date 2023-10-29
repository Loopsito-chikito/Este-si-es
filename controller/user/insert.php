<?php
include("../../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = $_REQUEST['Nombre'];
  $userLastName = $_REQUEST['Apellido'];
  $userDocument = $_REQUEST['NoDocumento'];
  $userEmail = $_REQUEST['Correo'];
  $userCellphone = $_REQUEST['Telefono'];
  $userAddress = $_REQUEST['Correo']; 
  $userPassword = password_hash($_REQUEST['Contrasena'], PASSWORD_DEFAULT);
  $status = $_REQUEST['Estado'];
  $documentType = $_REQUEST['TipoDocumento'];
  
  $stmt = $connect->prepare("sp_insert_user_two(?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssissssss", $userName, $userLastName, $userDocument, $userEmail, $userCellphone, $userAddress, $userPassword, $status, $documentType);

  if ($stmt->execute()) {
    echo "Los registros se crearon exitosamente";
    header('Location: ../../view/user/');
    exit;
} else {
    echo "Ocurrió un error al insertar los registros: " . $stmt->error;
}

$stmt->close();
$connect->close();
}
?>
