import { useEffect, useState } from "react"

const UseEffect = () => {
  
  // El useEffect es utilizando para realizar procesos en segundo plano (Asincrinsmo)

  // cada vez que hay un cambio en este componente se reinicia gracias a useEffect  
  const [contador, setContador] = useState(0)
  
  useEffect(() => {
    setTimeout(() => {
      setContador(contador + 1)
    }, 1000)
  },[/** Dependencias */])
  
  return (
    <div>El contador esta en contador: {contador}</div>
  )
}
export default UseEffect