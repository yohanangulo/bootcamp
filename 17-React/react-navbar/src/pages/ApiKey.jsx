import { useRef, useState } from "react"
import { options } from "../api/apiKey";


const ApiKey = () => {
  const [data, setData] = useState(null);
  const fNameRef = useRef()
  const sNameRef = useRef()

  const handleCalcular = () => {
    const URL = `https://love-calculator.p.rapidapi.com/getPercentage?sname=${sNameRef.current.value}&fname=${fNameRef.current.value}`;
    fetch(URL, options)
      .then((res) => res.json())
      .then((res) => { setData(res); })
      .catch((error) => console.error(error));
  };
  
  return (
    <div className="bg-pink-400 grid place-items-center  h-screen">
      <div className="text-center">
        <h1 className="text-3xl mb-4">Love calulator</h1>
        <h3 className="mb-4">{data?.result}</h3>
        <h3 className="mb-12">{data && data.percentage + "%"}</h3>
        <div className="inline-flex mx-auto gap-4">
          <div>
            <input tabIndex={1} ref={fNameRef} type="text" className="text-black" placeholder="First name" />
          </div>
          <button tabIndex={3} onClick={handleCalcular}>Calcular</button>
          <div>
            <input tabIndex={2} ref={sNameRef} type="text" className="text-black" placeholder="First name" />
          </div>
        </div>
      </div>
    </div>
  )
}
export default ApiKey