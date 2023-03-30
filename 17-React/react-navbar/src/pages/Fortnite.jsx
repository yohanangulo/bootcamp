import { useEffect, useState } from "react"

const Fortnite = () => {

  const [data, setData] = useState([])

  useEffect(() => {
    getData()
  }, [])

  const getData = async () => {
    let res = await fetch('https://fortnite-api.com/v2/news')
    res = await res.json()
    setData(res.data.br.motds)
  }

  console.log('first')
  return (
    <>
      <div>Pagina de fortnite</div>
      {data.map((el, i) => (
        <p key={i}>hola</p>
      ))}
    </>
  );
}
export default Fortnite