Para montar la infraestructura

1.- Tener instalados los paquetes docker y docker-compose.
2.- Hacer pertenecer el usuario al grupo docker.
3.- Descomprimir el sistema de carpetas.
4.- Realizar el cambio de directorio del código en el archivo docker-compose.yml
5.- Ejercutar desde dentro del directorio LAMP descomprimido la orden
$docker-compose up -d

6.- Para trabajar con los servicios de docker-compose
 
    $docker-compose stop #para los servicios de docker que se han creado
    $docker-compose start #vuelve a levantar los servicios que se han creado
    $docker-compose down # para y destruye los servicios docker creados 



