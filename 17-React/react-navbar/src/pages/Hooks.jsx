import UseConsole from "../components/hooks/UseConsole";
import UseEffect from "../components/hooks/UseEffect";
import UseRef from "../components/hooks/UseRef";
import UseState from "../components/hooks/UseState";
import ButtonChallenge from "./ButtonChallenge";

const Hr = () => <hr className="my-8" />;

const Hooks = () => {
  return (
    <>
      <UseState />
      <Hr />
      <UseEffect />
      <Hr />
      <UseRef />
      <Hr />
      <ButtonChallenge />
      <Hr />
      <UseConsole />
    </>
  );
};
export default Hooks;
