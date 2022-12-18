<?php


$name = $_POST["nombre"];
$email = $_POST["email"];
$cel = $_POST["telefono"];
$message = $_POST["mensaje"];

$destinatario = "generalmantencion2022@gmail.com";
$asunto = "Mensaje desde la pagina web";

$carta = "Nombre: $name \n";
$carta .= "Telefono: $cel \n";
$carta .= "mensaje: $message \n";
$header = "enviado desde $email";

mail($destinatario, $asunto, $carta, $header);

?>