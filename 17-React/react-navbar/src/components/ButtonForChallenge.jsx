import { useRef, useState } from "react";
const btnMain = "text-sm bg-cyan-500 py-2 px-5 font-semibold hover:bg-cyan-400";


const ButtonForChallenge = () => {
  const btn = useRef()
  const [valor, setValor] = useState('Boton')

  const cambiarValor = () => {
    btn.current.innerHTML = 'Presioname' 
  }

  return (
    <button
      ref={btn}
      onClick={cambiarValor} className={`${btnMain} rounded-full block mx-auto text-[16px]`}
    >
      Boton
    </button>
  );
};

export default ButtonForChallenge;



  // const btn = useRef();
  // const [inputValue, setInputValue] = useState('')

  // const capturarCambio = e => {
  //   setInputValue(e.target.value)
  // }

  // const cambiarValor = () => {
  //   btn.current.innerHTML = inputValue
  // };


      // <div className="flex mt-4 max-w-xs mx-auto rounded-full overflow-hidden">
      //   <input
      //     type="text"
      //     placeholder="Escrbie un nombre"
      //     className="flex-1 text-black pl-5 min-w-0"
      //     onChange={capturarCambio}
      //   />
      //   <button className={`${btnMain}`} onClick={cambiarValor}>Presioname</button>
      // </div>