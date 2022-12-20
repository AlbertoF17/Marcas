// BOLETIN 1 salida por pantalla no se puede realizar

// BOLETIN 2
    console.log("BOLETIN 2")
    //1. Crear una variable entera e imprimirla por pantalla sin asignarle ningún valor.
    //¿Qué se ha impreso?
    console.log("Ejercicio 1: ")
    let variable1;
    console.log(variable1); //Se imprime "undefined"

    //2a. Crear una variable entera con el valor 0. Incrementar su valor en 3 unidades utilizando el operador
    //de suma + y asignación =, e imprimirla por pantalla.
    console.log("Ejercicio 2a: ")
    let valor0 = 0;
    valor0 += 3;
    console.log(valor0);

    //2b. Decrementar su valor en una unidad utilizando el operador de decremento --. Imprimirla por pantalla.
    console.log("Ejercicio 2b: ")
    valor0--;
    console.log(valor0);

    //3. Incrementar su valor en 4 unidades sin utilizar el operador de suma + y asignación =, e imprimirla por pantalla.
    console.log("Ejercicio 3: ")
    valor0++;
    valor0++;
    valor0++;
    valor0++;
    console.log(valor0);

    //4. Crear otra variable entera y asignarle el valor 48.76.
    console.log("Ejercicio 4: ")
    let var1 = 48.76;

    //5. Modificarla dividiendo por 50 e imprimir el resultado por pantalla.
    console.log("Ejercicio 5: ")
    var1 = var1 / 50;
    console.log(var1);

    //6. Modificarla sumándole 1 y multiplicando por 48 e imprimir el resto de dividirla entre 46.
    console.log("Ejercicio 6: ")
    var1 = ((var1 + 1) * 48);
    console.log(var1 % 46);

    //7. Sin modificar el valor de la variable, imprimir por pantalla el resultado de elevarla al cuadrado.
    console.log("Ejercicio 7: ")
    console.log(var1 * var1);
    console.log(Math.pow(var1, 2));

    //8. Crear dos variables de tipo float, dándoles un valor inicial e imprimiéndolas por pantalla.
    console.log("Ejercicio 8: ")
    let x = prompt("Introduzca el primer numero: ");
    let y = prompt("Introduzca el segundo numero: ");
    console.log("El primer numero vale: " + x + "\n" + "El segundo numero vale: " + y);

    //9. Imprimir por pantalla el resultado de comprobar si la primera es mayor que la segunda.
    console.log("Ejercicio 9: ")
    console.log(x > y); //false significa q x es menor que y; true significa que y es menor que x

    //10. Cambiar la primera con el valor de la segunda multiplicado por dos, y volver a imprimir por pantalla
    //el resultado de la comprobación anterior.
    console.log("Ejercicio 10: ")
    x = y * 2;
    console.log(x > y);

    //11. Imprimir por pantalla el resultado de comprobar si la primera es menor o igual que la segunda.
    console.log("Ejercicio 11: ")
    console.log(x <= y);

    //12. Repetir el ejercicio anterior pero almacenando el resultado de la comprobación
    //en una variable, e imprimiendo después por pantalla dicha variable.
    console.log("Ejercicio 12: ")
    let menorIgual = x <= y;
    console.log(menorIgual);

