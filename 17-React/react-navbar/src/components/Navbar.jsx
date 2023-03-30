import { Routes, Route, Link } from "react-router-dom";
import logo from "../logo.svg";
import Button from "./Button";

function Navbar() {
  return (
    <>
      <div className="flex px-20 h-20 bg-gray-800 justify-between">
        <Logo sourc={logo} widthImg={"80px"} heightImg={"80px"} />
        <div className="flex gap-8 items-center">
          <Menu>
            <Link to="/">
              <p>Home</p>
            </Link>
            <Link to="/about">
              <p>About</p>
            </Link>
            <Link to="/contact">
              <p>Contact</p>
            </Link>
            <Link to="/youtube">
              <p>Youtube</p>
            </Link>
            <Link to="/hooks">
              <p>hooks</p>
            </Link>
          </Menu>
          <Button classes={"bg-[#61dafb] font-bold"} />
        </div>
      </div>
    </>
  );
}

function Logo({ sourc, widthImg, heightImg }) {
  return <img src={sourc} width={widthImg} height={heightImg} />;
}

function Menu({ children }) {
  return <div className="flex items-center font-[500] gap-2">{children}</div>;
}

export default Navbar;
