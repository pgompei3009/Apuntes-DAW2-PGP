let mes = 10;

switch (mes){
    default:
        console.error('Numero no valido');
        break;

    case 12:
    case 1:
    case 2:
        console.log('Invierno');
        break;

    case 3:
    case 4:
    case 5:
        console.log('Primavera');
        break;

    case 6:
    case 7:
    case 8:
        console.log('Verano');
        break;

    case 9:
    case 10:
    case 11:
        console.log('Otoño');
}