// BOLETIN 3
    console.log("BOLETIN 3");
    //1. Lee por pantalla un nombre y almacénalo en una variable. Imprime la variable por pantalla.
    console.log("Ejercicio 1: ")
    let nombre = prompt("Introduzca su nombre: ");
    console.log("Su nombre es: " + nombre);

    //2. Lee por pantalla una edad y almacénalo en una variable. Imprime la variable por pantalla.
    console.log("Ejercicio 2: ")
    let edad = prompt("Introduzca su edad: ");
    console.log("Su edad es: " + edad);

    //3. ¿Pueden modificarse los ejercicios anteriores para ahorrarse la variable?
    console.log("Ejercicio 3: (no)")
    //No

    //4.a Lee por pantalla una temperatura en grados Celsius e imprímela por pantalla.
    console.log("Ejercicio 4a: ")
    let temp = Number.parseInt(prompt("Introduzca una temperatura en Celsius"));
    console.log("La temperatura es: " + temp + " grados");

    //4.b Repite, pero imprimiendo por pantalla en grados Kelvin (hay que convertir).
    console.log("Ejercicio 4b: ")
    console.log(temp + " grados Celsius son " + (temp + 273.15) + " grados Kelvin");

    //5. Crea un programa que calcule el área de un rectángulo (base x altura),
    //pidiendo por pantalla los datos necesarios.
    console.log("Ejercicio 5: ")
    let base = Number.parseInt(prompt("Introduzca la base del rectángulo: "));
    let altura = Number.parseInt(prompt("Introduzca la altura del rectángulo: "));
    console.log("El area del rectángulo es: " + (base * altura)/2 + " metros cuadrados");

    //6. Crea un programa que calcule el Índice de Masa Corporal (IMC), pidiendo
    //por pantalla los datos necesarios.
    console.log("Ejercicio 6: ")
    let peso = Number.parseInt(prompt("Introduzca su peso en kilos: "));
    let alto = Number.parseInt(prompt("Introduzca su altura en metros: "));
    let IMC = peso / (alto * alto);
    console.log("Su IMC es: " + IMC);
    if (IMC < 18.5) {
        console.log("Usted es calificada como persona de bajo peso");
    } else if (IMC >= 18.5 && IMC <= 24.9) {
        console.log("Usted es calificada como persona con peso normal");
    } else if (IMC >= 25 && IMC <= 29.9) {
        console.log("Usted es calificada como persona con sobrepeso");
    } else {
        console.log("Usted es calificada como persona con obesidad");
    }

    //7. Crea un programa que lea el precio sin IVA de un producto e imprima
    //el valor final con IVA del mismo.
    console.log("Ejercicio 7: ")
    let precio = Number.parseInt(prompt("Introduzca el precio sin IVA: "));
    console.log("El precio con IVA es: " + (precio * 1.21));

    //8. Crea un programa que lea el precio sin IVA de tres productos e imprima
    //el valor total con IVA que paga el comprador, así como el valor medio con y sin IVA.
    console.log("Ejercicio 8: ")
    let prod1 = Number.parseInt(prompt("Introduzca el precio sin IVA del producto 1: "));
    let prod2 = Number.parseInt(prompt("Introduzca el precio sin IVA del producto 2: "));
    let prod3 = Number.parseInt(prompt("Introduzca el precio sin IVA del producto 3: "));
    let precioSinIVA = prod1 + prod2 + prod3;
    let precioConIVA = precioSinIVA * 1.21;
    console.log("El valor total de la compra (IVA incluido) es: " + precioConIVA + "euros");
    console.log("El valor medio del precio con/sin IVA es: " + (precioSinIVA + precioConIVA) / 2 + "euros");

    //9. Crea un programa que lea el nombre de una persona, y a continuación su edad
    //y altura, e imprima todo por pantalla en una misma línea. ¿Funciona?
    console.log("Ejercicio 9: ")
    let nombre1 = prompt("Introduzca su nombre: ");
    let edad1 = prompt("Introduzca su edad");
    let altura1 = prompt("Introduzca su altura: ");
    console.log("Nombre: " + nombre1 + "; Edad: " + edad1 + "; Altura: " + altura1);

    //10. Repita el ejercicio anterior pero leyendo primero los números y después el nombre. ¿Funciona?
    let edad2 = prompt("Introduzca su edad: ");
    let altura2 = prompt("Introduzca su altura: ");
    let nombre2 = prompt("Introduzca su nombre: ");
    console.log("Edad: " + edad2 + "; Altura: " + altura2 + "; Nombre: " + nombre2);