import { useState, useEffect } from "react";

const ApiNoKey = () => {
  const [data, setData] = useState(null);

  useEffect(() => {
    fetch("https://rickandmortyapi.com/api/character")
      .then(res => res.json())
      .then(res => setData(res));
  }, []);

  if (data) {
    console.log(data);
  }

  return (
    data && (
      <div className={"grid grid-cols-3 gap-5 justify-center container mx-auto py-14"}>
        {data.results.map((el) => (
          <div key={el.id}>
            <img src={el.image} alt={el.name} />
            <p>{el.name}</p>
            <p className={el.status === "Alive" ? "text-green-400" : "text-red-500"}>{el.status}</p>
          </div>
        ))}
      </div>
    )
  );
};

export default ApiNoKey;
