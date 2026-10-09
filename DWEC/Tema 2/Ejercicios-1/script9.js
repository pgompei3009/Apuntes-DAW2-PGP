let num1 = parseInt(prompt('Introduce un numero: '));
let num2 = parseInt(prompt('Introduce otro numero: '));
let varAlmacen;

varAlmacen = num2;
num2 = num1;
num1 = varAlmacen;

console.log(num1);
console.log(num2);