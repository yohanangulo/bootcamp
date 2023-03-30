let nombreCompleto: string = "Yohan angulo";

// tipos de datos
// declaracion explicita
let edad: number = 5;
let condicion: boolean = true;
let cualquiera: any = "Puede ser el tipo de dato que sea, aunque no es recomendado";
let indefinido: undefined;
let nulo: null;
let arr: string[] = ["Yohan", "Jose", "Erin"]; // solo puede contener estrings
let listaDefinida: [number, boolean, string] = [5, true, 'test']; // solo puede contener esta structura
let carro: {
  marca: string,
  modelo: string,
}

carro = {
  marca: "Chevrolet",
  modelo: "Aveo",
}


// declaracion implicita

let nombre = "Yohan"; // como se inicializo como un string ya no se puede cambiar a mas nada.


// funciones

function saludar():string {
  return "hola"
}

function parametros(param:string) { // los tipos de datos que se le pueden pasar como parametro
  return param
}

function vacio ():void { // funciones las cuales no retornan nada
  
}

// clases

class Persona {
  nombre: string;
  apellido: string;

  constructor(nombre: string, apellido: string) {
    this.nombre = nombre;
    this.apellido = apellido;
  }

  saludar() {
    return "hola, soy, " + this.nombre + this.apellido
  }
}

let persona = new Persona("Yohan", " angulo");

console.log(persona.saludar())