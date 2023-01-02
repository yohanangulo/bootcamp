// imprimiendo un sms por consola



console.log('Hola desde otro archivo');

// Variables
// son contenedores de informacion

// var son variables globales
var x = 6;
var y = 7;
var resultado = x + y;

// let son variables locales
let h = 'hola';

//const son constantes que tienen un alcance local
const pi = 3.14;


// Ejemplos de alcance

if (true) {
  var global = "variable global";
  let local = "variable local"; // no existe fuera de este bloque de codigo
  const pi2 = 3.14; // son constantes y no se pueden cambiar mas dentro del codigo, tienen el mismo alcance que let
}

console.log(global);
console.log(local); // esta variable aqui no existe


// tipos de datos
x = 1; //int (numero entero)
console.log(x);

x = 2.5 //float (numero decimal)
console.log(x);

x = 'hola' // string (cadena de caracteres)
console.log(x);

x = true //booleano (verdadero o falso)
console.log(x);

x = {nombre: 'yohan', apellido: 'apellido', edad:24}; //objeto
console.log(x);
console.log(x.nombre);

x = ['banana', 'manzana', 'pera', 'cambur', 'uva']; //array
console.log(x);
console.log(x[0]); // como imprimir un valor de un array

x = null; //Nulo, no es ninguno de los tipos de datos anteriores
x = undefined; // indefinido




// cosas curiosas de los tipos de datos
x = 2
console.log(null + 2)

x = 2 + "2"; // adivina que arroja en la consola
x = "Salu" + "2"; // adivina que arroja en la consola

// Para practicar un poco de como acceder a los obetos
x = [
  {
    carnes: ["bisteck", "molida", "guisada"],
  },
  {
    charcuteria: ["jamon", "queso", "huevos"],
  },
];

console.log(x[1].charcuteria[1]);

x = [['elemento11', 'elemento12'], ['elemento21', 'elemento22']];

// condicionales
// estos nos permiten tomar desciones

var num1 = 2;
var mun2 = '2';

if (num1 <= mun2) {
  console.log('La condicion se cumplio');

} else if (num1 != num2){
  console.log("hola");

} else if (num1 === num2) {
  console.log("son exactamente iguales");

} else {
  console.log('La condicion no se cumplio');

}

/**
 * = signo de asignacion
 * == signo de comparacion
 * === signo de comparacion exacta
 * <= menor o igual que
 * >= mayor o iguar que
 * < menor que
 * > mayor que
 */


// condicionales con operadores logicos

var dinero = 100;
var tiempo = true;

if (tiempo && (dinero => 100)) { // operador logicon 'and'
  console.log('hoy se sale');

}

if (tiempo || (dinero => 100)) {
  console.log("hoy se sale");
  
}

if (!tiempo) {
  console.log("")
  
}

ganas = true
dinero = 100
tiempo = true

if (ganas && (tiempo || dinero < 100)) { // Primero se evaluan los signos de comparacion
  console.log('Se evaluan primero los signos de comparacion')
}

var text = ""
x = 0;

switch (x) {
  case 0:
    text = "Off";
    break;
  case 1:
    text = "On";
    break;
  default:
    text = "No value found";
}

console.log(text);