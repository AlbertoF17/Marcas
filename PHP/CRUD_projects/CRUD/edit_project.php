<?php
include("connection.php");
$con = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $technologies = $_POST['technologies'];
    $img = $_POST['img'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    $query = "UPDATE projects SET name='$name', technologies='$technologies', img='$img', description='$description', link='$link' WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: ../index.php');
        exit;
    } else {
        $error_message = "Error al actualizar el proyecto: " . mysqli_error($conexion);
    }
}

?>
