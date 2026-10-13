let nombreUsuario, email, edad, password = '';


do {
    nombreUsuario = prompt('Introduce el nombre de usuario: ');
    if (nombreUsuario.length < 4 ) {
        alert('La contraseña es demasiado corta');
    }
} while (nombreUsuario.length < 4);

do {
    email = prompt('Introduce el correo: ');
    if ((email.includes('@') && (email.includes('.'))) == false){
        alert('El correo no contiene "." y/o "@"');
    } 
} while ((email.includes('@') && (email.includes('.'))) == false);

while (true) { 
    edad = prompt('Introduce tu edad: ');    
    if (/^\d+([.]+\d)?$/.test(edad) == true) {    
        if (edad >= 18) {
            if (parseInt(edad) == parseFloat(edad)) {
                break;
            } else {
                alert('El numero debe ser un entero');
            }
        } else {
            alert('La edad debe ser mayor o igual a 18');
        }
    } else {
        alert('Introduce solo numeros');
    }
}

