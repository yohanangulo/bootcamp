import { useState } from "react";
import Navbar from "../Navbar";

const UseState = () => {
  // useState sirve para manejar estados o variables en react 
  // declarando un estado (variable) usando useState
  const [color, setColor] = useState("rojo");

  // cambiando de color de 'rojo' a 'verde'
  const handleClick = () => {
    color === "rojo" ? setColor("verde") : setColor("rojo");
  };

  return (
    <>
      <Navbar />
      <div>
        <h1>Mi color favorito es el color: {color}</h1>
        <button onClick={handleClick}>cambiar color favorito</button>
      </div>
    </>
  );
};
export default UseState;
