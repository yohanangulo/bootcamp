function Button({text = "Spanish", classes, children}) {
  return (
    <>
      <button className={"general " + classes}>{text}</button>
      {children}
      <br />
    </>
  );
}

export default Button;
