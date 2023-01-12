// Juego de adivinar un numero

var numero = Math.floor(Math.random() * 100) // Math.floor para siempre redondear hacia abajo
var vidas = 5;
let result = document.getElementById('resultado')

console.log(result)

function adivinar() {
  let opcion = Number(document.getElementById('input').value);


  if (opcion === numero) {
    result.innerHTML = 'ganaste';
  } else if (opcion < numero) {
    result.innerHTML = 'Intenta con un nemuro mayor';
    vidas--
  } else if (opcion > numero) {
    result.innerHTML = 'Intenta con un mumero menor';
    vidas--
  }

  document.getElementById('vidas').innerHTML = vidas

  if (vidas == 0) {
    perder()
  }

}

let perder = () => {
  result.innerHTML = 'perdiste'
  document.getElementById('input').style = 'display: none;'
}
