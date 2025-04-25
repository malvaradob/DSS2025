<?php

if(isset($_GET["nombre"])){
    echo "GET : Hola ".$_GET["nombre"];
}

if(isset($_POST["nombre"])){
    echo "POST : Hola ".$_POST["nombre"];
}

if(isset($_REQUEST["nombre"])){
    echo "<br>REQUEST : Hola ".$_REQUEST["nombre"];
}


?>