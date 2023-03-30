import React from "react";
import { BlurhashCanvas } from "react-blurhash";
import ReactDOM from "react-dom/client";
import Button from "./components/Button";
import './resources/css/button.css'

const root = ReactDOM.createRoot(document.getElementById("root"));

root.render(
  <div>
    <BlurhashCanvas hash="LEHV6nWB2yk8pyo0adR*.7kCMdnj" width={400} height={300} punch={1} />
    <img src="https://www.40defiebre.com/wp-content/uploads/2015/10/imagenes.png" alt="" />
  </div>
);

/**
  La funcion render solo puede imprimir un solo elemento

  los componentes, son pequenos bloques de codigo reutilizables
  (son funciones que retornan html)

 */