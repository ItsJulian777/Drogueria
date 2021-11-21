<?php

 $host = "localhost";
 $bd= "store";

$usuario= "root";
 $contraseña="";

$coneccion= mysqli_connect($host,$usuario,$contraseña,$bd);
if($coneccion){
echo "conectado correctamente";

}else{

echo "no se puede conectar";

}



?>