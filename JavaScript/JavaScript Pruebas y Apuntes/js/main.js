//pop-up
alert("Hola Mundo");

//Variables
let nombre = "Alberto";
var apellido1 = "Fernández"; //NO USAR, JAVASCRIPT ANTIGUO
const pi = 3.1416; //VALOR INCAMBIABLE
let n = 1;

//Mostrar por consola
console.log("Hola Mundo");
console.clear();
console.warn("Estás intentando cambiar el valor de una constante");
console.error("Esto es un error");

//Pedir variables STRING
let x = prompt("Introduce tu nombre: ", "Alberto"); //El segundo parámetro es valor por defecto
let y = prompt("num1: ");
let z = prompt("num2: ");
alert("num 1 es: " + y + "; num 2 es: " + z + ".")

//Pedir variables BOOLEANS
let a = confirm("Es verdadero o falso? ")

//Pedir variables NUMÉRICAS
let num1 = Number.parseInt(prompt("Escribe un numero: "));

// Template
let template = `El número es: ${num1}`;
alert(template);

//Comparador
alert("1" === 1); //Va a dar FALSE
alert("1" !== 1); //Va a dar TRUE
alert("1" == 1); //Va a dar TRUE

//Variables undefined y null
let nulo = null;
let indefinido = undefined;

//Cálculo tiempo
console.time("tiempo");
console.timeEnd("tiempo: ")

//Operadores ternarios
let bool2 = bool ? "bool es verdadero":"bool es falso";

//IF (igual que en JAVA)

//Switch (igual que en JAVA)

//FOR (igual que en JAVA)

//WHILE (igual que en JAVA)

//DO WHILE (igual que en JAVA)

//Interactuar con HTML

let div = document.querySelector("#NombreDeID");
div.innerHTML = `<p> Hola </p>`;
alert("Parando la ejecución");
div.innerHTML = ``;