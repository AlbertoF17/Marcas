<?php 
    require_once("../connection/connection.php");

    if ($_POST["submit"]) {
        $mail = isset($_POST["emailLogin"]) ? mysqli_real_escape_string($connect, trim($_POST["emailLogin"])) : false;
        $pass = isset($_POST["passwordLogin"]) ? $_POST["passwordLogin"] : false;
    
    }

    $sql = "SELECT * FROM socialpkmn.users WHERE email = '$mail'";
    $res = mysqli_query($connect, $sql);

    if ($res && mysqli_num_rows($res) == 1) {
        $usuario = mysqli_fetch_assoc($res);

        if (password_verify($pass, $usuario["pass"])) {
            $_SESSION["usuario"] = $usuario;
            header("Location: ../main/mainPage.php");
        } else {
            $_SESSION["error_login"] = "Contraseña incorrecta";
            header("Location: ../index.php");
        }

    } else {
        $_SESSION["error_login"] = "No esta registrado ese mail";
        header("Location: ../index.php");
    }
    
?>