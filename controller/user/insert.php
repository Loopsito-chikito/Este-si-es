<?php
include("../../config/config.php");
function getValuesForSql(array $data) : string {
  return '"'. implode('", "', $data) . '"';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $db = new Database;
  $connect = $db->getConnect();
  // var_dump($_POST);
  $data = getValuesForSql($_POST);
  $sql = ("call sp_insert_user_two($data)");
  echo $sql;
  if ($connect->query($sql)) {
    // header('Location: ../../view/user/');
} else {
    echo "Ocurrió un error al insertar los registros: " . $connect->error;
}
$db->closeConnect();
}
?>