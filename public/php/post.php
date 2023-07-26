<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $destino = 'adrelx7@gmail.com';
  $nombre = htmlspecialchars($_POST['nombre']);
  $email = htmlspecialchars($_POST['email']);
  $telefono = htmlspecialchars($_POST['telefono']);
  $marca = htmlspecialchars($_POST['marca']);
  $modelo = htmlspecialchars($_POST['modelo']);
  $mensaje = htmlspecialchars($_POST['mensaje']);


  if (empty($nombre)) {
    echo json_encode('Error: Debe ingresar un Nombre');
    exit();
  }
  if (strlen($nombre) > 35) {
    echo json_encode('Error: Su Nombre es Demasiado largo');
    exit();
  }

if (empty($telefono)) {
    echo json_encode('Error: Debe ingresar un Telefono');
    exit();
  }
  if (strlen($telefono) > 20) {
    echo json_encode('Error: El Telefono es Demasiado largo');
    exit();
  }
  
  if (empty($email)) {
    echo json_encode('Error: Debe ingresar un Email');
    exit();
  }
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo json_encode('Error: Debe ingresar un Email Valido');
    exit();
  }
  if (strlen($email) > 40) {
    echo json_encode('Error: El Email es Demasiado largo');
    exit();
  }

  

  if (empty($marca)) {
    echo json_encode('Error: Debe ingresar un Marca');
    exit();
  }
  if (strlen($marca) > 25) {
    echo json_encode('Error: La Marca es Demasiado larga');
    exit();
  }

  if (empty($modelo)) {
    echo json_encode('Error: Debe ingresar un Modelo');
    exit();
  }
  if (strlen($modelo) > 25) {
    echo json_encode('Error: El Modelo es Demasiado largo');
    exit();
  }

  if (empty($mensaje)) {
    echo json_encode('Error: Debe ingresar un Mensaje');
    exit();
  }
  if (strlen($mensaje) > 800) {
    echo json_encode('Error: El Mensaje es Demasiado largo');
    exit();
  }

  $asunto = 'Contacto desde Imset.com.ar';
  $contenido = 'Nombre: ' . $nombre . "\r\n" .
    'Correo: ' . $email . "\r\n" .
    'Telefono: ' . $telefono . "\r\n" .
    'Marca: ' . $marca . "\r\n" .
    'Modelo: ' . $modelo . "\r\n" .
    'Mensaje: ' . $mensaje . "\r\n";

  $enviado = mail($destino, $asunto, $contenido);

  if ($enviado === false) {
    echo json_encode('Error del Servidor: No se puede enviar el Email, por favor intente por otro medio');
    exit();
  } else {
    echo json_encode('Mensaje Enviado Exitosamente');
    exit();
  }
} else {
  header("Location: ../index.html");
  exit();
}
