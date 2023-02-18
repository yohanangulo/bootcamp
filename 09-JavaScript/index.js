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
// console.log(local); // esta variable aqui no existe por lo que da un error


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

// de cierta manera se puede lograr el mismo resultado con los 'if'

if (x === 0) {
  text = 'off';
} else if (x === 1) {
  text = 'On';
} else {
  text = 'No value found';
}



/** Funciones */

// declaracion de la funcion

let mensaje;

function imprimirMensaje(mensaje) {
  console.log(mensaje);
}

// imprimiendo un mensaje

imprimirMensaje('esto es un mensaje');


// un ejercicio para practicar

function imprimirNombre(nombre, apellido) {
  console.log(`${nombre} ${apellido}, hola!`);
}

imprimirNombre('yohan', 'angulo');


// funciones sin parametro

function decirHola() {
  console.log('hola');
}

decirHola();


// funciones con retorno

function imprimirNmobreApellido(nombre, apellido) {
  resultado = `Bienvenido ${nombre} ${apellido}`;
  return resultado;
}

console.log( imprimirNmobreApellido('Yohan', 'Angulo') );

// Cosas curiosas de las funciones

/**
las funciones funcionan como un bloque de codigo. pueded modificar variables que se encuentren fuera de este. Pero si creas una variable dentro de una de estas, por mas que sea global. No funcionara fuera.
 
 debido a que estas funcionan como BLOQUES DE CODIGO INDEPENDIENTES. Si necesitas un dato o variable que se encuentra dentro de una funcion la puedes retranar
 */

//  ejemplo

function prueba() {
  let miVariable = 'contenido';

  // retornamos el valor
  return miVariable; // Un reutrn, solo pued retornar un solo elemento
}

let funcion = prueba(); // La variable prueba ahora contendra 'contenido'

function pruebaVarios() {

  let variable1 = 'hola';
  let variable2 = 'mundo';

  // en estes caso como son 2 valores los que queremos retornar, usamos un array

  return [variable1, variable2];
}


// de esta forma podemos guardar una varibale por separado
let variable1 = pruebaVarios()[0];
let variable2 = pruebaVarios()[1];


if (true) {
  var prueba2 = 'una desicion';
}

console.log(prueba2); // esto si funciona porque se creo una variable global dentro de un if, y esto no es ecomporta igual que en las funciones

// Metodos de string

console.log(prueba2.length); // Devuelve la longitud del string
console.log(prueba2.toUpperCase()); // Transforma el string en mayusculas
console.log(prueba2.toLowerCase()); // Transforma el string en minusculas
console.log(prueba2.slice(1, 3)); // Corta un string, posicion inicio - posicion final
console.log(prueba2.replace('desicion', 'cadena de caracteres')); // Reemplaza una parte del string por otro sitrng que se indique 



// Metodos de array
let frutas = ['banana', 'naranja', 'manzana', 'pera'];

console.log(frutas.toString()); //transforma todo un array a string
console.log(frutas.length); //muestra cuantos elementos tiene un array
console.log(frutas.join(' - ')); // transforma un array en un string pero con el separador que se le indique

frutas.pop()
console.log(frutas); // para eliminar el ultimo elemento del un array

frutas.push('aguacate'); // ingresa un nuevo elemento al array
console.log(frutas);

frutas[3] = 'coco'; // para cambiar un elemento de un array

console.log(frutas.find(fruta => fruta == 'manzana'));




// funciones anonimas

let funcionAnonima = function() { // esta funcion anonima se puede guardar en una variable y tambien se puede llamar
  console.log('hola soy una funcion anonima');

}

funcionAnonima(); // para ejetar la funcion

let funcionAnonimaNueva = () => console.log('funcion nueva');
funcionAnonimaNueva();

/*
 Piensa en la logica de una calculadora que puede realizar sumas, restas, divisiones, multiplicaciones con una cantidad n de numeros, ejempol: 12 + 3 - 5 / 2.

 Piensa logicamente cuales son los procesos realizados para poder sacar un resultado en una calucaldora

 y si te sientes muy valiente, crea el codigo.
*/


// PROGRAMACION ORIENTADA A OBJETOS

const persona = {
  nombre: 'yohan',
  apellido: 'angulo',

  // methods

  decirNombreCompleto: function () {  // cuando se usa una funcion anonima no se puede usar this
    return (`${this.nombre} ${this.apellido}`)
  }
  
}

persona.decirNombreCompleto()

console.log(persona.nombre) // retorna el nombre de la persona
console.log(persona.decirNombreCompleto()) // el ojeto hace algo, dice el nombre de la persona.


