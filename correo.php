<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$result = "";

if(isset($_POST['enviar'])){
  $result = $_POST['nombre'];
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/SMTP.php';
    $mail = new PHPMailer;
    $mail -> isSMTP();
    $mail -> Host ='smtp.gmail.com';
    $mail -> Port = 587;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'tls';
    $mail ->Username = 'generalmantencion2022@gmail.com';
    $mail ->Password = 'kyzevslkykdefkpb';

    $mail -> setFrom($_POST['email'], $_POST['nombre']);
    $mail -> addAddress('generalmantencion2022@gmail.com');
    $mail -> addReplyTo($_POST['email'],$_POST['nombre']);

    $mail -> isHTML(true);
    $mail -> Subject='Correo enviado desde pagina web';
    $mail -> Body = '<h3 align=center>Correo: '.$_POST['email'].'<br>Nombre: '.$_POST['nombre'].'<br>Telefono: '.$_POST['telefono'].'<br>Mensaje: '.$_POST['mensaje'].'</h3>';
    if(!$mail -> send()){
      $result = "Algo ocurrio mal, intentalo denuevo mas tarde";
    } else{
      $result = "Correo enviado con exito";
    }
  }
?>