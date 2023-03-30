import React from 'react'

export default function Card({content}) {
  return (
    <div className='grid grid-cols-4 gap-4 text-black'>
      {content.map((el, i) => {
        return(
          <div key={i} className="text-white mx-auto">
          <p>{el.titulo}</p>
          <p>{el.views} views</p>
          </div>
        ) 
      })}
    </div>
  )
}
