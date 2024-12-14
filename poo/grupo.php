<?php
include "persona.php";

$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

$persona = new Persona();
$persona-> setNombre($nombre);
$persona->setEdad($edad);


echo "<h1> Se creo un objeto</h1>";
echo "nombre: ". $persona->getNombre();
echo "</br> edad:" . $persona->getEdad();