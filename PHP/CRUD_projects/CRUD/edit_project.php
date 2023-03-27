<?php
// Incluir archivo de conexión a la base de datos
include("connection.php");
$con = connection();

// Validar datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $technologies = $_POST['technologies'];
    $img = $_POST['img'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    // Validar los datos según tus necesidades

    // Actualizar el registro en la base de datos
    $query = "UPDATE projects SET name='$name', technologies='$technologies', img='$img', description='$description', link='$link' WHERE id=$id";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: proyectos.php');
        exit;
    } else {
        $error_message = "Error al actualizar el proyecto: " . mysqli_error($conexion);
    }
}

// Mostrar el formulario de actualización
// Aquí deberás mostrar el formulario de actualización, incluyendo los campos prellenados con los datos actuales del proyecto
?>
