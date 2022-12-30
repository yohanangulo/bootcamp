// imprimiendo un sms por consola



console.log('Hola desde otro archivo');

// Variables
// son contenedores de informacion

var x = 6;
var y = 7;
var resultado = x + y;

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

if (4 <= 2) {
  console.log('La condicion se cumplio');
} else {
  console.log('La condicion no se cumplio');
}