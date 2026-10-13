let total = 0;

do{
    let precio, descuento, grupo, dia = 0;
    do {
        grupo = prompt(`TIPOS DE ENTRADA
        1. Bebes (0-3 años)
        2. Infantil (4-12 años)
        3. Adulto (13-64 años)
        4. Jubilado (65 o más años)
        Introduce el tipo de entrada: `);

        switch (grupo){
            default:
                alert('Introduce un grupo valido');

            case '1':
                precio = 0;
                break;

            case '2':
                precio = 15;
                break;

            case '3':
                precio = 30;
                break;

            case '4':
                precio = 10;
        }
    } while (grupo < 0 || grupo > 5);

    let num = parseInt(prompt('Introduce el numero de entradas: '));
    do {
        dia = prompt('Introduce el dia (la primera con mayuscula): ');
        switch (dia) {
            default:
                break;

            case 'Lunes':
            case 'Martes':
                descuento = 0.8;
                break;

            case 'Sabado':
            case 'Domingo':
                descuento = 0.9;
        }
    } while (dia != 'Lunes' || 'Martes' || 'Sabado' || 'Domingo');

    total += precio*num*descuento
    alert(`${precio}€ x ${num} x ${descuento} = ${precio*num*descuento}€`)
    opcion = prompt('Quiere comprar mas entradas? (s/n): ');
}while (opcion != 'n')

codigo = prompt('Introduzca un codigo promocional: ');
if (codigo === 'DESCUENTO10'){
    total -= 10;
}

alert(`El precio final es de ${total}€`);