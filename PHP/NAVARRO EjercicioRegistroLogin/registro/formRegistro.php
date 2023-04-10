
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Registro">
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
    <title>Registrate</title>

</head>

<body>
    <div id="subBody" class="container-fluid d-flex align-items-center" style="height: 100vh;">
        <div id="register" class="container">
            <form action="registro.php" method="POST" class="mt-2 mx-auto">
                <fieldset class="form-row reset p-4 align-items-center border border-primary ">
                    <legend class="reset text-primary px-2 py-1">Registrate</legend>
    
                    <div class="form-group row g-3 mt-1 mx-auto">
                        <label for="username" class="col-sm-2 col-form-label text-primary">Username:</label>
                        <div class="col-sm-10">
                            <input type="text" id="username" class="form-control text-info" name="username" required />
                        </div>
                    </div>
    
                    <div class="form-group row g-3 mt-1 mx-auto">
                        <label for="mail" class="col-sm-2 col-form-label text-primary">mail:</label>
                        <div class="col input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                              </div>
                            <input type="email" id="mail" class="form-control text-info" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                        </div>
                    </div>
    
                    <div class="form-group row g-3 mt-1 mx-auto">
                        <label for="password" class="col-sm-2 col-form-label text-primary">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" class="form-control text-info" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                title="Debe contener al menos un número y una mayúscula y una minúscula, y al menos 8 o más carácteres"/>
                        </div>
                    </div>

                    <div class="form-group row g-3 mt-1 mx-auto">
                        <label for="pkmn" class="col-sm-2 col-form-label text-primary">Selecciona Pokemon:</label><br />
                        <div class="col-sm-10">
                            <select name="pkmn" id="pkmn" class="form-control text-info">
                                <option value="bulbasaur">Bulbasaur</option>
                                <option value="squirtle">Squirtle</option>
                                <option value="charmander">Charmander</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mt-2 mx-auto">
                        <label for="desc" class="form-label text-primary">Descripcion: </label> <br />
                        <textarea id="desc" class="form-control text-info mt-2 w-10" name="desc" placeholder="Aqui va el cuerpo del mensaje..." rows="5" cols="40"
                            required></textarea>
                    </div>
    
                    <div class="row g-3 mt-2 w-25 mx-auto">
                        <a href="../index.html" class="mx-auto"> Y tu? ya estas registrado? LOGUEATE!</a>
                        <input id="sendBttn" class="btn btn-primary btn-lg" type="submit" value="Send" name="submit"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>