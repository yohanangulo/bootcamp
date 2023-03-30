import Navbar from "../components/Navbar";
import { lazy, Suspense } from "react";
// import YoutubeGrid from '../components/YoutubeGrid'

const YoutubeGridl = lazy(() => import("../components/YoutubeGrid"));

export default function Youtube() {
  return (
    <>
      <Navbar />
      <Suspense fallback={<Loder />} >
        <YoutubeGridl />
      </Suspense>
    </>
  );
}

export function Loder() {
  return (
    <div className="text-white text-center py-32 text-5xl">Cargando...</div>
  )
}