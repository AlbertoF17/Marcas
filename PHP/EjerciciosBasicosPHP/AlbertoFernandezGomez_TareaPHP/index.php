<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Aplicacion de lista de tareas">
    <meta name="keywords" content="task, list, html, js, bootstrap">
    <meta name="language" content="EN">
    <meta name="author" content="joaquin.borrego@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, January 31th, 2023, 05:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Ejercicios Básicos PHP</title>

</head>

<body>
</body>
<?php require_once('header.php'); ?>
<?php include('methods.php'); ?>
<div class="separador"></div>
<form method="GET" action="#respuesta">
    <p><label><input type="checkbox" name="asignaturas[]" value="Base de Datos">Base de Datos</label></p>
    <p><label><input type="checkbox" name="asignaturas[]" value="Lenguaje de Marcas">Lenguaje de Marcas</label></p>
    <p><label><input type="checkbox" name="asignaturas[]" value="Entornos de Desarrollo">Entornos de Desarrollo</label>
    </p>
    <p><label><input type="checkbox" name="asignaturas[]" value="Programación">Programación</label></p>
    <p><label><input type="checkbox" name="asignaturas[]" value="FOL">FOL</label></p>
    <p><label><input type="checkbox" name="asignaturas[]" value="Sistemas Informáticos">Sistemas Informáticos</label>
    </p>
    <input type="submit" value="Enviar">
</form>
<h2 id="respuesta">
    <?php
    if (isset($_GET['asignaturas'])) {
        $asignaturas = $_GET['asignaturas'];
        echo 'Has aprobado: ';
        foreach ($asignaturas as $asignatura) {
            echo $asignatura . ', ';
        }
    }
    ?>
</h2>
<div class="separador"></div>
<?php
// Array asociativo con el nombre de la asignatura como clave y la nota del segundo trimestre como valor
$subGra = array(
    "Base de Datos" => 7,
    "Lenguaje de Marcas" => 4,
    "Entornos de Desarrollo" => 3,
    "Programación" => 6,
    "FOL" => 9,
    "Sistemas Informáticos" => 5
);

// Recorremos el array subGra para imprimir cada nombre de asignatura y su nota correspondiente
echo "<ul>";
foreach ($subGra as $asignatura => $nota) {
    echo "<li style='color: " . ($nota >= 5 ? "green" : "red") . ";'>" . $asignatura . ": " . $nota . "</li>";
}
echo "</ul>";
?>

</html>