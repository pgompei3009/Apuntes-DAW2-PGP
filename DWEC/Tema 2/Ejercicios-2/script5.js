let velocidad = 21;

if (velocidad < 60){
    console.warn('Velocidad demasiado lenta');
} else if (velocidad >= 60 && velocidad <= 120){
    console.info('Velocidad adecuada');
} else{
    console.error('Exceso de velocidad');
}