// clases en js



class Carro {

  constructor(nombre, marca, year) {
    this.name = nombre
    this.brand = marca
    this.year = year   

  }

  // methods

  information() {
    return (`nombre ${this.name}, brand: ${this.brand}, year: ${this.year}`)

  }

}


let nuevoCarro = new Carro('spark', 'chevrolet', 2000)
console.log(nuevoCarro.year);

let miCamioneta = new Carro('Silverado', 'Chevrolet', 2014)
console.log(miCamioneta.information());




// Loops 

let vehiculos = ['spark', 'silverado', 'fortune', 'skate']

// ciclo for
for (let i = 0; i < vehiculos.length; i++) {
  console.log(vehiculos[i]);
  
}


// Loop for in (Recorrer objetos)

let clase = {
  metodo: 'google meet',
  horaInicio: '7:30 pm',
  horaFinal: '9:30 pm'
}

for (propiedad in clase) { // solo funciona para objetos
  console.log(clase[propiedad])
}


// loop for of, para recorrer arrays

const vehiculos2 = ['spark', 'silverado', 'fortune', 'skate']

for (const vehiculo of vehiculos2 ) {

  console.log(vehiculo)

}


// Expresiones regulares

// Conformadas por un patron y un modificador
// Las expresiones regurales permiten la evaluacion de strings

let textForRegularExp = 'visit W3ScHools'

let n = textForRegularExp.search(/w3schools/i); // La i es el modificador, sin importar el case // Search devuelve la pos de la coindidencia
console.log(n);


// Validar un nombre

let result = /^[a-zA-Z ]+$/.test('John Doe') // test devuelve si pasa o no la validacion
console.log(result);


// Validar un password
let regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;


//validar un correo
const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;



// ASINCRONISMO
// El asintronismo es poder realizar dos omas procesos al misma tiempo o a destiempo

//Callback
//Es una funcion pasada como argumento

function otraFuncion() {

  console.log('hola');
  
}

function primera() {

  otraFuncion()
}

function segunda() {

  otraFuncion()
}



// Otro ejemplo sin callbacks
function imprimirConsola(mensajito) {
  console.log(mensajito);
  
}

function calcular(a, b) {
  let suma = a + b;
  
  return suma;
}

let res = calcular(5, 5);
imprimirConsola(res)


// Mismo ejemplo con callbacks

function imprimirConsola2(mensajito) {
  console.log(mensajito);
  
}

function calcular2(a, b, callback) {
  let suma = a + b;
  
  callback(suma)
}

calcular2(5, 5, imprimirConsola2)

// imprimirConsola2 sin (), devolvera todo el codigo en la funcion
// imprimirConsola2 con parentesis la funcion devolvera si tiene un return



// Funciones asincronas

function luego() {
  console.log('Hola, llegue tarde');
  
}

setTimeout(luego, 3000)

// Ejecuta una funcion cada cierto tiempo

setInterval(() => console.log('me ejecte') , 2000);


// Promesas

let promesa = new Promise((allOk, NotOk)=> {
  let x = 0;
  if (x == 0) {
    allOk()
  } else {
    NotOk()
  }
})

promesa.then(
  ()=> console.log('Everything is ok'),
  ()=> console.log('Not ok')
)

// Cosas extra

// Se puede ingresas html dentro del html 

document.getElementById('contenido').innerHTML = '<p>hola mundo</p>'


// Crear elementos html desde JS
let elemHtml = document.createElement('p');
elemHtml.innerHTML = 'creado desde js';
elemHtml.classList.add('clase-desde-js');
// elemHtml.style = '' para agregar estilos en linea
document.getElementById('contenido').appendChild(elemHtml);


/*
1)  Crea un juego de piedra, papel y tijeras. En donde debes ser capaz de seleccionar alguna opcion
la computadora debe elegir alguna opcion de forma aleatoria, y luego de ello. Decir quien gano.
Tambien este juego debe contener un historial de los resultados de las ultimas 5 partidas.
Tambien deben agregarle un contador de cuantas partidas has ganado tu, y cuantas partidas ha ganado
la computadora

2) Crea un TO-DO List (Lista de tareas por hacer) en donde puedas ingresar tareas, y puedas marcar como
completadas cada una de estas o eliminarlas

3) Agarra un articulo de la Wikipedia. Copialo dentro de un parrafo o varios parrafos. Y al tope de la pagina
crea un input que me permita buscar si una palabra o frase existe en el articulo o no.

fecha de entrega: 24 de enero
*/