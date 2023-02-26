export default function Button({ value = "Registro", classes }) {
  return (
    <button className={"px-5 py-2 rounded-full " + classes} >{value}</button>
  );
}