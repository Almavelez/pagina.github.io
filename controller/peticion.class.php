<?php
require "ControllerUsuario.class.php";
//creamos una inctancia
$ctr = new ControllerUsuario();
if (isset($_POST['remitir'])){
//recibo los datos remitidos
$nombre = trim($_POST['nombre']);
$email =  trim($_POST['email']);
$username =  trim($_POST['username']);
$password =  trim($_POST['password']);
//instancia de tipo Usuario
$usuario = new Usuarios();
//modificar el estado deln objeto
$usuario ->setNombre(trim($_POST['nombre']));
$usuario ->setEmail($email);
$usuario ->setUsername($username);
$usuario ->setPassword(sha1($password));
//llamado del metodo definido en el controlador pata aguaradr el registro
$ctr->agregar($usuario);
}else{
    header("location:../view/formLogin.html");
}

?>