<?php
    include("php/metodos.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera clase de php</title>
</head>
<body>
    <h1>Primera clase</h1>
    <h2>Código HTML</h2>
    <h2><?php echo "Código PHP"; ?></h2>
    <h2><?php print("Otro código PHP"); ?></h2>
    <h2><?="Atajo para imprimir código PHP"; ?></h2>

    <?php
        # Comentario

        //Otro comentario

        /*
            Comentario
            Multilinea
        */

        echo "<!-- Esto es un comentario en HTML-->";

        # Variables
        $variable0 = "Mundo";
        $variable1 = "Hola $variable0";
        $variable2 = 2023;
        $variable3 = 1.1;
        $variable4 = true;

        # Concatenar
        echo $variable1." ".$variable2." version ".$variable3." True o false?:".$variable4;

        #Constantes
        define("constante1", "Esto es una constante");

        echo " Valor de la constante1: ".constante1;

        #Operadores
        $a = 15;
        $b = 5;
    ?>
    <h2>Operaciones con <?= $a." y ".$b;?>:</h2>
    <ul>
        <li><?= "Suma ".($a+$b);?></li>
        <li><?= "Resta ".($a-$b);?></li>
        <li><?= "Multiplicacion ".($a*$b);?></li>
        <li><?= "Division ".($a/$b);?></li>
        <li><?= "Resto ".($a%$b);?></li>
    </ul>
    <?php
        $a++;
        echo "Incremento: ".$a;
        $b--;
        echo ". Decremento: ".$b;
        $a+=4;
        echo ". Sumar y asignar: ".$a;
    ?>
    <h2>Comparadores con <?= $a." y ".$b;?>:</h2>
    <ul>
        <li><?= "Igualdad: ".($a === $b);?></li>
        <li><?= "Desigualdad: ".($a !== $b);?></li>
        <li><?= "Mayor o igual que: ".($a >= $b);?></li>
        <li><?= "Menor o igual que: ".($a <= $b);?></li>
    </ul>
    <?php
        $bool1 = true;
        $bool2 = false;
    ?>
    <h2>Operadores lógicos con <?= $bool1." y ".$bool2;?>:</h2>
    <ul>
        <li><?= "AND: ".($bool1 && $bool2);?></li>
        <li><?= "OR: ".($bool1 || $bool2);?></li>
        <li><?= "NOT: ".(!$bool2);?></li>
    </ul>
    <hr />
    <h2>Formulario GET</h2>
    <form action="#resultadoForm" method="GET">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre"/>
        <input type="text" id="edad" name="edad" placeholder="Edad"/>
        <input type="submit" value="Enviar" />
    </form>

    <h2>Formulario POST</h2>
    <form action="#resultadoForm" method="POST">
        <input type="text" id="apellido" name="apellido" placeholder="Apellido"/>
        <input type="submit" value="Enviar" />
    </form>

    <div id="resultadoForm">

        <?php
            # Variables de servidor

            #GET
            $nombre = $_GET["nombre"];
            echo " Tu nombre es ".$nombre;

            #POST
            $apellido = $_POST["apellido"];
            echo ". Tu apellido es ".$apellido;

            #Condicionales
            if (isset($_GET["edad"])) {
                $edad = (int) $_GET["edad"];
            } else {
                $edad = 0;
            }
        ?>

        <hr />
        <?php var_dump($_GET); ?>
        <hr />
        <?php var_dump($_POST); ?>
        <hr />

        <h2><?php
            if ($edad >= 18) {
                echo "Acceso permitido.";
            } elseif ($edad == 18) {
                echo "Acceso permitido por lo justo.";
            } else {
                echo "Acceso denegado.";
            }
        ?></h2>

        <!-- Otra forma:-->
        <?php if ($edad > 18): ?>
            <h2>Acceso permitido.</h2>
        <?php elseif ($edad == 18): ?>
            <h2>Acceso permitido por lo justo.</h2>
        <?php else: ?>
            <h2>Acceso denegado.</h2>
        <?php endif; ?>

    </div>

    <h2>Elige tu clase:</h2>
    <form action="#eleccion" method="GET">
        <input type="radio" name="option" id="elfo" value="elfo" />
        <label for="option1">elfo</label>
        <input type="radio" name="option" id="mago" value="mago" />
        <label for="option2">mago</label>
        <input type="submit" value="Enviar" />
    </form>

    <div id="eleccion">
        <?php
            $option = $_GET["option"];
            switch ($option) {
                case "elfo": echo "Has elegido elfo.";
                            break;
                case "mago": echo "Has elegido mago.";
                            break;
                default: echo "No has elegido nada.";
                        break;
            }
        ?>
    </div>

    <!-- Otra forma:-->
    <?php switch ($_GET["option"]):
        case "elfo": ?>
        <h2>Has elegido elfo.</h2>
    <?php break; case "mago": ?>
        <h2>Has elegido mago.</h2>
    <?php break; default: ?>
        <h2>No has elegido nada.</h2>
    <?php break; endswitch; ?>

    <h4><?= "Voy a saltarme 4 instrucciones echo";?></h4>

    <?php
        goto etiqueta;

        echo "Echo 1";
        echo "Echo 2";
        echo "Echo 3";
        echo "Echo 4";

        etiqueta:
        echo "Echo 5";
    ?>
    <hr />
    <?php
        $numero = 0;
        while ($numero <= 10) {
            echo $numero." ";
            $numero++;
        }

        $numero = 0;
    ?>

    <?php while ($numero <= 10):?>
        <h4><?= $numero; ?></h4>
    <?php $numero++; endwhile; ?>

    <?php
        $numero = 0;
        do {
            echo $numero." ";
            $numero++;
        } while ($numero <= 10);

        $numero = 0;
    ?>

    <!-- No hay version alternativa del do-while -->
    <br />

    <?php
        for ($i = 0; $i <=10; $i++) {
            echo $i." ";
        }
    ?>

    <?php for($i = 0; $i <=10; $i++):?>
        <h4><?= $i; ?></h4>
    <?php endfor ?>

    <hr />
    <?php
        #Funciones
        function holaMundo() {
            echo "Hola Mundo ";
        }

        holaMundo();

        function getVar($var) {
            if (isset($_GET[$var])) {
                $res = $_GET[$var];
            } else {
                $res = 0;
            }
            return $res;
        }

        $parametro = getVar("param");

        echo $parametro." ";

        function getVarDefault($var, $def = 0) {
            if (isset($_GET[$var])) {
                $res = $_GET[$var];
            } else {
                $res = $def;
            }
            return $res;
        }

        $parametro = getVarDefault("param");

        echo $parametro." ";

        $parametro = getVarDefault("param", 4);

        echo $parametro." ";
    ?>
    <hr />
    <?php
        #Arrays
        $arrayEjemplo = array("ejemplo1", "ejemplo2");
        for ($i = 0; $i < count($arrayEjemplo); $i++) {
            echo $arrayEjemplo[$i]." ";
        }

        echo "// ";

        foreach ($arrayEjemplo as $e) {
            echo $e." ";
        }

        $profes = ["MariFer", "Jorge", "Ramon", "Joaquin"];
    ?>

    <ul>
        <?php foreach($profes as $i):?>
            <li><?= $i; ?></li>
        <?php endforeach ?>
    </ul>

    <?php
        #Arrays asociativos o diccionarios
        $engEsp = array(
            "Hello" => "Hola",
            "World" => "Mundo"
        );
        
        foreach ($engEsp as $eng => $esp) {
            echo "English: ".$eng.", Español: "."$esp"."//";
        }

        #Arrays multidimensionales
        $matriz = [[1,2,3], [4,5,6], [7,8,9]];
    ?>

    <table style="border-collapse: collapse; ">
        <?php for($i = 0; $i <count($matriz); $i++):?>
            <tr>
                <?php for($j = 0; $j <count($matriz[$i]); $j++):?>
                    <td style="border: solid 1px black;"><?= $matriz[$i][$j];?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>


    <!-- Funciones predefinidas -->
    <h3>Funciones predefinidas:</h3>
    <ul>
        <li><?= date("d-m-Y"); ?></li>
        <li><?= time(); ?></li>
        <li><?= "Raiz Cuadrada de 9: ".sqrt(9); ?></li>
        <li><?= "Aleatorio entre 5 y 20: ".rand(5, 20); ?></li>
        <li><?= "Pi: ".pi(); ?></li>
        <li><?= "Redondear: ".round(7.893435); ?></li>
        <li><?= "Redondear con dos decimales: ".round(7.893435, 2); ?></li>
        <li><?= "Tipo variable: ".gettype(3.4); ?></li>
        <li><?= "Es un string?: ".is_string("Hola"); ?></li>
        <li><?= "Es un float?: ".is_float(2.3); ?></li>
        <li><?= "Existe?: ".isset($numero); ?></li>
        <?php
            #Eliminar variable
            unset($numero);
        ?>
        <li><?= "Variable eliminada?: ".(!$numero); ?></li>
        <li><?= "Quitar espacios delante y detras: ".trim("      a          "); ?></li>
        <li><?= "Esta vacia?: ".empty(""); ?></li>
        <li><?= "Longitud cadena: ".strlen("cadena"); ?></li>
        <li><?= "Posicion de subcadena en cadena: ".strpos("cadena", "de"); ?></li>
        <li><?= "Reemplazar maravilla por mierda: ".str_replace("maravilla", "mierda", "La lluvia en Sevilla es pura maravilla"); ?></li>
        <li><?= "Mayus: ".strtoupper("mayusculas"); ?></li>
        <li><?= "Minus: ".strtolower("MINUSCULAS"); ?></li>
        <li>
            <?php
                #Ordenar elementos de array
                sort($profes);
                echo "Ordenar arrays: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li>
            <?php
                #Añadir elemento a array
                array_push($profes, "profeNuevo");
                echo "Añadir elemento a array: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li>
            <?php
                #Borrar ultimo elemento del array
                array_pop($profes);
                echo "Borrar ultimo elemento del array: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li>
            <?php
                #Borrar un elemento del array
                unset($profes[0]);
                echo "Borrar un elemento del array: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li><?= "Indice aleatorio: ".(array_rand($profes)) ?></li>
        <li>
            <?php
                #Array invertido
                echo "Array invertido: ";
                foreach (array_reverse($profes) as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li><?= "Buscar en array: ".(array_search("Jorge", $profes)) ?></li>
        <li><?= "Tamaño del array: ".(sizeof($profes)) ?></li>
    </ul>

    <?php
        #include (se pone al principio del archivo el fichero a importar. Tras esto, podemos usar sus metodos)
        imprimirArray($profes);
    ?>
    <hr />
    <?php
        #Tambien podemos incluir trozos de codigo, pero eso no iria al principio sino en el momento en el que lo quieras importar:
        include("php/card.php");
        include("php/card.php");

        #Para cosas unicas como la cabecera, h1, main... usar include_once()
        include_once("php/main.php");
        include_once("php/main.php");

        #Si es imprescindible que exista ese codigo en tu archivo, usar require() o require_once(). Es mas recomendable que include
        require("php/required.php");
    ?>
</body>
</html>