function cambiarTexto() {
  document.getElementById("text").innerHTML = "presionaste el boton";
  document.getElementById("text").style = `
  background-color: #0f0f0f;
  max-width: 500px;
  margin: auto; color: #fff;
  text-align: center;
  padding: 1rem;`;
}

// innerHTML es lo que esta dentro del tag


// creando el modo nocturno para la pagina

function modoNocturno() {
  let body = document.body;
  body.classList.toggle('dark-mode');
}



