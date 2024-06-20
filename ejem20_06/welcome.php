<?php
//recuperar los valores de los input
$nombre = $_POST["name"];
$edad = $_POST["edad"];
if($edad>=18)
    echo "<h1><em>Puede votar<em><h1>";
else 
    echo "<h1><em>NO Puede votar<em><h1>";

?>