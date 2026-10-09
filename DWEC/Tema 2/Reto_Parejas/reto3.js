function meter_carrito(articulos, cantidades, precios){
    articulos.push(prompt('Introduce el nombre del articulo: '));
    let precio = parseFloat(prompt('Introduce el precio del articulo: '));
    cantidades.push(parseInt(prompt('Introduce la cantidad: ')));
    precios.push(determinar_iva(precio));
}


function determinar_iva(precio){
    var iva;
    let opcion = prompt(`1. General
2. Reducido
3. Superreducido
Introduce el tipo de IVA del articulo: `);
    switch (opcion){
        case '1':
            iva = 0.21;
        case '2':
            iva = 0.1;
        case '3':
            iva = 0.04;
    }
    return calcular_iva(iva, precio);
}


function calcular_iva(iva, precio){
    return precio*(1 - iva);
}


function crear_ticket(precios, cantidades){
    let total = 0;
    let ticket = '';
    for (let i = 0; i < articulos.length; i++) {
        ticket += `${articulos[i]}: ${precios[i]}€ x ${cantidades[i]} = ${precios[i]*cantidades[i]}€\n`;
        total += precios[i]*cantidades[i];
    };
    alert(ticket);
    if (total >= 50){
        total += 6.5;
    }
    return total;
}


let articulos = [];
let precios = [];
let cantidades = [];


while (true) {
    let opcion = prompt('Quieres comprar algun articulo? s/n: ')
    if (opcion === 's') {
        meter_carrito(articulos, cantidades, precios);

    } else {
        if (articulos.length === 0){
            alert('Pero si no has comprado nada, so mamon...');
        } else {
            let total = crear_ticket(precios, cantidades)
            alert(`El total de la compra es de ${total}€`);
            break;
        }
    }
}