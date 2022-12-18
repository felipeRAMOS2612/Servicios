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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>General Mantención</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#loader-wrapper').hide();
    $("form").submit(function(event){
      $('#loader-wrapper').show();
        $(".form-message").load("contacto.php",{
            name:$("#inputName").val(),
            email: $("#inputEmail").val(),
            tel: $("#inputTel").val(),
            message: $("#inputMessage").val(),
            submit: $("#inputSubmit").val()
        }, function(){
          $('#load-image').hide();
        }
        );
    });
  })
    </script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d097713e30.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
  <div class="background-image">
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
          <img src="images/logo/logo.png" class="navbar-brand" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="offcanvas offcanvas-end text-white bg-dark  align-items-lg-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" role="dialog" aria-modal="true">
                <div class="offcanvas-header">
                  <img src="images/logo/logo.png" class="navbar-brand" alt="">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="close"></button>
                </div>
                <div class="offcanvas-body text-white"> 
                    <ul class="nav nav-pills navbar-nav mb-lg-0 d-flex justify-content-center">
                      <li class="nav-item px-2">
                            <a class="nav-link text-center px-2" aria-current="page" href="index.html">Inicio</a>
                      </li>  
                            <li class="nav-item px-2">
                            <a class="nav-link text-center " href="trabajos.html">Trabajos y proyectos</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-center" aria-current="page" href="cotizar.html">Cotizar un trabajo</a>
                        </li>
                        <li class="nav-item px-2">
                          <a class="nav-link text-center px-2" aria-current="page" href="ventas.html">Cotizar materiales</a>
                    </li> 
                        <li class="nav-item px-2">
                          <a class="nav-link text-center" aria-current="page" href="contacto.php" type="button">Contacto</a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="card d-flex m-auto" style="max-width: 90%;">
        <div class="row g-0">
          <div class="col-lg-4 bg-dark rounded pt-2">
            <div class="text-center text-white">
                <img src="images/logo/logo.png" class="w-75" alt="">
                <h2 class="my-4">info</h2>
                <div class="row d-flex text-center">
                    <h6><i class="fa-solid fa-phone px-1"></i>+56 990078582</h6>
                    <h6><i class="fa-solid fa-envelope px-1"></i>cristianacum28@gmail.com</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-8 container">
            <h5 class="modal-title" id="exampleModalLongTitle">Contactanos</h5>
            <form action="" method="post" id="formulario">
                <div class="form-row">
                  <div class="form-group" id="group__Email">
                    <label for="inputEmail">Correo</label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                    <p class="input-error rounded p-2 m-1">El correo es incorrecto, porfavor vuelve a escribirlo</p>
                  </div>
                  <div class="form-group" id="group__Name">
                    <label for="inputName">Nombre y Apellido</label>
                    <input type="text" name="nombre" class="form-control" id="inputName">
                    <p class="input-error rounded p-2 m-1">El nombre y apellido es muy corto o tiene caracteres invalidos</p>
                  </div>
                  <div class="form-group" id="group__Tel">
                    <label for="inputTel">Numero de telefono</label>
                    <input type="number" name="telefono" class="form-control" id="inputTel">
                    <p class="input-error rounded p-2 m-1">El numero de telefono es incorrecto</p>
                  </div>
                </div>
                <div class="form-group" id="group__Message">
                  <label for="inputMessage">Mensaje</label>
                  <textarea type="text" name="mensaje" class="form-control" id="inputMessage"></textarea>
                </div>
                <p class="form-message"></p>
                <div class="justify-content-center d-flex form-group">
                  <input class="btn btn-orange my-2 text-white" name="enviar" id="inputSubmit" type="submit">
                  <div class="loader-wrapper" id="loader-wrapper">
                    <span class="loader" id="loader"><span class="loader-inner"></span></span>
                  </div>
                </div>
                <div class="bg-danger rounded text-white d-none p-3" id="formulario__mensaje">
                  <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>
                <h5 class="bg-succes rounded w-100"><?= $result; ?> </h5>
            </form>
                <div class="d-flex justify-content-center my-3">
                  <div class="mx-2"><a href="https://wa.me/56990078582?text=Hola,%20me%20gustaría%20cotizar%20un%20trabajo" target="_blank"><i class="img-thumbnail fab fa-whatsapp fa-2x"
                    style="color:  #25D366;background-color: #cef5dc;"></i></a>
                  </div>
                  <div class="mx-2" role="button"><a href="http://facebook.com" target="_blank"><i class="img-thumbnail fab fa-facebook fa-2x"
                    style="color: #3b5998;background-color: #eceff5;"></i></a>
                  </div>
                  <div class="mx-2" role="button"><a href="" target="_blank"><i class="img-thumbnail fa-brands fa-instagram fa-2x"
                    style="color: #ffffff;background-color: #ff00d4;"></i></a>
                  </div>
                </div>
        </div>
        </div>
      </div>
</body>
</html>