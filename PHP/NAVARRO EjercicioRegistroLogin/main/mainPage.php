<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Main page">
    <meta name="keywords" content="html, css, sass, bootstrap, js, php">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- My scripts -->
    <script type="text/javascript" src="js/app.js" defer></script>

    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="../media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Main page</title>

</head>

<body>


<?php
    session_start();
?>

<?php if(isset($_SESSION["usuario"])): ?>
    <h1><?= $_SESSION['usuario']['username']?></h1>
<?php else: ?>
    <h1><?= "NO ESTAS LOGUEADO"?></h1>
<?php endif;?>
<a href="../login/logout.php">Logout</a>

  <div id="subBody" class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top" src="../media/img/charmander.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre usuario</h5>
              <p class="card-text">descripcion</p>
              <p class="card-text"><small class="text-muted">Created createDate</small></p>
            </div>
          </div>
    </div>
  <a href="../login/logout.php">LOGOUT</a>
  </div>
</body>

</html>