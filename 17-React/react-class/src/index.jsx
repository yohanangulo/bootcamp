import React from "react";
import ReactDOM from "react-dom/client";
import Button from "./components/Button";
import './resources/css/button.css'

const root = ReactDOM.createRoot(document.getElementById("root"));

root.render(
  <>
    <h1>Hola mundo</h1>
    <p>titular</p>
    <Button classes={"main-button"}><p>Hola mundo</p></Button>
    <Button classes={"alt-button"} text="English" />
  </>
);

/**
  La funcion render solo puede imprimir un solo elemento

  los componentes, son pequenos bloques de codigo reutilizables
  (son funciones que retornan html)

 */