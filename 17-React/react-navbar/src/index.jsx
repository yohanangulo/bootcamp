import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Contact from "./pages/Contact";
import About from "./pages/About";
import Home from "./pages/Home";
import Youtube from "./pages/Youtube";
import Page404 from "./pages/Page404";
import Api from "./pages/Api"
import Hooks from './pages/Hooks';
import "./index.css";
import Fortnite from "./pages/Fortnite";
import ApiKey from "./pages/ApiKey";

const root = ReactDOM.createRoot(document.getElementById("root"));

root.render(
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home variacion={true} />} />
        <Route path="/contact" element={<Contact />} />
        <Route path="/about" element={<About />} />
        <Route path="/youtube" element={<Youtube />} />
        <Route path="/fortnite" element={<Fortnite />} />
        <Route path="/hooks" element={<Hooks />} />
        <Route path="/api" element={<Api />} />
        <Route path="/api-key" element={<ApiKey />} />
        <Route path="*" element={<Page404 />} />
      </Routes>
    </BrowserRouter>
);

/**
  La funcion render solo puede imprimir un solo elemento

  los componentes, son pequenos bloques de codigo reutilizables
  (son funciones que retornan html)

 */
