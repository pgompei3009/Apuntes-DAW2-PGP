let porcion = 200;
let huevosPorProcion = 5/(1000/porcion);
let cebollaPorPorcion = 300/(1000/porcion);

let comensales = parseInt(prompt('Escribe el numero de comensales: '));

let kilosTotales = comensales*huevosPorProcion;
let huevosTotales = comensales*cebollaPorPorcion;

console.log(kilosTotales);
console.log(huevosTotales);