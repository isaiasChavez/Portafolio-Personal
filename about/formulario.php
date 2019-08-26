<?php
    //Solo guardaremos datos en variables cuando nos aseguremos que es seguro
    $error = '';


//VALIDANDO EL NOMBRE
if (empty($_POST["nombre"])) {
    $error = 'Ingrese un nombre. <br>';
}else{
    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
}

//VALIDANDO EL EMAIL

if (empty($_POST['email'])) {
    $error .= " Ingresa un Email. <br> ";
}else{
    $email = $_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $error .= "Coloca un email verdadero. <br> ";
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}

//VALIDANDO EL MENSAJE
if (empty($_POST["mensaje"])) {
    $error .= 'Ingrese un mensaje. <br>';
}else{
    $mensaje = $_POST["mensaje"];
    $mensaje = filter_var($mensaje,FILTER_SANITIZE_STRING);
}


//CUERPO DEL MENSAJE

$cuerpo = 'Nombre: ';
$cuerpo .= $nombre;
$cuerpo .= "\n";


$cuerpo .= 'Email: ';
$cuerpo .= $email;
$cuerpo .= "\n";


$cuerpo .= $mensaje;
$cuerpo .= "\n";

$correoPersonal = 'isaias.ch4vez@gmail.com';
$correoDelSitio = 'isaiaschavez@icmdeveloper.com';
$asunto = 'Mensaje del sitio web.';


if ($error == '') {

    $success = mail($correoPersonal,$asunto,$cuerpo,'de: '.$email);
    $successSitio = mail($correoDelSitio,$asunto,$cuerpo,'de: '.$email);

    echo "exito";
}else{
    echo $error;
}