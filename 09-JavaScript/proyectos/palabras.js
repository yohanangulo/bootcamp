var palabras = ['chispitas', 'rayos', 'centellas']

var comentarios = [
  'hola mundo',
  'RAYOS, eso no esta bien',
  'CENTELLAS, eso no es asi',
  'RAYOS, diablos, centellas, chispitas',
]




var i = 0;
for (let comentario of comentarios) {
  for (groseria of palabras) {
    
    var minusculas = comentarios[i].toLowerCase()

    comentarios[i] = minusculas.replaceAll(groseria, '*****')
  }

  i++
}

console.log(comentarios);
