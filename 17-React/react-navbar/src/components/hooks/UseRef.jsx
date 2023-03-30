import { useRef } from "react";

const UseRef = () => {

  // esto funciona casi igual al los selectore que teniamos en javascript regular ( useRef )
  // el useRef sirve para guardar un elemento HTML en una variable y asi poder modificar el elemento html
  const miInput = useRef(); 

  const handleClick = () => {
    miInput.current.value = 'escribe algo'
  }

  return (
    <>
      <input type="text" name="nombre" className="my-4 ml-6 text-black" ref={miInput}/>
      <button onClick={handleClick} className="ml-4 text-sm bg-cyan-400 py-1 px-3 rounded-full" >Cambiar</button>
    </>
  );
};
export default UseRef;

// ejericicio

/** crear un boton el cual modifique su innerHTML por el medio de una constante cuyo valor es 'presioname', debes usar useRef y useState para este ejercicio */
