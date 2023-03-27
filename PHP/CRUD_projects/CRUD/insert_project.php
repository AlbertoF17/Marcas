<?php
include("connection.php");
$con = connection();

if (isset($_POST["name"]) && isset($_POST["technologies"]) && isset($_POST["img"]) && isset($_POST["descripcion"]) && isset($_POST["enlace"])) {
  $name = $_POST["name"];
  $technologies = $_POST["technologies"];
  $img = $_POST["img"];
  $description = $_POST["descripcion"];
  $link = $_POST["enlace"];

  // Convertir la cadena de tecnologías a un arreglo
  $technologies_array = json_decode($technologies);

  // Verificar si la conversión fue exitosa
  if ($technologies_array === null) {
    echo "Error: Las tecnologías deben estar en formato JSON";
    exit();
  }

  // Insertar el nuevo proyecto en la base de datos
  $sql = "INSERT INTO projects (name, technologies, img, description, link) VALUES ('$name', '$technologies', '$img', '$description', '$link')";
  $query = mysqli_query($con, $sql);

  if ($query) {
    header("Location: ../index.php");
    exit;
  } else {
    echo "Ocurrió un error al insertar el proyecto";
  }
} else {
  echo "No se proporcionaron todos los datos necesarios";
}
?>