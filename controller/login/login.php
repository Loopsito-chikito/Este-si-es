<?php

include("../../config/config.php");
$UserPassword= $_REQUEST['Contrasena'];
$UserUser= $_REQUEST['Correo'];
$sql = "CALL C_UsuarioCP ('$UserUser', '$UserPassword')";
$routeResut="Location: ../../view/home/";
$query = $connect->query($sql);

if ($query) {
    if ($query->num_rows > 0) {
        // Hay resultados, puedes acceder a $result[0] con seguridad.
        $result = $query->fetch_all(MYSQLI_ASSOC);
        // $IdUsuario = $result[0]['IdUsuario'];
        $Contrasena = $result[0]['Contrasena'];
        // $sta_id = $result[0]['Estado'];
        // Resto del código...
        header( $routeResut);  
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "Error en la consulta: " . $connect->error;
}

?>

