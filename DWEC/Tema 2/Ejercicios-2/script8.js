let pinCorrecto = 15542;
let intentos = 0;

do {
    pinIntroducido = parseInt(prompt('Introduce el pin: '));
    intentos++;
} while (pinIntroducido != pinCorrecto);

console.log(`Has completado la autenticacion en ${intentos} intentos`);