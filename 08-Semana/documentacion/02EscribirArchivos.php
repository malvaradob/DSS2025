<?php
// Escritura de archivos utilizando fwrite()
$archivo = fopen('archivo.txt','w'); // w -> borrar el contenido previo
fwrite($archivo,"Informacion modificada");
fclose($archivo);


// utilizando la funcion file_put_contents()
file_put_contents('archivo.txt',"Bienvenido al Lenguaje de PHP");

// Utilizando la funcion fwrite pero con el modo a
$archivo = fopen('archivo.txt','a');
fwrite($archivo,"\nOtra línea nueva");
fwrite($archivo,"\nOtra línea al final");
fclose($archivo);

?>