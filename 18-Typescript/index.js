"use strict";
let nombreCompleto = "Yohan angulo";
// tipos de datos
// declaracion explicita
let edad = 5;
let condicion = true;
let cualquiera = "Puede ser el tipo de dato que sea, aunque no es recomendado";
let indefinido;
let nulo;
let arr = ["Yohan", "Jose", "Erin"]; // solo puede contener estrings
let listaDefinida = [5, true, 'test']; // solo puede contener esta structura
let carro;
carro = {
    marca: "Chevrolet",
    modelo: "Aveo",
};
// declaracion implicita
let nombre = "Yohan"; // como se inicializo como un string ya no se puede cambiar a mas nada.
// funciones
function saludar() {
    return "hola";
}
function parametros(param) {
    return param;
}
function vacio() {
}
// clases
class Persona {
    constructor(nombre, apellido) {
        this.nombre = nombre;
        this.apellido = apellido;
    }
    saludar() {
        return "hola, soy, " + this.nombre + this.apellido;
    }
}
let persona = new Persona("Yohan", " angulo");
console.log(persona.saludar());
