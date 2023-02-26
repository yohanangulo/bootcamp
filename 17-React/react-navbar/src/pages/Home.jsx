import React from "react";
import Card from "../components/Card";
import Navbar from "../components/Navbar";

export default function Home({ variacion }) {
  const event = () => {
    console.log("me dieron click");
  };

  const imprimir = (mensaje) => {
    console.log(mensaje);
  };

  const info = [
    {
      titulo: 'Regalo 500$',
      views: '500.000'
    },
    {
      titulo: 'Nuevo gameplay',
      views: '3.000'
    },
    {
      titulo: 'Nuevo video',
      views: '10.000'
    }
  ];

  if (variacion) {
    return (
      <>
        <Navbar />
        <div className="text-black">Home</div>
        <button onClick={event} className="bg-zinc-700 p-2">
          click me
        </button>
        <button
          onClick={() => {
            imprimir("hola mundo");
          }}
          className="bg-zinc-700 p-2 ml-4"
        >
          click me 2
        </button>
        <Card content={info} />
      </>
    );
  } else {
    return <h1 className="text-black">Estoy en falso</h1>;
  }
}
