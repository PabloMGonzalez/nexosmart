<?php

echo "<h1>NexoSmart Test</h1>";

//inicia la sesion
session_start();

//guarda en una variable lo pasado por url
$id = $_GET['id'];

	//verifica que sea solo numeros, el mod sea 0 y sea entre 2 y 10
	if (($id >= "2") && ($id % 2 == 0) && ($id <= "10") && (ctype_digit($id))) {

		//guarda los id en la sesion
        $_SESSION["NexoSmart"][] = $id;
			
		//repasa el array y muestra en pantalla los ids, ingresados
        for ($i = 0; $i < count($_SESSION["NexoSmart"]); $i++) {
            echo "Ingresé al array y tengo el ID: ". $_SESSION["NexoSmart"][$i]. "</br>";
        }   
      
	} else {
		echo"Ingrese un nro correcto en la url '?id='";
	}
	echo"<br><a href='index.php'>Volver</a>";
?>