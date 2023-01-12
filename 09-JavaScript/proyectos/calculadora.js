var operacion = "";
function calculadora(caracter) {
  operacion += caracter;
  document.getElementById("resultado").innerHTML = operacion;
}
function resultado() {
  document.getElementById("resultado").innerHTML = eval(operacion);
  operacion = eval(operacion);
}
function borrar() {
  operacion = "";
  document.getElementById("resultado").innerHTML = "Resultado";
}
