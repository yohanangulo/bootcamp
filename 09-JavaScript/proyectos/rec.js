function f(n) {
  // console.log(n);

  if (n <= 1) return n;

  return f(n - 1) + f(n - 2);
}

// console.log(fac(1));

for (let i = 0; i < 15; i++) {
  console.log(f(i));
}
