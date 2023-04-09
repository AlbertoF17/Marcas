<?php 

    if (isset($_POST["submit"])) {
        require_once("../connection/connection.php");
        $con = connection();

        $username = isset($_POST["username"]) ? mysqli_real_escape_string($con, trim($_POST["username"])) : false;
        $mail = isset($_POST["email"]) ? mysqli_real_escape_string($con, trim($_POST["email"])) : false;
        $pass = isset($_POST["password"]) ? mysqli_real_escape_string($con, $_POST["password"]) : false;

        $arrayErrores = array();
        if (!empty($username) && !is_numeric($username) && strlen($username) > 2) {
            $usernameValidado = true;
        } else if (empty($username)) {
            $usernameValidado = false;
            $arrayErrores["username"] = "El username esta vacio";
        } else if (strlen($username) <= 2) {
            $usernameValidado = false;
            $arrayErrores["username"] = "El username es muy corto";
        } else {
            $usernameValidado = false;
            $arrayErrores["username"] = "El username no debe ser numerico";
        }

        if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mailValidado = true;
        } else {
            $mailValidado = false;
            $arrayErrores["mail"] = "El mail no es valido";
        }

        if (!empty($pass) && strlen($pass) > 8) {
            $passValidado = true;
        } else {
            $passValidado = false;
            $arrayErrores["password"] = "El password no es valido";
        }

        if ($usernameValidado && $mailValidado && $passValidado) {
            $_SESSION["errores"] = null;
            unset($_SESSION["errores"]);
            $passSegura = password_hash($pass, PASSWORD_BCRYPT, ["cost" => 8]);
            $sql = "INSERT INTO socialpkmn.users VALUES(null, '$username', '$mail', '$passSegura', CURDATE());";
            $guardar = mysqli_query($con, $sql);
    
            if ($guardar) {
                $_SESSION["completado"] = "Registro completado";
            } else {
                $_SESSION["errores"]["general"] = "Fallo en el registro";
            }
        } else {
            $_SESSION["errores"] = $arrayErrores;
        }
        header("Location: ../index.php");
    }
?>