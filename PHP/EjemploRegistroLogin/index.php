<?php
    require_once("connection/connection.php");
    #Session ya iniciada en connection
?>
<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es mi portfolio personal">
    <meta name="keywords" content="html, css, sass, bootstrap, js, portfolio, proyectos">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Titulo -->
    <title>Pablote</title>

</head>

<body>


    <?php 
        if (isset($_SESSION["errores"])) {
            var_dump($_SESSION["errores"]);
        }
    ?>

<?php 
        if (isset($_SESSION["completado"])) {
            var_dump($_SESSION["completado"]);
        }
    ?>
    <form action="registro/registro.php" method="POST">
        <h2>Registro</h2>
        <label for="">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="">Email</label>
        <input type="mail" name="email" id="email" required>
        <label for="">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="submit" value="Enviar">
    </form>

    <hr>

    <?php 
        if (isset($_SESSION["error_login"])) {
            var_dump($_SESSION["error_login"]);
        }
    ?>
    <form action="login/login.php" method="POST">
        <h2>Login</h2>
        <label for="">Email</label>
        <input type="mail" name="emailLogin" id="emailLogin" required>
        <label for="">Password</label>
        <input type="password" name="passwordLogin" id="passwordLogin" required>

        <input type="submit" name="submit" value="Enviar">
    </form>

</body>
</html>